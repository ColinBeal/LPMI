<?php

  $sql="SELECT auteur, message, date FROM messages ORDER BY ID DESC LIMIT 5";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0)
  {
    while($row = mysqli_fetch_assoc($result))
    {
      echo "
      <div>
        <p>".$row["auteur"]."</p>
        <p>".$row["message"]."</p>
        <p>".$row["date"]."</p>
      </div><br/><br/>
      ";
    }
  }
?>
