<?php
  if (isset($_POST["message"]) && isset($_POST["submit"]))
  {
    $sql="INSERT INTO messages(message, date) VALUES ('".$_POST["message"]."', date())";
    $result = mysqli_query($conn, $sql);
    if (!$result)
    {
      echo "erreur d'ajout message";
    }
  }
?>

<form method="post" action="#" class="col-md-8">
  <textarea name="message" placeholder="Entrez votre message"></textarea>
  <input type="submit" name="submit" value="Envoyer" />
</form>
