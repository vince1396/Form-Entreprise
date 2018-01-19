<?php
function displayInfoDossier($id){
    global $bdd;
    $requete = $bdd->prepare("SELECT * FROM user u,fiche f,client c, projet p, bureautique b, informatique i, solution s, telephonie t, facture fac  WHERE f.id_u=".$_SESSION['id']." AND c.id_f=f.id_f");
    $requete->execute();
    return $requete->fetch();
}