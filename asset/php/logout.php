<?php 
	session_start();
	if(isset($_SESSION['pseudo']))
	{
		session_destroy();
        echo '<meta http-equiv="refresh" content="0; URL=../../index.php">';
	}
	else
	{
		$_SESSION['error'] = "Vous n'êtes pas connecté !";
        echo '<meta http-equiv="refresh" content="0; URL=../../index.php">';
	}
?>