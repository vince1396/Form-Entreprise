<?php
	try
	{
	 	$bdd = new PDO('mysql:host=db751485221.db.1and1.com;dbname=db751485221;charset=utf8', 'dbo751485221', 'b6311963a');
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}
