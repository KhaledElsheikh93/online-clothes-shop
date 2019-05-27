<?php  

 include "connection.php";

 $id=$_GET['id'];

 $delete="DELETE FROM blogs WHERE id= $id";
 $conn->query($delete);

 header("Location:../blogs.php");