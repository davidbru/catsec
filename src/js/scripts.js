console.log('js called');

var elClickTargetIC = document.getElementById('clickTarget_interface_cultures');
var elContainerIC = document.getElementById('container_ects_interface_cultures');
var elClickTargetID = document.getElementById('clickTarget_informationsdesign');
var elContainerID = document.getElementById('container_ects_informationsdesign');

elClickTargetIC.onclick = function() {
    removeClass(elContainerID);
    toggleClass(elContainerIC);
};
elClickTargetID.onclick = function() {
    removeClass(elContainerIC);
    toggleClass(elContainerID);
};




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