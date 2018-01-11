<?php

include_once '_gestionBase.inc.php';

if (isset($_REQUEST)) {
    $id = $_REQUEST['id'];
    $nom = $_REQUEST['nom'];
    $adresseRue = $_REQUEST['adresseRue'];
    $adressePostale = $_REQUEST['codePostal'];
    $ville = $_REQUEST['ville'];
    $tel = $_REQUEST['tel'];
    $adresseElectronique = $_REQUEST['email'];
    $type = $_REQUEST['type'];
    $civiliteResponsable = $_REQUEST['civiliteResponsable'];
    $nomResponsable = $_REQUEST['nomResponsable'];
    $prenomResponsable = $_REQUEST['prenomResponsable'];
    $nombreChambresOffertes = $_REQUEST['nombreChambresOffertes'];

    $reussi = creerEtablissement($id, $nom, $adresseRue, $adressePostale, $ville, $tel, $adresseElectronique, $type, $civiliteResponsable, $nomResponsable, $prenomResponsable, $nombreChambresOffertes);
}
header("Location:consultationEtablissements.php");
?>
