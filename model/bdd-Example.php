<?php
	try
	{
	 	$bdd = new PDO('mysql:host=127.0.0.1;dbname=NomDeLaBDD;charset=utf8', 'root', 'MotDePasse');
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}
