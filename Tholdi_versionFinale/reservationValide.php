<?php include("entete.php"); ?>

    <div class="container">
   
    <div class="container">
    <script type="text/javascript">
function rebour(tps){ //Deffinition d'une fonction
if (tps>0) { //Si le temps est différent de 0
var heure = Math.floor(tps/3600); //Nombre d'heure écoulés
if(heure >= 24){ //Si plus de 24 => 1 jour
var jour = Math.floor(heure/24); //Calcul du nombre de jour
var moins = 86400*jour; // Deffinition et attribution d'une valeur à `moins` qui est la variable soustractrice de la fonction
var heure = heure-(24*jour); //On enléve le nombre d'heure concernée
}else{
var jour = 0; //Sinon, il n'y a pas de jour
var moins = 0; // Et pas ed variable moins
}
moins = moins+3600*heure; // Recalcul
var minutes = Math.floor((tps-moins)/60); // Calcul des minutes
moins = moins + 60*minutes; // Recalcul de la variable moins
var secondes = tps-moins; //Calcul des seconde
minutes = ((minutes < 10) ? "0" : "") + minutes;//On rajoute un 0 si les minutes sont inférieures à 10
secondes = ((secondes < 10) ? "0" : "") + secondes; //On rajoute un 0 si les secondes sont inférieures à 10
document.getElementById("compteRebour_affiche").innerHTML = 'Votre Commande a bien été enregistrée. \n\
                                                             Vous allez être redirigé dans '+secondes+' secondes.'//On affiche le resultat dans le div concerné

var restant = tps-1; //On enléve une seconde
setTimeout("rebour("+restant+")", 1000);//On rappelle la fonction toute les secondes
}else{
location.href = 'espaceClient.php'; //Message
}
}
</script>
    <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong><div id="compteRebour_affiche"></div>
<script type="text/javascript">rebour(3); //temps restant. Le mieux c'est avec un enregistrement dans la BDD</script></strong>
                    </h2>
                    <hr>
   <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 2000 //changes the speed
    })
    </script>

</body>

</html>