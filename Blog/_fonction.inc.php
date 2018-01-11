<?php

function gestionnaireDeConnexion()
{
    $pdo = null;
    try {
        $pdo = new PDO(
                'mysql:host=localhost;dbname=blog', 'root', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
        );
    } catch (PDOException $err) {
        $messageErreur = $err->getMessage();
        error_log($messageErreur, 0);
    }
    return $pdo;
}


function creerUtilisateur()
{

}








?>