<?php
function displayListClient(){
    global $bdd;
    $requete = $bdd->prepare("SELECT * FROM fiche f,client c WHERE f.id_u=".$_SESSION['id']." AND c.id_f=f.id_f");
    $requete->execute();
    return $requete->fetchAll();
}

function search($rechercher){
    global $bdd;
    
    $req = $bdd->prepare("SELECT DISTINCT * FROM client c, user u, fiche f WHERE c.nom_c LIKE '%".$rechercher."%' OR c.mail_c LIKE '%".$rechercher."%' OR c.prescripteur LIKE '%".$rechercher."%' OR c.decideur LIKE '%".$rechercher."%' OR c.signataire LIKE '%".$rechercher."%' AND f.id_u = u.id_u AND c.id_f = f.id_f AND u.id_u =".$_SESSION['id']);
    $req->execute();
    return $req->fetchAll();
}

function searchInteret($interet){
    global $bdd;
    
    $req = $bdd->prepare("SELECT * FROM client c, fiche f, user u WHERE c.interet =".$interet." AND c.id_f = f.id_f AND f.id_u = u.id_u AND u.id_u =".$_SESSION['id']);
    $req->execute();
    return $req->fetchAll();
}

function searchBureautique(){
    global $bdd;
    
    $req = $bdd->prepare("SELECT DISTINCT * FROM bureautique b, projet p, client c, fiche f, user u WHERE b.id_b = p.id_p AND p.id_c = c.id_c AND c.id_f = f.id_f AND f.id_u = u.id_u AND u.id_u = ".$_SESSION['id']);
    $req->execute();
    return $req->fetchAll();
}

function searchInformatique(){
    global $bdd;
    
    $req = $bdd->prepare("SELECT * FROM informatique i, projet p, client c, fiche f, user u WHERE i.id_i = p.id_p AND p.id_c = c.id_c AND c.id_f = f.id_f AND f.id_u = u.id_u AND u.id_u = ".$_SESSION['id']);
    $req->execute();
    return $req->fetchAll();
}

function searchSolution(){
    global $bdd;
    
    $req = $bdd->prepare("SELECT DISTINCT * FROM solution s, projet p, client c, fiche f, user u WHERE s.id_s = p.id_p AND p.id_c = c.id_c AND c.id_f = f.id_f AND f.id_u = u.id_u AND u.id_u = ".$_SESSION['id']);
    $req->execute();
    return $req->fetchAll();
}

function searchTelephonie(){
    global $bdd;
    
    $req = $bdd->prepare("SELECT DISTINCT * FROM telephonie t, projet p, client c, fiche f, user u WHERE t.id_t = p.id_p AND p.id_c = c.id_c AND c.id_f = f.id_f AND f.id_u = u.id_u AND u.id_u = ".$_SESSION['id']);
    $req->execute();
    return $req->fetchAll();
}
