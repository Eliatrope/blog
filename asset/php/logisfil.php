<nav class="logisfil">
	<figure class="containeravatarlogisfil">
		<img src="asset/images/avatar/BALLA_avatar.jpg" alt="Avatar $username"/><!--$avatar-->
		<span class="modifavatar">Modifier l'avatar</span>
		<figcaption>
			<h5>BALLA<!--$username--></h5>
			<p>Rédacteur jeux vidéo<!--$titre, je pense qu'on pourra le rendre personnalisable à souhait--></p>
		</figcaption>
	</figure>
	<!--Module admin if(isset($_SESSION['admin'])) tmtc-->
	<h6>Administration</h6>
	<hr />
	<ul>
		<li>UNIVERS</li>
		<li>ARTICLES</li>
		<li>USERS</li>
		<li>CATÉGORIES</li>
	</ul>
	<!--Module user if(isset($_SESSION['user'])) tmtc-->
	<h6>Profil</h6>
	<hr />
	<ul>
		<li>MESSAGERIE</li>
		<li>PROFIL</li>
	</ul>
	<!--Module invité if(isset($_SESSION['invite'])) tmtc-->
	<h6>S'inscrire</h6>
	<hr />
	<form action="" method="POST">
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
	<hr />
	<form action="" method="POST">
		<label for="pseudoco">Pseudo'*</label>
			<input type="text" id="pseudoco" name="pseudo" placeholder="Votre pseudo" required />
		<label for="passwordco">Mot de passe*</label>
			<input type="password" id="passwordco" name="password" placeholder="Votre mot de passe" required />
		<input type="submit" name="submit" value="Se connecter"/>
	</form>
</nav>