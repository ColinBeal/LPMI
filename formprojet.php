<div class="row content-rouge">
  <form method="post" action="#" enctype="multipart/form-data">
    <fieldset>
      <legend>Nouveau Projet</legend>
      <div class="col-md-5 textecontent">
        <div class="form-group row">
          <label for="projet_num" class="col-sm-3 col-form-label">Projet n°:</label>
          <div class="col-sm-9">
            <input type="number" class="form-control" id="projet_num" name="projet_num" value="1" min=0 required/>
          </div>
        </div>
        <br/>
        <div class="form-group row">
          <label for="projet_name" class="col-sm-3 col-form-label">Nom Projet:</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="projet_name" name="projet_name" required/>
          </div>
        </div>
        <br/>
        <div class="form-group row">
          <label for="desc" class="col-sm-3 col-form-label">Description:</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="desc" name="desc" required/>
          </div>
        </div>
        <br/>
      </div>
      <div class="col-md-5 textecontent">
        <label for="image">Image (max 3 fichiers et 1Mo chacun) :</label><br />
        <input type="hidden" name="MAX_FILE_SIZE" value="1000000"/>
        <input type="file" class='form-control' name="image[]" id="image" multiple="multiple" required/><br />
        <input type="submit" class='btn' name="submit" value="Envoyer" />
      </div>
    </fieldset>
  </form>
</div>
