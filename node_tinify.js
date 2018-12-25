const fs = require('fs');
const path = require('path');
const crypto = require('crypto');
const tinify = require('tinify');

const secrets=require('./node_secrets.json');
const imgFolder = './src/img/';

tinify.key = secrets['tinifyApiKey'];

let signatureFileContent;
let signatureFileContentSplit = [];
const signatureFile = 'src/img/.tinypng-sigs';

checkSignatureFile();

function checkSignatureFile() {
    if (fs.existsSync(signatureFile)) {
        console.log('signature file does exist --> check hashes\n---- ---- ---- ---- ----');
        fs.readFile(signatureFile, 'utf8', function (err, data) {
            if (err) {
                return console.log(err);
            }
            signatureFileContent = data.split(';');
            for(let i = 0; i < signatureFileContent.length; i++) {
                if(signatureFileContent[i] !== '') {
                    let tmp = signatureFileContent[i].split(':');
                    signatureFileContentSplit.push(tmp);
                }
            }
            deleteSignatureFile();
            loopThroughFiles();
        });
    } else {
        console.log('signature file does NOT exist --> tinify all images\n---- ---- ---- ---- ----');
        loopThroughFiles();
    }
}


function loopThroughFiles() {
    fs.readdir(imgFolder, (err, files) => {
        files.forEach(file => {
            if(file !== '.DS_Store' &&
                file !== '.tinypng-sigs') {
                if (path.extname(file) === '.jpg' ||
                    path.extname(file) === '.jpeg' ||
                    path.extname(file) === '.png') {
                    let doTinifyImg = true;
                    let currentFile = 'src/img/' + file;
                    let currentHash;

                    fs.createReadStream(currentFile).
                    pipe(crypto.createHash('sha1').setEncoding('hex')).
                    on('finish', function () {
                        currentHash = this.read();

                        for(let i = 0; i < signatureFileContentSplit.length; i++) {
                            if(signatureFileContentSplit[i][0] === currentFile &&
                                signatureFileContentSplit[i][1] === currentHash) {
                                doTinifyImg = false;
                            }
                        }

                        if(doTinifyImg === true) {
                            console.log(file + '\n --> tinify');
                            tinify.fromFile(currentFile).toFile('dist/img/' + file);
                        } else {
                            console.log(file + '\n --> was already tinified: do nothing')
                        }
                        appendHashToSignatureFile(currentFile, currentHash);
                    });
                } else {
                    console.log(file + '\n --> copy to dest folder');
                    fs.createReadStream('src/img/' + file).pipe(fs.createWriteStream('dist/img/' + file));
                }
            }
        });
    });
}


function deleteSignatureFile() {
    fs.unlink(signatureFile, (err) => {
        if (err) throw err;
        // console.log(signatureFile + ' was deleted');
    });
}


function appendHashToSignatureFile(file, hash) {
    signatureFileContent = file + ':' + hash + ';';
    fs.appendFile(signatureFile, signatureFileContent, function () {});
}