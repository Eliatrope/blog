<?php
	require_once('bo/config.php');
	//Laisse moi faire mes requêtes izi le white!!!!!!!
	
	$function = new functions();
	
	$article = $function->select("SELECT * FROM articles");
	$univers = $function->select("SELECT * FROM univers WHERE id='2'");//WHERE sur la fk à add here
	//Ou alors, tu fais une jointure, plus propre, ça évite de dupliquer le foreach :))))))
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="description" content="$nomunivers | Bienvenue dans l'univers $nomunivers. Ici, on parle de tout, mais surtout de n'importe quoi."/><!--cf index.php-->
		<link type="text/css" rel="stylesheet" href="asset/css/style.css" />
		<link type="text/css" rel="stylesheet" href="asset/css/smallresponsive.css" />
		<link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
		<title>À MODIFIER || Bienvenue dans l'univers du BALLA et d'Eli'. Ici, on parle de tout, mais surtout de n'importe quoi et ce, sans tabou</title>
	</head>
	
	<body>
		<?php 
			include_once('asset/php/menu.php');
		?>
		<?php
				foreach($article as $a){
					foreach($univers as $u){
			?>
			<h2 class="titlearticle"><?php echo $a->nom;?></h2>
			<div class="containerinfoart">
				<hr />
				<span>Rédigé par <strong><?php echo $a->auteur;?></strong></span>
				<a href="univers.php?<?php //Mettre le $_GET précédent please?>"><img src="asset/images/<?php echo $u->blason;?>" alt="<?php echo $u->nom;?>"/></a>
				<span>Il y a 2 heures</span><!--Izi, faut rendre ça dynamique, je ne sais pas comment, bon chance-->
				<hr />
			</div>
			<section class="containerarticle"><!--En fait ici, dans cette section, on doit avoir tout le contenu de la colonne content dans la bdd->article. Enfin je pense que c'est le plus simple nope ? Et on associe des balises+style à chaque truc qu'on fait dans l'éditeur. Moi par défaut je vais mettre du style sur les éléments visibles là (h3, p et img)-->
				<h3>Zero, <span>Intoner</span> déchue</h3><!--Pas dynamique ici du fait que je n'ai pas enregistré ça dans la colonne content-->
				<p>
					<span>L</span><?php echo $a->content;?>
				</p>
				<figure>
					<img src="asset/images/biblimedia/DOD3_Zero_CGI11.png" alt="<?php ?>" title="<?php ?>"/>
					<figcaption><span>+</span></figcaption>
				</figure>
				<span class="littleresume">Rose, alias Zero</span>
				<p>
					<?php echo $a->content;?>
				</p>
				<h3>
					Alors, Mikhail ou Mickael ?
				</h3>
				<p>
					<span>D</span><?php echo $a->content; ?>
				</p>
			</section>
			<section>
				<!--La partie auteur + commentaires-->
			</section>
			<?php
					}
				}
			?>
		<section>
			
		</section>
		<script src="js/jquery-2.1.4.min.js"></script>
		<script src="js/menu.js"></script>
	</body>
</html>