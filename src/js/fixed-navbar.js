$(window).scroll(function() {
	if($(this).scrollTop()>120) {
		$( ".navbar-me" ).addClass("fixed-me");
		if(document.getElementById("uvg-slower")){
			document.getElementById("uvg-slower").style.marginTop = "65px";
		} else {
			document.getElementById("container").style.marginTop = "30px";
		}

	} else {
		$( ".navbar-me" ).removeClass("fixed-me");
		if (document.getElementById("uvg-slower")) {
			document.getElementById("uvg-slower").style.marginTop = "0px";
		} else{
			document.getElementById("container").style.marginTop = "-40px";
			
		}

	}
});

