<div class="container white_body">
 <form class="" action="#" method="post">
  <label for="nom">Nom: </label>
  <input type="text" name="nom" value="">
  <br>
  <label for="prenom">Prénom: </label>
  <input type="text" name="prenom" value="">
  <br>
  <label for="email">Email: </label>
  <input type="text" name="email" value="">
  <br>
  <label for="mdp">Mot de passe: </label>
  <input type="text" name="mdp" value="">
  <br>
  <label for="confirm">Confirmer le mot de passe: </label> 
  <input type="text" name="confirm" value="">
  <br>
  <div id="choixRoleAddUser">
  <label>Chef de vente</label>
  <input type="radio" name="role" value="1" class="form-control" checked="checked">
  <br>
  <label>Commercial</label>
  <input type="radio" name="role" value="2" class="form-control">
  </div>
  <br>
  <div class="ChiefChoiceDisplay">
  <select class="" name="chef">
    <option value=""></option>
  </select>
    <br>
    </div>
  <input type="submit" name="submit">
</form>
</div>