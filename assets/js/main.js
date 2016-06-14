$(function() {
	//cached th window object
	var $window = $(window);

	/*The parallax background effect
	http://code.tutsplus.com/tutorials/a-simple-parallax-scrolling-technique--net-27641
	*/
	$('section[data-type="background"]').each(function(){
		var $bgobj = $(this); //assigning the object
		$($window).scroll(function(){
//			scroll the background at var speed
//			the ypos is negative because of scrolling up

			var yPos = -($window.scrollTop() / $bgobj.data('speed'));
//			Put together final background position
			var coords = '50% '+ yPos + 'px';
//			move the background
			$bgobj.css({backgroundPosition: coords });
		}); //End the scroll
	});
});

