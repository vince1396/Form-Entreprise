<?php
require "model/adminCreateUser.php";
 if(isset($_POST['submit']))
 {
     $nom     = htmlentities($_POST['nom']);
     $prenom  = htmlentities($_POST['prenom']);
     $email   = htmlentities($email);
     $mdp     = htmlentities($mdp);
     $confirm = htmlentities($confirm);
     $role    = htmlentities($role);
     $chef    = htmlentities($chef);

     createUser();
     $message = "L'insertion a bien été effectuée";
 }

require "view/adminCreateUser.php";
?>