<?php

    function displayCommercial(){
        global $bdd;
        
        $req = $bdd->prepare("SELECT nom, prenom FROM user WHERE id_u =".$id_u);
        $req->execute();
        
        return $req->fetch();
    }
    
    function addInfoComm($date_contact, $date_rdv, $prise_rdv, $id_c, $id_p, $id_u){
        
        global $bdd;
        
        $req = $bdd->prepare("INSERT INTO fiche(date_contact, date_rdv, prise_rdv, id_c, id_p, id_u) VALUES (:date_contact, :date_rdv, :prise_rdv, :id_c, :id_p, :id_u)");
        
        $req->bindValue(":date_contact", $date_contact, PDO::PARAM_STR);
        $req->bindValue(":date_rdv", $date_rdv, PDO::PARAM_STR);
        $req->bindValue(":prise_rdv", $prise_rdv, PDO::PARAM_STR);
        $req->bindValue(":id_c", $id_c, PDO::PARAM_INT);
        $req->bindValue(":id_p", $id_p, PDO::PARAM_INT);
        $req->bindValue(":id_u", $id_u, PDO::PARAM_INT);
        $req->execute();
        
        return $req->fetch();
    }

    function addInfoClient($prospect, $nom_c, $fonction, $adresse, $cp, $ville, $tel, $fax, $mail_c, $secteur_activite, $nb_site, $nb_salarie){
        
        global $bdd;
        $req = $bdd->prepare("INSERT INTO client(prospect, nom_c, fonction, adresse, cp, ville, tel, fax, mail_c, secteur_activite, nb_site, nb_salarie) VALUES (:prospect, :nom_c, :fonction, :adresse, :cp, :ville, :tel, :fax, :mail_c, :secteur_activite, :nb_site, :nb_salarie)");
            
        $req->bindValue(":prospect", $prospect, PDO::PARAM_INT);
        $req->bindValue(":nom_c", $nom_c, PDO::PARAM_STR);
        $req->bindValue(":fonction", $fonction, PDO::PARAM_STR);
        $req->bindValue(":adresse", $adresse, PDO::PARAM_STR);
        $req->bindValue(":cp", $cp, PDO::PARAM_INT);
        $req->bindValue(":ville", $ville, PDO::PARAM_STR);
        $req->bindValue(":tel", $tel, PDO::PARAM_STR);
        $req->bindValue(":fax", $fax, PDO::PARAM_STR);
        $req->bindValue(":mail_c", $mail_c, PDO::PARAM_STR);
        $req->bindValue(":secteur_activite", $secteur_activite, PDO::PARAM_STR);
        $req->bindValue(":nb_site", $nb_site, PDO::PARAM_INT);
        $req->bindValue(":nb_salarie", $nb_salarie, PDO::PARAM_INT);
        
        $req->execute();
        
        return $req->fetch();
    }

    function addInfoCycleDecision($prescripteur, $decideur, $signataire, $date_projet){
        
        global $bdd;
        
        $req = $bdd->prepare("INSERT INTO projet(prescripteur, decideur, signataire, date_projet) VALUES (:prescripteur, :decideur, :signataire, :date_projet)");
        
        $req->bindValue(":prescripteur", $prescripteur, PDO::PARAM_STR);
        $req->bindValue(":decideur", $decideur, PDO::PARAM_STR);
        $req->bindValue(":signataire", $signataire, PDO::PARAM_STR);
        $req->bindValue(":date_projet", $date_projet, PDO::PARAM_STR);
        $req->execute();
        
        return $req->fetch();
    }

    function addBureautiqueLoyer($fournisseur, $leaser, $date_deb, $loyer, $prelevement, $duree_contrat, $materiel, $noir, $couleur, $cout_noir, $cout_couleur, $volume_noir, $volume_couleur, $supp_noir, $supp_couleur, $amelioration, $orientation){
        
        global $bdd;
        
        $req = $bdd->prepare("INSERT INTO bureautique(fournisseur, leaser, date_deb, loyer, prelevement, duree_contrat, materiel, noir, couleur, cout_noir, cout_couleur, volume_noir, volume_couleur, supp_noir, supp_couleur, amelioration, orientation ) VALUES (:fournisseur, :leaser, :date_deb, :loyer, :prelevement, :duree_contrat, :materiel, :noir, :couleur, :cout_noir, :cout_couleur, :volume_noir, :volume_couleur, :supp_noir, :supp_couleur, :amelioration, :orientation)");
        
        $req->bindValue(":fournisseur", $fournisseur, PDO::PARAM_STR);
        $req->bindValue(":leaser", $leaser, PDO::PARAM_STR);
        $req->bindValue(":date_deb", $date_deb, PDO::PARAM_STR);
        $req->bindValue(":loyer", $loyer, PDO::PARAM_STR);
        $req->bindValue(":prelevement", $prelevement, PDO::PARAM_INT);
        $req->bindValue(":duree_contrat", $duree_contrat, PDO::PARAM_STR);
        $req->bindValue(":materiel", $materiel, PDO::PARAM_STR);
        $req->bindValue(":noir", $noir, PDO::PARAM_STR);
        $req->bindValue(":couleur", $couleur, PDO::PARAM_STR);
        $req->bindValue(":cout_noir", $cout_noir, PDO::PARAM_STR);
        $req->bindValue(":cout_couleur", $cout_couleur, PDO::PARAM_STR);
        $req->bindValue(":volume_noir", $volume_noir, PDO::PARAM_STR);
        $req->bindValue(":volume_couleur", $volume_couleur, PDO::PARAM_STR);
        $req->bindValue(":supp_noir", $supp_noir, PDO::PARAM_STR);
        $req->bindValue(":supp_couleur", $supp_couleur, PDO::PARAM_STR);
        $req->bindValue(":amelioration", $amelioration, PDO::PARAM_STR);
        $req->bindValue(":orientation", $orientation, PDO::PARAM_STR);
        $req->execute();
        
        return $req->fetch();
    }

    function addBureautiqueAchat($fournisseur, $leaser, $achat, $materiel, $noir, $couleur, $cout_noir, $cout_couleur, $volume_noir, $volume_couleur, $supp_noir, $supp_couleur, $amelioration, $orientation){
        
        global $bdd;
        
        $req = $bdd->prepare("INSERT INTO bureautique(fournisseur, leaser, achat, materiel, noir, couleur, cout_noir, cout_couleur, volume_noir, volume_couleur, supp_noir, supp_couleur, amelioration, orientation ) VALUES (:fournisseur, :leaser, :achat, :materiel, :noir, :couleur, :cout_noir, :cout_couleur, :volume_noir, :volume_couleur, :supp_noir, :supp_couleur, :amelioration, :orientation)");
        
        $req->bindValue(":fournisseur", $fournisseur, PDO::PARAM_STR);
        $req->bindValue(":leaser", $leaser, PDO::PARAM_STR);
        $req->bindValue(":achat", $achat, PDO::PARAM_STR);
        $req->bindValue(":materiel", $materiel, PDO::PARAM_STR);
        $req->bindValue(":noir", $noir, PDO::PARAM_STR);
        $req->bindValue(":couleur", $couleur, PDO::PARAM_STR);
        $req->bindValue(":cout_noir", $cout_noir, PDO::PARAM_STR);
        $req->bindValue(":cout_couleur", $cout_couleur, PDO::PARAM_STR);
        $req->bindValue(":volume_noir", $volume_noir, PDO::PARAM_STR);
        $req->bindValue(":volume_couleur", $volume_couleur, PDO::PARAM_STR);
        $req->bindValue(":supp_noir", $supp_noir, PDO::PARAM_STR);
        $req->bindValue(":supp_couleur", $supp_couleur, PDO::PARAM_STR);
        $req->bindValue(":amelioration", $amelioration, PDO::PARAM_STR);
        $req->bindValue(":orientation", $orientation, PDO::PARAM_STR);
        $req->execute();
        
        return $req->fetch();
    }

    function addSolution($doc_classe, $doc_archive, $doc_ordi, $collab_absent, $proc_valid, $vol_impression, $refacturer, $doc_conf, $doc_compta, $vol_coul_imp, $doc_papier, $doc_app, $scanner, $fonct_scanner){
    
        global $bdd;
        
        $req = $bdd->prepare("INSERT INTO solution(doc_classe, doc_archive, doc_ordi, collab_absent, proc_valid, vol_impression, refacturer, doc_conf, doc_compta, vol_coul_imp, doc_papier, doc_app, scanner, fonct_scanner) VALUES(:doc_classe, :doc_archive, :doc_ordi, :collab_absent, :proc_valid, :vol_impression, :refacturer, :doc_conf, :doc_compta, :vol_coul_imp, :doc_papier, :doc_app, :scanner, :fonct_scanner)");
        
        $req->bindValue(":doc_classe", $doc_classe, PDO::PARAM_STR);
        $req->bindValue(":doc_archive", $doc_archive, PDO::PARAM_STR);
        $req->bindValue(":doc_ordi", $doc_ordi, PDO::PARAM_STR);
        $req->bindValue(":collab_absent", $collab_absent, PDO::PARAM_STR);
        $req->bindValue(":proc_valid", $proc_valid, PDO::PARAM_STR);
        $req->bindValue(":vol_impression", $vol_impression, PDO::PARAM_STR);
        $req->bindValue(":refacturer", $refacturer, PDO::PARAM_STR);
        $req->bindValue(":doc_conf", $doc_conf, PDO::PARAM_STR);
        $req->bindValue(":doc_compta", $doc_compta, PDO::PARAM_STR);
        $req->bindValue(":vol_coul_imp", $vol_coul_imp, PDO::PARAM_STR);
        $req->bindValue(":doc_papier", $doc_papier, PDO::PARAM_STR);
        $req->bindValue(":doc_app", $doc_app, PDO::PARAM_STR);
        $req->bindValue(":scanner", $scanner, PDO::PARAM_STR);
        $req->bindValue(":fonct_scanner", $fonct_scanner, PDO::PARAM_STR);
        $req->execute();
        
        return $req->fetch();
    }
    
    