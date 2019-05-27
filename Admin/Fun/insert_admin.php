
<?php

  if (isset($_POST['submit'])) {
    
    include "connection.php";
    $name     = $_POST['name'];
    $password = md5($_POST['password']);

    $insert="INSERT INTO admin (name , password) VALUES ('$name' , '$password' )";
    $conn->query($insert);

    header("Location:../index.php");
  }