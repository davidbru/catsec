const fs = require('fs');
const path = require('path');
const crypto = require('crypto');
const tinify = require('tinify');

const secrets=require('./node_secrets.json');
const imgSrcFolder = 'src/img';
let files = [];
let folders = [];

tinify.key = secrets['tinifyApiKey'];

let signatureFileContentOld;
let signatureFileContentOldSplit1 = [];
let signatureFileContentOldSplit2 = [];
let signatureFileContentNew = '';
let signatureFileContentNewSplit1 = [];
const signatureFile = imgSrcFolder+'/.tinypng-sigs';


function walkSync(currentDirPath, callback) {
    fs.readdirSync(currentDirPath).forEach(function (name) {
        var filePath = path.join(currentDirPath, name);
        var stat = fs.statSync(filePath);
        if (stat.isFile()) {
            callback(filePath, stat);
        } else if (stat.isDirectory()) {
            folders.push(filePath.replace('src', 'dist'));
            walkSync(filePath, callback);
        }
    });
}

// push files to files-array
walkSync(imgSrcFolder, function(filePath, stat) {
    if(filePath !== imgSrcFolder+'/.DS_Store' &&
        filePath !== signatureFile) {
        files.push(filePath);
    }
});


// create folders in dist if necessary
folders.forEach(folder => {
    if (!fs.existsSync(folder)){
        fs.mkdirSync(folder);
    }
});


checkSignatureFile();

function checkSignatureFile() {
    if (fs.existsSync(signatureFile)) {
        console.log('signature file does exist --> check hashes\n---- ---- ---- ---- ----');
        fs.readFile(signatureFile, 'utf8', function (err, data) {
            if (err) {
                return console.log(err);
            }
            signatureFileContentOld = data;
            signatureFileContentOldSplit1 = signatureFileContentOld.split(';').sort(function (a, b) {
                return a.localeCompare(b);
            });
            for(let i = 0; i < signatureFileContentOldSplit1.length; i++) {
                if(signatureFileContentOldSplit1[i] !== '') {
                    let tmp = signatureFileContentOldSplit1[i].split(':');
                    signatureFileContentOldSplit2.push(tmp);
                }
            }
            loopThroughFiles();
        });
    } else {
        console.log('signature file does NOT exist --> tinify all images\n---- ---- ---- ---- ----');
        loopThroughFiles();
    }
}


function loopThroughFiles() {
    let counter = 1;
    files.forEach(file => {
        if (path.extname(file) === '.jpg' ||
            path.extname(file) === '.jpeg' ||
            path.extname(file) === '.png') {
            let doTinifyImg = true;
            let currentFile = file;
            let currentHash;

            fs.createReadStream(currentFile).
            pipe(crypto.createHash('sha1').setEncoding('hex')).
            on('finish', function () {
                currentHash = this.read();

                for(let i = 0; i < signatureFileContentOldSplit2.length; i++) {
                    if(signatureFileContentOldSplit2[i][0] === currentFile &&
                        signatureFileContentOldSplit2[i][1] === currentHash) {
                        doTinifyImg = false;
                    }
                }

                if(doTinifyImg === true) {
                    console.log(file + '\n --> tinify');
                    tinify.fromFile(currentFile).toFile(file.replace('src', 'dist'));
                } else {
                    console.log(file + '\n --> was already tinified: do nothing')
                }
                signatureFileContentNewSplit1.push(currentFile + ':' + currentHash + ';');
                if(counter === files.length) {
                    writeSignatureFileIfNecessary();
                }
                counter ++;
            });
        } else {
            console.log(file + '\n --> copy to dest folder');
            fs.createReadStream(file).pipe(fs.createWriteStream(file.replace('src', 'dist')));

            if(counter === files.length) {
                writeSignatureFileIfNecessary();
            }
            counter ++;
        }
    });
}


function writeSignatureFileIfNecessary() {
    signatureFileContentNewSplit1.sort(function (a, b) {
        return a.localeCompare(b);
    }).forEach(part => {
        signatureFileContentNew += part;
    });

    if(signatureFileContentOld !== signatureFileContentNew) {
        console.log('write sig file');
        fs.writeFile(signatureFile, signatureFileContentNew, function () {});
    }
}