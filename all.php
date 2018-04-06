<?php
  if(isset($_POST["reset"]))
  {
    session_unset();
    session_destroy();
    header('Location: index.php');
    exit;
  }
  if (!isset($_SESSION["login"]) OR !isset($_SESSION["password"]))
  {
    if (isset($_POST["login"]) && isset($_POST["password"]))
    {
      if (preg_match("/[^A-Za-z0-9]/", $_POST["login"]))
      {
        header('Location: ?log=nonaut');
        exit();
      }
      else
      {
        $password = htmlentities($_POST["password"]);
        $login = htmlentities($_POST["login"]);
      }
      if ($_POST["submit"]=="enregistrement")
      {
        $sql = "INSERT INTO utilisateurs (login, pass) VALUES ('" .$login. "','" .$password. "')";
        $result2 = mysqli_query($conn, $sql);
        if($result2==true)
        {
          $_SESSION["login"] = $login;
          $_SESSION["password"] = $password;
          $_SESSION["type"] = "visiteur";
          header('Location: ?');
          exit;
        }
        else
        {
          header('Location: ?log=allex');
          exit;
        }
      }
      if($_POST["submit"]=="connexion")
      {
        $sql = "SELECT id, type FROM utilisateurs WHERE login='".$login."' AND pass='".$password."'";
        $result2 = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result2) > 0)
        {
          $row2 = mysqli_fetch_assoc($result2);
          $_SESSION["login"] = $login;
          $_SESSION["password"] = $password;
          $_SESSION["type"] = $row2["type"];
          header('Location: espace_perso.php');
          exit;
        }
        else
        {
          header('Location: ?log=nonex');
          exit;
        }
        mysqli_close($conn);
      }
    }
    if(isset($_GET["log"]))
    {
      if($_GET["log"]=="allex")
        echo "Erreur d'Enregistrement";
      if($_GET["log"]=="nonex")
        echo "Erreur de Connexion";
      if ($_GET["log"]=="nonaut")
        echo "Erreur de Connexion";
    }
  }

?>
