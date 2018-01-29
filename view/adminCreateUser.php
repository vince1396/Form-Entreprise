<div class="container white_body">
 <form class="" action="#" method="post">
  <label for="nom">Nom: </label>
  <input type="text" name="nom" value="" title="nom">
  <br>
  <label for="prenom">Prénom: </label>
  <input type="text" name="prenom" value="" title="prenom">
  <br>
  <label for="email">Email: </label>
  <input type="text" name="email" value="" title="email">
  <br>
  <label for="mdp">Mot de passe: </label>
  <input type="password" name="mdp" value="" title="mdp">
  <br>
  <label for="confirm">Confirmer le mot de passe: </label> 
  <input type="password" name="confirm" value="" title="confirm">
  <br>
  <div id="choixRoleAddUser">
  <label>Chef de vente</label>
  <input type="radio" name="role" value="2" class="form-control"  title="role">
  <br>
  <label>Commercial</label>
  <input type="radio" name="role" value="1" class="form-control" checked="checked" title="role">
  </div>
  <br>
  <div class="ChiefChoiceDisplay">
      <select class="" name="chef" title="chef">
          <?php
            foreach (getChefVente() as $k => $v)
            { ?>
                <option value="<?php echo $v['id_u'] ?>"><?php echo $v['prenom']." ".$v['nom']; ?></option><?php
            }
          ?>
  </select>
    <br>
    </div>
  <input type="submit" name="submit">
</form>
</div>