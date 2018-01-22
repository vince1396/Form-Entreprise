<?php

    require "model/ficheClientModel.php";

    if(isset($_POST['submit']))
    {
        
    //Commercial
        
            $nom = htmlentities($_POST['nom']);

 
            $prenom = htmlentities($_POST['prenom']);
        
        if(empty($_POST['date_contact'])){
            
        }else{
            $date_contact = htmlentities($_POST['date_contact']);   
        }
      
            $prise_rdv = htmlentities($_POST['prise_rdv']);  
        
        if(empty($_POST['date_rdv'])){
            
        }else{
            $date_rdv = htmlentities($_POST['date_rdv']);
        }
        
        
        addInfoComm($date_contact, $date_rdv, $prise_rdv, $_SESSION['id']);
        
        $id_f = $bdd->lastInsertId();
    //Raison Sociale
        $prospect = htmlentities($_POST['prospect']);
        $nom_c = htmlentities($_POST['nom_c']);
        $fonction = htmlentities($_POST['fonction']);
        $adresse = htmlentities($_POST['adresse']);
        if(empty($_POST['cp'])){
            
        }else{
            $cp = htmlentities($_POST['cp']);
        }
        $ville = htmlentities($_POST['ville']);
        if(empty($_POST['tel'])){
            
        }else{
            $tel = htmlentities($_POST['tel']);
        }
        if(empty($_POST['fax'])){
            
        }else{
        $fax = htmlentities($_POST['fax']);
        }
        $mail_c = htmlentities($_POST['mail_c']);
        $secteur_activite = htmlentities($_POST['secteur_activite']);
        if(empty($_POST['nb_site'])){
            
        }else{
        $nb_site = htmlentities($_POST['nb_site']);
        }
        if(empty($_POST['nb_salarie'])){
            
        }else{
        $nb_salarie = htmlentities($_POST['nb_salarie']);
        }
        
        
    //Cycle de décision
        $prescripteur = htmlentities($_POST['prescripteur']);
        $decideur = htmlentities($_POST['decideur']);
        $signataire = htmlentities($_POST['signataire']);
        
        //Niveau d'intérêt
        $interet = htmlentities($_POST['interet']);
//        var_dump($prospect, $nom_c, $fonction, $adresse, $cp, $ville, $tel, $fax, $mail_c, $secteur_activite, $nb_site, $nb_salarie, $prescripteur, $decideur, $signataire, $id_f, $interet);
//         die();
        addInfoClient($prospect, $nom_c, $fonction, $adresse, $cp, $ville, $tel, $fax, $mail_c, $secteur_activite, $nb_site, $nb_salarie, $prescripteur, $decideur, $signataire, $id_f, $interet);
       
        
        $id_c = $bdd->lastInsertId();
        if(empty($_POST['date_projet'])){
            
        }else{
        $date_projet = htmlentities($_POST['date_projet']);
        }
        addProjet($date_projet, $id_c);
        
        $id_p = $bdd->lastInsertId();
    
    //Centre d'intérêt
        $centre_interet = htmlentities($_POST['cInteret']);
        
        if($centre_interet == '1'){
            
            //Bureautique
            $fournisseur = htmlentities($_POST['fournisseur']);
            $leaser = htmlentities($_POST['leaser']);
            $id_b = $id_p;
            //Achat
            $achat = htmlentities($_POST['achat']);
        
             //Entretien
            $noir = htmlentities($_POST['noir']);
            $cout_noir = htmlentities($_POST['cout_noir']);
            $volume_noir = htmlentities($_POST['vol_noir']);
            $supp_noir = htmlentities($_POST['supp_noir']);
        
            $couleur = htmlentities($_POST['couleur']);
            $cout_couleur = htmlentities($_POST['cout_couleur']);
            $volume_couleur = htmlentities($_POST['vol_couleur']);
            $supp_couleur = htmlentities($_POST['supp_couleur']);
        
            $amelioration = htmlentities($_POST['amelioration']);
            $orientation = htmlentities($_POST['orientation']);
        
            //ACHAT BUREAUTIQUE
            if($achat == 1)
            {
                $materiel = htmlentities($_POST['materiel_achat']);
                $prix_b = htmlentities($_POST['achat_b']);
                
                addBureautiqueAchat($id_b, $fournisseur, $leaser, $achat, $prix_b, $materiel, $noir, $couleur, $cout_noir, $cout_couleur, $volume_noir, $volume_couleur, $supp_noir, $supp_couleur, $amelioration, $orientation);
                
            }
            else if($achat == 2) //LOCATION BUREAUTIQUE
            {
                //Location
                $date_deb = htmlentities($_POST['date_deb']);
                $prix_b = htmlentities($_POST['loyer_b']);
                $prelevement = htmlentities($_POST['prelevement']); // 1 = Mois, 2 = Trimestre
                $duree_contrat = htmlentities($_POST['duree']);
                $materiel = htmlentities($_POST['materiel_location']);
                
                addBureautiqueLocation($id_b, $fournisseur, $leaser, $date_deb, $achat, $prix_b, $prelevement, $duree_contrat, $materiel, $noir, $couleur, $cout_noir, $cout_couleur, $volume_noir, $volume_couleur, $supp_noir, $supp_couleur, $amelioration, $orientation);

            }
        }
        if($centre_interet == '2'){
            
            //Informatique
            $id_i = $id_p;
            $nom_resp = htmlentities($_POST['nom_resp']);
            $materiel_actuel = htmlentities($_POST['materiel_actuel']);
            $materiel_propose = htmlentities($_POST['materiel_propose']);
            $poste_travail = htmlentities($_POST['poste_travail']);
            $pc_portable = htmlentities($_POST['pc_portable']);
            $serveur = htmlentities($_POST['serveur']);
            $nas = htmlentities($_POST['nas']);
            $reseau = htmlentities($_POST['reseau']);
            $sauvegarde = htmlentities($_POST['sauvegarde']);
            $logiciel_actuel = htmlentities($_POST['logiciel_actuel']);
            $logiciel_propose = htmlentities($_POST['logiciel_propose']);
            $note_i = htmlentities($_POST['note_i']);
            $travaux = htmlentities($_POST['travaux']);
            $intervention = htmlentities($_POST['intervention']);
            $maintenance = htmlentities($_POST['maintenance']);
            $dispositif = htmlentities($_POST['dispositif']);
            $panne_serveur = htmlentities($_POST['panne_serveur']);
            $doc_vital = htmlentities($_POST['doc_vital']);
            $cout_contrat = htmlentities($_POST['cout_contrat']);
            $echeance = htmlentities($_POST['echeance']);
        
            addInformatique($id_i, $nom_resp, $materiel_actuel, $materiel_propose, $poste_travail, $pc_portable, $serveur, $nas, $reseau, $sauvegarde, $logiciel_actuel, $logiciel_propose, $note_i, $travaux, $intervention, $maintenance, $dispositif, $panne_serveur, $doc_vital, $cout_contrat, $echeance);

            
            
        }
        else if($centre_interet == 3){

            
            //Solution
            $id_s = $id_p;
            $doc_classe = htmlentities($_POST['doc_classe']);
            $doc_archive = htmlentities($_POST['doc_archive']);
            $doc_ordi = htmlentities($_POST['doc_ordi']);
            $collab_absent = htmlentities($_POST['collab_absent']);
            $proc_valid = htmlentities($_POST['proc_valid']);
            $vol_impression = htmlentities($_POST['vol_impression']);
            $refacturer = htmlentities($_POST['refacturer']);
            $doc_conf = htmlentities($_POST['doc_conf']);
            $doc_compta = htmlentities($_POST['doc_compta']);
            $vol_coul_imp = htmlentities($_POST['vol_coul_imp']);
            $doc_papier = htmlentities($_POST['doc_papier']);
            $doc_app = htmlentities($_POST['doc_app']);
            $scanner = htmlentities($_POST['scanner']);
            $fonct_scanner = htmlentities($_POST['fonct_scanner']);
        
            addSolution($id_s, $doc_classe, $doc_archive, $doc_ordi, $collab_absent, $proc_valid, $vol_impression, $refacturer, $doc_conf, $doc_compta, $vol_coul_imp, $doc_papier, $doc_app, $scanner, $fonct_scanner);
          
        }
        if($centre_interet == '4'){
            
            //Téléphonie
            $id_t = $id_p;
            $fournisseur_t = htmlentities($_POST['fournisseur_t']);
            $leaser_t = htmlentities($_POST['leaser_t']);
            $achat_t = htmlentities($_POST['achat_t']);
            $num_ligne = htmlentities($_POST['num_ligne']);
            $nb_poste = htmlentities($_POST['nb_poste']);
            $nb_rj45 = htmlentities($_POST['nb_rj45']);
            
            if($achat_t == 1){
                
                $prix_t = htmlentities($_POST['prixachat_t']);
                $materiel_t = htmlentities($_POST['materiel_t_achat']);
                
                addTelephonieAchat($id_t, $fournisseur_t, $leaser_t, $achat_t, $prix_t, $materiel_t, $num_ligne, $nb_poste, $nb_rj45);
            }
            else if($achat_t == 2){
                
                $prix_t = htmlentities($_POST['loyer_t']);
                $date_deb_t = htmlentities($_POST['date_deb_t']);
                $prelevement_t = htmlentities($_POST['prelevement_t']);
                $duree_contrat = htmlentities($_POST['duree_contrat']);
                $materiel_t = htmlentities($_POST['materiel_t_location']);
                
                addTelephonieLocation($id_t, $fournisseur_t, $leaser_t, $achat_t, $date_deb_t, $prix_t, $prelevement_t, $duree_contrat, $materiel_t, $num_ligne, $nb_poste, $nb_rj45);
                
                //Facture
                $description = htmlentities($_POST['description']);
                addFacture($description, $id_t);
            }
        }
        
        
        
        header("location:index.php?p=consulter&id=".$id_f);
    }
    

    require "view/ficheClientView.php";