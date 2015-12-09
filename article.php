<?php
	require_once('bo/config.php');
	
	$articleid = filter_var($_GET['a'], FILTER_SANITIZE_NUMBER_INT);

	$dbFunctions = new dbFunctions();
	$functions = new functions();
	
	$article = $dbFunctions->select("SELECT * FROM articles WHERE id = '$articleid'");
	$univers = $dbFunctions->select("SELECT * FROM articles INNER JOIN univers ON univers.id = articles.fk_id_univ");
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="description" content="$nomunivers | Bienvenue dans l'univers $nomunivers. Ici, on parle de tout, mais surtout de n'importe quoi."/><!--cf index.php-->
		<link type="text/css" rel="stylesheet" href="asset/css/style.css" />
		<link type="text/css" rel="stylesheet" href="asset/css/smallresponsive.css" />
		<link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
		<title><?php echo $article[0]->nom; ?> || Bienvenue dans l'univers du BALLA et d'Eli'. Ici, on parle de tout, mais surtout de n'importe quoi et ce, sans tabou</title>
	</head>
	
	<body>
		<?php 
			include_once('asset/php/menu.php');
		?>
			<h2 class="titlearticle"><?php echo $article[0]->nom;?></h2>
			<div class="containerinfoart">
				<hr />
				<span>Rédigé par <strong><?php echo $article[0]->auteur;?></strong></span>
				<a href="univers.php?u=<?php echo $univers[0]->id; ?>"><img src="asset/images/<?php echo $univers[0]->blason;?>" alt="<?php echo $univers[0]->nom;?>"/></a>
				<span><?php echo $functions->iyaDate($article[0]->date); ?></span>
				<hr />
			</div>
			<section class="containerarticle">
				<?php echo $article[0]->content; ?>
			</section>
			<section>
				<!--La partie auteur + commentaires-->
			</section>
		<section>
			
		</section>
		<script src="js/jquery-2.1.4.min.js"></script>
		<script src="js/menu.js"></script>
	</body>
</html>