<?php
  session_start();

  include "checkreset.php";
  include 'connectdb.php' ;
?>

<!DOCTYPE html>
<html lang="fr">
  <?php
    include 'head.php';
  ?>
  <body>
    <div class=" row">
      <div class="col-md-3">
      </div>
    <div class=" connexion col-md-6">
      <img  src="images/lpmi.png" alt="LPMI" class="img-responsive">
      <?php
        include "all.php";
      ?>
      </div>
    </div>
</body>
