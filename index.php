<?php
	include_once('bo/connex.php');
	
	$sql='SELECT * FROM univers ORDER BY nom LIMIT 10';
	$resultats= $connexion->query($sql);
	$univers = $resultats->fetchAll(PDO::FETCH_OBJ);
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
				'<a href=""><section class="containerlastwords">'.
					'<article class="bigcontainerlastwords">'.
						'<img src="asset/images/'.$u->image.'" alt="bg article"/>'.
						'<a href="#"><h4>'.$u->nom.'</h4></a>'.
					'</article>'.
					'<a href="#"><h4>'.$u->nom.'</h4></a>'.
				'</section></a>'
				;
			}
		?>
		<!--Vignettes ++-->
		<?php 
			/*foreach($univers as $u){
				echo 
				'<section class="containerlastwords">'.
					'<article class="bigcontainerlastwords">'.
						'<img src="asset/images/'.$u->image.'" alt="bg article"/>'.
						'<a href="#"><h4>'.$u->nom.'</h4></a>'.
					'</article>'.
					'<a href="#"><h4>'.$u->nom.'</h4></a>'.
				'</section>';
			}*/
		?>
		<section class="containerviewmorevignette">
			<div>
				<a href="#"><img src="asset/images/hp/vignettebioshock.png" alt="Vignette de l'univers Bioshock"/>
				<h5>Bioshock</h5></a>
			</div>
			<div>
				<a href="#"><img src="asset/images/hp/vignettedrakengard3.png" alt="Vignette de l'univers Bioshock"/>
				<h5>Drakengard</h5></a>
			</div>
			<div>
				<a href="#"><img src="asset/images/hp/vignettetlous.png" alt="Vignette de l'univers Bioshock"/>
				<h5>The Last of Us</h5></a>
			</div>
		</section>
		
		<!--On a try la forme blason...
		<section class="testblason">
			<div class="transformation"></div>
		</section>-->
		<script src="js/jquery-2.1.4.min.js"></script>
		<script src="js/menu.js"></script>
	</body>
</html>