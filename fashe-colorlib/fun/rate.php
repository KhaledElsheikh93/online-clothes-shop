<?php 
 
  include "connection.php";
  $star       =$_POST['star'];
  $user_id    =$_POST['user_id'];
  $product_id =$_POST['product_id'];
  


  $insert_rate="INSERT INTO rate ( user_id, product_id, rate) VALUES ('$user_id','$product_id','$star') ";
  $conn->query($insert_rate);


/* $st = "SELECT SUM(rate), COUNT(id) FROM rate WHERE product_id= '$product_id'";
 $sum = $conn->query($st)->fetch_assoc();

echo $sum['SUM(rate)']/$sum['COUNT(id)'];*/



$st = "SELECT COUNT(id), rate FROM rate WHERE product_id= '$product_id' GROUP BY rate";
$sum = $conn->query($st);

$total = 0;
$h=0;
foreach ($sum as $key) {
	$total += $key['COUNT(id)'] * $key['rate'];
	$h += $key['COUNT(id)'];
}

$r = $total/$h;

echo $r;

$update="UPDATE products SET rate='$r' WHERE id='$product_id'";
$conn->query($update);

?>