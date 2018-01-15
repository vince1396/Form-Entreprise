<?php

    require "model/ficheClientModel.php";

    if(isset($_POST['submit']))
    {
    //Commercial
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $date = $_POST['date'];
        $rdv = $_POST['rdv'];
        $date_rdv = $_POST['date_rdv'];
        
    //Raison Sociale
        $nom_resp = $_POST['nom_resp'];
        $fonction = $_POST['fonction'];
        $adresse = $_POST['adresse'];
        $cp = $_POST['cp'];
        $ville = $_POST['ville'];
        $tel = $_POST['tel'];
        $fax = $_POST['fax'];
        $email = $_POST['email'];
        $secteur = $_POST['secteur'];
        $nb_site = $_POST['nb_site'];
        
    //Cycle de décision
        $prescripteur = $_POST['prescripteur'];
        $decideur = $_POST['decideur'];
        $signataire = $_POST['signataire'];
        $date_projet = $_POST['date_projet'];
    
    //Centre d'intérêt
        $centre_interet = $_POST['centre_interet'];
        
        //Bureautique
            $fournisseur = $_POST['fournisseur'];
        
            //Achat
            $achat = $_POST['achat'];
            $materiel_achat = $_POST['materiel_achat'];
            
            //Location
            $date_deb = $_POST['date_deb'];
            $loyer = $_POST['loyer'];
            $prelevement = $_POST['prelevement']; // 1 = Mois, 2 = Trimestre
            $duree = $_POST['duree'];
            $materiel_location = $_POST['materiel_location'];
            
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
            $interet = $_POST['interet'];    
        
        //Solution
            $document_classe = $_POST['document_classe'];
            $doc_archive = $_POST['doc_archive'];
            $doc_ordi = $_POST['collab_absent'];
            $proc_valide = $_POST['proc_valide'];
            $vol_impression = $_POST['vol_impression'];
            $refacturer = $_POST['refacturer'];
            $doc_conf = $_POST['doc_conf'];
            $doc_compta = $_POST['doc_compta'];
            $vol_coul_imp = $_POST['vol_coul_imp'];
            $doc_papier = $_POST['doc_papier'];
            $doc_app = $_POST['doc_app'];
            $scanner = $_POST['scanner'];
            $fonct_scanner = $_POST['scanner'];
    }
    

    require "view/ficheClientView.php";