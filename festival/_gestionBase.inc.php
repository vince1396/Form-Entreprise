<?php

function gestionnaireDeConnexion() {
    $pdo = null;
    try {
        $pdo = new PDO(
                'mysql:host=localhost;dbname=festival', 'root', 'root', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
        );
    } catch (PDOException $err) {
        $messageErreur = $err->getMessage();
        error_log($messageErreur, 0);
    }
    return $pdo;
}

function listeEtablissements() {
    $collectionEtablissements = array();
    $pdo = gestionnaireDeConnexion();
    if ($pdo != null) {
        $req = "select * from etablissement ";
        $pdo->query($req);
        $pdoStatement = $pdo->query($req);
        $collectionEtablissements = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
    }
    return $collectionEtablissements;
}

function listeGroupes() {
    $collectionGroupes = array();
    $pdo = gestionnaireDeConnexion();
    if ($pdo != null) {
        $req = "select * from groupe";
        $pdoStatement = $pdo->query($req);
        $collectionGroupes = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
    }
    return $collectionGroupes;
}

function creerEtablissement($id, $nom, $adresseRue, $codePostal, $ville, $tel, $adresseElectronique, $type, $civiliteResponsable, $nomResponsable, $prenomResponsable, $nombreChambresOffertes) {

    $reussi = false;
    $pdo = gestionnaireDeConnexion();
    if ($pdo != false) {
        $id = $pdo->quote($id);
        $nom = $pdo->quote($nom);
        $adresseRue = $pdo->quote($adresseRue);
        $codePostal = $pdo->quote($codePostal);
        $ville = $pdo->quote($ville);
        $tel = $pdo->quote($tel);
        $adresseElectronique = $pdo->quote($adresseElectronique);
        $type = $pdo->quote($type);
        $civiliteResponsable = $pdo->quote($civiliteResponsable);
        $nomResponsable = $pdo->quote($nomResponsable);
        $prenomResponsable = $pdo->quote($prenomResponsable);
        $nombreChambresOffertes = $pdo->quote($nombreChambresOffertes);

        $req = "insert into etablissement 	values($id,$nom,$adresseRue,$codePostal,$ville,$tel,
        $adresseElectronique,$type,$civiliteResponsable, $nomResponsable, $prenomResponsable,$nombreChambresOffertes)";

        $resultat = $pdo->exec($req);

        if ($resultat == 1) {
            $reussi = true;
        }
        return $reussi;
    }
}

function creerGroupes($id, $nom, $identiteResponsable , $adressePostale, $nombrePersonnes, $nomPays, $hebergement) {

    $reussi = false;
    $pdo = gestionnaireDeConnexion();
    if ($pdo != false) {
        $id = $pdo->quote($id);
        $nom = $pdo->quote($nom);
        $adresseRue = $pdo->quote($adresseRue);
        $codePostal = $pdo->quote($codePostal);
        $ville = $pdo->quote($ville);
        $tel = $pdo->quote($tel);
        $adresseElectronique = $pdo->quote($adresseElectronique);
        $type = $pdo->quote($type);
        $civiliteResponsable = $pdo->quote($civiliteResponsable);
        $nomResponsable = $pdo->quote($nomResponsable);
        $prenomResponsable = $pdo->quote($prenomResponsable);
        $nombreChambresOffertes = $pdo->quote($nombreChambresOffertes);

        $req = "insert into etablissement 	values($id,$nom,$adresseRue,$codePostal,$ville,$tel,
        $adresseElectronique,$type,$civiliteResponsable, $nomResponsable, $prenomResponsable,$nombreChambresOffertes)";

        $resultat = $pdo->exec($req);

        if ($resultat == 1) {
            $reussi = true;
        }
        return $reussi;
    }
}

function obtenirDetailEtablissement ($id)
{
    $detailEtablissement = false;
    $pdo=  gestionnaireDeConnexion();
    if($pdo!=false)
    {
        $id=$pdo->quote($id);
        $req="SELECT * FROM Etablissements WHERE id=$id";
        $resultat=$pdo->query($req);
        $detailEtablissement=$resultat->fetch();
    }
    return $detailEtablissement;     
}

?>