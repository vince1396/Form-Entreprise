<?php

session_start();
include "_fonction.inc.php";

if (isset($_SESSION["login"])) {   

    $typeContainer = $_REQUEST["article"];    
    $reussi = supprimerArticle($typeContainer);    
    header("Location:panier.php");
}


