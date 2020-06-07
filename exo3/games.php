<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=games;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
$reponse = $bdd->query('SELECT UPPER(nom) FROM jeux_video');
?>