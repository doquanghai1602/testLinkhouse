$(document).ready(function(){
	var height_right = window.innerHeight;
	var height_left = $('#menu-left').height();
	if (height_right > height_left) {
		$('#content-right').css("min-height", height_right);
	}
	else{
		$('#content-right').css("min-height", height_left);
	}
});