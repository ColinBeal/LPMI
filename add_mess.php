<?php
  if (isset($_POST["message"]) && isset($_POST["submit"]) && isset($_SESSION['login']))
  {
    $message = mysqli_real_escape_string($conn,$_POST["message"]);
    $sql="INSERT INTO messages(message, date , auteur) VALUES ('".$message."','". date('Y-m-d')."','".$_SESSION['login']."')";
    $result = mysqli_query($conn, $sql);
    if (!$result)
    {
      echo "erreur d'ajout message : ".$_POST["message"].date("Y-m-d");
    }
    else
    {
      header('Location: espace_perso.php');
      exit;
    }
  }
?>
