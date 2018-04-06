<?php
  if (!isset($_SESSION["login"]) OR !isset($_SESSION["password"]))
  {
    echo "
    <form action='#' method='post'>
    <div class='form-group row'>
    <label for='inputlogin' class='col-sm-2 col-form-label'>Login</label>
    <div class='col-sm-10'>
      <input type='text' class='form-control' id='inputlogin' placeholder='login' name='login' required>
    </div>
    </div>
    <div class='form-group row'>
    <label for='inputPassword' class='col-sm-2 col-form-label'>Mot de passe</label>
    <div class='col-sm-10'>
      <input type='password' class='form-control' id='inputPassword' placeholder='Mot de passe' name='password' required>
    </div>
    </div>
        <input class='btn btn-primary' type='submit' name='submit' value='connexion'/>
        <input class='btn btn-primary' type='submit' name='submit' value='enregistrement'/>
      </div>";
    }
    else
    {
      if(isset($_GET["log"]))
      {
        header('Location: ?');
        exit;
      }
      echo "
      <div>
          <p> Bonjour ".$_SESSION["login"]."! </p>
      </div>
      ";
      echo "
        <form action='?' method='post'>
          <input type='submit' name='reset' value='deconnexion'/>
        </form>";
    }
?>
