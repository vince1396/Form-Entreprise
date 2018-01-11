<?php

include("_debut.inc.php");

if (isset($_REQUEST['numEtablissement'])) {
    $id = $_REQUEST['numEtablissement'];
    supprimerEtablissement($id);
}
header("location: consultationEtablissements.php");

?>