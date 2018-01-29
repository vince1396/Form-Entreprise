<?php

    require "model/ficheClientModel.php";
    $displayCommercial = displayCommercial();
    if(isset($_POST['submit']))
    {
    //Commercial
            $nom = htmlentities($_POST['nom']);
            $prenom = htmlentities($_POST['prenom']);
        if(empty($_POST['date_contact'])){
            
        }else{
            $date_contact = htmlentities($_POST['date_contact']);   
        }
        if(empty($_POST['prise_rdv'])){
            $prise_rdv = 'N/A';
        }else{
            $prise_rdv = htmlentities($_POST['prise_rdv']);  
        }
        if(empty($_POST['date_rdv'])){
            
        }else{
            $date_rdv = htmlentities($_POST['date_rdv']);
        }
        
        addInfoComm($date_contact, $date_rdv, $prise_rdv, $_SESSION['id']);
        
        $id_f = $bdd->lastInsertId();
    //Raison Sociale
        $prospect = htmlentities($_POST['prospect']);
        if(empty($_POST['nom_c'])){
            $nom_c = 'N/A';
        }else{
            $nom_c = htmlentities($_POST['nom_c']);
        }
        if(empty($_POST['fonction'])){
            $fonction = 'N/A';
        }else{
            $fonction = htmlentities($_POST['fonction']);
        }
        if(empty($_POST['adresse'])){
            $adresse = 'N/A';
        }else{
            $adresse = htmlentities($_POST['adresse']);
        }
        if(empty($_POST['cp'])){
        
        }else{
            $cp = htmlentities($_POST['cp']);
        }
        if(empty($_POST['ville'])){
            $ville  = 'N/A';
        }else{
            $ville = htmlentities($_POST['ville']);
        }
        if(empty($_POST['tel'])){
            
        }else{
            $tel = htmlentities($_POST['tel']);
        }
        if(empty($_POST['fax'])){
            
        }else{
             $fax = htmlentities($_POST['fax']);
        }
        $mail_c = htmlentities($_POST['mail_c']);
        if(empty($_POST['secteur_activite'])){
            $secteur_activite = "N/A";
        }else{
        $secteur_activite = htmlentities($_POST['secteur_activite']);
        }
        if(empty($_POST['nb_site'])){
            $nb_site = "0";
        }else{
        $nb_site = htmlentities($_POST['nb_site']);
        }
        if(empty($_POST['nb_salarie'])){
            $nb_salarie = "0";
        }else{
            $nb_salarie = htmlentities($_POST['nb_salarie']);
        }
        
        
    //Cycle de décision
        if(empty($_POST['prescripteur'])){
            $prescripteur = "N/A";
        }else{
            $prescripteur = htmlentities($_POST['prescripteur']);
        }
        if(empty($_POST['decideur'])){
            $decideur = "N/A";
        }else{
            $decideur = htmlentities($_POST['decideur']);
        }
        if(empty($_POST['signataire'])){
            $signataire = "N/A";
        }else{
            $signataire = htmlentities($_POST['signataire']);
        }
        
        //Niveau d'intérêt
        $interet = htmlentities($_POST['interet']);

        addInfoClient($prospect, $nom_c, $fonction, $adresse, $cp, $ville, $tel, $fax, $mail_c, $secteur_activite, $nb_site, $nb_salarie, $prescripteur, $decideur, $signataire, $id_f, $interet);
        
        $id_c = $bdd->lastInsertId();
        if(empty($_POST['date_projet'])){
            
        }else{
        $date_projet = htmlentities($_POST['date_projet']);
        }
        
        $centre_interet = htmlentities($_POST['cInteret']);
        $centre_interet_2 = htmlentities($_POST['cInteret_2']);
        $centre_interet_3 = htmlentities($_POST['cInteret_3']);
        $centre_interet_4 = htmlentities($_POST['cInteret_4']);

        if($centre_interet !== '0'){
            echo "test réussi";
            $id_increment = 1;
            echo $id_increment;
            if($centre_interet_2 !== '0' && !empty($_POST['cInteret_2'])){
                echo"test 2 réussi";
                $id_increment += 1;
                echo $id_increment;
                if($centre_interet_3 !== '0' && !empty($_POST['cInteret_3'])){
                    echo"test 3 réussi";
                    $id_increment += 1;
                    echo $id_increment;
                    if($centre_interet_4 !== '0' && !empty($_POST['cInteret_4'])){
                        echo"test 4 réussi";
                        $id_increment += 1;
                        echo $id_increment;
                    }else{
                        echo "test 4 échoué";
                    }
                }else{
                    echo "test 3 échoué";
                }
            }else{
            echo "test 2 échoué";
            }
        }
        $stack = array();
        for ($i = 0; $i < $id_increment; $i++){
            addProjet($date_projet, $id_c);
            $id_p = $bdd->lastInsertId();
            $stack[] = $id_p;
        }

    //Centre d'intérêt
//        var_dump($centre_interet,$centre_interet_2,$centre_interet_3,$centre_interet_4);
//        if(($centre_interet == '1')){
//            echo "test réussi";
//            $id_test = $id_p;
//            echo $id_test;
//        }
//        if($centre_interet_2 !== '0' && !empty($_POST['cInteret_2'])){
//            echo"test 2 réussi";
//            $id_test = $id_p + 1;
//            echo $id_test;
//        }else{
//            echo "test 2 échoué";
//        }
//        if($centre_interet_3 !== '0' && !empty($_POST['cInteret_3'])){
//            echo"test 3 réussi";
//            $id_test = $id_p + 2;
//            echo $id_test;
//        }else{
//            echo "test 3 échoué";
//        }
//        if($centre_interet_4 !== '0' && !empty($_POST['cInteret_4'])){
//            echo"test 4 réussi";
//            $id_test = $id_p + 3;
//            echo $id_test;
//        }else{
//            echo "test 4 échoué";
//        }
//        die();
        
        $parcourir_stack = -1;
        if($centre_interet == '1' || $centre_interet_2 == '1' || $centre_interet_3 =='1' || $centre_interet_4 == '1'){
            $parcourir_stack++;
            $id_p = $stack[$parcourir_stack];
            //Bureautique
            if(empty($_POST['fournisseur'])){
                $fournisseur = "N/A";
            }else{
                $fournisseur = htmlentities($_POST['fournisseur']);
            }
            if(empty($_POST['leaser'])){
                $leaser = "N/A";
            }else{
                $leaser = htmlentities($_POST['leaser']);
            }
            $id_b = $id_p;
            //Achat
            $achat = htmlentities($_POST['achat']);
        
             //Entretien
            if(empty($_POST['noir'])){
                $noir = "0";
            }else{
                $noir = htmlentities($_POST['noir']);
            }
            if(empty($_POST['cout_noir'])){
                $cout_noir = "0";
            }else{
                $cout_noir = htmlentities($_POST['cout_noir']);
            }
            if(empty($_POST['vol_noir'])){
                $volume_noir = "0";
            }else{
                $volume_noir = htmlentities($_POST['vol_noir']);
            }
            if(empty($_POST['supp_noir'])){
                $supp_noir = "0";
            }else{
                $supp_noir = htmlentities($_POST['supp_noir']);
            }
            if(empty($_POST['couleur'])){
                $couleur = "0";
            }else{
                $couleur = htmlentities($_POST['couleur']);
            }
            if(empty($_POST['cout_couleur'])){
                $cout_couleur = "0";
            }else{
                $cout_couleur = htmlentities($_POST['cout_couleur']);
            }
            if(empty($_POST['vol_couleur'])){
                $volume_couleur = "0";
            }else{
                $volume_couleur = htmlentities($_POST['vol_couleur']);
            }
            if(empty($_POST['supp_couleur'])){
                $supp_couleur = "0";
            }else{
                $supp_couleur = htmlentities($_POST['supp_couleur']);
            }
            if(empty($_POST['amelioration'])){
                $amelioration = "N/A";
            }else{
                $amelioration = htmlentities($_POST['amelioration']);
            }
            if(empty($_POST['orientation'])){
                $orientation = "N/A";
            }else{
                $orientation = htmlentities($_POST['orientation']);
            }
            //ACHAT BUREAUTIQUE
            if($achat == 1)
            {
                if(empty($_POST['materiel_achat'])){
                    $materiel = "N/A";
                }else{
                    $materiel = htmlentities($_POST['materiel_achat']);
                }
                if(empty($_POST['achat_b'])){
                    $prix_b = "0";
                }else{
                    $prix_b = htmlentities($_POST['achat_b']);
                }
                addBureautiqueAchat($id_b, $fournisseur, $leaser, $achat, $prix_b, $materiel, $noir, $couleur, $cout_noir, $cout_couleur, $volume_noir, $volume_couleur, $supp_noir, $supp_couleur, $amelioration, $orientation);
                
            }
            else if($achat == 2) //LOCATION BUREAUTIQUE
            {
                //Location
                if(empty($_POST['date_deb'])){
                    
                }else{
                    $date_deb = htmlentities($_POST['date_deb']);
                }
                if(empty($_POST['loyer_b'])){
                    $prix_b = "0";
                }else{
                    $prix_b = htmlentities($_POST['loyer_b']);
                }
                    $prelevement = htmlentities($_POST['prelevement']); // 1 = Mois, 2 = Trimestre
                if(empty($_POST['duree'])){
                    $duree_contrat = "0";
                }else{
                    $duree_contrat = htmlentities($_POST['duree']);
                }
                if(empty($_POST['materiel_location'])){
                    $materiel = "N/A";
                }else{
                    $materiel = htmlentities($_POST['materiel_location']);
                }
                addBureautiqueLocation($id_b, $fournisseur, $leaser, $date_deb, $achat, $prix_b, $prelevement, $duree_contrat, $materiel, $noir, $couleur, $cout_noir, $cout_couleur, $volume_noir, $volume_couleur, $supp_noir, $supp_couleur, $amelioration, $orientation);

            }
        }
        if($centre_interet == '2' || $centre_interet_2 == '2' || $centre_interet_3 =='2' || $centre_interet_4 == '2'){
            $parcourir_stack++;
            $id_p = $stack[$parcourir_stack];
            //Informatique
            
            $id_i = $id_p;
            
            if(empty($_POST['nom_resp'])){
                $nom_resp = "N/A";
            }else{
                $nom_resp = htmlentities($_POST['nom_resp']);
            }
            if(empty($_POST['materiel_actuel'])){
                $materiel_actuel = "N/A";
            }else{
                $materiel_actuel = htmlentities($_POST['materiel_actuel']);
            }
            if(empty($_POST['materiel_propose'])){
                $materiel_propose = "N/A";
            }else{
                $materiel_propose = htmlentities($_POST['materiel_propose']);
            }
            if(empty($_POST['poste_travail'])){
                $poste_travail = "N/A";
            }else{
                $poste_travail = htmlentities($_POST['poste_travail']);
            }
            if(empty($_POST['pc_portable'])){
                $pc_portable = "N/A";
            }else{
                $pc_portable = htmlentities($_POST['pc_portable']);
            }
            if(empty($_POST['serveur'])){
                $serveur = "N/A";
            }else{
                $serveur = htmlentities($_POST['serveur']);
            }
            if(empty($_POST['nas'])){
                $nas = "N/A";
            }else{
                $nas = htmlentities($_POST['nas']);
            }
            if(empty($_POST['reseau'])){
                $reseau = "N/A";
            }else{
                $reseau = htmlentities($_POST['reseau']);
            }
            if(empty($_POST['sauvegarde'])){
                $sauvegarde = "N/A";
            }else{
                $sauvegarde = htmlentities($_POST['sauvegarde']);
            }
            if(empty($_POST['logiciel_actuel'])){
                $logiciel_actuel = "N/A";
            }else{
                $logiciel_actuel = htmlentities($_POST['logiciel_actuel']);
            }
            if(empty($_POST['logiciel_propose'])){
                $logiciel_propose = "N/A";
            }else{
                $logiciel_propose = htmlentities($_POST['logiciel_propose']);
            }
            if(empty($_POST['note_i'])){
                $note_i = "N/A";
            }else{
                $note_i = htmlentities($_POST['note_i']);
            }
            if(empty($_POST['travaux'])){
                $travaux = "N/A";
            }else{
                $travaux = htmlentities($_POST['travaux']);
            }
            if(empty($_POST['intervention'])){
                $intervention = "N/A";
            }else{
                $intervention = htmlentities($_POST['intervention']);
            }
            if(empty($_POST['maintenance'])){
                $maintenance = "N/A";
            }else{
                $maintenance = htmlentities($_POST['maintenance']);
            }
            if(empty($_POST['dispositif'])){
                $dispositif = "N/A";
            }else{
                $dispositif = htmlentities($_POST['dispositif']);
            }
            if(empty($_POST['panne_serveur'])){
                $panne_serveur = "N/A";
            }else{
                $panne_serveur = htmlentities($_POST['panne_serveur']);
            }
            if(empty($_POST['doc_vital'])){
                $doc_vital = "N/A";
            }else{
                $doc_vital = htmlentities($_POST['doc_vital']);
            }
            if(empty($_POST['cout_contrat'])){
                $cout_contrat = "0";
            }else{
                $cout_contrat = htmlentities($_POST['cout_contrat']);
            }
            $echeance = htmlentities($_POST['echeance']);
            
            addInformatique($id_i, $nom_resp, $materiel_actuel, $materiel_propose, $poste_travail, $pc_portable, $serveur, $nas, $reseau, $sauvegarde, $logiciel_actuel, $logiciel_propose, $note_i, $travaux, $intervention, $maintenance, $dispositif, $panne_serveur, $doc_vital, $cout_contrat, $echeance);

            
            
        }
        if($centre_interet == '3' || $centre_interet_2 == '3' || $centre_interet_3 =='3' || $centre_interet_4 == '3'){
            
            $parcourir_stack++;
            $id_p = $stack[$parcourir_stack];
                $id_s = $id_p;
            
            
            //Solution
            
            if(empty($_POST['doc_classe'])){
                $doc_classe = "N/A";
            }else{
                $doc_classe = htmlentities($_POST['doc_classe']);
            }
            if(empty($_POST['doc_archive'])){
                $doc_archive = "N/A";
            }else{
                $doc_archive = htmlentities($_POST['doc_archive']);
            }
            if(empty($_POST['doc_ordi'])){
                $doc_ordi = "N/A";
            }else{
                $doc_ordi = htmlentities($_POST['doc_ordi']);
            }
            if(empty($_POST['collab_absent'])){
                $collab_absent = "N/A";
            }else{
                $collab_absent = htmlentities($_POST['collab_absent']);
            }
            if(empty($_POST['proc_valid'])){
                $proc_valid = "N/A";
            }else{
                $proc_valid = htmlentities($_POST['proc_valid']);
            }
            if(empty($_POST['vol_impression'])){
                $vol_impression = "N/A";
            }else{
                $vol_impression = htmlentities($_POST['vol_impression']);
            }
            if(empty($_POST['refacturer'])){
                $refacturer = "N/A";
            }else{
                $refacturer = htmlentities($_POST['refacturer']);
            }
            if(empty($_POST['doc_conf'])){
                $doc_conf = "N/A";
            }else{
                $doc_conf = htmlentities($_POST['doc_conf']);
            }
            if(empty($_POST['doc_compta'])){
                $doc_compta = "N/A";
            }else{
                $doc_compta = htmlentities($_POST['doc_compta']);
            }
            if(empty($_POST['vol_coul_imp'])){
                $vol_coul_imp = "N/A";
            }else{
                $vol_coul_imp = htmlentities($_POST['vol_coul_imp']);
            }
            if(empty($_POST['doc_papier'])){
                $doc_papier = "N/A";
            }else{
                $doc_papier = htmlentities($_POST['doc_papier']);
            }
            if(empty($_POST['doc_app'])){
                $doc_app = "N/A";
            }else{
                $doc_app = htmlentities($_POST['doc_app']);
            }
            if(empty($_POST['scanner'])){
                $scanner = "N/A";
            }else{
                $scanner = htmlentities($_POST['scanner']);
            }
            if(empty($_POST['fonct_scanner'])){
                $fonct_scanner = "N/A";
            }else{
                $fonct_scanner = htmlentities($_POST['fonct_scanner']);
            }
            addSolution($id_s, $doc_classe, $doc_archive, $doc_ordi, $collab_absent, $proc_valid, $vol_impression, $refacturer, $doc_conf, $doc_compta, $vol_coul_imp, $doc_papier, $doc_app, $scanner, $fonct_scanner);
        }
        if($centre_interet == '4' || $centre_interet_2 == '4' || $centre_interet_3 =='4' || $centre_interet_4 == '4'){
            
            $parcourir_stack++;
            $id_p = $stack[$parcourir_stack];
                $id_t = $id_p;
            
            //Téléphonie
            
            if(empty($_POST['fournisseur_t'])){
                $fournisseur_t = "N/A";
            }else{
                $fournisseur_t = htmlentities($_POST['fournisseur_t']);
            }
            if(empty($_POST['leaser_t'])){
                $leaser_t = "N/A";
            }else{
                $leaser_t = htmlentities($_POST['leaser_t']);
            }
            $achat_t = htmlentities($_POST['achat_t']);
            if(empty($_POST['num_ligne'])){
        
            }else{
                $num_ligne = htmlentities($_POST['num_ligne']);
            }
            if(empty($_POST['nb_poste'])){
                $nb_poste = "0";
            }else{
                $nb_poste = htmlentities($_POST['nb_poste']);
            }
            if(empty($_POST['nb_rj45'])){
                $nb_rj45 = "0";
            }else{
                $nb_rj45 = htmlentities($_POST['nb_rj45']);
            }
            
            if($achat_t == '1'){
                if(empty($_POST['prixachat_t'])){
                    $prix_t = "0";
                }else{
                    $prix_t = htmlentities($_POST['prixachat_t']);
                }
                if(empty($_POST['materiel_t_achat'])){
                    $materiel_t = "N/A";
                }else{
                    $materiel_t = htmlentities($_POST['materiel_t_achat']);
                }
                
                
                addTelephonieAchat($id_t, $fournisseur_t, $leaser_t, $achat_t, $prix_t, $materiel_t, $num_ligne, $nb_poste, $nb_rj45);
                
                $description = htmlentities($_POST['description']);
                addFacture($description, $id_t);
  
                
            }
            if($achat_t == '2'){
                if(empty($_POST['loyer_t'])){
                    $prix_t = "0";
                }else{
                    $prix_t = htmlentities($_POST['loyer_t']);
                }
                if(empty($_POST['date_deb_t'])){
                    
                }else{
                    $date_deb_t = htmlentities($_POST['date_deb_t']);
                }
                if(empty($_POST['prelevement_t'])){
                    
                }else{
                    $prelevement_t = htmlentities($_POST['prelevement_t']);
                }
                if(empty($_POST['duree_contrat'])){
                    $duree_contrat_t = "0";
                }else{
                    $duree_contrat_t = htmlentities($_POST['duree_contrat']);
                }
                if(empty($_POST['materiel_t_location'])){
                    $materiel_t = "N/A";
                }else{
                    $materiel_t = htmlentities($_POST['materiel_t_location']);
                }
                addTelephonieLocation($id_t, $fournisseur_t, $leaser_t, $achat_t, $date_deb_t, $prix_t, $prelevement_t, $duree_contrat_t, $materiel_t, $num_ligne, $nb_poste, $nb_rj45);
                
                
                //Facture
                if(empty($_POST['description'])){
                    $description = "N/A";
                }else{
                    $description = htmlentities($_POST['description']);
                }
                addFacture($description, $id_t);
            }
        }
        
        
        header("location:index.php?p=consulter&id=".$id_f);
    }


    require "view/ficheClientView.php";