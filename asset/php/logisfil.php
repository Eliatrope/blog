<nav class="logisfil">
	<?php
	if(isset($_SESSION['pseudo']))
	{
		$pseudo = $_SESSION['pseudo'];

		$function = new dbFunctions();
		$user = $function->select("SELECT * from users WHERE pseudo = '$pseudo'");
		$level = $user[0]->level;
		?>

		<figure class='containeravatarlogisfil'>
			<img src='asset/images/avatar/<?php echo $user[0]->pseudo; ?>_avatar.jpg' alt='Avatar <?php echo $user[0]->pseudo; ?>'/>
			<span class='modifavatar'>Modifier l'avatar</span>
			<figcaption>
				<h5><?php echo $user[0]->pseudo; ?></h5>
				<p><?php echo $user[0]->titre; ?></p>
			</figcaption>
		</figure>
		<?php if($level >= 4){ ?>
		<h6>Administration</h6>
		<hr />
		<ul>
			<li>UNIVERS</li>
			<li>ARTICLES</li>
			<li>USERS</li>
			<li>CATÉGORIES</li>
		</ul>
		<?php } ?>
		<h6>Profil</h6>
		<hr />
		<ul>
			<li>MESSAGERIE</li>
			<li>PROFIL</li>
		</ul>

		<?php
	}
	else
	{ ?>
		<figure class='containeravatarlogisfil'>
			<img src='asset/images/avatar/invite_avatar.jpg' alt='Avatar $username'/>
			<figcaption>
				<h5>Invité</h5>
				<p>Rejoins nous vite !</p>
			</figcaption>
		</figure>
		<h6>S'inscrire</h6>
		<hr />
		<form action="#register.php" method="POST">
			<label for="pseudo">Pseudo'*</label>
				<input type="text" id="pseudo" name="pseudo" placeholder="Votre pseudo" required />
			<label for="password">Mot de passe*</label>
				<input type="password" id="password" name="password" placeholder="Votre mot de passe" required />
			<label for="confirmpassword">Confirmer mot de passe*</label>
				<input type="password" id="confirmpassword" name="confirmpassword" placeholder="Confirmer votre mot de passe" required />
			<label for="mail">Adresse mail*</label>
				<input type="mail" id="mail" name="mail" placeholder="Votre adresse mail" required />
			<!--Petit captcha ici ? :)-->
			<input type="submit" name="submit" value="S'inscrire"/>
		</form>
		<p class="dejainscrit">Déjà inscrit ?</p>
		<h6>Connexion</h6>
		<?php
			if(isset($_SESSION['error']))
			{
				echo $_SESSION['error'];
			}	
		?>
		<hr />
		<form action="asset/php/login.php" method="POST">
			<label for="pseudoco">Pseudo'*</label>
				<input type="text" id="pseudoco" name="pseudo" placeholder="Votre pseudo" required />
			<label for="passwordco">Mot de passe*</label>
				<input type="password" id="passwordco" name="password" placeholder="Votre mot de passe" required />
			<input type="submit" name="submit" value="Se connecter"/>
		</form>
		
	<?php } ?>
</nav>