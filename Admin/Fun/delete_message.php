<?php 
 
 include "connection.php";

 $id=$_GET['id'];

 $delete="DELETE FROM meesages WHERE id=$id";
 $conn->query($delete);

 header("Location:../messages.php");