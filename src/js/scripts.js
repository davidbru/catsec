var elEctsClickTargets = document.getElementsByClassName('ectsClickTarget');
var elEctsContainers = document.getElementsByClassName('container_ects');

for(var i = 0; i < elEctsClickTargets.length; i++) {
    elEctsClickTargets.item(i).onclick = function(console, i, elEctsContainers, toggleClass, removeClass) {
        var j = 0;
        if(i === 0) {
            j = 1;
        }
        removeClass(elEctsContainers.item(j));
        toggleClass(elEctsContainers.item(i));
    }.bind(null, console, i, elEctsContainers, toggleClass, removeClass);
}


function toggleClass(el) {
    var className = 'open';

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


function removeClass(el) {
    var className = 'open';

    if (el.classList)
        el.classList.remove(className);
    else
        el.className = el.className.replace(new RegExp('(^|\\b)' + className.split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
}