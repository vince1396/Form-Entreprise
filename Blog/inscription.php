<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HOME</title>
    <meta name="description" content="An interactive getting started guide for Brackets.">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css"> </head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header"> <a class="navbar-brand" href="#">Blog</a> </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="connexion.php">Connexion</a></li>
                <li><a href="inscription.php">Inscription</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="inscription.php"><span class="glyphicon glyphicon-user"></span>Inscription</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span>Connexion</a></li>
            </ul>
        </div>
    </nav>
</body>

<section>
   <h2>Inscription</h2>
    <form action="/action_page.php">
    <div class="form-group">
    <label for="email">Nom:</label>
    <input type="text" class="form-control" name="nom">
  </div>
  <div class="form-group">
    <label for="email">Prénom:</label>
    <input type="text" class="form-control" name="prénom">
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="form-group">
    <label for="email">Adresse</label>
    <input type="text" class="form-control" name="adresse">
  </div>
  <div class="form-group">
    <label for="email">Ville:</label>
    <input type="text" class="form-control" name="ville">
  </div>
  <div class="form-group">
    <label for="email">Code postal:</label>
    <input type="number" class="form-control" name="cp">
  </div>
  <div class="form-group">
    <label for="email">Login:</label>
    <input type="text" class="form-control" name="login" required>
  </div>
  <div class="form-group">
    <label for="pwd">Mot de passe:</label>
    <input type="password" class="form-control" name="mdp" required>
  </div>
  <button type="submit" class="btn btn-default" name="submit">Valider</button>
</form>
</section>
</html>