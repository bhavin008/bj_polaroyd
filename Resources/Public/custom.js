$(document).ready(function(){
	$('img').removeAttr('width').removeAttr('height');
	$( "nav a" ).each(function( index ) {
		if ($(this).hasClass('active')) {
			$(this).parent().addClass('active');
			id = $(this).parent().attr('id');
			$('.fm-first-level li.'+id).addClass('active');
		} 
	});
});
