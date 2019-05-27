<?php  

  include "connection.php";
  
  $id=$_GET['id'];

  $delete ="DELETE FROM comments WHERE id=$id"; 
  $conn->query($delete);

  header("Location:../comments.php");