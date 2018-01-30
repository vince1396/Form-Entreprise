<div class="container white_body">
 <form class="" action="#" method="post">
  <input type="text" name="search" placeholder="Rechercher un client">
  <input type="submit" name="submit">
</form>
    <?php
    if(isset($_POST['submit'])){ ?>
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Nom du commercial / chef</th>
                <th>Nom du client</th>
                <th>Option</th>
            </tr>
            </thead>
            <tbody>
        <?php
        foreach($req as $k=>$v){?>
            <tr>
                <td>
                    <?= $number; ?>
                </td>
                <td><span><?= $v["nom"]." ".$v['prenom'];?></span></td>
                <td><span><?= $v["nom_c"];?></span></td>
                <td><span>Consulter</span></td>
            </tr>

        <?php
            $number++;}?>
            </tbody>
        </table>
<?php } ?>
<?php
   foreach (getUsers() as $k => $v)
   { ?>
     <ul>
      <li><?=$v['id_u']; ?></li>
      <li><?=$v['nom']; ?></li>
      <li><?=$v['prenom']; ?></li>
      <li><?=$v['email']; ?></li>
      <li><a href="index.php?supp=<?php echo $v['id_u'] ?>">Supprimer</a></li>
    </ul>
    <br>
    <br>
<?php }
?>
</div>