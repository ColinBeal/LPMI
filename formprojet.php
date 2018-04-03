<form method="post" action="#" enctype="multipart/form-data">
    <p>Projet n°:<input type="number" name="projet_num" value="1" min=0/></p>
    <p>Nom Projet<input type="text" name="projet_name"/></p>
     <label for="image">Image (max 3 fichiers et 1Mo chacun) :</label><br />
     <input type="hidden" name="MAX_FILE_SIZE" value="1000000"/>
     <input type="file" name="image[]" id="image" multiple="multiple"/><br />
     <textarea name="desc" placeholder="Description du Projet"></textarea>
     <input type="submit" name="submit" value="Envoyer" />
</form>
