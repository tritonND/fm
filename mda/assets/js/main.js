(function($) {

	"use strict";

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	$('#sidebarCollapse').on('click', function () {
		console.log("I clicked here side 1")
      $('#sidebar').toggleClass('active');
	//   $('#hiddin').show(500);
  });

  $('#sidebarCollapse1').on('click', function () {
	  console.log("I clicked here");
	$('#sidebar').toggleClass('active');
	// $('#hiddin').show(500);

});

})(jQuery);
