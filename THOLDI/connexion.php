<?php include ('_fonction.inc.php');
 session_start();
if (isset($_REQUEST["login"]) AND isset($_REQUEST["mdp"])) {
    $resultat = verification($_REQUEST["login"], $_REQUEST["mdp"]);
    if ($resultat == true) {
        $_SESSION["login"] = $_REQUEST["login"];
        $_SESSION["mdp"] = $_REQUEST["mdp"];
        header("Location:index.php");
    } 
    else {
        header("Location:espaceClient.php");
    }
}
        


