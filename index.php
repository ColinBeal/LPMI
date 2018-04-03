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
    <?php
      include "entete_page.php";
    ?>

        <div class="content-bleu row">
          <div class="col-md-6 textecontent" data-aos="fade-down">
            <h3 class="underline" data-aos="fade-down">La Formation</h3>
            <br/>
            <p data-aos="zoom-in-right">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et. </br>qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestia </p>
            <br/>
            <p data-aos="fade"><a href="lpmi.php" class="underline">Découvrir la formation </a><p>
          </div>
          <div  class="col-md-5 col-sm-12 col-xs-12 content-img" data-aos="zoom-in">
            <img src="images/lpmi.png" alt="LPMI" class="img-responsive" >
          </div>
        </div>

        <div class="row content">
          <div class="col-md-5 content-img" data-aos="zoom-in">
            <img src="images/ue.png" alt="LPMI" class="img-responsive">
          </div>
          <div class="col-md-6 textecontent">
            <h3 class="underline" data-aos="fade-down">Unité d'enseignement</h3>
            <br/>
            <p data-aos="zoom-in-left">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et. </br>qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestia </p>
            <br/>
            <p data-aos="fade"><a href="ue.php" class="bleu underline">Parcourir les unités d'enseignements </a></p>
          </div>
        </div>

        <div class="row content-rouge">
          <div class="col-md-6 textecontent">
            <h3 class="underline_red" data-aos="fade-down">Projets étudiants</h3>
            <br/>
            <p data-aos="zoom-in-right">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et. </br>qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestia </p>
            <br/>
            <p data-aos="fade"><a href="projet.php" class="underline" >Visionner les projets</a></p>
          </div>
          <div class="col-md-5 content-img" data-aos="zoom-in">
            <img src="images/projet.png" alt="LPMI" class="img-responsive ">
          </div>
        </div>

        <div class="content row">
          <div class="col-md-5 content-img" data-aos="zoom-in">
            <img src="images/candidater.png" alt="LPMI" class="img-responsive">
          </div>
          <div class="col-md-6 textecontent">
            <h3 class="underline" data-aos="fade-down">S'inscrire</h3>
            <br/>
            <p data-aos="zoom-in-left">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et. </br>qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestia </p>
            <br/>
            <p data-aos="fade"><a href="http://informatique-ufrst.u-bourgogne.fr/formations/detail/2" class=" bleu underline">Candidater</a></p>
          </div>
        </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script_perso.js"></script>

  </body>
</html>
