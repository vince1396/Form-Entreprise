<?php
/**
 * @return array
 */
function getUsers()
  {
    global $bdd;

    $req = $bdd->prepare("SELECT * FROM user WHERE lvl < 3 AND lvl > 0");
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

      $message = "Modifications effectuées";
      return $message;
  }
// =============================================================================
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

    $message = "Modifications effectuées";
    return $message;
}
// =============================================================================
function deban($id_u)
{
    global $bdd;

    $req = $bdd->prepare("UPDATE user SET lvl = 1 WHERE id_u = :id_u");
    $req->bindValue(":id_u", $id_u, PDO::PARAM_INT);
    $req->execute();

    $message = "Les privilèges de l'utilisateur ont bien été réatribués";
    return $message;
}
// =============================================================================
function filter($filter)
{
    global $bdd;

    $req = $bdd->prepare("SELECT * FROM user WHERE lvl < 3 AND lvl > 0 ORDER BY ".$filter);
    $req->execute();

    return $req->fetchAll();
}
// =============================================================================
function triRole($lvl)
{
    global $bdd;

    $req = $bdd->prepare("SELECT * FROM user WHERE lvl = :lvl");
    $req->bindValue(":lvl", $lvl, PDO::PARAM_INT);
    $req->execute();

    return $req->fetchAll();
}
// =============================================================================
function getChefUser($id_u)
{
    global $bdd;

    $req = $bdd->prepare("SELECT * FROM user a, user b 
                                   WHERE a.id_u = b.id_chef 
                                   AND b.id_u = :id_u");
    $req->bindValue(":id_u", $id_u, PDO::PARAM_INT);
    $req->execute();

    return $req->fetch();
}