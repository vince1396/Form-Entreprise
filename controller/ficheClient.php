<?php

    require "model/ficheClientModel.php";

    if(isset($_POST['submit']))
    {
        
    //Commercial
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $date_contact = $_POST['date_contact'];
        $prise_rdv = $_POST['prise_rdv'];
        $date_rdv = $_POST['date_rdv'];
        
        
        addInfoComm($date_contact, $date_rdv, $prise_rdv, $_SESSION['id']);
        
        $id_f = $bdd->lastInsertId();
        
    //Raison Sociale
        $prospect = $_POST['prospect'];
        $nom_c = $_POST['nom_c'];
        $fonction = $_POST['fonction'];
        $adresse = $_POST['adresse'];
        $cp = $_POST['cp'];
        $ville = $_POST['ville'];
        $tel = $_POST['tel'];
        $fax = $_POST['fax'];
        $mail_c = $_POST['mail_c'];
        $secteur_activite = $_POST['secteur_activite'];
        $nb_site = $_POST['nb_site'];
        $nb_salarie = $_POST['nb_salarie'];
        
        
        
    //Cycle de décision
        $prescripteur = $_POST['prescripteur'];
        $decideur = $_POST['decideur'];
        $signataire = $_POST['signataire'];
        
        addInfoClient($prospect, $nom_c, $fonction, $adresse, $cp, $ville, $tel, $fax, $mail_c, $secteur_activite, $nb_site, $nb_salarie, $prescripteur, $decideur, $signataire, $id_f);
        
        $date_projet = $_POST['date_projet'];
    
    //Centre d'intérêt
        $centre_interet = $_POST['cInteret'];
        
        //Bureautique
            $fournisseur = $_POST['fournisseur'];
        
            //Achat
            $achat = $_POST['achat'];
        
            if($achat == 1)
            {
                $materiel_achat = $_POST['materiel_achat'];
                $prix_b = $_POST['achat_b'];
            }
            else if($achat == 2)
            {
                //Location
                $date_deb = $_POST['date_deb'];
                $prix_b = $_POST['loyer_b'];
                $prelevement = $_POST['prelevement']; // 1 = Mois, 2 = Trimestre
                $duree = $_POST['duree'];
                $materiel_location = $_POST['materiel_location'];
            }
                
            
            //Entretien
            $noir = $_POST['noir'];
            $cout_noir = $_POST['cout_noir'];
            $vol_noir = $_POST['vol_noir'];
            $supp_noir = $_POST['supp_noir'];
        
            $couleur = $_POST['couleur'];
            $cout_couleur = $_POST['cout_couleur'];
            $vol_couleur = $_POST['vol_couleur'];
            $supp_couleur = $_POST['supp_couleur'];
        
            $amelioration = $_POST['amelioration'];
            $orientation = $_POST['orientation'];
                
        
        //Informatique
            $nom_resp = $_POST['nom_resp'];
            $materiel_actuel = $_POST['materiel_actuel'];
            $materiel_propose = $_POST['materiel_propose'];
            $poste_travail = $_POST['poste_travail'];
            $pc_portable = $_POST['pc_portable'];
            $serveur = $_POST['serveur'];
            $nas = $_POST['nas'];
            $reseau = $_POST['reseau'];
            $sauvegarde = $_POST['sauvegarde'];
            $logiciel_actuel = $_POST['logiciel_actuel'];
            $logiciel_propose = $_POST['logiciel_propose'];
            $note_i = $_POST['note_i'];
            $travaux = $_POST['travaux'];
            $intervention = $_POST['intervention'];
            $maintenance = $_POST['maintenance'];
            $dispositif = $_POST['dispositif'];
            $panne_serveur = $_POST['panne_serveur'];
            $doc_vital = $_POST['doc_vital'];
            $cout_contrat = $_POST['cout_contrat'];
            $echeance = $_POST['echeance'];
                
        //Solution
            $doc_classe = $_POST['doc_classe'];
            $doc_archive = $_POST['doc_archive'];
            $doc_ordi = $_POST['doc_ordi'];
            $collab_absent = $_POST['collab_absent'];
            $proc_valid = $_POST['proc_valid'];
            $vol_impression = $_POST['vol_impression'];
            $refacturer = $_POST['refacturer'];
            $doc_conf = $_POST['doc_conf'];
            $doc_compta = $_POST['doc_compta'];
            $vol_coul_imp = $_POST['vol_coul_imp'];
            $doc_papier = $_POST['doc_papier'];
            $doc_app = $_POST['doc_app'];
            $scanner = $_POST['scanner'];
            $fonct_scanner = $_POST['fonct_scanner'];
        
        //Téléphonie
            $fournisseur_t = $_POST['fournisseur_t'];
            $leaser_t = $_POST['leaser_t'];
            $achat_t = $_POST['achat_t'];
            
            if($achat_t == 1){
                
                $prix_t = $_POST['prixachat_t'];
            }
            else if($achat_t == 2){
                
                $prix_t = $_POST['loyer_t'];
                $date_deb_t = $_POST['date_deb_t'];
                $prelevement_t = $_POST['prelevement_t'];
                $duree_contrat = $_POST['duree_contrat'];
            }
           
            $materiel_t = $_POST['materiel_t'];
            $num_ligne = $_POST['num_ligne'];
            $nb_poste = $_POST['nb_poste'];
            $nb_rj45 = $_POST['nb_rj45'];
        
            //Facture
                $description = $_POST['description'];
        
        //Niveau d'intérêt
            $interet = $_POST['interet'];
    }
    

    require "view/ficheClientView.php";