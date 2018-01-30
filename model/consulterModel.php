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
    
    $requete = $bdd->prepare("SELECT * FROM user u, fiche f, client c WHERE u.id_u = ".$_SESSION['id']." AND f.id_u=".$_SESSION['id']." AND c.id_f = f.id_f AND f.id_f=".$id);
    $requete->execute();
    return $requete->fetchAll();
}

function displayBureautique($id){
    
    global $bdd;

    $req = $bdd->prepare("SELECT * FROM projet p, bureautique b, client c, fiche f WHERE b.id_b = p.id_p AND p.id_c = c.id_c AND c.id_f = f.id_f AND f.id_f =".$id);
    $req->execute();
    
    return $req->fetchAll();
}

function displayInformatique($id){
    
    global $bdd;
    
    $req = $bdd->prepare("SELECT * FROM projet p, informatique i, client c, fiche f WHERE i.id_i = p.id_p  AND c.id_c = p.id_c AND c.id_f = f.id_f AND f.id_f =".$id);
    $req->execute();
    
    return $req->fetchAll();
}

function displaySolution($id){
    
    global $bdd;
    
    $req = $bdd->prepare("SELECT * FROM projet p, solution s, client c, fiche f WHERE s.id_s = p.id_p  AND c.id_c = p.id_c AND c.id_f = f.id_f AND  f.id_f =".$id);
    $req->execute();
    
    return $req->fetchAll();
}

function displayTelephonie($id){
    
    global $bdd;
    
    $req = $bdd->prepare("SELECT * FROM projet p, telephonie t, facture fac, client c, fiche f WHERE t.id_t = p.id_p AND fac.id_t = t.id_t AND c.id_c = p.id_c AND c.id_f = f.id_f AND  f.id_f =".$id);
    $req->execute();
    
    return $req->fetchAll();
}

function lastDisplay($id){
    
    global $bdd;
    $req = $bdd->prepare("SELECT * FROM user u, fiche f, client c, projet p WHERE u.id_u =".$_SESSION['id']." AND f.id_u = u.id_u AND f.id_f = c.id_f AND c.id_c = p.id_c  AND f.id_f =".$id);
    $req->execute();
    
    return $req->fetchAll();
}

//function interetDisplay($id){
//    
//    global $bdd;
//    $req = $bdd->prepare("SELECT * FROM bureautique b, informatique i, solution s, telephonie t, client c, fiche f, projet p WHERE p.id_c = c.id_c AND c.id_f = f.id_f AND b.id_b = p.id_p OR i.id_i = p.id_p OR s.id_s = p.id_p OR t.id_t = p.id_p AND f.id_f =".$id." ORDER BY p.id_p DESC LIMIT 1");
//    $req->execute();
//    return $req->fetchAll();
//}
