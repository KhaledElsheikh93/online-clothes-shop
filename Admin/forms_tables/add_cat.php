<form method="post" action="Fun/insert_cat.php" enctype="multipart/form-data">
  <br>
  <div class="form-group">
    <label>Cat Name</label>
    <input type="text" name="cat_name" class="form-control">
  </div><br>
  <div class="form-group">
    <label>Image</label>
    <input type="file" name="image" class="form-control">
  </div><br>
  
  <input type="submit" name="submit" value="Add Cat" class="btn btn-info">
</form>