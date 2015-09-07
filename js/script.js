$(document).ready(function(){
	$('#open-button').click(function() {
		// Calling a function in case you want to expand upon this.
		// e.preventDefault();
		if($(this).hasClass('active')){
			$(this).removeClass('active');
			$('html, body, .container, .content-wrap').css('overflow-y', 'initial');
		}else {
			$(this).addClass('active');
			$('html, body, .container, .content-wrap').css('overflow-y', 'hidden');

		}
		
		
	});

	// Make the two close button work consistently
	$('#close-button').click(function(){
		var $open_button = $('#open-button'); 
		if($open_button.hasClass('active')){
			$open_button.removeClass('active');
			$('html, body, .container, .content-wrap').css('overflow-y', 'initial');
		}
	});

	//Initialize the lightbox in the portfolio page
	$('.popup-link').magnificPopup({ 
		type: 'image'
		// other options
		// mainClass: 'mfp-with-zoom', // this class is for CSS animation below

		//  zoom: {
		//     enabled: true, // By default it's false, so don't forget to enable it

		//     duration: 300, // duration of the effect, in milliseconds
		//     easing: 'ease-in-out', // CSS transition easing function 

		//     // The "opener" function should return the element from which popup will be zoomed in
		//     // and to which popup will be scaled down
		//     // By defailt it looks for an image tag:
		//     opener: function(openerElement) {
		//       // openerElement is the element on which popup was initialized, in this case its <a> tag
		//       // you don't need to add "opener" option if this code matches your needs, it's defailt one.
		//       return openerElement.is('img') ? openerElement : openerElement.find('img');
		//     }
		// }
	});

});

