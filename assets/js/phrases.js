$(document).ready(function(){
		var phrases = [
	  'One Awesome Dude',
	  'Blackhawks Fan',
	  'Terrible Golfer',
	  'Beer Connoisseur',
	  'Fifa Champion',
	  'Fantasy Footballer'
	];


	var phrase = document.getElementById('phrase');
	var rando = 0;

	var makePhrase = function(){
	  rando = Math.floor(Math.random()*phrases.length);
	  phrase.innerHTML = phrases[rando];
	};

	makePhrase();
});


