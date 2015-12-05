<?php
	require_once('bo/config.php');
	
	$function = new functions();
	$univers = $function->select("SELECT * FROM univers ORDER BY id LIMIT 10");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="description" content="Bienvenue dans l'univers du BALLA et d'Eli'. Ici, on parle de tout, mais surtout de n'importe quoi." />
		<link type="text/css" rel="stylesheet" href="asset/css/style.css" />
		<link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
		<title>Bienvenue dans l'univers du BALLA et d'Eli'. Ici, on parle de tout, mais surtout de n'importe quoi et ce, sans tabou</title>
	</head>
	
	<body>
		<?php 
			include_once('asset/php/menu.php');
		?>
		<h2 class="hugecatetitle">Last wor(l)ds</h2>
		<?php 
			foreach($univers as $u){
				echo 
				'<a href="univers.php"><section class="containerlastwords" id="'.$u->id.'">'.
					'<article class="bigcontainerlastwords">'.
						'<img src="asset/images/'.$u->image.'" alt="bg article"/>'.
						'<a href="univers.php?u='.$u->id.'"><h4>'.$u->nom.'</h4></a>'.
					'</article>'.
					'<a href="univers.php?u='.$u->id.'"><h4>'.$u->nom.'</h4></a>'.
				'</section></a>'
				;
			}
		?>
		<p class="viewmoreindex">View More
		<br /><img src="asset/images/viewmore.png" alt="View More" id="viewmore"/></p>
		
		<script src="js/jquery-2.1.4.min.js"></script>
		<script src="js/menu.js"></script>
		<script src="js/viewmore.js"></script>
	</body>
</html>