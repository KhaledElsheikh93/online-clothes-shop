<?php 
 
  include "connection.php";
  $quantity=$_POST['quantity'];
  $id=$_POST['id'];

  $update="UPDATE cart SET quantity=$quantity , total_price=price*$quantity WHERE product_id=$id ";
  $result=$conn->query($update);