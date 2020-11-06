$(document).ready(function(){
	$("#menu-1").click(function() {
		$('html, body').animate({
			scrollTop: $("#quytrinh").offset().top
		}, 1500);
	});
});
var count = 0;
function goRight() {
	$("#animate").animate({
		"left": "+=25%"
	}, 2000, function() {
		setTimeout(changestep, 80);
	});
}
function changestep(){
	switch(count){
		case 0:
			$('#step1').removeClass('active');
			$('#step2').addClass('active');
			$('#step3').removeClass('active');
			$('#step4').removeClass('active');
			$('#animate-description').fadeOut(800, function() {
				$(this).text('Bước - 2').fadeIn(1000);
				setTimeout(gogo, 80);
			});
			break;
		case 1:
			$('#step1').removeClass('active');
			$('#step2').removeClass('active');
			$('#step3').addClass('active');
			$('#step4').removeClass('active');
			$('#animate-description').fadeOut(800, function() {
				$(this).text('Bước - 3').fadeIn(800);
				setTimeout(gogo, 80);
			});
			break;
		case 2:
			$('#step1').removeClass('active');
			$('#step2').removeClass('active');
			$('#step3').removeClass('active');
			$('#step4').addClass('active');
			$('#animate-description').fadeOut(800, function() {
				$(this).text('Bước - 4').fadeIn(800);
				setTimeout(gogo, 80);	
			});
			break;
	}
}
function gogo() {
	count++
	if(count < 3){
		goRight();
	}else {
		$("#animate").animate({
			opacity: 0,
			"left": "+=200px"
		}, 2000, function() {
			$('#animate').css("opacity",1);
			$('#animate').css("left","0px");
			$('#animate-description').fadeOut(200, function() {
				$(this).text('Bước - 1').fadeIn(200);
			});
			$('#step1').addClass('active');
			$('#step2').removeClass('active');
			$('#step3').removeClass('active');
			$('#step4').removeClass('active');
			goRight();
			count = 0;
		});
	}
}
setTimeout(goRight, 50);
$(document).ready(function() {
	$('#login').on("click",function(){
		$('#loginModal').modal('show');
	});
	$(function () {
		$('[data-toggle="tooltip"]').tooltip()
	})
});
