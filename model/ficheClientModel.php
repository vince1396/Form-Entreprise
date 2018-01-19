<?php

    function displayCommercial($id_u){
        global $bdd;
        
        $req = $bdd->prepare("SELECT nom, prenom FROM user WHERE id_u =".$id_u);
        $req->execute();
        
        return $req->fetch();
    }
    
    function addInfoComm($date_contact, $date_rdv, $prise_rdv, $id_u){
        
        global $bdd;
        
        $req = $bdd->prepare("INSERT INTO fiche(date_contact, date_rdv, prise_rdv, id_u) VALUES (:date_contact, :date_rdv, :prise_rdv, :id_u)");
        
        $req->bindValue(":date_contact", $date_contact, PDO::PARAM_STR);
        $req->bindValue(":date_rdv", $date_rdv, PDO::PARAM_STR);
        $req->bindValue(":prise_rdv", $prise_rdv, PDO::PARAM_STR);
        $req->bindValue(":id_u", $id_u, PDO::PARAM_INT);
        $req->execute();
        
        return $req->fetch();
    }

    function addInfoClient($prospect, $nom_c, $fonction, $adresse, $cp, $ville, $tel, $fax, $mail_c, $secteur_activite, $nb_site, $nb_salarie, $prescripteur, $decideur, $signataire, $id_f){
        
        global $bdd;
        $req = $bdd->prepare("INSERT INTO client(prospect, nom_c, fonction, adresse, cp, ville, tel, fax, mail_c, secteur_activite, nb_site, nb_salarie,prescripteur, decideur, signataire, id_f) VALUES (:prospect, :nom_c, :fonction, :adresse, :cp, :ville, :tel, :fax, :mail_c, :secteur_activite, :nb_site, :nb_salarie,:prescripteur, :decideur, :signataire, :id_f)");
            
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
        $req->bindValue(":prescripteur", $prescripteur, PDO::PARAM_STR);
        $req->bindValue(":decideur", $decideur, PDO::PARAM_STR);
        $req->bindValue(":signataire", $signataire, PDO::PARAM_STR);
        $req->bindValue(":id_f", $id_f, PDO::PARAM_INT);
        
        $req->execute();
        
        return $req->fetch();
    }

    function addProjet($date_projet, $id_c){
        
        global $bdd;
        
        $req = $bdd->prepare("INSERT INTO projet(date_projet, id_c) VALUES (:date_projet, :id_c)");
        $req->bindValue(":date_projet", $date_projet, PDO::PARAM_STR);
        $req->bindValue(":id_c", $id_c, PDO::PARAM_INT);
        $req->execute();
        
        return $req->fetch();
    }

    function addBureautiqueLocation($id_b, $fournisseur, $leaser, $date_deb, $achat, $prix_b, $prelevement, $duree_contrat, $materiel, $noir, $couleur, $cout_noir, $cout_couleur, $volume_noir, $volume_couleur, $supp_noir, $supp_couleur, $amelioration, $orientation){
        
        global $bdd;
        
        $req = $bdd->prepare("INSERT INTO bureautique(id_b, fournisseur, leaser, date_deb, achat, prix_b, prelevement, duree_contrat, materiel, noir, couleur, cout_noir, cout_couleur, volume_noir, volume_couleur, supp_noir, supp_couleur, amelioration, orientation) VALUES (:id_b, :fournisseur, :leaser, :date_deb, :achat, :prix_b, :prelevement, :duree_contrat, :materiel, :noir, :couleur, :cout_noir, :cout_couleur, :volume_noir, :volume_couleur, :supp_noir, :supp_couleur, :amelioration, :orientation)");
        
        $req->bindValue(":id_b", $id_b, PDO::PARAM_INT);
        $req->bindValue(":fournisseur", $fournisseur, PDO::PARAM_STR);
        $req->bindValue(":leaser", $leaser, PDO::PARAM_STR);
        $req->bindValue(":date_deb", $date_deb, PDO::PARAM_STR);
        $req->bindValue(":achat", $achat, PDO::PARAM_INT);
        $req->bindValue(":prix_b", $prix_b, PDO::PARAM_STR);
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

    function addBureautiqueAchat($id_b, $fournisseur, $leaser, $achat, $prix_b, $materiel, $noir, $couleur, $cout_noir, $cout_couleur, $volume_noir, $volume_couleur, $supp_noir, $supp_couleur, $amelioration, $orientation){
        
        global $bdd;
        
        $req = $bdd->prepare("INSERT INTO bureautique(id_b, fournisseur, leaser, achat, prix_b, materiel, noir, couleur, cout_noir, cout_couleur, volume_noir, volume_couleur, supp_noir, supp_couleur, amelioration, orientation) VALUES (:id_b, :fournisseur, :leaser, :achat, :prix_b, :materiel, :noir, :couleur, :cout_noir, :cout_couleur, :volume_noir, :volume_couleur, :supp_noir, :supp_couleur, :amelioration, :orientation)");
        
        $req->bindValue(":id_b", $id_b, PDO::PARAM_INT);
        $req->bindValue(":fournisseur", $fournisseur, PDO::PARAM_STR);
        $req->bindValue(":leaser", $leaser, PDO::PARAM_STR);
        $req->bindValue(":achat", $achat, PDO::PARAM_STR);
        $req->bindValue(":prix_b", $prix_b, PDO::PARAM_STR);
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

    function addInformatique($id_i, $nom_resp, $materiel_actuel, $materiel_propose, $poste_travail, $pc_portable, $serveur, $nas, $reseau, $sauvegarde, $logiciel_actuel, $logiciel_propose, $note_i, $travaux, $intervenion, $maintenance, $dispositif, $panne_serveur, $doc_vital, $cout_contrat, $echeance){
        
        global $bdd;
        
        $req = $bdd->prepare("INSERT INTO informatique(id_i, nom_resp, materiel_actuel, materiel_propose, poste_travail, pc_portable, serveur, nas, reseau, sauvegarde, logiciel_actuel, logiciel_propose, note_i, travaux, intervention, maintenance, dispositif, panne_serveur, doc_vital, cout_contrat, echeance) VALUES (:id_i, :nom_resp, :materiel_actuel, :materiel_propose, :poste_travail, :pc_portable, :serveur, :nas, :reseau, :sauvegarde, :logiciel_actuel, :logiciel_propose, :note_i, :travaux, :intervention, :maintenance, :dispositif, :panne_serveur, :doc_vital, :cout_contrat, :echeance)");
        
        $req->bindValue(":id_i", $id_i, PDO::PARAM_INT);
        $req->bindValue(":nom_resp", $nom_resp, PDO::PARAM_STR);
        $req->bindValue(":materiel_actuel", $materiel_actuel, PDO::PARAM_STR);
        $req->bindValue(":materiel_propose", $materiel_propose, PDO::PARAM_STR);
        $req->bindValue(":poste_travail", $poste_travail, PDO::PARAM_STR);
        $req->bindValue(":pc_portable", $pc_portable, PDO::PARAM_STR);
        $req->bindValue(":serveur", $serveur, PDO::PARAM_STR);
        $req->bindValue(":nas", $nas, PDO::PARAM_STR);
        $req->bindValue(":reseau", $reseau, PDO::PARAM_STR);
        $req->bindValue(":sauvegarde", $sauvegarde, PDO::PARAM_STR);
        $req->bindValue(":logiciel_actuel", $logiciel_actuel, PDO::PARAM_STR);
        $req->bindValue(":logiciel_propose", $logiciel_propose, PDO::PARAM_STR);
        $req->bindValue(":note_i", $note_i, PDO::PARAM_STR);
        $req->bindValue(":travaux", $travaux, PDO::PARAM_STR);
        $req->bindValue(":intervention", $intervention, PDO::PARAM_STR);
        $req->bindValue(":maintenance", $maintenance, PDO::PARAM_STR);
        $req->bindValue(":dispositif", $dispositif, PDO::PARAM_STR);
        $req->bindValue(":panne_serveur", $panne_serveur, PDO::PARAM_STR);
        $req->bindValue(":doc_vital", $doc_vital, PDO::PARAM_STR);
        $req->bindValue(":cout_contrat", $cout_contrat, PDO::PARAM_STR);
        $req->bindValue(":echeance", $echeance, PDO::PARAM_STR);
        $req->execute();
        
        return $req->fetch();
    }

    function addSolution($id_s, $doc_classe, $doc_archive, $doc_ordi, $collab_absent, $proc_valid, $vol_impression, $refacturer, $doc_conf, $doc_compta, $vol_coul_imp, $doc_papier, $doc_app, $scanner, $fonct_scanner){
    
        global $bdd;
        
        $req = $bdd->prepare("INSERT INTO solution(id_s, doc_classe, doc_archive, doc_ordi, collab_absent, proc_valid, vol_impression, refacturer, doc_conf, doc_compta, vol_coul_imp, doc_papier, doc_app, scanner, fonct_scanner) VALUES(:id_s, :doc_classe, :doc_archive, :doc_ordi, :collab_absent, :proc_valid, :vol_impression, :refacturer, :doc_conf, :doc_compta, :vol_coul_imp, :doc_papier, :doc_app, :scanner, :fonct_scanner)");
        
        $req->bindValue(":id_s", $id_s, PDO::PARAM_INT);
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

    function addTelephonieLocation($id_t, $fournisseur_t, $leaser_t, $achat_t, $date_deb_t, $prix_t, $prelevement_t, $duree_contrat, $materiel_t, $num_ligne, $nb_poste, $nb_rj45){
        
        global $bdd;
        
        $req = $bdd->prepare("INSERT INTO telephonie(id_t, fournisseur_t, leaser_t, date_deb_t, achat_t, prix_t, prelevement_t, duree_contrat, materiel_t, num_ligne, nb_poste, nb_rj45) VALUES (:id_t, :fournisseur_t, :leaser_t, :date_deb_t, :achat_t, :prix_t, :prelevement_t, :duree_contrat, :materiel_t, :num_ligne, :nb_poste, :nb_rj45)");
        
        $req->bindValue(":id_t", $id_t, PDO::PARAM_INT);
        $req->bindValue(":fournisseur_t", $fournisseur_t, PDO::PARAM_STR);
        $req->bindValue(":leaser_t", $leaser_t, PDO::PARAM_STR);
        $req->bindValue(":date_deb_t", $date_deb_t, PDO::PARAM_STR);
        $req->bindValue(":achat_t", $achat_t, PDO::PARAM_INT);
        $req->bindValue(":prix_t", $prix_t, PDO::PARAM_STR);
        $req->bindValue(":prelevement_t", $prelevement_t, PDO::PARAM_STR);
        $req->bindValue(":duree_contrat", $duree_contrat, PDO::PARAM_STR);
        $req->bindValue(":materiel_t", $materiel_t, PDO::PARAM_STR);
        $req->bindValue(":num_ligne", $num_ligne, PDO::PARAM_STR);
        $req->bindValue(":nb_poste", $nb_poste, PDO::PARAM_INT);
        $req->bindValue(":nb_rj45", $nb_rj45, PDO::PARAM_INT);
        $req->execute();
        
        return $req->fetch();
    }

    function addTelephonieAchat($id_t, $fournisseur_t, $leaser_t, $achat_t, $prix_t, $materiel_t, $adresse_t, $num_ligne, $nb_poste, $nb_rj45){
        
        global $bdd;
        
        $req = $bdd->prepare("INSERT INTO telephonie(id_t, fournisseur_t, leaser_t, achat_t, prix_t, materiel_t, num_ligne, nb_poste, nb_rj45) VALUES (:id_t, :fournisseur_t, :leaser_t, :achat_t, :prix_t, :materiel_t, :num_ligne, :nb_poste, :nb_rj45)");
        
        $req->bindValue(":id_t", $id_t, PDO::PARAM_INT);
        $req->bindValue(":fournisseur_t", $fournisseur_t, PDO::PARAM_STR);
        $req->bindValue(":leaser_t", $leaser_t, PDO::PARAM_STR);
        $req->bindValue(":achat_t", $achat_t, PDO::PARAM_INT);
        $req->bindValue(":prix_t", $prix_t, PDO::PARAM_STR);
        $req->bindValue(":materiel_t", $materiel_t, PDO::PARAM_STR);
        $req->bindValue(":num_ligne", $num_ligne, PDO::PARAM_STR);
        $req->bindValue(":nb_poste", $num_ligne, PDO::PARAM_INT);
        $req->bindValue(":nb_rj45", $nb_rj45, PDO::PARAM_INT);
        $req->execute();
        
        return $req->fetch();
    }

    function addFacture($description, $id_t){
        
        global $bdd;
        
        $req = $bdd->prepare("INSERT INTO facture(description, id_t) VALUES (:description, :id_t)");
        
        $req->bindValue(":description", $descripton, PDO::PARAM_STR);
        $req->bindValue(":id_t", $id_t, PDO::PARAM_INT);
        $req->execute();
        
        return $req->fetch();
    }
    
    