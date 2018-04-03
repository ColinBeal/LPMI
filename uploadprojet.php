<?php
  if (isset($_FILES['image']['name']))
  {
    $total = count($_FILES['image']['name']);
    for ($i=0; $i < $total ; $i++)
    {
      $extensions_valides = array( 'jpg' , 'jpeg' , 'png' );
      $extension_upload = strtolower(  substr(  strrchr($_FILES['image']['name'][$i], '.')  ,1)  );

      $path = "projet\projet_".$_POST['projet_num'];
      if (!file_exists($path))
      {
        mkdir( $path, 0777, true);
      }

      $nom = dirname(__FILE__)."\\projet\\projet_".$_POST['projet_num']."\\".$i.".png";

      if ($_FILES['image']['error'][$i] == 0 && in_array($extension_upload,$extensions_valides)==true && $_FILES['image']['size'][$i] <= $_POST['MAX_FILE_SIZE'])
      {
        $resultat = move_uploaded_file($_FILES['image']['tmp_name'][$i],$nom);
        if ($resultat)
        {
          echo "Fichier n°".$i." : Transfert réussi<br/>";
        }
        else
          echo "Fichier n°".$i." : echec de deplacement<br/>";
      }
      else
      {
        echo "Le fichier n°".$i." ne correspond pas aux limites fixées";
      }
    }
    if ($resultat)
    {
      $sql="INSERT INTO projet(id, nom, description) VALUES (".$_POST['projet_num'].",'".$_POST["projet_name"]."','".$_POST["desc"]."')";
      $result = mysqli_query($conn, $sql);
      if (!$result)
      {
        echo "Erreur d'ajout projet";
      }
    }
  }
?>
