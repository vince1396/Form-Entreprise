<div class="container white_body">
 <form class="" action="#" method="post">
  <input type="text" name="search">
  <input type="submit" name="submit" name="search">
</form>

<?php
   foreach (getUsers() as $k => $v)
   { ?>
     <ul>
      <li><?php echo $v['id_u']; ?></li>
      <li><?php echo $v['nom']; ?></li>
      <li><?php echo $v['prenom']; ?></li>
      <li><?php echo $v['email']; ?></li>
    </ul>
    <br>
    <br>
<?php }
?>
</div>