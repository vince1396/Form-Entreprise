<?php
    require "model/detailDossierModel.php";

$id_f = (int)$_GET['id1'];
$id_u = (int)$_GET['id2'];
$req0 = displayInfoDossier($id_u, $id_f);
$req1 = lastDisplay($id_u, $id_f);
$req2 = displayBureautique($id_f);

$req3 = displayInformatique($id_f);
$req4 = displaySolution($id_f);
$req5 = displayTelephonie($id_f);
    require "view/detailDossierView.php";