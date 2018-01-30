<div class="container white_body">
 <form class="" action="#" method="post">
  <input type="text" name="search" placeholder="Rechercher un client">
  <input type="submit" name="search">
</form>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Mot de passe</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $id_editValues = 0;
        foreach(getUsers() as $k=>$v){ $id_editValues++; ?>
            <tr>
                <form method="post">
                <td></td> <?= $number;     ?>   </td>
                <td><span><?= $v["nom"];   ?>   </span></td>
                <td><span><?= $v["prenom"];?>   </span></td>
                <td><span><?= $v["email"]; ?>   </span></td>
                <td><span>Crypté : uniquement modifiable</span></td>
                <td><input class="editValues" id="<?= $id_editValues ?>" type="button" value="Edit">
                    <input type="submit" name="submit" class="displayNone">

                    <span><a href="index.php?p=adminManageUser&update=<?= $v['id_u'] ?>">Modifier</a></span> /
                    <span><a href="index.php?p=adminManageUser&supp=<?= $v['id_u'] ?>">Supprimer</a></span></td>
                </form>
            </tr>

        <?php
            $number++;}?>
        </tbody>
    </table>
</div>