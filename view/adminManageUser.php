<form class="" action="#" method="post">
  <input type="text" name="search">
  <input type="submit" name="submit" name="search">
</form>

<?php
   while(getUsers())
   { ?>
     <ul>
      <li><?php echo $rep['id_u']; ?></li>
      <li><?php echo $rep['nom']; ?></li>
      <li><?php echo $rep['prenom']; ?></li>
      <li><?php echo $rep['email']; ?></li>
    </ul>
    <br>
    <br>
<?php }
?>