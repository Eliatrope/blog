$(document).ready(function(){
	var n = 4;
	$('#viewmore').click(function(){
		var n2 = n+3;
		if(n > 10)
		{	
			return false;
		}
		else
		{
			while(n <= n2)
			{	
				$(".containerlastwords#"+n+"").show();
				n++;
				if(n == 10)
				{
					$('.viewmoreindex').hide();
				}
			}
		}
	});
});