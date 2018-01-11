<?php

session_start();
include "_gestion.Tholdi.inc.php";

if (isset($_SESSION["login"])) {
    $qteReserver = $_REQUEST["quantity"];
    $typeContainer = $_REQUEST["typeContainer"];

    $reussi = ajouterArticle($typeContainer, $qteReserver);
    header("Location:panier.php");
}

else {
    header("Location:espaceClient.php");
}


