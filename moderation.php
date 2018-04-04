<?php
  session_start();

  include "checkreset.php";
  include 'connectdb.php' ;

  if (!isset($_SESSION["login"]) OR !isset($_SESSION["type"]) OR ($_SESSION["type"]!="etudiant" && $_SESSION["type"]!="admin"))
  {
    header('Location: index.php');
    exit;
  }
?>

<!DOCTYPE html>
<html lang="fr">
  <?php
    include 'head.php';
  ?>
      <body>
        <div class="container-fluid espace">
          <?php
            include "entete_page.php";
          ?>

      <div class="row">
        <h1>Tableau de Bord Administrateur</h1>
          <?php
            include "mod_mess.php";
            include "mod_prof.php";
            echo "<br/>";
            include "mod_user.php";
            include "mod_proj.php";
          ?>
        </div>
      </div>

          <script src="js/jquery.js"></script>
          <script src="js/bootstrap.min.js"></script>
          <script src="js/script_perso.js"></script>
          <script src="js/mod.js"></script>

      </body>
</html>
