<?php 


include "conn.php";
$x=$_POST['x'];
$id=$_POST['id'];
$up="UPDATE cart SET quantity= $x , total_price = price * $x  WHERE  product_id=$id";
$res=$conn->query($up);



 ?>