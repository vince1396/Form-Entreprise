<?php include_once '_debut.inc.php'; ?>

<form method='post' action='creationEtablissement.traitement.php'>
    <div class="container">
        <div class="row ">
           <?php        include_once 'menuGauche.inc.php';?>

            <!-- Entre deux layout -->
            <div class="col-md-1 ">

            </div>

            <!-- Layout Droit -->
            <div class="col-md-8 ">
                <br />
                <article>



                    <!-- ligne ID ETAB -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="input-group">

                                <span class="input-group-addon minTextBox bgColorTheme" >Identifiant</span>
                                <input type="text"  class="form-control" name="id" id="id"  maxlength='8'   pattern="^[a-zA-Z0-9]{3,8}$" title="Saisir 3 caractères au minimum"  required>
                            </div>
                        </div>
                    </div>
                    <!-- /ligne -->

                    <br />

                    <!-- ligne NOM ETAB -->
                    <div class="row">
                        <div class="col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon bgColorTheme minTextBox">Nom</span>
                                <input type="text" class="form-control" name="nom" id="nom" size="50" 
                                       maxlength="45" pattern="^[-'çéèùa-zA-Z\s]{1,45}$" title="Saisir 1 caractères au minimum" required>
                            </div>
                        </div>
                    </div>
                    <!-- /ligne -->

                    <br/>

                    <!-- ligne ADRESSE -->
                    <div class="row">
                        <div class="col-md-5">
                            <div class="input-group ">
                                <span class="input-group-addon bgColorTheme minTextBox">Adresse</span>
                                <input type="text" name="adresseRue" id="adresseRue" class="form-control"  pattern="^[-,'°çéèù0-9a-zA-Z\s]{3,45}$" title="Saisir une adresse valide : 3 caractères au minimum" maxlength="45" required>

                            </div>
                        </div>
                    </div>
                    <!-- /ligne -->
                    <br />

                    <!-- ligne CP -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon bgColorTheme minTextBox" >
                                    Code postal
                                </span>
                                <input type="text" class="form-control" name="codePostal" id="codePostal" maxlength="5" pattern="^[a-zA-Z0-9]{2,5}$" title="Saisir une code postal valide" required />
                            </div>
                        </div>
                    </div>
                    <!-- /ligne -->
                    <br/>

                    <!-- ligne VILLE  -->
                    <div class="row">
                        <div class="col-md-7">

                            <div class="input-group">
                                <span class="input-group-addon bgColorTheme minTextBox">
                                    Ville
                                </span>
                                <input type="text" class="form-control" name="ville" id="ville" title="Nom de la ville" maxlength="35" pattern="^[-'çéèùa-zA-Z\s]{1,35}$" required />
                            </div>
                        </div>
                    </div>
                    <!-- /ligne -->
                    <br/>

                    <!-- ligne TELEPHONE -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon bgColorTheme minTextBox" >Telephone
                                </span>
                                <input type="text" class="form-control" name="tel" id="tel" title="Saisir un numéro de téléphone valide" maxlength="10" pattern="^[0-9]{10,10}$" required />

                            </div>
                        </div>
                    </div>
                    <!-- /ligne -->
                    <br /> 

                    <!-- ligne EMAIL -->
                    <div class="row">
                        <div class="col-md-7">
                            <div class="input-group">
                                <span class="input-group-addon bgColorTheme minTextBox" >
                                    Email
                                </span>
                                <input type="email" class="form-control"  name="email" id="email" title="Saisir un email valide" maxlength="70"  />

                            </div>
                        </div>
                    </div>
                    <!-- /ligne EMAIL -->
                    <br />

                    <!-- ligne TYPE -->
                    <div class="row">
                        <div class="col-md-5">
                            <div class="radio-inline">
                                <input type='radio' name='type' id="etablissementScolaire" value='1' checked/>  
                                <label for="etablissementScolaire">Etablissement scolaire</label>
                            </div>
                            <div class="radio-inline">
                                <input type='radio' name='type' id="autre" value='0' />  
                                <label for="autre">Autre</label>
                            </div>
                        </div>
                    </div>
                    <br />


                    <!-- ligne Responsable -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Responsable</h3>
                                </div>
                                <div class="panel-body">
                                    <select id="civiliteResponsable" name='civiliteResponsable'>
                                        <option selected>M.</option>
                                        <option>Mme</option>
                                        <option>Mlle</option>
                                    </select>
                                    <br />
                                    <br />
                                    <div class="input-group">
                                        <span class="input-group-addon minTextBox" >Nom</span>
                                        <input type="text" id="nomResponsable" name=
                                               "nomResponsable" size="26" maxlength="25" pattern="^[-'çéèùa-zA-Z\s]{1,25}$" title="Saisir 1 caractères au minimum" required>
                                    </div>
                                    <br />
                                    <div class="input-group">
                                        <span class="input-group-addon minTextBox" >Prenom</span>
                                        <input type="text"   id="prenomResponsable" name="prenomResponsable" size="26" maxlength="25">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br />

                    <!-- Nombre de chambres offertes -->
                    <div class="row">
                        <div class="col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon3">Nombre de chambres offertes</span>
                                <input type="text" class="form-control " id="nombreChambresOffertes" name="nombreChambresOffertes" title="Saisir le nombre de chambres offertes" pattern="^[0-9]{1,3}$" maxlength="2" required aria-describedby="basic-addon3">
                            </div>
                        </div>
                    </div>


                    <br />

                    <!-- Zone de validation -->
                    <div class="row">
                        <div class="col-lg-2">  
                            <input class="btn btn-primary btn-lg " type="submit" value="Valider">
                        </div>
                        <div class="col-lg-2">
                            <input class="btn btn-primary btn-lg " type="reset" value="Annuler">
                        </div>
                    </div>


                </article>
            </div><!-- /Layout Droit -->
        </div><!-- /row principale -->
    </div><!-- /container --> 
</form>

<?php include_once '_fin.inc.php'; ?>