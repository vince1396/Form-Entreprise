<?php
  function addUser($nom, $prenom, $email, $mdp, $estChef)
  {
          global $bdd;
          
          $crypt = sha1($mdp);

          $req = $bdd->prepare("INSERT INTO user(id_u, nom, prenom, email, mdp, estChef, lvl) VALUES (NULL, :nom, :prenom, :email, :mdp, :estChef, 1)");
          $req->bindValue(':nom', $nom, PDO::PARAM_STR);
          $req->bindValue(':prenom', $prenom, PDO::PARAM_STR);
          $req->bindValue(':email', $email, PDO::PARAM_STR);
          $req->bindValue(':mdp', $crypt, PDO::PARAM_STR);
          $req->bindValue(':estChef', $estChef, PDO::PARAM_STR);
          $req->execute();

          return $req;
  }



  
?>