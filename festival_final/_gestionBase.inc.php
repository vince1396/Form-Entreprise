<?php

/**
 * _gestionBase.inc
 * 
 * PHP version 5
 *
 * Ce fichier regroupe les fonctions de gestion de la base de données "festival"
 * @author Pv
 * @version 1.0
 * @package Festival
 */

/**
 * Retourne un gestionnaire de connexion.
 *
 * Se connecte à la base de données "festival" du serveur de bases de données MYSQL et retourne un gestionnaire de connexion
 * 
 * @return PDO|NULL Un objet PDO en cas de succès, "NULL" en cas d'echec
 */
function gestionnaireDeConnexion() {
    $pdo = NULL;
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

/**
 * Retourne la liste des établissements.
 *
 * @return Array Un tableau contenant l'ensemble des établissements d'accueil du festival
 */
function listeEtablissements() {
    $lesEtablissements = array();
    $pdo = gestionnaireDeConnexion();
    if ($pdo != null) {
        $req = "select * from etablissement order by id";
        $pdoStatement = $pdo->query($req);
        $lesEtablissements = $pdoStatement->fetchAll(PDO::FETCH_ASSOC) ;
    }
    return $lesEtablissements ;
}

/**
 * Insère un établissement
 *
 * @param string|int id de l'établissement
 * @param string nom de l'établissement
 * @param string adresse de l'établissement
 * @param string|int codePostal de l'établissement
 * @param string ville de l'établissement
 * @param string|int tel de l'établissement
 * @param string adresseElectronique du contact
 * @param string|int type d'établissement
 * @param string civilite du responsable de l'établissement
 * @param string nom du responsable de l'établissement
 * @param string prénom du responsable de l'établissement
 * @param string nombre de chambres offertes par l'établissement
 *
 * @return bool "true" en cas de succès, "false" en cas d'echec
 */
function creerEtablissement($id, $nom, $adresseRue = null, $codePostal, $ville, $tel, $adresseElectronique, $type, $civiliteResponsable, $nomResponsable, $prenomResponsable, $nombreChambresOffertes) {
    $reussi = false;
    $pdo = gestionnaireDeConnexion();
    if ($pdo != null) {

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

        $req = "insert into etablissement values ($id, $nom, $adresseRue, 
		$codePostal, $ville, $tel, $adresseElectronique, $type, 
		$civiliteResponsable, $nomResponsable, $prenomResponsable,
		$nombreChambresOffertes )";

        $resultat = $pdo->exec($req);
        if ($resultat == 1) {
            $reussi = true;
        }
    }

    return $reussi;
}

/**
 * Retourne les informations d'un établissement.
 *
 * @param string|int l'identifiant d'un établissement
 * @return Array|null Un établissement sous la forme d'une ligne d'enregistrement, "NULL" en cas d'echec
 */
function obtenirDetailEtablissement($id) {
    $detailEtablissement = null;
    $pdo = gestionnaireDeConnexion();
    if ($pdo != null) {
        $id = $pdo->quote($id);
        $req = "select * from etablissement where id= $id ";
        $resultat = $pdo->query($req);
        $detailEtablissement = $resultat->fetch();
    }
    return $detailEtablissement;
}

/**
 * Modifie les informations d'un établissement
 *
 * @param string|int id de l'établissement
 * @param string nom de l'établissement
 * @param string adresse de l'établissement
 * @param string|int codePostal de l'établissement
 * @param string ville de l'établissement
 * @param string|int tel de l'établissement
 * @param string adresseElectronique du contact
 * @param string|int type d'établissement
 * @param string civilite du responsable de l'établissement
 * @param string nom du responsable de l'établissement
 * @param string prénom du responsable de l'établissement
 * @param string nombre de chambres offertes par l'établissement

 * @return bool "true" en cas de succès, "false" en cas d'echec
 */
function modifierEtablissement($id, $nom, $adresseRue, $codePostal, $ville, $tel, $adresseElectronique, $type, $civiliteResponsable, $nomResponsable, $prenomResponsable, $nombreChambresOffertes) {

    $modification = false;
    $pdo = gestionnaireDeConnexion();

    if ($pdo != null) {
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

        $req = "update etablissement set nom=$nom,adresseRue=$adresseRue,
		codePostal=$codePostal,ville=$ville,tel=$tel,
		adresseElectronique=$adresseElectronique,type=$type,
		civiliteResponsable=$civiliteResponsable,nomResponsable=
		$nomResponsable,prenomResponsable=$prenomResponsable,
		nombreChambresOffertes=$nombreChambresOffertes where id=$id";

        $resultat = $pdo->exec($req);
        if ($resultat == 1) {
            $modification = true;
        }
    }

    return $modification;
}

/**
 *
 * Supprime un établissement à partir de son identifiant
 *
 * @param string|int l'identifiant d'un établissement
 *
 * @return Boolean true en cas de succès, "false" en cas d'echec
 */
function supprimerEtablissement($id) {
    $suppression = false;
    $pdo = gestionnaireDeConnexion();
    if ($pdo != null) {
        $id = $pdo->quote($id);
        $req = "delete from etablissement where id=$id";
        $resultat = $pdo->exec($req);
        if ($resultat == 1) {
            $suppression = true;
        }
    }
    return $suppression;
}

/**
 *
 * Retourne l'attribution des groupes pour chacun des établissements
 *
 * @return tableau contenant la liste des attributions des établissement|false en cas de succès, "false" en cas d'echec
 */
function attributionGroupeParEtablissement() {
    $resultat = false;
    $pdo = gestionnaireDeConnexion();
    if ($pdo != null) {
        $id = $pdo->quote($id);
        $req = "SELECT etablissement.id, etablissement.nom as nomEtablissement, etablissement.nombreChambresOffertes, groupe.nom as nomGroupe, groupe.nombrePersonnes
                FROM etablissement, groupe, attribution
                WHERE etablissement.id = attribution.idEtab
                AND attribution.idGroupe = groupe.id
                AND groupe.hebergement =  'O'
                ORDER BY etablissement.id";
        $resultat = $pdo->query($req)->fetchAll();
    }
    return $resultat;
}

/**
 *
 * Vérifie l'existence du login et mot de passe
 *
 * @return Boolean $bool true en cas de succès, "false" en cas d'echec
 */
function verification($user, $mdp) {
    $bool = false;
    $pdo = gestionnaireDeConnexion();
    if ($pdo != null) {
        $sql = "SELECT count(*) as nb FROM compte "
                . " WHERE user=:user AND mdp=:mdp";
        $prep = $pdo->prepare($sql);
        $prep->bindParam(':user', $user, PDO::PARAM_STR);
        $prep->bindParam(':mdp', $mdp, PDO::PARAM_STR);
        $prep->execute();
        $resultat = $prep->fetch();
        if ($resultat["nb"] == 1) {
            $bool = true;
        }
        $prep->closeCursor();
    }
    return $bool;
}

/**
 * Retourne le nombre de place disponbile pour un établissement
 *
 * @param string|int $idEtablissement l'identifiant d'un établissement
 * @return int le nombre de place disponible
 */
function nombrePlaceRestantes($idEtablissement) {
    $resultat = 0;
    $pdo = gestionnaireDeConnexion();
    if ($pdo != null) {
        $id = $pdo->quote($idEtablissement);
        $req = "select etablissement.nombreChambresOffertes - sum(attribution.nombreChambres) as nbPlacesRestantes from etablissement, attribution where etablissement.id = attribution.idEtab and etablissement.id = $id";
        $pdoStatement = $pdo->query($req);
        $resultat = $pdoStatement->fetch();
        $resultat = $resultat["nbPlacesRestantes"];
    }
    return $resultat;
}

/**
 * Ajoute une groupe de musique
 * 
 * @param type $id L'identifiant du groupe de musique
 * @param type $nomGroupe Le nom du groupe de musique
 * @param type $idResponsable L'identité du responsable de groupe
 * @param type $adressePostale L'adresse postale du groupe
 * @param type $nombrePersonnes Le nombre de personnes qui composent le groupe
 * @param type $nomPays Le pays d'origine du groupe
 * @param type $hebergement Le type d'hébergement du groupe
 * @return boolean True en cas de succès, False dans le cas contraire.
 */
function creerGroupe($id, $nomGroupe, $idResponsable, $adressePostale, $nombrePersonnes, $nomPays, $hebergement) {
    $reussi = false;
    $pdo = gestionnaireDeConnexion();
    if ($pdo != null) {

        $id = $pdo->quote($id);
        $nomGroupe = $pdo->quote($nomGroupe);
        $idResponsable = $pdo->quote($idResponsable);
        $adressePostale = $pdo->quote($adressePostale);
        $nombrePersonnes = $pdo->quote($nombrePersonnes);
        $nomPays = $pdo->quote($nomPays);
        $hebergement = $pdo->quote($hebergement);

        $req = "insert into groupe (id,nom,identiteResponsable,adressePostale,nombrePersonnes,nomPays,hebergement) values ($id, $nomGroupe, $idResponsable,$adressePostale, $nombrePersonnes, $nomPays,$hebergement)";

        $resultat = $pdo->exec($req);
        if ($resultat == 1) {
            $reussi = true;
        }
    }

    return $reussi;
}

/**
 * Retourne la liste des groupes participant au festival
 * 
 * @return Array Un tableau contenant l'ensemble des groupes de musique participant au festival
 */
function listeGroupe() {
    $resultat = array();
    $pdo = gestionnaireDeConnexion();
    if ($pdo != null) {
        $req = "select * from groupe order by id";
        $resultat = $pdo->query($req);
    }
    return $resultat;
}

/**
 * Supprime un groupe de musique
 * 
 * @param string $id L'identifiant du groupe de musique
 * @return boolean True en cas de suppression, false dans le cas contraire (si l'identifiant ne correspond à aucun groupe par exemple)
 */
function supprimerGroupe($id) {
    $suppression = false;
    $pdo = gestionnaireDeConnexion();
    if ($pdo != null) {
        $id = $pdo->quote($id);
        $req = "delete from groupe where id=$id";
        $resultat = $pdo->exec($req);
        if ($resultat == 1) {
            $suppression = true;
        }
    }
    return $suppression;
}

/**
 * retourne les données relatives à un groupe de musique
 * 
 * @param string $id L'identifiant d'un groupe de musique
 * @return Array|null Les données relatives à un groupe de musique, null si le groupe n'est pas référencé
 */
function obtenirDetailGroupe($id) {
    $detailGroupe = null;
    $pdo = gestionnaireDeConnexion();
    if ($pdo != null) {
        $id = $pdo->quote($id);
        $req = "select * from groupe where id= $id ";
        $resultat = $pdo->query($req);
        $detailGroupe = $resultat->fetch();
    }
    return $detailGroupe;
}

/**
 * Retourne les informations d'un groupe de musique
 * 
 * @param string $nomGroupe Le nom du groupe recherché
 * @return array|null Les informations d'un groupe de musique ou null si le groupe n'a pas été trouvé
 */
function rechercheGroupe($nomGroupe) {
    $detailGroupe = null;
    $pdo = gestionnaireDeConnexion();
    if ($pdo != null) {
        $nomGroupe = "%$nomGroupe%";
        $nomGroupe = $pdo->quote($nomGroupe);
        $req = "select * from groupe where upper(nom) like $nomGroupe order by id";
        $pdoStatement = $pdo->query($req, PDO::FETCH_ASSOC); 
        $detailGroupe = $pdoStatement->fetchAll();
    }
    return $detailGroupe;
}

/**
 * Modifie les données relatives à un groupe
 * 
 * @param string $id L'identifiant du groupe
 * @param string $nomGroupe Le nom du groupe
 * @param string $identiteResponsable L'identité du responsable du groupe
 * @param string $adressePostale L'adresse postale du groupe
 * @param string $nombrePersonnes Le nombre de personnes composant le groupe
 * @param string $nomPays Le pays d'origine du groupe
 * @param string $hebergement Le choix de l'hébergement O/N
 * @return boolean Vrai en cas de succès, false dans le cas contraire
 */
function modifierGroupe($id, $nomGroupe, $identiteResponsable, $adressePostale, $nombrePersonnes, $nomPays, $hebergement) {

    $modification = false;
    $pdo = gestionnaireDeConnexion();

    if ($pdo != null) {
        $id = $pdo->quote($id);
        $nomGroupe = $pdo->quote($nomGroupe);
        $identiteResponsable = $pdo->quote($identiteResponsable);
        $adressePostale = $pdo->quote($adressePostale);
        $nombrePersonnes = $pdo->quote($nombrePersonnes);
        $nomPays = $pdo->quote($nomPays);
        $hebergement = $pdo->quote($hebergement);

        $req = "update groupe set nom=$nomGroupe,identiteResponsable=$identiteResponsable,
		adressePostale=$adressePostale,nombrePersonnes=$nombrePersonnes,nomPays=$nomPays,
		hebergement=$hebergement where id=$id";

        $resultat = $pdo->exec($req);
        if ($resultat == 1) {
            $modification = true;
        }
    }

    return $modification;
}

/**
 * Recherche un établissement à partir de son nom
 * 
 * @param string $nomEtablissement Le nom de l'établissement recherché
 * @return Array|null Un tableau contenant un ou plusieurs établissement contenant le nom de l'établissement transmis en paramètre ou null si aucun résultats de recherche
 */
function rechercheEtablissement($nomEtablissement) {
    $detailEtablissement = null;
    $pdo = gestionnaireDeConnexion();
    if ($pdo != null) {
        $nomEtablissement = "%$nomEtablissement%";
        $nomEtablissement = $pdo->quote($nomEtablissement);
        $req = "select * from etablissement where upper(nom) like $nomEtablissement order by id";
        $pdoStatement = $pdo->query($req, PDO::FETCH_ASSOC);
        $detailEtablissement = $pdoStatement->fetchAll();
    }
    return $detailEtablissement;
}

