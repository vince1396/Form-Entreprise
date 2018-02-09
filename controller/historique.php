<?php

    require "model/historiqueModel.php";
    $r = displayListClient();
    $message = '';

     $sql = "SELECT DISTINCT c.nom_c, c.id_f, c.raison, DATE_FORMAT(f.date_rdv, '%d/%m/%Y') as date_rdv, c.interet FROM user u, fiche f, client c, projet p WHERE u.id_u =".$_SESSION['id']." AND f.id_u = u.id_u AND f.id_f = c.id_f ";
    
    if(isset($_POST['submit'])) {


        $i = 0;
        if (empty($_POST['interet']) && empty($_POST['cInteret']) && empty($_POST['prospect']) && empty($_POST['rechercher']) && empty($_POST['date_min']) && empty($_POST['date_max'])) {
            $message = "Veuillez séléctionner des critères valides.";
        } else {
            if (isset($_POST['interet'])) {     //Niveau d'intérêt
                $interet = $_POST['interet'];
                if ($interet == 1) {
                    $sql .= "AND (c.interet = 1)";
                }
                if ($interet == 2) {
                    $sql .= "AND (c.interet = 2)";
                }
                if ($interet == 3) {
                        $sql .= "AND (c.interet = 3)";
                    $i++;
                }
            }
//Critères de recherche selon le type de contrat (1= Bureautique, 2=Info, 3=Solution & 4=Téléphonie)s
            if (isset($_POST['cInteret'])) {
                if ($_POST['cInteret'] == 1) {
                    $sql .= "AND c.id_c = p.id_c AND p.id_p IN (SELECT b.id_b FROM bureautique b, projet p, client c WHERE b.id_b = p.id_p AND p.id_c = c.id_c)";

                }
                if ($_POST['cInteret'] == 2) {
                        $sql .= "AND c.id_c = p.id_c AND  p.id_p IN (SELECT i.id_i FROM informatique i, projet p, client c WHERE i.id_i = p.id_p AND p.id_c = c.id_c)";
                }
                if ($_POST['cInteret'] == 3) {
                        $sql .= "AND c.id_c = p.id_c AND p.id_p IN (SELECT s.id_s FROM solution s, projet p, client c WHERE s.id_s = p.id_p AND p.id_c = c.id_c)";
                }
                if ($_POST['cInteret'] == 4) {
                        $sql .= "AND c.id_c = p.id_c AND p.id_p IN (SELECT t.id_t FROM telephonie t, projet p, client c WHERE t.id_t = p.id_p AND p.id_c = c.id_c)";
                }
            }
            if (isset($_POST['prospect'])) {    //Critère de recherche si c'est un prospect ou un client
                if ($_POST['prospect'] == 1) {
                    $sql .= "AND c.prospect = 1 ";
                }
                if ($_POST['prospect'] == 2) {
                    $sql .= "AND c.prospect = 2 ";
                }
            }
            if (!empty($_POST['rechercher']) && isset($_POST['rechercher'])) {  //Barre de recherche -> A optimiser car trop lent
                $rechercher = $_POST['rechercher'];
                $sql .= "AND ((c.nom_c LIKE '%" . $rechercher . "%' AND u.id_u = ".$_SESSION['id'].") OR (c.mail_c LIKE '%" . $rechercher . "%' AND u.id_u = ".$_SESSION['id'].") OR (c.ville LIKE '%" . $rechercher . "%' AND u.id_u = ".$_SESSION['id'].") OR (c.cp LIKE '%" . $rechercher . "%' AND u.id_u = ".$_SESSION['id'].") OR (c.tel LIKE '%" . $rechercher . "%' AND u.id_u = ".$_SESSION['id'].") OR (c.fax LIKE '%" . $rechercher . "%' AND u.id_u = ".$_SESSION['id'].") OR (c.raison LIKE '%" . $rechercher . "%' AND u.id_u = ".$_SESSION['id']."))";
                $i++;
            }
            if (isset($_POST['date_min']) && ($_POST['date_max'])) {    //Recherche par intervalle de date
                $date_min = $_POST['date_min'];
                $date_max = $_POST['date_max'];
                $sql .= " AND f.date_rdv >= '" . $date_min . "' AND f.date_rdv <= '" . $date_max . "' ORDER BY date_rdv";

            }

            $req = $bdd->query($sql);

        }
    }

    if(isset($_GET['delete'])){
        $id_delete = (int)$_GET['delete'];
        $req_delete = deleteClient($id_delete);
    }



    require "view/historiqueView.php";

?>