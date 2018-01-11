<?php

function listePays() {
    $collectionEtablissements = array();
    $pdo = gestionnaireDeConnexion();
    if ($pdo != false) {
        $req = "select * from PAYS";
        $pdoStatement = $pdo->query($req); //query retourne un résultat sous la forme d'un objet de type PDO STATEMENT. L'objet PDO STATEMENT contient l'ensemble des résultats
        $collectionEtablissements = $pdoStatement->fetchAll(PDO::FETCH_ASSOC); //fetchall retourne l'ensemble des lignes de résultats...fetch quand à lui, retourne une seule ligne de résultats
    }
    return $collectionEtablissements;
}

function listeVille() {
    $collectionVille = array();
    $pdo = gestionnaireDeConnexion();
    if ($pdo != false) {
        $req = "select * from VILLE";
        $pdoStatement = $pdo->query($req);
        $collectionVille = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
    }
    return $collectionVille;
}

function gestionnaireDeConnexion() {
    $pdo = null;
    try {
        $pdo = new PDO(
                'mysql:host=localhost;dbname=bddTholdi', 'root', 'root', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
        );
    } catch (PDOException $err) {
        $messageErreur = $err->getMessage();
        error_log($messageErreur, 0);
    }
    return $pdo;
}

function inscrire($raisonSociale, $adresse, $cp, $ville, $adrMel, $telephone, $contact, $login, $mdp, $codePays) {

    $reussi = false;
    $pdo = gestionnaireDeConnexion();
    if ($pdo != false) {
        $raisonSociale = $pdo->quote($raisonSociale);
        $adresse = $pdo->quote($adresse);
        $cp = $pdo->quote($cp);
        $ville = $pdo->quote($ville);
        $adrMel = $pdo->quote($adrMel);
        $telephone = $pdo->quote($telephone);
        $contact = $pdo->quote($contact);
        $login = $pdo->quote($login);
        $mdp = $pdo->quote($mdp);
        $codePays = $pdo->quote($codePays);

        $req = "insert into PERSONNE values(null,$raisonSociale, $adresse, $cp, $ville, $adrMel, $telephone, $contact, $login, $mdp, $codePays)";

        $resultat = $pdo->exec($req);

        if ($resultat == 1) {
            $reussi = true;
        }
        return $reussi;
    }
}

function verification($login, $mdp) {
    $resultat = false;
    $pdo = gestionnaireDeConnexion();
    if ($pdo != false) {
        $sql = "SELECT * FROM PERSONNE WHERE login=:login AND mdp=:mdp";
        //$sql = "SELECT count(*) as nb FROM PERSONNE WHERE login=".login." AND mdp=:mdp";
        $prep = $pdo->prepare($sql);
        $prep->bindParam(':login', $login, PDO::PARAM_STR);
        $prep->bindParam(':mdp', $mdp, PDO::PARAM_STR);

        $prep->execute();
        if ($prep) {
            $resultat = $prep->fetch();
        }
        $prep->closeCursor();
    }
    return $resultat;
}

function creationPanier() {
    if (!isset($_SESSION['panier'])) {
        $_SESSION['panier'] = array();
    }
    return true;
}

/**
 * Ajoute un article dans le panier
 * @param string $libelleProduit
 * @param int $qteProduit
 * @param float $prixProduit
 * @return void
 */
function ajouterArticle($typeContainer, $qteReserver) {

//Si le panier existe
    if (creationPanier()) {
        if (array_key_exists($typeContainer, $_SESSION["panier"])) {
            $_SESSION["panier"][$typeContainer] += $qteReserver;
        } else {
            $_SESSION["panier"][$typeContainer] = $qteReserver;
        }
    }
}

/**
 * Supprime un article du panier
 * @param $libelleProduit
 * @return unknown_type
 */
function supprimerArticle($typeContainer) {
//Si le panier existe
    if (creationPanier()) {
        unset($_SESSION["panier"][$typeContainer]);
    }
}

/**
 * Fonction de suppression du panier
 * @return void
 */
function supprimePanier() {
    unset($_SESSION['panier']);
}

function listeContainers() {
    $listeContainers = array();
    $pdo = gestionnaireDeConnexion();
    if ($pdo != NULL) {
        $req = "select * from TYPECONTAINER";
        $pdoStatement = $pdo->query($req);
        $listeContainers = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
    }
    return $listeContainers;
}

function informationClient() {
    //$collectionInformation = array();
    $pdo = gestionnaireDeConnexion();
    if ($pdo != false) {
        $login = $_SESSION['login'];
        $req = "select * from PERSONNE where login='$login'";
        $pdoStatement = $pdo->query($req);
        $collectionInformation = $pdoStatement->fetch(PDO::FETCH_ASSOC);
    }
    return $collectionInformation;
}

/*Fonction pour afficher la reservation d'un client"*/
function informationReservation(){
    $pdo = gestionnaireDeConnexion();
    if($pdo != false){
        $login =$_SESSION['login'];
        $req = "select * from PERSONNE, RESERVER, RESERVATION, TYPECONTAINER, VILLE where login='$login'AND RESERVER.codeReservation = RESERVATION.codeReservation AND RESERVATION.codePersonne = PERSONNE.codePersonne AND RESERVER.typeContainer = TYPECONTAINER.typeContainer";
        $pdoStatement = $pdo->query($req);
        $collectionReservation = $pdoStatement->fetch(PDO::FETCH_ASSOC);
    }
    return $collectionReservation;
}


//function informationReservation() {
//    $collectionReservation = array();
//    $pdo = gestionnaireDeConnexion();
//    if ($pdo != false) {
//        $req = "select * from RESERVATION";
//        $pdoStatement = $pdo->query($req);
//        $collectionReservation = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
//    }
//    return $collectionReservation;
//}

//function codePersonne() {
//    //$collectionInformation = array();
//    $pdo = gestionnaireDeConnexion();
//    if ($pdo != false) {
//        $login = $_SESSION['login'];
//        $req = "select CodePersonne from PERSONNE where login='$login'";
//        $pdoStatement = $pdo->query($req);
//        $codePersonne = $pdoStatement->fetch(PDO::FETCH_ASSOC);
//    }
//    return $codePersonne;
//}

function ajouterReservation($dateDebut, $dateFin, $today, $codeVilleRendre, $codeVilleReservation, $codePersonne) {

    $id = false;
    $pdo = gestionnaireDeConnexion();
    if ($pdo != false) {

        $dateDebut = $pdo->quote($dateDebut);
        $dateFin = $pdo->quote($dateFin);
        $today = $pdo->quote($today);
        $codeVilleRendre = $pdo->quote($codeVilleRendre);
        $codeVilleReservation = $pdo->quote($codeVilleReservation);
        $codePersonne = $pdo->quote($codePersonne);

        $req = "insert into RESERVATION values(null, $dateDebut, $dateFin, $today, null, null, $codeVilleRendre, $codeVilleReservation, $codePersonne)";

        $resultat = $pdo->exec($req);

        if ($resultat == 1) {
            $id = $pdo->lastInsertId();
        }
        return $id;
    }
}


function ajouterReserver($id,$typeContainer, $qte) {
    
    $reussi=false;
    $pdo = gestionnaireDeConnexion();
    if ($pdo != false) {

        $typeContainer = $pdo->quote($typeContainer);
        $qte = $pdo->quote($qte);

        $req = "insert into RESERVER values($id, $typeContainer, $qte)";

        $resultat = $pdo->exec($req);
        
        if ($resultat == 1) {
            $reussi = true;
        }
        return $reussi;
    }
}

function codeContainer($libelleContainer) {
    $pdo = gestionnaireDeConnexion();
    if ($pdo != false) {
        $req = "select typeContainer from TYPECONTAINER where libelleTypeContainer='$libelleContainer'";
        $pdoStatement = $pdo->query($req);
        $typeContainer = $pdoStatement->fetch(PDO::FETCH_ASSOC);
    }
    return $typeContainer;
}

