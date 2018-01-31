<?php
  function getTabFiches()
  {
    global $bdd;
    
    $req = $bdd->prepare("SELECT * FROM user u, fiche f, client c
                          WHERE u.id_u = f.id_u
                          AND f.id_f = c.id_f");
    $req->execute();

    return $req->fetchAll();
  }

