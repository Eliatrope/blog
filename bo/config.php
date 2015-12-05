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

	class functions extends database
	{
		public function select($query)
		{
			$query = $this->conn->prepare($query);
			$query->execute();
			return $data = $query->fetchAll(PDO::FETCH_OBJ);
		}
	}
 ?>