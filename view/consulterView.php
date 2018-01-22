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
        
    }
    
    foreach($req4 as $k => $v){
        
    }
    
    foreach($req5 as $k => $v){
        
    }

?>

</div>