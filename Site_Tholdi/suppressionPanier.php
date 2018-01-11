<?php

session_start();
include "_gestion.Tholdi.inc.php";
if (isset($_SESSION["login"])) {
    $typeContainer = $_REQUEST["article"];
    $reussi = supprimerArticle($typeContainer);
    header("Location:panier.php");
}



