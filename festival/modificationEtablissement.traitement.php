<?php
include_once '_debut.inc.php';
include_once '_gestionBase.inc.php';

if (isset($_REQUEST)) {
    $id = $_REQUEST['id'];
    $nom = $_REQUEST['nom'];
    $adresseRue = $_REQUEST['adresseRue'];
    $codePostal = $_REQUEST['codePostal'];
    $ville = $_REQUEST['ville'];
    $tel = $_REQUEST['tel'];
    $adresseElectronique = $_REQUEST['adresseElectronique'];
    $type = $_REQUEST['type'];
    $civiliteResponsable = $_REQUEST['civiliteResponsable'];
    $nomResponsable = $_REQUEST['nomResponsable'];
    $prenomResponsable = $_REQUEST['prenomResponsable'];
    $nombreChambresOffertes = $_REQUEST['nombreChambresOffertes'];

    modifierEtablissement($id, $nom, $adresseRue, $codePostal, $ville, $tel, $adresseElectronique, $type, $civiliteResponsable, $nomResponsable, $prenomResponsable, $nombreChambresOffertes);

    header("location: modificationEtablissement.php?numEtablissement=$id");
} else {
    header("location: consultationEtablissement.php");
}
?>