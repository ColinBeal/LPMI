<div class="row content-rouge">
  <form method='post' action='#' enctype='multipart/form-data'>
    <div class="col-md-7 textecontent">
        <?php
        $sql = "SELECT M.id ,nomM, nomP FROM matiere M, professeur P WHERE M.id_prof=P.id ORDER BY nomM ASC";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0)
        {
          echo  "Matiere : <select name='mat'>";
          while($row = mysqli_fetch_assoc($result))
          {
            echo "<option value='". $row["id"]."'>".$row["nomM"]." -- ".$row["nomP"]."</option>";
          }
          echo "</select><br/>";
        }
        ?>
    </div>
    <div class="col-md-3 textecontent">
      <label for='fichier'>Fichier (5 Mo max) :</label><br />
      <input type='hidden' name='MAX_FILE_SIZE' value='5000000'/>
      <input type='file' name='fichier[]' id='image' multiple='multiple'/><br/>
      <input type='submit' name='submit' value='Envoyer' />
    </div>
  </form>
</div>
