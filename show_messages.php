<?php

  $sql="SELECT auteur, message, date FROM messages ORDER BY ID DESC LIMIT 5";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0)
  {
    echo "
    <div class='col-md-6 messages'>
      <table class='table'>
        <thead>
          <tr>
            <th scope='col'>Auteur</th>
            <th scope='col'>Message</th>
            <th scope='col'>Date</th>
          </tr>
        </thead>
        <tbody>";

    while($row = mysqli_fetch_assoc($result))
    {
      echo "
      <tr>
        <td>".$row["auteur"]."</td>
        <td>".$row["message"]."</td>
        <td>".$row["date"]."</td>
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
