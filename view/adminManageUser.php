<div class="container white_body">
 <form class="" action="#" method="post">
  <input type="text" name="search" placeholder="Rechercher un client">
  <input type="submit" name="search">
</form>
    <form method="post">
    <table class="table table-striped table-bordered table-hover">
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
        foreach(getUsers() as $k=>$v)
        {
            $id_editValues++; ?>

                <tr>
                    <td class="editableColumns"><?= $v['id_u']; ?></td>
                    <td><?= $number;     ?>   </td>
                    <td class="editableColumns"><?= $v["nom"];   ?>  </td>
                    <td class="editableColumns"><?= $v["prenom"];?>   </td>
                    <td class="editableColumns"><?= $v["email"]; ?>   </td>
                    <td class="editableColumns">Crypté : uniquement modifiable</td>
                    <td>
                        <a href="#" class="editValues" id="<?= $id_editValues ?>">Modifier</a>
                        <input type="submit" name="update" class="displayNone"> /
                        <a href="index.php?p=adminManageUser&supp=<?= $v['id_u'] ?>">Bannir</a></td>

                </tr>


        <?php
            $number++;
        }?>
        </tbody>

    </table>
    </form>
</div>