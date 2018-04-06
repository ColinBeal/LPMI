<?php
  if (isset($_POST["type"]) && isset($_POST["id"]))
  {
    if ($_POST["type"]=="file")
    {
      $file = $_POST["id"];
      if (!unlink($file))
      {
        alert ("Error deleting $file");
      }
      else
      {
        alert ("Deleted $file");
      }
    }
    else
    {
      include "connectdb.php";
      $type = mysqli_real_escape_string($conn,$_POST["type"]);
      $id = mysqli_real_escape_string($conn,$_POST["id"]);
      $sql="DELETE FROM ".$type." WHERE id=".$id;
      $result = mysqli_query($conn, $sql);
      if (!$result)
      {
        echo "echec de suppression";
      }
    }

  }
?>
