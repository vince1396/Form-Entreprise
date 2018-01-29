<?php
/**
 * @return array
 */
function getUsers()
  {
    global $bdd;

    $req = $bdd->prepare("SELECT * FROM user");
    $req->execute();

    return $req->fetchAll();
  }

  function getCommercial()
  {
    global $bdd;

    $req = $bdd->prepare("SELECT * FROM user WHERE lvl = 1");
    $req->execute();

    return $req->fetchAll();
  }

  function getChefVente()
  {
    global $bdd;

    $req = $bdd->prepare("SELECT * FROM user WHERE lvl = 2");
    $req->execute();

    return $req->fetchAll();
  }

  function ban($id_u)
  {
    global $bdd;

    $req = $bdd->prepare("UPDATE user SET lvl = 0 WHERE id_u = :id_u");
    $req->bindValue(":id_u", $id_u, PDO::PARAM_INT);
    $req->execute();

    return $req->fetchAll();
  }

  function searchUser($rechercher){
    global $bdd;

    $req = $bdd->prepare("SELECT DISTINCT c.nom_c, u.nom, u.prenom, c.id_f  FROM client c, fiche f, user u WHERE f.id_u = u.id_u AND f.id_f = c.id_f AND (c.nom_c LIKE '%".$rechercher."%') OR (u.nom LIKE '%".$rechercher."%') OR (u.prenom LIKE '%".$rechercher."%')");
    $req->execute();

    return $req->fetchAll();
  }
?>