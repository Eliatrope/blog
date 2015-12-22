$(document).ready(function(){
	$(".clickpop").click(function(){
		$(".clickpop").fadeOut("fast");
		$(".nav").fadeIn("slow");
	});

	$(".closemoi").click(function(){
		$(".nav").fadeOut("fast");
		$(".clickpop").fadeIn("slow");
	});
	/*Sidebar*/
	$('.register').click(function(){
		$('.logisfil').fadeIn('fast');
	});
	$('.login').click(function(){
		$('.logisfil').fadeIn('fast');
	});
	/*Ici, dès qu'on clique autre part que dans le container, faut que le .logisfil se fadeOut*/
	
	
	/*Pour le hover + click de chaque élément de la liste, faut faire la même anim' qu'en css => 
	
	.logisfil ul li:hover{
	color:white;
	border-top:7px solid #181818;
	border-bottom:7px solid #181818;
	
	(transition de 1s)
	*/
	
	/*Si possible, générer un scroll pour tous les éléments qu'on ne voit pas...*/

});