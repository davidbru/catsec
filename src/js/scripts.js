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


function addClass(el, classNameArray) {
    for(var i = 0; i < classNameArray.length; i++) {
        if (el.classList) {
            el.classList.add(classNameArray[i]);
        } else {
            el.className += ' ' + classNameArray[i];
        }
    }
}


function removeClass(el, classNameArray) {
    for (var i = 0; i < classNameArray.length; i++) {
        if (el.classList)
            el.classList.remove(classNameArray[i]);
        else
            el.className = el.className.replace(new RegExp('(^|\\b)' + classNameArray[i].split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
    }
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


var elHeaderLine1 = document.getElementById('headerLine1');
var elHeaderLine2 = document.getElementById('headerLine2');
var headerText = [
    ['$ cat index.php', '(^._.^)ﾉ'],
    ['Curriculum Vitae', 'David Brunnthaler']
];

headerAnimation();

function headerAnimation() {
    console.log('headerAnimation');
    setTimeout(function () {
        console.log('// fadeOut Text1 A+B');
        addClass(elHeaderLine1, ['animated', 'fadeOut']);
        addClass(elHeaderLine2, ['animated', 'fadeOut']);

        setTimeout(function() {
            console.log('// typewrite Text2 A');
            removeClass(elHeaderLine1, ['animated', 'fadeOut']);
            addClass(elHeaderLine1, ['typewriter']);
            elHeaderLine1.innerHTML = headerText[0][0];

            setTimeout(function() {
                console.log('// show Text2 B');
                elHeaderLine2.innerHTML = headerText[0][1];
                removeClass(elHeaderLine2, ['animated', 'fadeOut']);

                setTimeout(function() {
                    console.log('// fadeOut Text2 A+B');
                    addClass(elHeaderLine1, ['animated', 'fadeOut']);
                    addClass(elHeaderLine2, ['animated', 'fadeOut']);

                    setTimeout(function() {
                        console.log('// fadeIn Text1 A+B');
                        removeClass(elHeaderLine1, ['typewriter', 'animated', 'fadeOut']);
                        removeClass(elHeaderLine2, ['animated', 'fadeOut']);

                        elHeaderLine1.innerHTML = headerText[1][0];
                        elHeaderLine2.innerHTML = headerText[1][1];
                        addClass(elHeaderLine1, ['animated', 'fadeIn']);
                        addClass(elHeaderLine2, ['animated', 'fadeIn']);

                        setTimeout(function() {
                            console.log('// --> call headerAnimation() again');
                            removeClass(elHeaderLine1, ['animated', 'fadeIn']);
                            removeClass(elHeaderLine2, ['animated', 'fadeIn']);
                            headerAnimation();
                        },2000); // --> call headerAnimation() again
                    },2000); // fadeIn Text1 A+B
                }, 4000); // fadeOut Text2 A+B
            }, 1500); // show Text2 B
        },2000); // typewrite Text2 A
    }, 4000); // fadeOut Text1 A+B
}