<?php
require "model/adminCreateUser.php";
 if(isset($_POST['submit']))
 {
   createUser();
   $message = "L'insertion a bien été effectuée";
 }

require "view/adminCreateUser.php";
?>