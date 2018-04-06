<?php
  session_start();

  include "checkreset.php";
  include 'connectdb.php' ;
  include 'add_mess.php';
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
        <h1>Espace Personnel</h1>
          <?php
            include "show_messages.php";
          ?>
          <br/><br/>
          <div class="col-md-6">
              <a href="depot.php"><p>Voir la Liste des Fichiers dans le Dépot</p></a>
          </div>
          <div class="col-md-6">
              <a href="liste_projet.php"><p>Voir la liste Liste des Projets</p></a>
          </div>


          <?php
            if (isset($_SESSION["type"]) && $_SESSION["type"]=="admin")
            {
              echo "<div class='col-md-6'>
                      <a href='moderation.php'><p>Modérer les données du Site</p></a>
                    </div>";
              include "edit_messages.php";
            }
          ?>
        </div>
      </div>

          <script src="js/jquery.js"></script>
          <script src="js/bootstrap.min.js"></script>
          <script src="js/script_perso.js"></script>

      </body>
</html>
