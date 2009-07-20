$(document).ready(function(){

	// Correct formatting for help status message
	$("#statusbar .help p:last").css({'margin-bottom':'0'});

	// Posititions icons correctly for status bar messages
	$("#statusbar > div").each( function() {
		if ($(this).height()>=45) {
			$(this).addClass("pinned");
		};
	});

	
});
