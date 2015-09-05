$(document).ready(function(){
	$('#open-button').click(function() {
		// Calling a function in case you want to expand upon this.
		// e.preventDefault();
		if($(this).hasClass('active')){
			$(this).removeClass('active');
			$('html').css('overflow', 'initial');
		}else {
			$(this).addClass('active');
			$('html').css('overflow', 'hidden');

		}
		
		
	});

	// Make the two close button work consistently
	$('#close-button').click(function(){
		var $open_button = $('#open-button'); 
		if($open_button.hasClass('active')){
			$open_button.removeClass('active');
		}
	});



});

