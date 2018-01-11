<?php

include("_gestion.Tholdi.inc.php");
session_start();

if (isset($_REQUEST["dateDebut"]) && isset($_REQUEST["dateFin"])) {
    $dateDebut = $_REQUEST["dateDebut"];
    $dateFin = $_REQUEST["dateFin"];
    $today = date("Y-m-d");
    $codeVilleRendre = $_REQUEST["codeVilleRendre"];
    $codeVilleReservation = $_REQUEST["codeVilleReservation"];
    $codePersonne = $_SESSION["codePersonne"];

    $id = ajouterReservation($dateDebut, $dateFin, $today, $codeVilleRendre, $codeVilleReservation, $codePersonne);

    if ($id != false) {
        foreach ($_SESSION['panier'] as $key => $value) {
            $codeContainer=codeContainer($key);
            $codeContainer= $codeContainer['typeContainer'];
            $id2=ajouterReserver($id,$codeContainer, $value);
        }
    }

    if ($id2) {
        header("Location:espaceClient.php");
    }
}

