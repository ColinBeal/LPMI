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
        <div id="login" class="row content-bleu">
          <?php
            include "all.php";
          ?>
        </div>
        <?php
          include "entete_page.php";

          if ($_SESSION["type"]=="admin")
          {
            include "uploadprojet.php";
            include "formprojet.php";
          }

          $files1 = scandir("projet",1);
          $cpt=0;
          for ($i=0; $i < count($files1)-2; $i++)
          {
            $tab = explode("_",$files1[$i]);
            $sql = "SELECT nom, description FROM projet WHERE id=".$tab[1];
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0)
            {
              $row = mysqli_fetch_assoc($result);
              $begin = substr($row["description"],0,100);
              if ($cpt%2 == 0)
              {
                echo "
                <div class='content-bleu row'>
                  <div class='col-md-6 textecontent' data-aos='fade-down'>
                    <h3 class='underline' data-aos='fade-down'>".$row["nom"]."</h3><br/>
                    <p data-aos='zoom-in-right'>".$begin."</p><br/>
                    <p data-aos='fade'><a href='projet_spec.php?id=".$tab[1]."' class='underline'>Découvrir le projet</a><p>
                  </div>
                  <div  class='col-md-5 col-sm-12 col-xs-12 content-img' data-aos='zoom-in'>
                    <a href='projet_spec.php?id=".$tab[1]."' class='underline'><img src='projet/projet_".$tab[1]."/0.png' alt='LPMI' class='img-responsive'/></a>
                  </div>
                </div>
                ";
              }
              else
              {
                echo "
                <div class='row content'>
                  <div class='col-md-5 content-img' data-aos='zoom-in'>
                    <a href='projet_spec.php?id=".$tab[1]."' class='bleu underline'><img src='projet/projet_".$tab[1]."/0.png' alt='LPMI' class='img-responsive'></a>
                  </div>
                  <div class='col-md-6 textecontent'>
                    <h3 class='underline' data-aos='fade-down'>".$row["nom"]."</h3><br/>
                    <p data-aos='zoom-in-left'>".$begin."</p><br/>
                    <p data-aos='fade'><a href='projet_spec.php?id=".$tab[1]."' class='bleu underline'>Découvrir le projet</a></p>
                  </div>
                </div>
                ";
              }
              $cpt++;
            }
          }
        ?>

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script_perso.js"></script>

      </body>
</html>
