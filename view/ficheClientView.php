<section id="ficheclient">
    <div class="container">
        <!-- -- COMMERCIAL -- -->
        <div class="row firstblock">
            <form class="form-inline" method="post">
                <h1>Commercial</h1>
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" name="nom"> </div>
                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" class="form-control" name="prenom"> </div>
                <div class="form-group">
                    <label for="date">Date de contact:</label>
                    <input type="date" class="form-control" name="date_contact"> </div>
                <div class="form-group">
                    <label for="rdv">RDV pris par:</label>
                    <input type="text" class="form-control" name="prise_rdv"> </div><br><br>
                <div class="form-group">
                    <label for="date_rdv">Date de RDV:</label>
                    <input type="date" class="form-control" name="date_rdv"> </div>
                <hr class="custom">
                <br><br><br>
                <h1>Raison Sociale</h1>
                <div class="form-group">
                    <label for="prospect">Prospect</label>
                    <input type="radio" name="prospect" value="1" checked="checked">
                    <label for="prospect">Client</label>
                    <input type="radio" name="prospect" value="2">
                </div><br>
                <div class="form-group">
                    <label for="nom_c">Nom du responsable</label>
                    <input type="text" class="form-control" name="nom_c"> </div>
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
                    <label for="mail_c">Email</label>
                    <input type="email" class="form-control" name="mail_c"> </div><br><br>
                <div class="form-group">
                    <label for="secteur_activite">Secteur d'activité</label>
                    <input type="text" class="form-control" name="secteur_activite"> </div>
                <div class="form-group">
                    <label for="nb_site">Nb de site</label>
                    <input type="text" class="form-control" name="nb_site"> </div>
                <div class="form-group">
                    <label for="nb_salarie">Nb de salarie</label>
                    <input type="text" class="form-control" name="nb_salarie"> </div>
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
                <div class="form-group" id="select_place">
                    <select name="cInteret" id="cInteret" class="cInteret">
                    <option value="0">-Sélectionnez un centre d'intérêt-</option>
                    <option value="1">Bureautique</option>
                    <option value="2">Informatique</option>
                    <option value="3">Solution</option>
                    <option value="4">Téléphonie</option>
                </select>
                </div>
                <br>
                <div class="form-group">
                    <input type="button" id="btnClone" value="Ajouter un centre d'intérêt" />
                    <input type="button" id="btnDel" value="Enlever un centre d'intérêt" disabled/>
                </div>
                <!----------------- DEBUT BUREAUTIQUE --------------------->

                <div class="groupe-num-1">
                    <h3>Bureautique</h3>
                    <br>
                    <div class="form-group">
                        <label for="fournisseur">Fournisseur</label>
                        <input type="text" class="form-control" name="fournisseur"><label for="leaser"> Leaser</label>
                        <input type="text" class="form-control" name="leaser"> </div> <br>
                        
                    <div class="form-group">
                        <div id="sBuyRent">
                            <label for="achat">Achat/Location:</label>
                            <label>Achat</label><input type="radio" class="form-control" name="achat" value="1" checked="checked">
                            <label>Location</label><input type="radio" class="form-control" name="achat" value="2">
                        </div>
                    </div><br>


                    <div class="groupe-num-ss1">
                        <h3>Pour achat:</h3>
                        <label for="achat_b">Prix</label>
                        <input type="text" class="form-control" name="achat_b"> <br>

                        <div class="form-group">
                            <label for="materiel_achat">Matériel + accessoire:</label>
                            <textarea class="form-control" name="materiel_achat"></textarea> </div><br>
                    </div>



                    <div class="groupe-num-ss2">
                        <div class="form-group">
                            <h3>Pour location:</h3>
                            <label for="date_deb">Démarrage du contrat</label>
                            <input type="date" class="form-control" name="date_deb"> </div>
                        <div class="form-group">
                            <label for="loyer_b">Loyer(HT)</label>
                            <input type="text" class="form-control" name="loyer_b"> </div> <br>
                        <div class="form-group">
                            <label for="prelevement">Prélèvement: </label>
                            <label for="mois">Mois</label>
                            <input type="radio" class="form-control" name="prelevement" value="1" checked="checked">
                            <label for="trimestre">Trimestrielle</label>
                            <input type="radio" class="form-control" name="prelevement" value="2"> </div> <br>
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

                <!----------------- FIN BUREAUTIQUE --------------------->

                <!----------------- INFORMATIQUE --------------------->
                <div class="groupe-num-2">
                    <h3>Informatique</h3>
                    <div class="form-group">
                        <label for="nom_resp">Nom du responsable:</label>
                        <input type="text" class="form-control" name="nom_resp">
                    </div>
                    <div class="form-group">
                        <label for="cout_contrat">Cout contrat:</label>
                        <input type="text" class="form-control" name="cout_contrat" placeholder="€">
                    </div>
                    <div class="form-group">
                        <label for="echeance">Échéance:</label>
                        <input type="text" class="form-control" name="echeance">
                    </div>
                    <div class="form-group">
                        <label for="materiel_actuel">Matériel actuel:</label>
                        <textarea class="form-control" name="materiel_actuel" cols="150" rows="5">
                    </textarea>
                    </div>
                    <div class="form-group">
                        <label for="materiel_propose">Matériel proposé:</label>
                        <textarea class="form-control" name="materiel_propose" cols="150" rows="5">
                    </textarea>
                    </div>
                    <div class="form-group">
                        <label for="poste_travail">Poste de travail:</label>
                        <textarea class="form-control" name="poste_travail" cols="150" rows="5">
                    </textarea>
                    </div>
                    <div class="form-group">
                        <label for="pc_portable">Pc Portable:</label>
                        <textarea class="form-control" name="pc_portable" cols="150" rows="5">
                    </textarea>
                    </div>
                    <div class="form-group">
                        <label for="serveur">Serveur:</label>
                        <textarea class="form-control" name="serveur" cols="150" rows="5">
                    </textarea>
                    </div>
                    <div class="form-group">
                        <label for="nas">NAS:</label>
                        <textarea class="form-control" name="nas" cols="150" rows="5">
                    </textarea>
                    </div>
                    <div class="form-group">
                        <label for="reseau">Réseau:</label>
                        <textarea class="form-control" name="reseau" cols="150" rows="5">
                    </textarea>
                    </div>
                    <div class="form-group">
                        <label for="sauvegarde">Sauvegarde:</label>
                        <textarea class="form-control" name="sauvegarde" cols="150" rows="5">
                    </textarea>
                    </div>
                    <div class="form-group">
                        <label for="logiciel_actuel">Logiciel actuel:</label>
                        <textarea class="form-control" name="logiciel_actuel" cols="150" rows="5">
                    </textarea>
                    </div>
                    <div class="form-group">
                        <label for="logiciel_propose">Logiciel proposé:</label>
                        <textarea class="form-control" name="logiciel_propose" cols="150" rows="5">
                    </textarea>
                    </div>
                    <div class="form-group">
                        <label for="note_i">Note:</label>
                        <textarea class="form-control" name="note_i" cols="150" rows="5">
                    </textarea>
                    </div>
                    <div class="form-group">
                        <label for="travaux">Travaux:</label>
                        <textarea class="form-control" name="travaux" cols="150" rows="5">
                    </textarea>
                    </div>
                    <div class="form-group">
                        <label for="intervention">Intervention:</label>
                        <textarea class="form-control" name="intervention" cols="150" rows="5">
                    </textarea>
                    </div>
                    <div class="form-group">
                        <label for="maintenance">Maintenance:</label>
                        <textarea class="form-control" name="maintenance" cols="150" rows="5">
                    </textarea>
                    </div>
                    <div class="form-group">
                        <label for="dispositif">Avez vous un dispositif de sauvegarde ?</label>
                        <textarea class="form-control" name="dispositif" cols="150" rows="5">
                    </textarea>
                    </div>
                    <div class="form-group">
                        <label for="panne_serveur">Que se passe-t-il si votre serveur tombe en panne ?</label>
                        <textarea class="form-control" name="panne_serveur" cols="150" rows="5">
                    </textarea>
                    </div>
                    <div class="form-group">
                        <label for="doc_vital">Y a-t-il des documents vitaux à l'entreprise ?</label>
                        <textarea class="form-control" name="doc_vital" cols="150" rows="5">
                    </textarea>
                    </div>
                    
                </div>
                <!----------------- FIN INFORMATIQUE ----------------->

                <!----------- SOLUTION ---------------->

                <div class="groupe-num-3">
                    <h3>Solution</h3>

                    <h4><b>GED (Organisation, distribution, stockage des docks electroniques:</b></h4>
                    <nav>
                        <ul>
                            <li>
                                <label for="doc_classe">
                        Comment les dossiers (clients/fournisseurs, projets...) et leurs documents (courriers, factures...) sont-ils classés et mis à disposition dans votre organisation ?
                    </label><br>
                                <textarea name="doc_classe" cols="150" rows="5" class="form-control"></textarea>
                            </li><br>
                            <li>
                                <label for="doc_archive">
                        Combien de temps vous faut-il pour trouver un document dans vos archives?
                    </label><br>
                                <textarea name="doc_archive" cols="150" rows="5" class="form-control"></textarea>
                            </li><br>
                            <li>
                                <label for="doc_archive">
                        Combien de temps vous faut-il pour trouver un document dans votre ordinateur?
                    </label><br>
                                <textarea name="doc_ordi" cols="150" rows="5" class="form-control"></textarea>
                            </li><br>
                            <li>
                                <label for="collab_absent">
                        Comment faites vous quand vous aurez besoin d'un document qu'un collaborateur possède mais qui est absent ?
                    </label><br>
                                <textarea name="collab_absent" cols="150" rows="5" class="form-control"></textarea>
                            </li><br>
                            <li>
                                <label for="proc_valid">
                        Quels sont chez vous les procédures nécessitant des validations (autorisation de dépenses, note de frais, etc..) ?
                    </label><br>
                                <textarea name="proc_valid" cols="150" rows="5" class="form-control"></textarea>
                            </li><br>
                        </ul>
                    </nav><br><br>

                    <h4><b>Suivi des impressions (comptabilisations, quotas, refacturation):</b></h4>

                    <nav>
                        <ul>
                            <li>
                                <label for="vol_impression">
                        Connaissez-vous précisément les volumes d'impression et de copie réalisés par services ?
                    </label><br>
                                <textarea name="vol_impression" cols="150" rows="5" class="form-control"></textarea>
                            </li><br>
                            <li>
                                <label for="refacturer">
                        Souhaitez-vous refacturer des impressions ou des copies ?
                    </label><br>
                                <textarea name="refacturer" cols="150" rows="5" class="form-control"></textarea>
                            </li><br>
                            <li>
                                <label for="doc_conf">
                        Des documents confidentiels sont-ils imprimés chez vous ?
                    </label><br>
                                <textarea name="doc_conf" cols="150" rows="5" class="form-control"></textarea>
                            </li><br>
                            <li>
                                <label for="doc_compta">
                        Avez-vous comptabilisé les documents imprimés chez vous ?
                    </label><br>
                                <textarea name="doc_compta" cols="150" rows="5" class="form-control"></textarea>
                            </li><br>
                            <li>
                                <label for="vol_coul_imp">
                        Souhaitez-vous maîtriser les volumes couleur imprimés ?
                    </label><br>
                                <textarea name="vol_coul_imp" cols="150" rows="5" class="form-control"></textarea>
                            </li><br>
                        </ul>
                    </nav><br><br>

                    <h4><b>Modifications de PDFs et association de plusieurs types de documents:</b></h4>

                    <nav>
                        <ul>
                            <li>
                                <label for="doc_papier">
                        Avez-vous besoin de retravailler des documents papier ?
                    </label><br>
                                <textarea name="doc_papier" cols="150" rows="5" class="form-control"></textarea>
                            </li><br>
                            <li>
                                <label for="doc_app">
                        Créez-vous des dossiers papier provenant de plusieurs  applications différentes ?
                    </label><br>
                                <textarea name="doc_app" cols="150" rows="5" class="form-control"></textarea>
                            </li><br>
                            <li>
                                <label for="scanner">
                        Que pensez-vous de votre scanner d'aujourd'hui ?
                    </label><br>
                                <textarea name="scanner" cols="150" rows="5" class="form-control"></textarea>
                            </li><br>
                            <li>
                                <label for="fonct_scanner">
                        Avez-vous des besoins d'autres fonctionnalités concernant le scanner ?
                    </label><br>
                                <textarea name="fonct_scanner" cols="150" rows="5" class="form-control"></textarea>
                            </li><br>
                        </ul>
                    </nav>
                </div>

                <!----------------- FIN SOLUTION --------------------->

                <!----------------- TÉLÉPHONIE --------------------->
                <div class="groupe-num-4">
                    <h3>Téléphonie</h3>
                    <div class="form-group">
                        <label for="fournisseur_t">Fournisseur:</label>
                        <input type="text" class="form-control" name="fournisseur_t">
                    </div>
                    <div class="form-group">
                        <label for="leaser_t">Leaser:</label>
                        <input type="text" class="form-control" name="leaser_t">
                    </div>
                    <div class="form-group">
                        <div id="tBuyRent">
                            <label for="achat_t">Achat/Location:</label>
                            <label>Achat</label><input type="radio" class="form-control" name="achat_t" value="1" checked="checked">
                            <label>Location</label><input type="radio" class="form-control" name="achat_t" value="2">
                        </div>
                    </div><br>
                    <div class="groupe-num-ss3">
                        <div class="form-group">
                            <label for="prixachat_t">Prix</label>
                            <input type="text" class="form-control" name="prixachat_t"> <br>
                        </div>
                        <div class="form-group">
                            <label for="materiel_t">Matériel/Accessoire:</label>
                            <textarea name="materiel_t_achat" cols="150" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="groupe-num-ss4">
                        <div class="form-group">
                            <label for="date_deb_t">Date de début:</label>
                            <input type="date" class="form-control" name="date_deb_t">
                        </div><br>

                        <div class="form-group">
                            <label for="prelevement_t">Prélèvement:</label>
                            <label>Mensuel</label><input type="radio" class="form-control" name="prelevement_t" value="1" checked="checked">
                            <label>Trimestriel</label><input type="radio" class="form-control" name="prelevement_t" value="2">
                        </div>
                        <div class="form-group">
                            <label for="duree_contrat">Durée du contrat:</label>
                            <input type="number" class="form-control" name="duree_contrat">
                        </div>
                        <div class="form-group">
                            <label for="loyer_t">Loyer</label>
                            <input type="text" class="form-control" name="loyer_t"> <br>

                        </div>
                        <div class="form-group">
                            <label for="materiel_t">Matériel:</label>
                            <textarea name="materiel_t_location" cols="150" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="num_ligne">Numéro de la ligne:</label>
                        <input type="text" class="form-control" name="num_ligne">
                    </div>
                    <div class="form-group">
                        <label for="nb_poste">Nombre de postes:</label>
                        <input type="number" class="form-control" name="nb_poste">
                    </div>
                    <div class="form-group">
                        <label for="nb_rj45">Nombre de RJ45:</label>
                        <input type="number" class="form-control" name="nb_rj45">
                    </div>
                    <h4>Facture:</h4>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>
                </div>
                <!----------------- FIN TÉLÉPHONIE --------------------->


                <hr class="custom">
                <h3>Niveau d'intérêt:</h3>

                <b><h3><div class="form-group">
                <label for="interet"><i class="fa fa-star fa-lg"></i></label>
                <input type="radio" name="interet" value="1" checked="checked"></div><br>
            <div class="form-group">
                <label for="interet"><i class="fa fa-star fa-lg"></i><i class="fa fa-star fa-lg" aria-hidden="true"></i></label>
                <input type="radio" name="interet" value="2"></div><br>
            <div class="form-group">
                <label for="interet"><i class="fa fa-star fa-lg"></i><i class="fa fa-star fa-lg" aria-hidden="true"></i><i class="fa fa-star fa-lg" aria-hidden="true"></i></label>
                <input type="radio" name="interet" value="3"></div><br>
            </h3></b><br><br>




                <hr class="custom">

                <button type="submit" class="btn btn-success" name="submit">Valider</button>
            </form>
        </div>


    </div>
</section>