<?php
  if (isset($_FILES['fichier']['name']))
  {
    $total = count($_FILES['fichier']['name']);
    for ($i=0; $i < $total ; $i++)
    {
      $extensions_valides = array( 'pdf' );
      $extension_upload = strtolower(  substr(  strrchr($_FILES['fichier']['name'][$i], '.')  ,1)  );

      $path = "depot\mat_".$_POST['mat'];
      if (!file_exists($path))
      {
        mkdir( $path, 0777, true);
      }
      $nom = dirname(__FILE__)."\\depot\\mat_".$_POST['mat']."\\".$_FILES['fichier']['name'][$i].".pdf";
      if ($_FILES['fichier']['error'][$i] == 0 && in_array($extension_upload,$extensions_valides)==true && $_FILES['fichier']['size'][$i] <= $_POST['MAX_FILE_SIZE'])
      {
        $resultat = move_uploaded_file($_FILES['fichier']['tmp_name'][$i],$nom);
        if ($resultat)
          echo "Transfert réussi<br/>";
        else
          echo "echec..<br/>";
      }
    }
  }
?>
