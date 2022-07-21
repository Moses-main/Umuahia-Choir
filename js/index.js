// For manual slide show
var slideIndex = 1;

showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex-1].style.display = "block";
}



// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 4000);
}


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


// OPENING MODAL PICTURES

// for choirmaster

function openModal() {
    var modal = document.getElementById('modal-container').style;
    modal.display = 'block';
}

// Getting the image
// to be clicked on
var img = document.getElementById('memberImage');

// adding the eventlistener
img.addEventListener('click', openModal, false);

// closing the modal pictures
function closeModal() {
    var modal = document.getElementById('modal-container').style;
    modal.display = 'none';
}

var close = document.getElementById('close');
close.addEventListener('click', closeModal, false);




// for choirmistress

function openModal2() {
    var modal = document.getElementById('mistress-container').style;
    modal.display = 'block';
}

// Getting the image
// to be clicked on
var img = document.getElementById('mistressImage');

// adding the eventlistener
img.addEventListener('click', openModal2, false);

// closing the modal pictures
function closeModal2() {
    var modal = document.getElementById('mistress-container').style;
    modal.display = 'none';
}

var close = document.getElementById('close2');
close.addEventListener('click', closeModal2, false);



// for youth choirmaster

function openModal3() {
    var modal = document.getElementById('youth-container').style;
    modal.display = 'block';
}

// Getting the image
// to be clicked on
var img = document.getElementById('youthMasterImage');

// adding the eventlistener
img.addEventListener('click', openModal3, false);

// closing the modal pictures
function closeModal3() {
    var modal = document.getElementById('youth-container').style;
    modal.display = 'none';
}

var close = document.getElementById('close3');
close.addEventListener('click', closeModal3, false);





// for youth choirmaster

function openModal4() {
    var modal = document.getElementById('youthMis-container').style;
    modal.display = 'block';
}

// Getting the image
// to be clicked on
var img = document.getElementById('youthMistressImage');

// adding the eventlistener
img.addEventListener('click', openModal4, false);

// closing the modal pictures
function closeModal4() {
    var modal = document.getElementById('youthMis-container').style;
    modal.display = 'none';
}

var close = document.getElementById('close4');
close.addEventListener('click', closeModal4, false);




// for youth choirmaster

function openModal5() {
    var modal = document.getElementById('orchestra-container').style;
    modal.display = 'block';
}

// Getting the image
// to be clicked on
var img = document.getElementById('orchestraMasterImage');

// adding the eventlistener
img.addEventListener('click', openModal5, false);

// closing the modal pictures
function closeModal5() {
    var modal = document.getElementById('orchestra-container').style;
    modal.display = 'none';
}

var close = document.getElementById('close5');
close.addEventListener('click', closeModal5, false);



