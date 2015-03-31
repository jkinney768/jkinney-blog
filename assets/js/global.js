$(document).ready(function() {
  $('.mobile').click(function () {
	  $('nav').toggleClass('active'); 
   });
  
   $('nav ul li ul').each(function() {
    $(this).before('<span class=\"arrow\"></span>');
  });
  
  $('nav ul li').click(function() {
    $(this).children('ul').toggleClass('active');
     $(this).children('.arrow').toggleClass('rotate');
  });

  //Phrases
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