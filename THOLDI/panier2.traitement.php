<?php

if (isset($_REQUEST["dateDebut"]) && isset($_REQUEST["dateFin"])){
    $dateDebut = $_REQUEST["dateDebut"];
    $dateFin = $_REQUEST["dateFin"];
    $today = date("Y-m-d");
    $codeVilleRendre = $_REQUEST["codeVilleRendre"];
    $codeVilleReservation = $_REQUEST["codeVilleReservation"];
    $codePersonne = $_SESSION["codePersonne"];
    
    $reussi= ajouterReservation($dateDebut, $dateFin, $today,$codeVilleRendre,$codeVilleReservation,$codePersonne);
    
}

