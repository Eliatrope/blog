$(document).ready(function(){
	$(".clickpop").click(function(){
		$(this).hide();
		$(".nav").fadeIn();
	});

	$(".closemoi").click(function(){
		$(".nav").hide();
		$(".clickpop").fadeIn();
	});
	/*Sidebar*/
	$('.register, .login').click(function(){
		if($('.logisfil').is(':hidden'))
		{
			$('.logisfil').fadeIn();
		}
	});
	$(document.body).mousedown(function(event){
    	var target = $(event.target);
	    if (!target.parents().andSelf().is('.logisfil')) {
	        $(".logisfil").fadeOut();
	    }
	});
	

	/*Pour le hover + click de chaque élément de la liste, faut faire la même anim' qu'en css => 
	
	.logisfil ul li:hover{
	color:white;
	border-top:7px solid #181818;
	border-bottom:7px solid #181818;
	
	(transition de 1s)
	*/
	
	/*Si possible, générer un scroll pour tous les éléments qu'on ne voit pas...*/

});

function logout()
{
	location.href = 'asset/php/logout.php';
}