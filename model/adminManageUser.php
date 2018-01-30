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
// =============================================================================
  function getCommercial()
  {
    global $bdd;

    $req = $bdd->prepare("SELECT * FROM user WHERE lvl = 1");
    $req->execute();

    return $req->fetchAll();
  }
// =============================================================================
  function getChefVente()
  {
    global $bdd;

    $req = $bdd->prepare("SELECT * FROM user WHERE lvl = 2");
    $req->execute();

    return $req->fetchAll();
  }
// =============================================================================
  function ban($id_u)
  {
    global $bdd;

    $req = $bdd->prepare("UPDATE user SET lvl = 0 WHERE id_u = :id_u");
    $req->bindValue(":id_u", $id_u, PDO::PARAM_INT);
    $req->execute();
  }
// =============================================================================
  function searchUser($rechercher)
  {
    global $bdd;

    $req = $bdd->prepare("SELECT DISTINCT * 
                          FROM user u 
                          WHERE (u.nom LIKE '%".$rechercher."%') 
                          OR (u.prenom LIKE '%".$rechercher."%')");
    $req->execute();

    return $req->fetchAll();
  }
// =============================================================================
  function updateUser($id_u, $nom, $prenom, $email, $mdp)
  {
      global $bdd;

      $req = $bdd->prepare("UPDATE user 
                            SET nom = :nom, 
                            prenom = :prenom, 
                            email = :email, 
                            mdp = :mdp 
                            WHERE id_u = :id_u");
      $req->bindValue(":id_u", $id_u, PDO::PARAM_INT);
      $req->execute();

  }
// =============================================================================