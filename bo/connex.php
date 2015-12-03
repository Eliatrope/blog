<?php
	$serveur='localhost';
	$bdd='ib_blog';
	$utilisateur='root';
	$mdp='';
	$options=array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
		
	try{
		$connexion = new PDO("mysql:host=$serveur;dbname=$bdd", $utilisateur, $mdp, $options);
	}
	catch(Exception $e){ 
		die('Connexion à la base de données impossible !'); 
	} 
 ?>