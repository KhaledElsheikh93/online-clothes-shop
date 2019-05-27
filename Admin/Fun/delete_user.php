<?php

include "connection.php";

 $id = $_GET['id'];

 $delete="DELETE FROM users WHERE id=$id";
 $conn->query($delete);

 header("Location:../users.php");