<?php
if (isset($_POST["type"]))
{
  switch ($_POST["type"])
  {
    case 'ue':
      {
        if (isset($_POST["texte"]) &&isset($_POST["id"]))
        {
          include "connectdb.php";

          $texte = mysqli_real_escape_string($conn, $_POST["texte"]);
          $id = mysqli_real_escape_string($conn, $_POST["id"]);
          $sql="UPDATE unite_enseignement SET descriptionUE = '".$texte."' WHERE id=".$id;
          $result = mysqli_query($conn, $sql);
          if (!$result)
          {
            echo "erreur d'ajout message";
          }
        }
        break;
      }

    case 'prof':
    {
      if (isset($_POST["id"]) && isset($_POST["texte"]))
      {
        include "connectdb.php";

        $texte = mysqli_real_escape_string($conn, $_POST["texte"]);
        $id = mysqli_real_escape_string($conn, $_POST["id"]);
        $sql="UPDATE professeur SET descriptionP = '".$texte."' WHERE id=".$id;
        $result = mysqli_query($conn, $sql);
        if (!$result)
        {
          echo "erreur d'ajout message";
        }
      }
      break;
    }

    case 'mat':
    {
      if (isset($_POST["id"]) && isset($_POST["texte"]))
      {
        include "connectdb.php";

        $texte = mysqli_real_escape_string($conn, $_POST["texte"]);
        $id = mysqli_real_escape_string($conn, $_POST["id"]);
        $sql="UPDATE matiere SET descriptionM = '".$texte."' WHERE id=".$id;
        $result = mysqli_query($conn, $sql);
        if (!$result)
        {
          echo "erreur d'ajout message";
        }
      }
      break;
    }

    case 'proj':
    {
      if (isset($_POST["id"]) && isset($_POST["texte"]))
      {
        include "connectdb.php";

        $texte = mysqli_real_escape_string($conn, $_POST["texte"]);
        $id = mysqli_real_escape_string($conn, $_POST["id"]);
        $sql="UPDATE projet SET description = '".$texte."' WHERE id=".$id;
        $result = mysqli_query($conn, $sql);
        if (!$result)
        {
          echo "erreur d'ajout message";
        }
      }
      break;
    }


    default:
      # code...
      break;
  }
}

?>
