$(function() {	
	// Change the focused input field's lable color from white to yellow
	$("input, textarea").focus(function(){
		$(this).prev("label").css("color", "#fff668");
	}).blur(function(){
		$(this).prev("label").css("color", "#ffffff");
	});
});
