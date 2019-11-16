<?php 
 include "connection.php";

 $id=$_GET['id'];

 $delete="DELETE FROM media WHERE id=$id";
 $conn->query($delete);

 header("Location:../media.php");