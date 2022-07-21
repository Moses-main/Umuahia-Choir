// Toggle menu icon
function myFunction(x) {
    x.classList.toggle("change");
}


// drop down menu engine of
// home page
function dropdown() {
    var menu = document.getElementById('nav2').style;
    if (menu.display == 'block') {
        menu.display = 'none';
    } else {
        menu.display = 'block';
    }
}


var but = document.getElementById('toggle');
but.addEventListener('click', function () {
    myFunction(this);
    dropdown();
}, false);

