<?php

    require "model/consulterModel.php";
    $id = (int)$_GET['id'];

    $req1 = displayInfoDossier($id);
    $req2 = displayBureautique();
    $req3 = displayInformatique();
    $req4 = displaySolution();
    $req5 = displayTelephonie();
    


    require "view/consulterView.php";

?>