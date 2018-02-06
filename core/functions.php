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
              if(checkemail($email))
              {
                  $erreur = "L'adresse email est déja utilisée";
                  return $erreur;
              }
              else
              {
                  if($role == 2)
                  {
                      $chef = 0;
                      insertUser($nom, $prenom, $email, $mdp, $role, $chef);
                      $message = "L'utilisateur a bien été ajouté";
                  }
                  else
                  {
                      insertUser($nom, $prenom, $email, $mdp, $role, $chef);
                      $message = "L'utilisateur a bien été ajouté";
                  }

                  return $message;
              }
          }
      }
  }