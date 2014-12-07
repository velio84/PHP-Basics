var prgLngNextID = 0;
var lngNextID = 0;

function addProgLangItem() {
	prgLngNextID++;
	var element = document.createElement('div');
	element.setAttribute('id', 'prgLng' + prgLngNextID);
	element.innerHTML = 
		"<input type='text' name='compLangs[]' ><select name='compLangLevels[]'><option value='beginner'>Beginner</option><option value='advanced'>Advanced</option>" + 
		"<option value='ninja'>Ninja</option></select><br />";
	document.getElementById('progLangParent').appendChild(element);
}

function removeProgLangItem() {
	var element = document.getElementById('progLangParent').lastChild;
	document.getElementById('progLangParent').removeChild(element);
	prgLngNextID--;
}


function addLangItem() {
	lngNextID++;
	var lngEelement = document.createElement('div');
	lngEelement.setAttribute('id', 'lng' + lngNextID);
	lngEelement.innerHTML = 
		"<input type='text' name='langLevels[]' />" + 
		
		"<select name='langComprehensions[]'><option selected disabled>-Comprehension-</option><option value='beginner'>Beginner</option>" + 
		"<option value='intermediate'>Intermediate</option><option value='advanced'>Advanced</option></select>" +
		
		"<select name='langReadings[]'><option selected disabled>-Reading-</option><option value='beginner'>Beginner</option>" + 
		"<option value='intermediate'>Intermediate</option><option value='advanced'>Advanced</option></select>" +
		
		"<select name='langWritings[]'><option selected disabled>-Writing-</option><option value='beginner'>Beginner</option>" + 
		"<option value='intermediate'>Intermediate</option><option value='advanced'>Advanced</option></select>";
		
	document.getElementById('lngParent').appendChild(lngEelement);
}

function removeLangItem() {
	var element = document.getElementById('lngParent').lastChild;
	document.getElementById('lngParent').removeChild(element);
	lngNextID--;
}


//document.getElementById("addPrgLng").onclick = addProgLangItem();

