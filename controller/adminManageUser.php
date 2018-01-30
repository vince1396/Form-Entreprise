<?php
  require "model/adminManageUser.php";

    if(isset($_POST['submit'])) {
        $rechercher = $_POST['search'];
        $number = 1;
        $req = searchUser($rechercher);
    }

    if(isset($_GET['supp']))
    {
        ban($GET['id_u']);
    }

  require "view/adminManageUser.php";
