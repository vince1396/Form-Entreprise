<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include("_gestionBase.inc.php");

if (isset($_REQUEST)) {
    $id = $_REQUEST['id'];
    $nom = $_REQUEST['nom'];
    $identiteResponsable = $_REQUEST['identiteResponsable'];
    $adressePostale = $_REQUEST['adressePostale'];
    $nombrePersonnes = $_REQUEST['nombrePersonnes'];
    $nomPays = $_REQUEST['nomPays'];
    $hebergement = $_REQUEST['hebergement'];

    $reussi = creerGroupes($id, $nom, $identiteResponsable , $adressePostale, $nombrePersonnes, $nomPays, $hebergement);
}
header("Location:consultationGroupes.php");

