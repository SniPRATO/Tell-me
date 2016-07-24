$(function(){
	'use strict';

	// animating search box
	$('.search form input[type="text"]').focus(function(){
		$('.search-box').show(300);
	});
	$('.search form input[type="text"]').blur(function(){
		$('.search-box').hide(300);
	});
	$('.search form input[type="text"]').keyup(function(){
		if($(this).val().trim() == ""){
			$('.search-result h4').html('Search result (0)');
		}
		else {
			$('.search-result h4').html('Search for "'+$(this).val()+'"');
		}
	});
	
	// $(window).scroll(function(e){
	// 	if($(this).scrollTop() > 800){
	// 		$('.right-section').css({
	// 			position: 'fixed',
	// 			right: '170px',
	// 		});
	// 	}
	// 	else {
	// 		$('.right-section').css({
	// 			position: 'absolute',
	// 			top: 0,
	// 			right: 0
	// 		});
	// 	}
	// });
});