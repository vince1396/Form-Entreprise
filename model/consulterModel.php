<?php
//function displayInfoDossier($id){
//    global $bdd;
//    $requete = $bdd->prepare("SELECT * FROM user u,fiche f,client c, projet p, bureautique b, informatique i, solution s, telephonie t, facture fac WHERE f.id_u=".$_SESSION['id']." AND c.id_f = f.id_f
//    AND p.id_c = c.id_c AND (b.id_p = p.id_p OR i.id_p = p.id_p OR s.id_p = p.id_p OR t.id_p = p.id_p) AND fac.id_t = t.id_t");
//    $requete->execute();
//    return $requete->fetchAll();
//}

function displayInfoDossier($id){
    
    global $bdd;
    
    $requete = $bdd->prepare("SELECT * FROM user u, fiche f, client c, projet p WHERE f.id_u=".$_SESSION['id']." AND c.id_f = f.id_f AND f.id_f=".$id." AND p.id_c = c.id_c");
    $requete->execute();
    return $requete->fetchAll();
}

function displayBureautique(){
    
    global $bdd;
    
    $req = $bdd->prepare("SELECT * FROM projet p, bureautique b, client c WHERE b.id_b = p.id_p AND p.id_c = c.id_c");
    $req->execute();
    
    return $req->fetchAll();
}

function displayInformatique(){
    
    global $bdd;
    
    $req = $bdd->prepare("SELECT * FROM projet p, informatique i, client c WHERE i.id_i = p.id_p  AND c.id_c = p.id_c");
    $req->execute();
    
    return $req->fetchAll();
}

function displaySolution(){
    
    global $bdd;
    
    $req = $bdd->prepare("SELECT * FROM projet p, solution s, client c WHERE s.id_s = p.id_p  AND c.id_c = p.id_c");
    $req->execute();
    
    return $req->fetchAll();
}

function displayTelephonie(){
    
    global $bdd;
    
    $req = $bdd->prepare("SELECT * FROM projet p, telephonie t, facture f, client c WHERE t.id_t = p.id_p AND f.id_t = t.id_t AND c.id_c = p.id_c");
    $req->execute();
    
    return $req->fetchAll();
}
