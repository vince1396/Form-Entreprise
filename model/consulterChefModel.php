<?php

function displayListClient($id){
    global $bdd;
    $req = $bdd->prepare("SELECT *, DATE_FORMAT(f.date_rdv, '%d/%m/%Y') as date_rdv FROM fiche f,client c WHERE f.id_u=".$id." AND c.id_f=f.id_f");
    $req->execute();
    return $req->fetchAll();
}

function displayName($id){
    global $bdd;
    $req = $bdd->prepare("SELECT nom, prenom FROM user WHERE id_u=".$id);
    $req->execute();
    return $req->fetch();
}