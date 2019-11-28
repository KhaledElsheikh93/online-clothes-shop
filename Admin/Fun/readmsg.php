<!DOCTYPE html>
<html>
<head>
	<style>
		body{
			font-size: 40px;
		}
		span{
			color: red;
		}
	</style>
	<title></title>
</head>
<body>
	<?php
	if (isset($_GET['id'])) {
		# code...
	
include "conn.php";
$id=$_GET['id'];
$slk="SELECT * FROM message WHERE id=$id";
$re=$conn->query($slk);
$up="UPDATE message SET status='1',view=view+1 WHERE id=$id";
$er=$conn->query($up);
foreach ($re as $value) {
  echo '<span>sender:</span>'. $value ['full_name'].'<br>';

 echo '<span>view:</span>'. $value ['view'].'<br>';
  echo '<span>message content:</span>'. $value['messae_body'];


}



 ?>
 <br>
<a href="../message.php" class="btn btn-danger">back</a>

</body>
</html>
<?php } ?>