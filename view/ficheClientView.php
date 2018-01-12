<div class="container">

    <!---- COMMERCIAL ---->
    <div class="row firstblock">
        <form class="form-inline">
            <h1>Commercial</h1>
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom"> </div>
            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text" class="form-control" name="prenom"> </div>
            <div class="form-group">
                <label for="date">Date de contact:</label>
                <input type="date" class="form-control" name="date"> </div>
            <div class="form-group">
                <label for="rdv">RDV pris par:</label>
                <input type="text" class="form-control" name="rdv"> </div><br><br>
            <div class="form-group">
                <label for="date_rdv">Date de RDV:</label>
                <input type="date" class="form-control" name="date_rdv"> </div>
            <hr class="custom">
            <br><br><br>
            <h1>Raison Sociale</h1>
            <div class="form-group">
                <label for="nom_resp">Nom du responsable</label>
                <input type="text" class="form-control" name="nom_resp"> </div>
            <div class="form-group">
                <label for="fonction">Fonction</label>
                <input type="text" class="form-control" name="fonction"> </div>
            <div class="form-group">
                <label for="adresse">Adresse</label>
                <input type="text" class="form-control" name="adresse"> </div>
            <div class="form-group">
                <label for="cp">CP</label>
                <input type="text" class="form-control" name="cp"> </div><br><br>
            <div class="form-group">
                <label for="ville">Ville</label>
                <input type="text" class="form-control" name="ville"> </div>
            <div class="form-group">
                <label for="tel">Tel</label>
                <input type="text" class="form-control" name="tel"> </div>
            <div class="form-group">
                <label for="fax">Fax</label>
                <input type="text" class="form-control" name="fax"> </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email"> </div><br><br>
            <div class="form-group">
                <label for="secteur">Secteur d'activité</label>
                <input type="text" class="form-control" name="secteur"> </div>
            <div class="form-group">
                <label for="nb_site">Nb de site</label>
                <input type="text" class="form-control" name="nb_site"> </div>
            <h1>Cycle de décision</h1>
            <div class="form-group">
                <label for="prescripteur">Préscripteur</label>
                <input type="text" class="form-control" name="prescripteur"> </div>
            <div class="form-group">
                <label for="decideur">Décideur</label>
                <input type="text" class="form-control" name="decideur"> </div>
            <div class="form-group">
                <label for="signataire">Signataire</label>
                <input type="text" class="form-control" name="signataire"> </div>
            <div class="form-group">
                <label for="date_projet">Date du projet</label>
                <input type="date" class="form-control" name="date_projet"> </div>
            <br><br><br>
            <hr class="custom">
            <h1>Centre d'intérêt</h1>
            <div class="form-group">
                <select name="cInteret">

                    <option value="1">Bureautique</option>
                    <option value="2">Informatique</option>
                    <option value="3">Solution</option>
                    <option value="4">Téléphonie</option>
                </select>
            </div>


            <div class="groupe-num-1">
                <h3>Bureautique</h3>
                <br>
                <div class="form-group">
                    <label for="fournisseur">Fournisseur</label>
                    <input type="text" class="form-control" name="fournisseur"> </div> <br>

                <label>Achat</label>
                <input type="checkbox" class="form-control ex-enable-ss1" name="achat" value="1">
                <div class="form-group groupe-num-ss1">
                    <h3>Pour achat:</h3>
                    <label for="achat">Prix</label>
                    <input type="text" class="form-control" name="achat">  <br>
                    
                <div class="form-group">
                    <label for="materiel_achat">Matériel + accessoire:</label>
                    <textarea class="form-control" name="materiel_achat"></textarea> </div><br>
                </div>
                
                <label>Location</label>
                <input type="checkbox" class="form-control ex-enable-ss2" name="location" value="2">
                <div class="groupe-num-ss2">
                    <div class="form-group">
                        <h3>Pour location:</h3>
                        <label for="date_deb">Démarrage du contrat</label>
                        <input type="date" class="form-control" name="date_deb"> </div>
                    <div class="form-group">
                        <label for="loyer">Loyer(HT)</label>
                        <input type="text" class="form-control" name="loyer"> </div> <br>
                    <div class="form-group">
                        <label for="prelevement">Prélèvement: </label>
                        <label for="mois">Mois</label>
                        <input type="checkbox" class="form-control" name="prelevement" value="1">
                        <label for="trimestre">Trimestrielle</label>
                        <input type="checkbox" class="form-control" name="prelevement" value="2"> </div> <br>
                    <div class="form-group">
                        <label for="duree">Durée du contrat:</label>
                        <input type="text" class="form-control" name="duree"> </div> <br>
                        
                <div class="form-group">
                    <label for="materiel_location">Matériel + accessoire:</label>
                    <textarea class="form-control" name="materiel_location"></textarea> </div><br>
                    <h2>--FIN LOCATION--</h2><br>

                </div>
                <br>



                <h3>Entretient</h3>
                <h4>Volume copie engagée:</h4>
                <div class="form-group">
                    <label for="noir">Noire:</label>
                    <input type="text" class="form-control" name="noir" placeholder="Par Trimestre"> </div>
                <div class="form-group">
                    <label for="couleur">Couleur:</label>
                    <input type="text" class="form-control" name="couleur" placeholder="Par Trimestre"> </div><br><br>
                <div class="form-group">
                    <label for="cout_noir">Coût copie noire:</label>
                    <input type="text" class="form-control" name="cout_noir" placeholder="€ (HT)"> € HT </div><br><br>
                <div class="form-group">
                    <label for="vol_noir">Volume moyen copie noire (par trimestre):</label>
                    <input type="text" class="form-control" name="vol_noir" placeholder="Par Trimestre"> -- </div>
                <div class="form-group">
                    <label for="supp_noir">Supplément copie noire:</label>
                    <input type="text" class="form-control" name="supp_noir" placeholder="€ (HT)"> € HT </div><br><br>
                <div class="form-group">
                    <label for="cout_couleur">Coût copie couleur:</label>
                    <input type="text" class="form-control" name="cout_couleur" placeholder="€ (HT)"> € HT -- </div><br><br>
                <div class="form-group">
                    <label for="vol_couleur">Volume moyen copie couleur (par trimestre):</label>
                    <input type="text" class="form-control" name="vol_couleur" placeholder="Par Trimestre"> -- </div>
                <div class="form-group">
                    <label for="supp_couleur">Supplément copie couleur:</label>
                    <input type="text" class="form-control" name="supp_couleur" placeholder="€ (HT)"> € HT </div><br><br>

                <div class="form-group">
                    <label for="amelioration">Amélioration souhaitée:</label>
                    <textarea class="form-control" name="amelioration"></textarea></div><br><br>

                <div class="form-group">
                    <label for="orientation">Orientation / Proposition (qu'est-ce qui ferait que le client travaille pour nous):</label>
                    <textarea class="form-control" name="orientation"></textarea></div><br><br>
            </div>
            <hr class="custom">
            <h3>Niveau d'intérêt:</h3>
            <b><h3><div class="form-group">
                <label for="interet">*</label>
                <input type="checkbox" name="interet" value="1"></div><br>
            <div class="form-group">
                <label for="interet">**</label>
                <input type="checkbox" name="interet" value="2"></div><br>
            <div class="form-group">
                <label for="interet">***</label>
                <input type="checkbox" name="interet" value="3"></div><br>
            </h3></b><br><br>

            <button type="submit" class="btn btn-success" name="submit">Valider</button>
        </form>
    </div>



</div>