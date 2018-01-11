<?php

session_start();
include "_fonction.inc.php";

if (isset($_SESSION["login"])) {
    $qteReserver = $_REQUEST["quantity"];
    $typeContainer = $_REQUEST["typeContainer"];

    $reussi = ajouterArticle($typeContainer, $qteReserver);
    header("Location:nosProduits.php");
}

else {
    header("Location:espaceClient.php");
}


