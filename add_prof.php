<?php
  if (isset($_POST["nom"]) && isset($_POST["description"]) && isset($_POST["submit"]) && isset($_SESSION['login']))
  {
    include 'connectdb.php';

    $nom = mysqli_real_escape_string($conn,$_POST["nom"]);
    $desc = mysqli_real_escape_string($conn,$_POST["description"]);
    $sql="INSERT INTO professeur (nomP, descriptionP) VALUES ('".$nom."','".$desc."')";
    $result = mysqli_query($conn, $sql);
    if (!$result)
    {
      echo "erreur d'ajout professeur : ".$_POST["nom"];
    }
    else
    {
      header('Location: professeur.php');
      exit;
    }
  }
?>
<div class="row content-rouge">
  <form method="post" action="#">
    <div class="col-md-5 textecontent">

      <div class="form-group row">
        <label for="nom" class="col-sm-3 col-form-label">Nom:</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrez le nom du nouveau professeur" required/>
        </div>
      </div>
      <br/>
      <div class="form-group row">
        <label for="nom" class="col-sm-3 col-form-label">Description:</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="description" name="description" placeholder="Description" required/>
        </div>
      </div>
      <br/>
    </div>
    <div class="col-md-5 textecontent">
      <input type="submit" class='btn' name="submit" value="Enregistrer un Nouveau Professeur" />
    </div>
  </form>
</div>
