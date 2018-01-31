<?php
  require "model/adminManageUser.php";

    $number = 1;
// =============================================================================
    if(isset($_POST['search'])) {
        $rechercher = $_POST['search'];
        $number = 1;
        $req = searchUser($rechercher);
    }
// =============================================================================
    if(isset($_GET['supp']))
    {
        ban($_GET['id_u']);
    }
// =============================================================================
    if(isset($_POST['update']))
    {
        $id_u = $_POST['id_u'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];

        updateUser($id_u, $nom, $prenom, $email, $mdp);
    }
// =============================================================================

  require "view/adminManageUser.php";