<?php 
 

 if (isset($_POST['login'])) {
     session_start();
     include "connection.php";
      
      $name =$_POST['name'];
      $password=$_POST['password'];



 $select ="SELECT * FROM admin WHERE name='$name' AND password='$password'";
 $result =$conn->query($select);
 $count  =$result->num_rows;

 if ($count > 0) {
    $_SESSION['name']=$name;
      header("Location:../index.php");

   }else{
     header("Location:../login.php");

   } 

}