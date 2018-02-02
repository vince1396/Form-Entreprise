<div class="container white_body2">
    <div class="admin_create width-log">
        <p class="title_admin_create">
            Créer un utilisateur
        </p>
     <form action="#" class="form-group form_create"  method="post">
         <div class="form-group">
              <label for="nom">Nom: </label>
              <input type="text" name="nom" class="form-control" title="nom">
         </div>
         <div class="form-group">
              <label for="prenom">Prénom: </label>
              <input type="text" name="prenom" class="form-control"  title="prenom">
         </div>
         <div class="form-group">
              <label for="email">Email: </label>
              <input type="text" name="email" class="form-control" title="email">
         </div>
         <div class="form-group">
              <label for="mdp">Mot de passe: </label>
              <input type="password" name="mdp" class="form-control" title="mdp">
         </div>
         <div class="form-group">
              <label for="confirm">Confirmer le mot de passe: </label>
              <input type="password" name="confirm" class="form-control"title="confirm">
         </div>
         <div class="form-group">
              <div id="choixRoleAddUser">
                  <label>Chef de vente</label>
                  <input type="radio" name="role" value="2" class="form-control" checked="checked" title="role">
                  <br>
                  <label>Commercial</label>
                  <input type="radio" name="role" value="1" class="form-control"  title="role">
              </div>
         </div>
         <div class="form-group">
              <div class="ChiefChoiceDisplay">
                  <select class="form-control select_admin" name="chef" title="chef">
                      <?php
                        foreach (getChefVente() as $k => $v)
                        { ?>
                            <option value="<?php echo $v['id_u'] ?>"><?php echo $v['prenom']." ".$v['nom']; ?></option><?php
                        }
                      ?>
                  </select>
              </div>
          </div>
         <div class="form-group submit_create">
            <input type="submit" name="submit" class="form-control btn btn-success">
         </div>
    </form>
        <?php
        if(isset($message))
        {
            echo $message;
        }
        ?>
    </div>
</div>