<?php
  require "model/adminManageUser.php";

    if(isset($_POST['submit'])) {
        $rechercher = $_POST['search'];
        $number = 1;
        $req = searchUser($rechercher);
    }

  require "view/adminManageUser.php";
?>


<form method="post" action="#">
    <label for="nom">Nom : </label>
    <input type="text" name="nom"/>
    <br \>
    <label for=""></label>
    <input type="" name=""/>
    <br \>
    <label for=""></label>
    <input type="" name=""/>
    <br \>
    <label for=""></label>
    <input type="" name=""/>
    <br \>
</form>