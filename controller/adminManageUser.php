<?php
  require "model/adminManageUser.php";

    if(isset($_POST['submit'])) {
        $rechercher = $_POST['search'];
        $number = 1;
        $req = searchUser($rechercher);
    }

  require "view/adminManageUser.php";
?>