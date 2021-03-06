<?php
  session_start();
  include "checkreset.php";
  include 'connectdb.php' ;

  if(isset($_GET["id"]) || isset($_SESSION["id"]) )
  {
    if(isset($_GET["id"]))
    {
      $_SESSION["id"] = $_GET["id"];
    }
    $sql = "SELECT M.id, nomM, nomP, descriptionM, nomUE, descriptionUE FROM matiere M, professeur P, unite_enseignement U WHERE P.id=M.id_prof AND U.id=M.id_ue AND id_ue=".$_SESSION["id"];
    $result = mysqli_query($conn, $sql);
  }
  else
  {
    header('Location: ue.php');
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
        ?>

    <?php
      if (mysqli_num_rows($result) > 0)
    	{
        $cpt = 0;
        $row = mysqli_fetch_assoc($result);
        echo "
        <div class='contenttitle row'>
              <h1 class='underline'> Présentation de la licence </h1>
          <div class='col-md-9'>
            <p id='editor' contenteditable='true'>
              <br/>
              <strong>Soyez acteur de la transformation numérique de notre société</strong>
              <br/><br/>
              La Licence Professionnelle Applications Web forme depuis 2001 des assistants ingénieurs et des cadres spécialisés dans le domaine de l’Internet. Il s’agit majoritairement de développeurs spécialistes des technologies logicielles pour la construction d'applications Web et Web mobile (applications réparties avec une forte interaction utilisateur).

            </div>
          </div>
        ";
    		do
        {
          if ($cpt%2 == 0)
          {
        	  echo "
                <div class='row content'>
                  <div class='col-md-5 content-img' data-aos='zoom-in'>
                    <img src='images/ue.png' alt='LPMI' class='img-responsive'>
                  </div>
                  <div class='col-md-6 textecontent'>
                    <h3 class='underline' data-aos='fade-down'>".$row["nomM"]."</h3>
                    <br/>
                    <p class='editor1' id='".$row["id"]."' name='mat' data-aos='zoom-in-right'>".$row["descriptionM"]."</p>
                    <br/>
                    <p data-aos='fade'>
                      <a href='professeur.php' class='bleu underline'>
                        <p> Professeur : ".$row["nomP"]."</p>
                      </a>
                    </p>
                  </div>
                </div>
            		";
          }
          else
          {
            echo "
                <div class='content-bleu row'>
                  <div class='col-md-6 textecontent'>
                    <h3 class='underline' data-aos='fade-down'>".$row["nomM"]."</h3>
                    <br/>
                    <p class='editor1' id='".$row["id"]."' name='mat' data-aos='zoom-in-right'>".$row["descriptionM"]."</p>
                    <br/>
                      <a href='professeur.php' class='underline'>
                        <p data-aos='fade'> Professeur : ".$row["nomP"]."</p>
                      </a>
                  </div>
                  <div class='col-md-5 col-sm-12 col-xs-12 content-img' data-aos='zoom-in'>
                    <img src='images/lpmi.png' alt='LPMI' class='img-responsive'>
                  </div>
                </div>
            ";
          }
          $cpt++;
        }
        while($row = mysqli_fetch_assoc($result));
    	}
      else
    	{
        header('Location: ue.php');
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
