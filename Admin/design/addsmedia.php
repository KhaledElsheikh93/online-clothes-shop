
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		body{margin-left: 50px}
	</style>
</head>
<body>
	<form method="post" action="fun/insertsmedia.php" enctype="multipart/form-data">

	
	<div class="form-group">
		<label>by</label>
		<input class="form-control" type="text" name="by">
	</div>
	<div class="form-group">
		<label>caption</label>
		<input class="form-control" type="text" name="caption">

	</div>
	<div class="form-group">
		<label>image</label>
		<input class="form-control" type="file" name="img">
	</div>
	
	
	<input type="submit" name="add" value="add" class="btn btn-success">

</form>

</body>
</html>
