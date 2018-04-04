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
          if (isset($_SESSION["type"]) && $_SESSION["type"]=="admin")
          {
            include 'add_prof.php';
          }
        ?>


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
                    <p class='editor1' id='".$row["id"]."' name='prof' data-aos='zoom-in-right'>".$row["descriptionP"]."</p><br/>
                  </div>
                  <div class='col-md-5 col-sm-12 col-xs-12 content-img' data-aos='zoom-in'>
                    <img src='images/lpmi.png' alt='LPMI' class='img-responsive'>
                  </div>
                </div>
        		";
          }
          else
          {
            echo "
            <div class='row content'>
              <div class='col-md-5 content-img' data-aos='zoom-in'>
                <img src='images/ue.png' alt='LPMI' class='img-responsive'>
              </div>
              <div class='col-md-6 textecontent'>
                <h3 class='underline' data-aos='fade-down'>".$row["nomP"]."</h3><br/>
                <p class='editor1' id='".$row["id"]."' name='prof' data-aos='zoom-in-left'>".$row["descriptionP"]."</p><br/>
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
    <?php
    if (isset($_SESSION["type"]) && $_SESSION["type"]=="admin")
    {
      echo "
      <script src='ckeditor/ckeditor.js'></script>
      <script src='js/desc_ck.js'></script>";
    }
    ?>

	</body>
</html>
