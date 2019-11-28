<?php
if (isset($_POST['submit'])) {
	session_start();
	 include "conn.php";
   $username=$_POST['username'];
   $password=$_POST['password'];
  
  $slkt="SELECT * FROM admin WHERE name='$username' AND password='$password'";
  $slktresult=$conn->query($slkt);
  $count =  $slktresult->num_rows;
  if ( $count > 0) {
  	$_SESSION['username']= $username;
  	header("location:../index.php");

   }else {
   	header("location:../login.php");
   }   
}


