<?php

include_once '_debut.inc.php';


if (isset($_REQUEST)) {
    $id = $_REQUEST['id'];
    $nom = $_REQUEST['nomGroupe'];
    $identiteResponsable = $_REQUEST['identiteResponsable'];
    $adressePostale = $_REQUEST['adressePostale'];
    $nombrePersonnes = $_REQUEST['nombrePersonnes'];
    $nomPays = $_REQUEST['nomPays'];
    $hebergement = $_REQUEST['hebergement'];

    creerGroupe($id, $nom, $identiteResponsable, $adressePostale, $nombrePersonnes, $nomPays, $hebergement);
}
header("Location:consultationGroupes.php");
?>