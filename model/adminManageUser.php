<?php
  function getUsers()
  {
    global $bdd;

    $req = $bdd->prepare("SELECT * FROM user");
    $req->execute();
    $rep = $req->fetch();

    return $rep;
  }

  function getCommercial()
  {
    global $bdd;

    $req = $bdd->prepare("SELECT * FROM user WHERE lvl = 1");
    $req->execute();

    return $req->fetch();
  }

  function getChefVente()
  {
    global $bdd;

    $req = $bdd->prepare("SELECT * FROM user WHERE lvl = 2");
    $req->execute();

    return $req->fetch();
  }

  function ban($id_u)
  {
    global $bdd;

    $req = $bdd->prepare("UPDATE user SET lvl = 0 WHERE id_u = :id_u");
    $req->bindValue(":id_u", $id_u, PDO::PARAM_INT);
    $req->execute();

    return $req->fetch();
  }
?>
