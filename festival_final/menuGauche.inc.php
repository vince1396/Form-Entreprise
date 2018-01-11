<!-- première colonne (s'étend sur de 3 colonnes sur 12 possibles) -->  
<div class="col-md-3">
    <br />
    <?php if ($_SESSION["Navigation"] == "Etablissement"): ?>
        <div id="menuGauche" class="btn-group-vertical btn-block">

            <a href="consultationEtablissements.php" class="btn btn-primary ">
                CONSULTER</a>
            <a href="creationEtablissement.php" class="btn btn-primary  ">
                AJOUTER</a>

            <a href="rechercheEtablissement.php" class="btn btn-primary btn-block">
                RECHERCHER</a>
        </div> 
        <img src="img/clefmusique.gif" class="img-responsive" alt="Responsive image">
    </div>
<?php elseif ($_SESSION["Navigation"] == "Groupe"): ?>
 <div id="menuGauche" class="btn-group-vertical btn-block">

            <a href="consultationGroupes.php" class="btn btn-primary ">
                CONSULTER</a>
            <a href="creationGroupe.php" class="btn btn-primary  ">
                AJOUTER</a>

            <a href="rechercheGroupe.php" class="btn btn-primary btn-block">
                RECHERCHER</a>
        </div> 
        <img src="img/clefmusique.gif" class="img-responsive" alt="Responsive image">
    </div>

<?php endif; ?>
