<div class="container white_body border_consult">

<?php

    foreach($req0 as $k => $v){ ?>
        <div class="row1">
        <div class="info_comm width-log">
            <div class="info_comm_left col-xs-6 col-md-6">
            </div>
            <div class="content_comm">
                <p class="title_comm">Informations du commercial</p>
                <p class="content_comm2"><b>Nom: </b><?=$v['nom'].' '.$v['prenom'];?><br>
                <b>Date de contact: </b><?=$v['date_contact'];?><br>
                <b>Preneur de rendez-vous: </b><?=$v['prise_rdv'];?><br>
                <b>Date de rendez-vous: </b><?=$v['date_rdv'];?></p>
            </div>
        </div>
        </div>
 <?php   }

    foreach ($req1 as $k => $v) { ?>
    <div class="row1">
        <div class="info_client width-log2">

            <div class="content_client col-xs-6 col-md-6">
                <p class="title_client center">Informations du client</p>
                <p class="content_client2"><b>Raison sociale: </b><?=$v['raison'];?><br>
                <b>Nom client: </b><?=$v['nom_c'];?><br>
                <b>Niveau intérêt: </b><?=$v['interet'];?><br>
                <b>Fonction: </b><?=$v['fonction'];?><br>
                <b>Adresse: </b><?=$v['adresse'];?><br>
                <b>CP: </b><?=$v['cp'];?><br>
                <b>Ville: </b><?=$v['ville'];?><br>
                <b>Tel: </b><?=$v['tel'];?><br>
                <b>Fax: </b><?=$v['fax'];?><br>
                <b>Email: </b><?=$v['mail_c'];?><br>
                <b>Secteur activité: </b><?=$v['secteur_activite'];?><br>
                <b>Nombre de sites: </b><?=$v['nb_site'];?><br>
                <b>Nombre de salariés: </b><?=$v['nb_salarie'];?></p><br>
            </div>
            <div class="info_client_right col-xs-6 col-md-6">
            </div>
        </div>
    </div>
            <br>
        <div class="row1">
            <div class="cycle_decision width-log2">
                <div class="info_cycle_left col-xs-6 col-md-6">
                </div>
                <div class="content_comm">
                    <p class="title_comm center">Cycle de décision</p>
                    <p class="content_comm2"><b>Prescripteur: </b><?=$v['prescripteur'];?><br>
                    <b>Decideur: </b><?=$v['decideur'];?><br>
                    <b>Signataire: </b><?=$v['signataire'];?><br>
                    <b>Date du projet: </b><?=$v['date_projet'];?></p> <br>
                </div>
            </div>
        </div>
    <?php    } ?>
        <div class="contrat">
    <?php
    foreach($req2 as $k => $v){ ?>
        <div class="bureautique_container">
            <p class="title_bureautique">Bureautique</p>
            <b>Fournisseur: </b><?=$v['fournisseur'];?><br><br>
            <b>Leaser: </b><?=$v['leaser'];?><br><br>

    <?php
        if($v['achat'] == 1){ ?>
            <h4>Contrat d'achat:</h4>
            <b>Matériel et accessoires: </b><?=$v['materiel'];?><br><br>
            <b>Prix: </b><?=$v['prix_b'];?> €<br><br>
            <b>Volume Copies Noires: </b><?=$v['noir'];?> €<br><br>
            <b>Volume Copies couleurs: </b><?=$v['couleur'];?> € <br><br>
            <b>Coût Copies noires: </b><?=$v['cout_noir'];?> € (HT)<br><br>
            <b>Coût Copies couleurs: </b><?=$v['cout_couleur'];?> € (HT)<br><br>
            <b>Volume moyen copies noires: </b><?=$v['volume_noir'];?> €<br><br>
            <b>Supplément Copies noires: </b><?=$v['supp_noir'];?> € (HT)<br><br>
            <b>Volume moyen copies couleurs: </b><?=$v['volume_couleur'];?> €<br><br>
            <b>Supplément copies couleurs: </b><?=$v['supp_couleur'];?> € (HT)<br><br>
            <b>Amélioration souhaîtée: </b><?=$v['amelioration'];?><br><br>
            <b>Orientation / Proposition: </b><?=$v['orientation'];?><br><br>
    <?php    }
        else if($v['achat'] == 2){ ?>
            <h4>Contrat de location:</h4>
            <b>Matériel et accessoires: </b><?=$v['materiel'];?><br><br>
            <b>Loyer: </b><?=$v['prix_b'];?> € (HT)<br><br>
            <b>Date début du contrat: </b><?=$v['date_deb'];?><br><br>

    <?php
            if($v['prelevement'] == 1){ ?>
                
                <b>Prélèvement: </b>Mensuel
     <?php       }
            else if($v['prelevement'] == 2){ ?>
                
                <b>Prélèvement: </b>Trimestriel
      <?php      } ?>
            <b>Durée du contrat: </b><?=$v['duree_contrat'];?><br><br>
            <b>Volume Copies Noires: </b><?=$v['noir'];?> €<br><br>
            <b>Volume Copies couleurs: </b><?=$v['couleur'];?> € <br><br>
            <b>Coût Copies noires: </b><?=$v['cout_noir'];?> € (HT)<br><br>
            <b>Coût Copies couleurs: </b><?=$v['cout_couleur'];?> € (HT)<br><br>
            <b>Volume moyen copies noires: </b><?=$v['volume_noir'];?> €<br><br>
            <b>Supplément Copies noires: </b><?=$v['supp_couleur'];?> € (HT)<br><br>
            <b>Volume moyen copies couleurs: </b><?=$v['volume_couleur'];?> €<br><br>
            <b>Supplément copies couleurs: </b><?=$v['supp_couleur'];?> € (HT)<br><br>
            <b>Amélioration souhaîtée: </b><?=$v['amelioration'];?><br><br>
            <b>Orientation / Proposition: </b><?=$v['orientation'];?><br>
        </div><br>

     <?php   }
        
    }

    foreach($req3 as $k => $v){ ?>

        <h2>Informatique:</h2>
        <b>Nom du responsable: </b><?=$v['nom_resp'];?><br><br>
        <b>Coût du contrat: </b><?=$v['cout_contrat'];?><br><br>
        <b>Echéance du contrat: </b><?=$v['echeance'];?><br><br>
        <b>Matériel actuel: </b><?=$v['materiel_actuel'];?>
        <b>Matériel proposé: </b><?=$v['materiel_propose'];?>
        <b>Poste de travail fixe (Quantité): </b><?=$v['poste_travail'];?><br><br>
        <b>Ordinateur portable (Quantité): </b><?=$v['pc_portable'];?><br><br>
        <b>Serveur (Quantité): </b><?=$v['serveur'];?><br><br>
        <b>NAS (Quantité): </b><?=$v['nas'];?><br><br>
        <b>Réseau (Quantité): </b><?=$v['reseau'];?><br><br>
        <b>Sauvegarde : </b><?=$v['sauvegarde'];?><br><br>
        <b>Logiciels actuels: </b><?=$v['logiciel_actuel'];?>
        <b>Logiciels proposés: </b><?=$v['logiciel_propose'];?><br><br>
        <b>Note: </b><?=$v['note_i'];?><br><br>
        <b>Travaux (câblage): </b><?=$v['travaux'];?><br><br>
        <b>Intervention (migration): </b><?=$v['intervention'];?><br><br>
        <b>Maintenance : </b><?=$v['maintenance'];?><br><br>
        <b>Avez-vous un dispositif de sauvegarde ? </b><?=$v['dispositif'];?><br><br>
        <b>Que se passe-t-il si votre serveur tombe en panne ? </b><?=$v['panne_serveur'];?><br><br>
        <b>Y a-t-il des documents vitaux à l'entreprise ? </b><?=$v['doc_vital'];?><br><br>
     <?php
    }
    
    foreach($req4 as $k => $v){ ?>
        <div class="solution_container">
            <p class="title_solution">Solution</p>

            <h3>GED (Organisation, distribution, stockage des docks electroniques):</h3><br>

            <b>Comment les dossiers (clients/fournisseurs, projets...) et leurs documents (courriers, factures...) sont-ils classés et mis à disposition dans votre organisation ? </b><br><?=$v['doc_classe'];?><br><br>
            <b>Combien de temps vous faut-il pour trouver un document dans vos archives? </b><br><?=$v['doc_archive'];?><br><br>
            <b>Combien de temps vous faut-il pour trouver un document dans votre ordinateur? </b><br><?=$v['doc_ordi'];?><br><br>
            <b>Comment faites vous quand vous aurez besoin d'un document qu'un collaborateur possède mais qui est absent ? </b><br><?=$v['collab_absent'];?><br><br>
            <b>Quels sont chez vous les procédures nécessitant des validations (autorisation de dépenses, note de frais, etc..) ?</b><br><?=$v['proc_valid'];?><br><br>
            <b>Quels sont chez vous les procédures nécessitant des validations (autorisation de dépenses, note de frais, etc..) ?</b><br><?=$v['proc_valid'];?><br><br>

            <h3>Suivi des impressions (comptabilisations, quotas, refacturation):</h3><br>

            <b>Connaissez-vous précisément les volumes d'impression et de copie réalisés par services ?</b><br><?=$v['vol_impression'];?><br><br>
            <b>Souhaitez-vous refacturer des impressions ou des copies ?</b><br><?=$v['refacturer'];?><br><br>
            <b>Des documents confidentiels sont-ils imprimés chez vous ?</b><br><?=$v['doc_conf'];?><br><br>
            <b>Avez-vous comptabilisé les documents imprimés chez vous ?</b><br><?=$v['doc_compta'];?><br><br>
            <b>Souhaitez-vous maîtriser les volumes couleur imprimés ?</b><br><?=$v['vol_coul_imp'];?><br><br>

            <h3>Modifications de PDFs et association de plusieurs types de documents:</h3><br>

            <b>Avez-vous besoin de retravailler des documents papier ?</b><br><?=$v['doc_papier'];?><br><br>
            <b>Créez-vous des dossiers papier provenant de plusieurs  applications différentes ?</b><br><?=$v['doc_app'];?><br><br>
            <b>Que pensez-vous de votre scanner d'aujourd'hui ?</b><br><?=$v['scanner'];?><br><br>
            <b>Avez-vous des besoins d'autres fonctionnalités concerant le scanner ?</b><br><?=$v['fonct_scanner'];?><br><br>
        </div>
   <?php }
    
    foreach($req5 as $k => $v){ ?>
        <h2>Téléphonie:</h2><br>
        <b>Fournisseur: </b><?=$v['fournisseur_t'];?><br><br>
        <b>Leaser: </b><?=$v['leaser_t'];?><br><br>
        
     <?php   if($v['achat_t'] == 1){ ?>
            <h4>Contrat d'achat:</h4>
            <b>Matériel et accessoires: </b><?=$v['materiel_t'];?><br><br>
            <b>Prix: </b><?=$v['prix_t'];?> €(HT)<br><br>
            <b>Numéro de la ligne: </b><?=$v['num_ligne'];?> <br><br>
            <b>Nombre de postes: </b><?=$v['nb_poste'];?> <br><br>
            <b>Nombre de RJ45: </b><?=$v['nb_rj45'];?> <br><br>
            <h5>Facture: </h5>
            <b>Description: </b><?=$v['description'];?> <br><br>
     <?php   }
        else if($v['achat_t'] == 2){ ?>
            <h4>Contrat de location:</h4>
            <b>Loyer: </b><?=$v['prix_t'];?> €(HT)<br><br>
            <b>Date de début: </b><?=$v['date_deb_t'];?><br><br>
            <b>Durée du contrat: </b><?=$v['duree_contrat'];?><br><br>
    <?php
            if($v['prelevement_t'] == 1){ ?>
                <b>Prélèvement: </b>Mensuel
    <?php        }
            else if($v['prelevement_t'] == 2){ ?>
                 <b>Prélèvement: </b>Trimestriel
    <?php        } ?>
            <b>Matériel et accessoires: </b><?=$v['materiel_t'];?><br><br>
            <b>Numéro de la ligne: </b><?=$v['num_ligne'];?> <br><br>
            <b>Nombre de postes: </b><?=$v['nb_poste'];?> <br><br>
            <b>Nombre de RJ45: </b><?=$v['nb_rj45'];?> <br><br>
            <h5>Facture: </h5>
            <b>Description: </b><?=$v['description'];?> <br><br>
            
     <?php   }
    }

?>
        </div>
</div>
</div>