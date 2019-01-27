var elEctsClickTargets = document.getElementsByClassName('ectsClickTarget');
var elEctsContainers = document.getElementsByClassName('container_ects');

for(var i = 0; i < elEctsClickTargets.length; i++) {
    elEctsClickTargets.item(i).onclick = function(console, i, elEctsContainers, toggleClass, removeClass, correctEctsLinkTexts) {
        var j = 0;
        if(i === 0) {
            j = 1;
        }
        removeClass(elEctsContainers.item(j), 'open');
        toggleClass(elEctsContainers.item(i), 'open');
        correctEctsLinkTexts();
    }.bind(null, console, i, elEctsContainers, toggleClass, removeClass, correctEctsLinkTexts);
}


function toggleClass(el, className) {
    if (el.classList) {
        el.classList.toggle(className);
    } else {
        var classes = el.className.split(' ');
        var existingIndex = classes.indexOf(className);

        if (existingIndex >= 0)
            classes.splice(existingIndex, 1);
        else
            classes.push(className);

        el.className = classes.join(' ');
    }
}


function addClass(el, className) {
    if (el.classList)
        el.classList.add(className);
    else
        el.className += ' ' + className;
}


function removeClass(el, className) {
    if (el.classList)
        el.classList.remove(className);
    else
        el.className = el.className.replace(new RegExp('(^|\\b)' + className.split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
}


function correctEctsLinkTexts() {
    for(var i = 0; i < elEctsContainers.length; i++) {
        var linkText = 'Zeige ECTS-Punkte';
        var el = elEctsContainers.item(i);
        var className = 'open';

        if (el.classList.contains(className)) {
            linkText = 'Verstecke ECTS-Punkte';
        }
        setTimeout(function(elEctsClickTargets, i, linkText) {
            elEctsClickTargets.item(i).innerHTML = linkText;
        }.bind(null, elEctsClickTargets, i, linkText), 250);
    }
}


var elHeaderLineOne = document.getElementById('headerLineOne');
var elHeaderLineTwo = document.getElementById('headerLineTwo');
var headerAnimationCounter = 0;
var headerText = [
    ['<span>$ cat index.php</span>', '(^._.^)ﾉ'],
    ['Curriculum Vitae', 'David Brunnthaler']
];
var currentModulo;

headerAnimation();

function headerAnimation() {
    currentModulo = headerAnimationCounter%2;
    setTimeout(function() {
        addClass(elHeaderLineOne, 'hideMe');
        addClass(elHeaderLineTwo, 'hideMe');

        setTimeout(function() {
            elHeaderLineOne.innerHTML = headerText[currentModulo][0];
            elHeaderLineTwo.innerHTML = headerText[currentModulo][1];

            setTimeout(function() {
                removeClass(elHeaderLineOne, 'hideMe');
                removeClass(elHeaderLineTwo, 'hideMe');

                setTimeout(function() {
                    headerAnimationCounter++;
                    headerAnimation();
                }, 3000);
            }, 400);
        }, 600);
    }, 2000);
}