// Toggle menu icon
function myFunction(x) {
    x.classList.toggle("change");
}


// drop down menu engine for
// archive page

function archiveDrop() {
    var dropContent = document.getElementById('archiveNav2').style;
    if (dropContent.display == 'block') {
        dropContent.display = 'none';
    } else {
        dropContent.display = 'block';
        
    }
}


var archiveButton = document.getElementById('archiveToggle');
archiveButton.addEventListener('click', function () {
    myFunction(this);
    archiveDrop();
}, false);


// The search box engine

function song_search() {
	let input = document.getElementById('searchbar').value;
	
    input = input.toLowerCase();
	
    let x = document.getElementsByClassName('book-container');
	
	for (i = 0; i < x.length; i++) {
		if (!x[i].innerHTML.toLowerCase().includes(input)) {
			x[i].style.display="none";
		}
		else {
			x[i].style.display = " inline-block";				
		}
	}
}

var box = document.getElementById('searchbar');
box.addEventListener('keyup', song_search, false);



// for small devices

function search_song() {
	let input = document.getElementById('smallSearchBar').value;
	
    input = input.toLowerCase();
	
    let x = document.getElementsByClassName('book-container');
	
	for (i = 0; i < x.length; i++) {
		if (!x[i].innerHTML.toLowerCase().includes(input)) {
			x[i].style.display="none";
		}
		else {
			x[i].style.display = " inline-block";				
		}
	}
}

var box = document.getElementById('smallSearchBar');
box.addEventListener('keyup', search_song, false);

