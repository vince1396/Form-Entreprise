<?php
include_once '_debut.inc.php';

if (isset($_REQUEST)) {
    $id = $_REQUEST['id'];
    $nom = $_REQUEST['nom'];
    $idResponsable = $_REQUEST['identiteResponsable'];
    $adressePostale = $_REQUEST['adressePostale'];
    $nombresPersonnes = $_REQUEST['nombresPersonnes'];
    $nomPays = $_REQUEST['nomPays'];
    $hebergement = $_REQUEST['hebergement'];

    modifierGroupe($id, $nom, $idResponsable, $adressePostale, $nombresPersonnes, $nomPays, $hebergement);

    header("location: modificationGroupe.php?numGroupe=$id");
} else {
    header("location: consultationGroupe.php");
}
?>