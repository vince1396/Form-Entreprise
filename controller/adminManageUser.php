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
        ban($GET['id_u']);
    }
// =============================================================================
    if(isset($_GET['update']))
    {
        updateUser($_GET['id_u'], $nom, $prenom, $email, $mdp);
    }
// =============================================================================

  require "view/adminManageUser.php";
