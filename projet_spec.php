<?php
  session_start();

  include "checkreset.php";
  include 'connectdb.php' ;

  if (isset($_GET["id"]))
  {
    $projet_id = $_GET["id"];
    $sql = "SELECT nom, description FROM projet WHERE id=".$projet_id;
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0)
    {
      $row = mysqli_fetch_assoc($result);
      $nom = $row["nom"];
      $desc = $row["description"];
    }
  }
  else
  {
    header("Location: liste_projet.php");
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

          $files1 = scandir("projet/projet_".$projet_id,1);
          if ($files1)
          {
            //echo $files1;
          }
          else
          {
            header("Location: liste_projet.php");
            exit;
          }

            echo "
            <div>
              <p>".$nom."</p>
            </div>
            <br/><br/>
            <div id='carouselExampleIndicators' class='carousel slide' data-ride='carousel'>
              <ol class='carousel-indicators'>
                <li data-target='#carouselExampleIndicators' data-slide-to='0' class='active'></li>
                <li data-target='#carouselExampleIndicators' data-slide-to='1'></li>
                <li data-target='#carouselExampleIndicators' data-slide-to='2'></li>
              </ol>
              <div class='carousel-inner'>
                <div class='item active'>
                  <img class='d-block w-100' src='projet\\projet_".$projet_id."\\0.png' alt='First slide'>
                </div>
                <div class='item'>
                  <img class='d-block w-100' src='projet\\projet_".$projet_id."\\1.png' alt='Second slide'>
                </div>
                <div class='item'>
                  <img class='d-block w-100' src='projet\\projet_".$projet_id."\\2.png' alt='Third slide'>
                </div>
              </div>
              <a class='carousel-control-prev' href='#carouselExampleIndicators' role='button' data-slide='prev'>
                <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                <span class='sr-only'>Previous</span>
              </a>
              <a class='carousel-control-next' href=''#carouselExampleIndicators' role='button' data-slide='next'>
                <span class='carousel-control-next-icon' aria-hidden='true'></span>
                <span class='sr-only'>Next</span>
              </a>
            </div>
            <br/><br/>
            <div>
              <p class='editor1' id='".$projet_id."' contenteditable='true'>".$desc."</p>
            </div>
            ";
         ?>

         <script src="js/jquery.js"></script>
         <script src="js/bootstrap.min.js"></script>
         <script src="js/script_perso.js"></script>
         <?php
         if ($_SESSION["type"]=="admin")
         {
           echo "
           <script src='ckeditor/ckeditor.js'></script>
           <script src='js/proj_desc_ck.js'></script>";
         }
         ?>
      </body>
</html>
