<?php
  function createUser($nom, $prenom, $email, $mdp, $confirm, $role, $chef)
  {
    if(empty($nom) OR empty($prenom) OR empty($email) OR empty($mdp) OR empty($confirm) OR empty($role) OR empty($chef))
    {
      $erreur = "Veuillez remplir tous les champs du formulaire";
      return $erreur;
    }
    else
    {
      if($mdp != $confirm)
      {
        $erreur = "Les mots de passe ne correspondent pas";
        return $erreur;
      }
      else
      {
        if(checkemail())
        {
          $erreur = "L'adresse email est déja utilisée";
          return $erreur;
        }
        else
        {
          insertUser($nom, $prenom, $email, $mdp, $role, $chef);
        }
      }
    }
  }
?>
