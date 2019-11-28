
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		body{margin-left: 50px}
	</style>
</head>
<body>
	<form method="post" action="fun/insertproduct.php" enctype="multipart/form-data">

	
	<div class="form-group">
		<label>product name</label>
		<input class="form-control" type="text" name="name">
	</div>
	<div class="form-group">
		<label>old price</label>
		<input class="form-control" type="text" name="oldprice">

	</div>
	<div class="form-group">
		<label>produc price</label>
		<input class="form-control" type="text" name="price">
	</div>
	
	<div class="form-group">
		<label>produt des</label>
		<input class="form-control" type="text" name="des">
	</div>
	<div class="form-group">
		<label>img</label>
		<input class="form-control" type="file" name="img">
	</div><br>
	
	<div class="form-group">
		<label>cat id</label>
		<input class="form-control" type="text" name="catid">
	</div>
	
	<input type="submit" name="add" value="add" class="btn btn-success">

</form>

</body>
</html>
