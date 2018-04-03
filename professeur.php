<?php
  session_start();

  include "checkreset.php";
  include 'connectdb.php' ;

  $sql = "SELECT id, nomP, descriptionP FROM professeur ORDER BY id";
  $result = mysqli_query($conn, $sql);

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
        ?>

        <div class="contenttitle row">
            <h1 class="underline"> Présentation de la licence </h1>
        <div class="col-md-9">
          <p>
            <br/>
            <strong>Soyez acteur de la transformation numérique de notre société</strong>
            <br/><br/>
            La Licence Professionnelle Applications Web forme depuis 2001 des assistants ingénieurs et des cadres spécialisés dans le domaine de l’Internet. Il s’agit majoritairement de développeurs spécialistes des technologies logicielles pour la construction d'applications Web et Web mobile (applications réparties avec une forte interaction utilisateur).

          </div>
        </div>
    <?php
      $cpt=0;
      if (mysqli_num_rows($result) > 0)
    	{
        while($row = mysqli_fetch_assoc($result))
        {
          if ($cpt%2 == 0)
          {
            echo "
                <div class='content-bleu row'>
                  <div class='col-md-6 textecontent' data-aos='fade-down'>
                    <h3 class='underline' data-aos='fade-down'>".$row["nomP"]."</h3><br/>
                    <p data-aos='zoom-in-right'>".$row["descriptionP"]."</p><br/>
                    <p data-aos='fade'><a href=ueparticulier.php?id=".$row["id"]." class='underline'>Découvrir cette UE </a></p>
                  </div>
                  <div class='col-md-5 col-sm-12 col-xs-12 content-img' data-aos='zoom-in'>
                    <img src='images/profB.png' alt='prof' class='img-responsive'>
                  </div>
                </div>
        		";
          }
          else
          {
            echo "
            <div class='row content'>
              <div class='col-md-5 content-img' data-aos='zoom-in'>
                <img src='images/profr.png' alt='prof' class='img-responsive'>
              </div>
              <div class='col-md-6 textecontent'>
                <h3 class='underline' data-aos='fade-down'>".$row["nomP"]."</h3><br/>
                <p data-aos='zoom-in-left'>".$row["descriptionP"]."</p><br/>
                <p data-aos='fade'><a href=ueparticulier.php?id=".$row["id"]." class='bleu underline'>Découvrir cette UE </a></p>
              </div>
            </div>
        		";
          }
          $cpt++;
        }
    	}
      else
    	{
        header('Location: index.php');
        exit;
    	}
    ?>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script_perso.js"></script>

	</body>
</html>
