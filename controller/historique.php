<?php

    require "model/historiqueModel.php";
    $r = displayListClient();
    $message = '';

     $sql = "SELECT DISTINCT c.nom_c, c.id_f, f.date_rdv, c.interet FROM user u, fiche f, client c, projet p, bureautique b, informatique i, solution s, telephonie t WHERE u.id_u =".$_SESSION['id']." AND f.id_u = u.id_u AND f.id_f = c.id_f ";
    
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
                    $sql .= "AND (b.id_b = p.id_p AND p.id_c = c.id_c)";
                }
                if ($_POST['cInteret'] == 2) {
                        $sql .= "AND (i.id_i = p.id_p AND p.id_c = c.id_c)";
                }
                if ($_POST['cInteret'] == 3) {
                        $sql .= "AND (s.id_s = p.id_p AND p.id_c = c.id_c)";
                }
                if ($_POST['cInteret'] == 4) {
                        $sql .= "AND (t.id_t = p.id_p AND p.id_c = c.id_c)";
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
                $sql .= "AND (c.nom_c LIKE '%" . $rechercher . "%') OR (c.mail_c LIKE '%" . $rechercher . "%') OR (c.ville LIKE '%" . $rechercher . "%') OR (c.cp LIKE '%" . $rechercher . "%') OR (c.tel LIKE '%" . $rechercher . "%') OR (c.fax LIKE '%" . $rechercher . "%')";
                $i++;
            }
            if (isset($_POST['date_min']) && ($_POST['date_max'])) {    //Recherche par intervalle de date
                $date_min = $_POST['date_min'];
                $date_max = $_POST['date_max'];
                $sql .= " AND f.date_rdv >= '" . $date_min . "' AND f.date_rdv <= '" . $date_max . "'";
            }
            $req = $bdd->query($sql);

        }
    }

    require "view/historiqueView.php";

?>