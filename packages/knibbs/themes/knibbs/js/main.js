/*! ------------------------------------------ Nav Javascript function ------------------------------------------ */

(function($){
	$('.menu').knibbsmenu({
	  responsivePattern: 'off-canvas'
	});
  })(jQuery);
  
/*! ------------------------------------------ Hammer Javascript function------------------------------------------ */
/* if modernizer finds a touch device enable swipe to open nav */

if (screen.width < 770) {
	// download complicated script
	// swap in full-source images for low-source ones


if ( Modernizr.touch ) {
  var element = document.body;
  Hammer (element).on("swipeleft", function(event) {
	$('.knibbs-inner').animate({ left: 0 });
	$('.knibbs-offcanvas').animate({ left: "-70%"  });
  }); 
  Hammer (element).on("swiperight", function(event) {
	$('.knibbs-inner').animate({ left: "70%" });
	$('.knibbs-offcanvas').animate({ left: 0 });
  }); 
} else {
   // desktop
}

}