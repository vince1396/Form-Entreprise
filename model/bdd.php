<?php
	try
	{
	 	$bdd = new PDO('mysql:host=127.0.0.1;dbname=allburotic;charset=utf8', 'root', 'test');
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}
