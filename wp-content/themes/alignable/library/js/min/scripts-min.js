$(function() {
    $('#apply-btn').click(function(){
    	$('html, body').animate({
			scrollTop: $("#apply-form").offset().top - 15
		}, 500);
		return false;
    });
});