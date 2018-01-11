<?php

include("_debut.inc.php");

if (isset($_REQUEST['numGroupe'])) {
    $id = $_REQUEST['numGroupe'];
    supprimerGroupe($id);
}
header("location: consultationGroupes.php");

?>