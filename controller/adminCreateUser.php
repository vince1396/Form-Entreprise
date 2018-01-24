<?php
require "model/adminCreateModel.php";
 if(isset($_POST['submit']))
 {
   createUser();
   $message = "L'insertion a bien été effectuée";
 }

require "view/adminCreateView.php";
?>
