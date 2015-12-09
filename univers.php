<?php
	include_once('bo/config.php');
	
	$universid = filter_var($_GET['u'], FILTER_SANITIZE_NUMBER_INT);

	$dbFunctions = new dbFunctions();
	
	$univers = $dbFunctions->select("SELECT * FROM univers WHERE id = '$universid'");
	$articles = $dbFunctions->select("SELECT * FROM articles WHERE fk_id_univ = '$universid'");
	
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="description" content="$nomunivers | Bienvenue dans l'univers $nomunivers. Ici, on parle de tout, mais surtout de n'importe quoi."/><!--cf index.php-->
		<link type="text/css" rel="stylesheet" href="asset/css/style.css" />
		<link type="text/css" rel="stylesheet" href="asset/css/smallresponsive.css" />
		<link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
		<title>Bienvenue dans l'univers du BALLA et d'Eli'. Ici, on parle de tout, mais surtout de n'importe quoi et ce, sans tabou</title>
	</head>
	
	<body>
		<?php 
			include_once('asset/php/menu.php');
		?>
		<?php 
			foreach($univers as $u){
				echo 
				'<section class="containerlastwords">'.
					'<article class="bigcontainerlastwords">'.
						'<img src="asset/images/'.$u->image.'" alt="bg article"/>'.
						'<a><h4>'.$u->nom.'</h4></a>'.
					'</article>'.
					'<a><h4>'.$u->nom.'</h4></a>'.
				'</section>'
				;
			}
		?>
		<section class="containerprearticle">
			<!--En fait la boucle démarre à partir du <article> et se termine après le </article>, avec la <div class="cb"></div>. 
			Faut pas oublier ça, c'est très important!-->
			<article>
				<div>
					<?php
						if(count($articles) > 0)
						{
							foreach($univers as $u){
								echo 
									'<img src="asset/images/'.$u->blason.'" alt="'.$u->nom.'" title="Article de '.$u->nom.'"/>'
								;
							}
						}
					?>
				</div>
				<div>
					<?php
						foreach($articles as $a){
							echo
								'<a href="article.php?a='.$a->id.'"><h5>'.$a->nom.'</h5></a><br />'
							;
							$idtype = $a->fk_id_type;
							if($idtype == 2){
								echo '<img src="vignettebibli.png" alt="vignette" />';
							}else{
								
							}
							echo
								'<p>'.$a->content.'</p>'
							;
						
					?>
				</div>
				<div class="voidbait"></div>
				<div>
					<?php
						echo 
							'<p>Rédigé par <strong>'.$a->auteur.'</strong> le '.$a->date.' à '.$a->heure
						;
						if($idtype == 2){
							echo ' | <img src="vignettebibli.png" alt="vignette" /></p>';
						}else{
							echo '</p>';
						}
					?>
					<a href="article.php">En lire davantage</a>
				</div>
					<?php
						}
					?>
			</article>
				<div class="cb"></div>
		</section>
		<script src="js/jquery-2.1.4.min.js"></script>
		<script src="js/menu.js"></script>
	</body>
</html>