<?php
function displayListClient(){
    global $bdd;
    $requete = $bdd->prepare("SELECT * FROM fiche f,client c WHERE f.id_u=".$_SESSION['id']." AND c.id_f=f.id_f ORDER BY f.date_rdv DESC");
    $requete->execute();
    return $requete->fetchAll();
}



