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
        foreach(getUsers() as $k=>$v){?>
            <tr>
                <td></td> <?= $number;     ?>   </td>
                <td><span><?= $v["nom"];   ?>   </span></td>
                <td><span><?= $v["prenom"];?>   </span></td>
                <td><span><?= $v["email"]; ?>   </span></td>
                <td><span>Crypté : uniquement modifiable</span></td>
                <td><span><a href="index.php?update=<?= $v['id_u'] ?>">Modifier</a></span> /
                    <span><a href="index.php?supp=<?= $v['id_u'] ?>">Supprimer</a></span></td>
            </tr>

        <?php
            $number++;}?>
        </tbody>
    </table>
</div>