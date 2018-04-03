<div id="hero">
  <div class="row barrenav navbar-collapse">
    <div class="container-fluid">
      <div class="col-md-3">
        <a href="index.php"><img src="images/logo.png" alt="LPMI" class="img-responsive"></a>
      </div>
      <div class="col-md-2 col-sm-hidden col-xs-hidden nav">
        <a href="presentation.php">Présentation </a>
      </div>
      <div class="col-md-3 col-sm-hidden col-xs-hidden nav">
        <a href="ue.php"> Unité d'enseignements</a>
      </div>
      <div class="col-md-1 col-sm-hidden col-xs-hidden nav">
        <a href="liste_projet.php">Projets</a>
      </div>
      <div class="col-md-1 col-sm-hidden col-xs-hidden nav">
        <a href="http://informatique-ufrst.u-bourgogne.fr/formations/detail/2">Candidater</a>
      </div>
      <div class="col-md-2 nav">
        <a href="connexion.php">
          <?php
            if (isset($_SESSION["login"]) && isset($_SESSION["type"]))
            {
              echo "Deconnexion";
            }
            else
            {
              echo "Connexion";
            }
          ?>
        </a>
      </div>
    </div>
  </div>
  <div class="maintitle row">
      <h1 class="underline"> Licence profesionnelle métiers de l'internet </h1>
  <div class="col-md-9">
      </br>
      <p> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et. </br>qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestia </p>
      <a href="presentation.php">
      <h4 class="underline"> Découvrir la formation </h4></a>
    </div>
  </div>
</div>
