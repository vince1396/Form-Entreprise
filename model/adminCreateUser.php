<?php
  function insertUser($nom, $prenom, $email, $mdp, $role, $chef)
  {
      global $bdd;

      $req = $bdd->prepare("INSERT INTO user VALUES (NULL, :nom, :prenom, :email, :mdp, :role, :chef)");
      $req->bindValue(":nom", $nom, PDO::PARAM_STR);
      $req->bindValue(":prenom", $prenom, PDO::PARAM_STR);
      $req->bindValue(":email", $email, PDO::PARAM_STR);
      $req->bindValue(":mdp", $mdp, PDO::PARAM_STR);
      $req->bindValue(":role", $role, PDO::PARAM_INT);
      $req->bindValue(":chef", $chef, PDO::PARAM_INT);
      $req->execute();
  }

  function checkEmail($email)
  {
      global $bdd;

      $req = $bdd->prepare("SELECT * FROM user WHERE :email = email");
      $req->bindValue(":email", $email, PDO::PARAM_STR);
      $req->execute();

      return $req->fetch();
  }

  function getChefVente()
  {
      global $bdd;

      $req = $bdd->prepare("SELECT * FROM user WHERE lvl = 2");
      $req->execute();

      return $req->fetchAll();
  }
?>