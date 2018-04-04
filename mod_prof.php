<?php

  $sql="SELECT id, nomP FROM professeur ORDER BY id desc";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0)
  {
    echo "
    <div class='col-md-6 messages'>
      <table class='table'>
        <thead>
          <tr>
            <th scope='col'>Professeur</th>
            <th scope='col'>Supprimer</th>
          </tr>
        </thead>
        <tbody>";

    while($row = mysqli_fetch_assoc($result))
    {
      echo "
      <tr>
        <td>".$row["nomP"]."</td>
        <td><button class='suppr' type='button' id='".$row["id"]."' name='professeur'>Supprimer</button></td>
      </tr>
      ";
    }
    echo "</tbody></table></div>";
  }
  else
  {
    echo "aucun messages à afficher";
  }
?>
