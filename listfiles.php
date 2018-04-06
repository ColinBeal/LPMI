<?php
  $sql = "SELECT id, nomUE FROM unite_enseignement";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0)
  {
    while($row = mysqli_fetch_assoc($result))
    {
      echo  "
      <button class='collapsible'>".$row["nomUE"]."</button>
      <div class='content_coll'>";

      $sql2 = "SELECT M.id ,nomM, nomP FROM matiere M, professeur P WHERE M.id_prof=P.id AND M.id_ue=".$row["id"];
      $result2 = mysqli_query($conn, $sql2);
      if (mysqli_num_rows($result2) > 0)
      {
        while($row2 = mysqli_fetch_assoc($result2))
        {
          $path = "depot/mat_".$row2["id"];
          if (!file_exists($path))
          {
            mkdir( $path, 0777, true);
          }
          $files1 = scandir($path,1);
          echo "<button class='collapsible'>".$row2["nomM"]." -- ".$row2["nomP"]."</button>
                  <div class='content_coll'>";
                  for ($i=0; $i < count($files1)-2; $i++)
                  {

                    echo "<div class='row'><div class='col-md-9'><a href='".$path."/".$files1[$i]."'><p class='txtblack'>".$files1[$i]."</p></a></div>";
                    if (isset($_SESSION["type"]) && $_SESSION["type"]=="admin")
                    {
                      echo "<div class='col-md-3'><button class='suppr' type='button' name='file' id='".$path."/".$files1[$i]."'>Supprimer</button></div>";
                    }
                    echo "</div>";
                  }
            echo "</div>";
        }
      }
      echo "</div>";
    }
  }
  else
  {
    header('Location: index.php');
    exit;
  }
 ?>
