$(document).ready(function() {	

var slideIndex = 0;
carousel();
arrowd();

function carousel() {
    var i;
    var x = document.getElementsByClassName("myVideo");
  //  var y = document.getElementsByClassName("play-video");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
  //    y[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 
//	y[slideIndex-1].style.display = "block";
    setTimeout(carousel, 5000); 
}

   function arrowd() {
        $('.arrow-down').css({'bottom':'30px'});
        $('.arrow-down').animate({'bottom':'10px'}, 1000, 'linear', function(){arrowd();});
    }




var cur = 0,    // Start Slide Index. We'll use ++cur to increment index
        pau = 2000, // Pause Time (ms)
        fad = 500,  // Fade Time (ms)
    $ga = $('#videos'),   // Cache Gallery Element
        $sl = $('> .myVideo', $ga), // Cache Slides Elements
        tot = $sl.length,      // We'll use cur%tot to reset to first slide
        itv ;       // Used to clear on mouseenter

$sl.hide().eq( cur ).show(); // Hide all Slides but desired one

function stopFn() { clearInterval(itv); }
function loopFn() { itv = setInterval(fadeFn, pau); }
function fadeFn() { $sl.fadeOut(fad).eq(++cur%tot).stop().fadeIn(fad); }
$ga.hover( stopFn, loopFn );

loopFn(); // Finally, Start

});