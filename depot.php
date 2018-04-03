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
        <div id="login" class="row content-bleu">
          <?php
            include "all.php";
          ?>
        </div>
        <?php
          include "entete_page.php";

          if ($_SESSION["type"]=="admin")
          {
            include "uploadfiles.php";
            include "formupload.php";
          }
          include "listfiles.php";
        ?>

          <script src="js/jquery.js"></script>
          <script src="js/bootstrap.min.js"></script>
          <script src="js/script_perso.js"></script>

      </body>
</html>
