<?php
  function getFiches()
  {
    global $bdd;
    
    $req = $bdd->prepare("SELECT * FROM fiche");
    $req->execute();

    return $req->fetch();
  }
?>
