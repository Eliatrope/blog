<?php
session_start();
require('../../bo/config.php');

    if(isset($_SESSION['pseudo']))
    {
        $_SESSION['error'] = "Vous êtes déjà connecté";
        echo '<meta http-equiv="refresh" content="0; URL=../../index.php">';
    }

    if(!isset($_POST['pseudo'], $_POST['password']))
    {
        $_SESSION['error'] = "Pseudo ou mot de passe manquant";
        echo '<meta http-equiv="refresh" content="0; URL=../../index.php">';
    }

    elseif (ctype_alnum($_POST['pseudo']) != true)
    {
        $_SESSION['error'] = "Pseudo invalide";
        echo '<meta http-equiv="refresh" content="0; URL=../../index.php">';
    }

    elseif (ctype_alnum($_POST['password']) != true)
    {
        $_SESSION['error'] = "Mot de pass invalide";
        echo '<meta http-equiv="refresh" content="0; URL=../../index.php">';
    }

    else
    {
        $pseudo = filter_var($_POST['pseudo'], FILTER_SANITIZE_STRING);
        $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
        $password = sha1($password.$pseudo);

        try
        {
            $function = new dbFunctions();
            $login = $function->login($pseudo, $password);
        }
        catch(Exception $e)
        {
            $_SESION['error'] = "Impossible d&#39;effectuer la requête. Veuillez réesayer plus tard. (". $e .")";
        }

       // echo '<meta http-equiv="refresh" content="0; URL=../../index.php">';
    }
?>