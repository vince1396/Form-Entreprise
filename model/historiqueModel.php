<?php
function displayListClient(){
    global $bdd;
    $requete = $bdd->prepare("SELECT  *, DATE_FORMAT(f.date_rdv, '%d/%m/%Y') as date_rdv FROM fiche f,client c WHERE f.id_u=".$_SESSION['id']." AND c.id_f=f.id_f ORDER BY f.date_rdv DESC");
    $requete->execute();
    return $requete->fetchAll();
}
function deleteClient($id_delete){
    global $bdd;
    $requete = $bdd->prepare("DELETE FROM fiche WHERE id_f =".$id_delete);
    $requete->execute();
    return $requete->fetchAll();
}
function displayClientAdmin(){
    global $bdd;
    $requete = $bdd->prepare("SELECT  *, DATE_FORMAT(f.date_rdv, '%d/%m/%Y') as date_rdv FROM fiche f,client c WHERE c.id_f=f.id_f ORDER BY f.date_rdv DESC");
    $requete->execute();
    return $requete->fetchAll();
}
