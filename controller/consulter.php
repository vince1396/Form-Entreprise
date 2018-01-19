<?php

    require "model/consulterModel.php";
    $id = int($_GET['id']);
    $r = displayInfoDossier($id);
    


    require "view/consulterView.php";

?>