$(document).ready(function() {

	// Pop up
	$('#pop-up, #pop-up-two').click(function() {
		$('#modal-window').addClass('active');
		event.preventDefault()
	});
	$('.modal-close').click(function() {
		$(this).parent().removeClass('active');
	});

}); 