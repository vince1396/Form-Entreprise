<?php
/**
 * @return array
 */
function getUsers()
  {
    global $bdd;

    $req = $bdd->prepare("SELECT * FROM user WHERE lvl < 3");
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

    $message = "L'utilisateur a bien été banni";
    return $message;
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
      $req->bindValue(":nom", $nom, PDO::PARAM_STR);
      $req->bindValue(":prenom", $prenom, PDO::PARAM_STR);
      $req->bindValue(":email", $email, PDO::PARAM_STR);
      $req->bindValue(":mdp", $mdp, PDO::PARAM_STR);
      $req->execute();
  }
function updateUser2($id_u, $nom, $prenom, $email)
{
    global $bdd;

    $req = $bdd->prepare("UPDATE user 
                            SET nom = :nom, 
                            prenom = :prenom, 
                            email = :email
                            WHERE id_u = :id_u");
    $req->bindValue(":id_u", $id_u, PDO::PARAM_INT);
    $req->bindValue(":nom", $nom, PDO::PARAM_STR);
    $req->bindValue(":prenom", $prenom, PDO::PARAM_STR);
    $req->bindValue(":email", $email, PDO::PARAM_STR);
    $req->execute();
}
// =============================================================================

// =============================================================================