<?php
	include_once('bo/connex.php');
	
	$sql='SELECT * FROM univers ORDER BY nom LIMIT 1';
	$resultats= $connexion->query($sql);
	$univers = $resultats->fetchAll(PDO::FETCH_OBJ);
	
	//Requête à modifier, on doit récup' les données liées à l'univers en question(ici, pour l'exemple, Bioshock)
	
	$sql='SELECT * FROM articles WHERE fk_id_cate = 2 AND fk_id_univ = 2'; //Ici je pense qu'il faudra ordonner par date(plus récent au moins)
	$resultat = $connexion->query($sql);
	$articles = $resultat->fetchAll(PDO::FETCH_OBJ);
	
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
						foreach($univers as $u){
							echo 
								'<img src="asset/images/'.$u->blason.'" alt="'.$u->nom.'" title="Article de '.$u->nom.'"/>'
							;
						}
					?>
				</div>
				<div>
					<?php
						foreach($articles as $a){
							echo
								'<a href="article.php"><h5>'.$a->nom.'</h5></a><br />'
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