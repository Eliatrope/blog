<?php
	class database
	{
		protected $host = "localhost";
		protected $user = "root";
		protected $pass = "";
		protected $db = "ib_blog";
		protected $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
		protected $conn;

		public function __construct()
		{
			$this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->db, $this->user, $this->pass, $this->options);	
		}
	}

	class dbFunctions extends database
	{
		public function select($query)
		{
			$query = $this->conn->prepare($query);
			$query->execute();
			return $query->fetchAll(PDO::FETCH_OBJ);
		}
	}

	class functions
	{
		public function iyaDate($date)
		{
		//Fonction écrite par https://openclassrooms.com/membres/b-dav-11360
 			if(!ctype_digit($date))
				$date = strtotime($date);
			 	if(date('Ymd', $date) == date('Ymd'))
			 	{
					$diff = time()-$date;
				  	if($diff < 60) /* moins de 60 secondes */
				   	return 'Il y a '.$diff.' sec';
				  	else if($diff < 3600) /* moins d'une heure */
				   	return 'Il y a '.round($diff/60, 0).' minutes';
				  	else if($diff < 10800) /* moins de 3 heures */
				   	return 'Il y a '.round($diff/3600, 0).' heures';
				  	else /*  plus de 3 heures ont affiche ajourd'hui à HH:MM:SS */
				   	return 'Aujourd\'hui à '.date('H:i:s', $date);
				}
			 	else if(date('Ymd', $date) == date('Ymd', strtotime('- 1 DAY')))
			  	return 'Hier à '.date('H:i:s', $date);
			 	else if(date('Ymd', $date) == date('Ymd', strtotime('- 2 DAY')))
			  	return 'Il y a 2 jours à '.date('H:i:s', $date);
			 	else
			  	return 'Le '.date('d/m/Y à H:i:s', $date);
		}
	} 
 ?>