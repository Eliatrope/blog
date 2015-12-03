$(".nav").hide();
$(document).ready(function(){
	$(".clickpop").click(function(){
		$(".clickpop").fadeOut("fast");
		$(".nav").fadeIn("slow");
	});

	$(".closemoi").click(function(){
		$(".nav").fadeOut("fast");
		$(".clickpop").fadeIn("slow");
	});
});