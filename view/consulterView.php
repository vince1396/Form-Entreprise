<div class="container white_body">
<?php
    
    foreach($req1 as $k => $v){
        echo '<h2>Infos du client:</h2>';
        echo '<b>Nom client: </b>'.$v['nom_c'].'<br><br>';
        echo '<b>Niveau intérêt: </b>'.$v['interet'].'<br><br>';
        echo '<b>Date contact: </b>'.$v['date_contact'].'<br><br>';
        echo '<b>Preneur de rdv: </b>'.$v['prise_rdv'].'<br><br>';
        echo '<b>Date de rdv: </b>'.$v['date_rdv'].'<br><br>';
        echo '<b>Fonction: </b>'.$v['fonction'].'<br><br>';
        echo '<b>Adresse: </b>'.$v['adresse'].'<br><br>';
        echo '<b>CP: </b>'.$v['cp'].'<br><br>';
        echo '<b>Ville: </b>'.$v['ville'].'<br><br>';
        echo '<b>Tel: </b>'.$v['tel'].'<br><br>';
        echo '<b>Fax: </b>'.$v['fax'].'<br><br>';
        echo '<b>Email: </b>'.$v['mail_c'].'<br><br>';
        echo '<b>Secteur activité: </b>'.$v['secteur_activite'].'<br><br>';
        echo '<b>Nb Site: </b>'.$v['nb_site'].'<br><br>';
        echo '<b>Nb salarié: </b>'.$v['nb_salarie'].'<br><br>';
        
        echo '<br>';
        
        echo '<h2>Cycle de décision</h2>';
        echo '<b>Prescripteur: </b>'.$v['prescripteur'].'<br><br>';
        echo '<b>Decideur: </b>'.$v['decideur'].'<br><br>';
        echo '<b>Signataire: </b>'.$v['signataire'].'<br><br>';
        echo '<b>Date du projet: </b>'.$v['date_projet'].'<br><br>';
    }
    
    foreach($req2 as $k => $v){
        echo '<h2>Bureautique:</h2>';
        echo '<b>Fournisseur: </b>'.$v['fournisseur'].'<br><br>';
        echo '<b>Leaser: </b>'.$v['leaser'].'<br><br>';
        
        if($v['achat'] == 1){
            echo "<h4>Contrat d'achat:</h4>";
            echo '<b>Matériel et accessoires: </b>'.$v['materiel'].'<br><br>';
            echo '<b>Prix: </b>'.$v['prix_b'].' €<br><br>';
            echo '<b>Volume Copies Noires: </b>'.$v['noir'].' €<br><br>';
            echo '<b>Volume Copies couleurs: </b>'.$v['couleur'].' € <br><br>';
            echo '<b>Coût Copies noires: </b>'.$v['cout_noir'].' € (HT)<br><br>';
            echo '<b>Coût Copies couleurs: </b>'.$v['cout_couleur'].' € (HT)<br><br>';
            echo '<b>Volume moyen copies noires: </b>'.$v['volume_noir'].' €<br><br>';
            echo '<b>Supplément Copies noires: </b>'.$v['supp_couleur'].' € (HT)<br><br>';
            echo '<b>Volume moyen copies couleurs: </b>'.$v['volume_couleur'].' €<br><br>';
            echo '<b>Supplément copies couleurs: </b>'.$v['supp_couleur'].' € (HT)<br><br>';
            echo '<b>Amélioration souhaîtée: </b>'.$v['amelioration'].'<br><br>';
            echo '<b>Orientation / Proposition: </b>'.$v['orientation'].'<br><br>'; 
        }
        else if($v['achat'] == 2){
            echo "<h4>Contrat de location:</h4>";
            echo '<b>Matériel et accessoires: </b>'.$v['materiel'].'<br><br>';
            echo '<b>Loyer: </b>'.$v['prix_b'].' € (HT)<br><br>';
            
            if($v['prelevement'] == 1){
                
                echo '<b>Prélèvement: </b>Mensuel';
            }
            else if($v['prelevement'] == 2){
                
                echo '<b>Prélèvement: </b>Trimestrielle';
            }
            echo '<b>Durée du contrat: </b>'.$v['duree_contrat'].' €<br><br>';
            echo '<b>Volume Copies Noires: </b>'.$v['noir'].' €<br><br>';
            echo '<b>Volume Copies couleurs: </b>'.$v['couleur'].' € <br><br>';
            echo '<b>Coût Copies noires: </b>'.$v['cout_noir'].' € (HT)<br><br>';
            echo '<b>Coût Copies couleurs: </b>'.$v['cout_couleur'].' € (HT)<br><br>';
            echo '<b>Volume moyen copies noires: </b>'.$v['volume_noir'].' €<br><br>';
            echo '<b>Supplément Copies noires: </b>'.$v['supp_couleur'].' € (HT)<br><br>';
            echo '<b>Volume moyen copies couleurs: </b>'.$v['volume_couleur'].' €<br><br>';
            echo '<b>Supplément copies couleurs: </b>'.$v['supp_couleur'].' € (HT)<br><br>';
            echo '<b>Amélioration souhaîtée: </b>'.$v['amelioration'].'<br><br>';
            echo '<b>Orientation / Proposition: </b>'.$v['orientation'].'<br><br>'; 
        }
        
    }
    
    foreach($req3 as $k => $v){
        echo '<h2>Informatique:</h2>';
        echo '<b>Nom du responsable: </b>'.$v['nom_resp'].'<br><br>';
        echo '<b>Coût du contrat: </b>'.$v['cout_contrat'].'<br><br>';
        echo '<b>Echéance du contrat: </b>'.$v['echeance'].'<br><br>';
        echo '<b>Matériel actuel: </b>'.$v['materiel_actuel'].'    ';
        echo '<b>Matériel proposé: </b>'.$v['materiel_propose'].'    ';
        echo '<b>Poste de travail fixe (Quantité): </b>'.$v['poste_travail'].'<br><br>';
        echo '<b>Ordinateur portable (Quantité): </b>'.$v['pc_portable'].'<br><br>';
        echo '<b>Serveur (Quantité): </b>'.$v['serveur'].'<br><br>';
        echo '<b>NAS (Quantité): </b>'.$v['nas'].'<br><br>';
        echo '<b>Réseau (Quantité): </b>'.$v['reseau'].'<br><br>';
        echo '<b>Sauvegarde : </b>'.$v['sauvegarde'].'<br><br>';
        echo '<b>Logiciels actuels: </b>'.$v['logiciel_actuel'].'  ';
        echo '<b>Logiciels proposés: </b>'.$v['logiciel_propose'].'<br><br>';
        echo '<b>Note: </b>'.$v['note_i'].'<br><br>';
        echo '<b>Travaux (câblage): </b>'.$v['travaux'].'<br><br>';
        echo '<b>Intervention (migration): </b>'.$v['intervention'].'<br><br>';
        echo '<b>Maintenance : </b>'.$v['maintenance'].'<br><br>';
        echo '<b>Avez-vous un dispositif de sauvegarde ? </b>'.$v['dispositif'].'<br><br>';
        echo '<b>Que se passe-t-il si votre serveur tombe en panne ? </b>'.$v['panne_serveur'].'<br><br>';
        echo "<b>Y a-t-il des documents vitaux à l'entreprise ? </b>".$v['doc_vital']."<br><br>";
        
    }
    
    foreach($req4 as $k => $v){
        
        echo '<h2>Solution:</h2><br>';
        
        echo '<h3>GED (Organisation, distribution, stockage des docks electroniques:</h3><br>';
        
        echo '<b>Comment les dossiers (clients/fournisseurs, projets...) et leurs documents (courriers, factures...) sont-ils classés et mis à disposition dans votre organisation ? </b><br>'.$v['doc_classe'].'<br><br>';
        echo '<b>Combien de temps vous faut-il pour trouver un document dans vos archives? </b><br>'.$v['doc_archive'].'<br><br>';
        echo '<b>Combien de temps vous faut-il pour trouver un document dans votre ordinateur? </b><br>'.$v['doc_ordi'].'<br><br>';
        echo "<b>Comment faites vous quand vous aurez besoin d'un document qu'un collaborateur possède mais qui est absent ? </b><br>".$v['collab_absent']."<br><br>";
        echo "<b>Quels sont chez vous les procédures nécessitant des validations (autorisation de dépenses, note de frais, etc..) ?</b><br>".$v['proc_valid']."<br><br>";
        echo "<b>Quels sont chez vous les procédures nécessitant des validations (autorisation de dépenses, note de frais, etc..) ?</b><br>".$v['proc_valid']."<br><br>";
        
        echo '<h3>Suivi des impressions (comptabilisations, quotas, refacturation):</h3><br>';
        
        echo "<b>Connaissez-vous précisément les volumes d'impression et de copie réalisés par services ?</b><br>".$v['vol_impression']."<br><br>";
        echo "<b>Souhaitez-vous refacturer des impressions ou des copies ?</b><br>".$v['refacturer']."<br><br>";
        echo "<b>Des documents confidentiels sont-ils imprimés chez vous ?</b><br>".$v['doc_conf']."<br><br>";
        echo "<b>Avez-vous comptabilisé les documents imprimés chez vous ?</b><br>".$v['doc_compta']."<br><br>";
        echo "<b>Souhaitez-vous maîtriser les volumes couleur imprimés ?</b><br>".$v['vol_coul_imp']."<br><br>";
        
        echo '<h3>Modifications de PDFs et association de plusieurs types de documents:</h3><br>';
        
        echo "<b>Avez-vous besoin de retravailler des documents papier ?</b><br>".$v['doc_papier']."<br><br>";
        echo "<b>Créez-vous des dossiers papier provenant de plusieurs  applications différentes ?</b><br>".$v['doc_app']."<br><br>";
        echo "<b>Que pensez-vous de votre scanner d'aujourd'hui ?</b><br>".$v['scanner']."<br><br>";
        echo "<b>Avez-vous des besoins d'autres fonctionnalités concerant le scanner ?</b><br>".$v['fonct_scanner']."<br><br>";
    }
    
    foreach($req5 as $k => $v){
        
    }

?>

</div>