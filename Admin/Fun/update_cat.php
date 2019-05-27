<?php

  if (isset($_POST['submit'])) {
  	include "connection.php" ;

     $id         =$_POST['id'];
     $cat        =$_POST['cat_name'];
   	 $img        =$_FILES['image']['name'];
   	 $img_tmp    =$_FILES['image']['tmp_name'];

   	 if (!empty($img)) {
       move_uploaded_file($img_tmp, "uploads/image");
       $update_img="UPDATE category SET image='$img' WHERE id='$id'";
       $conn->query($update_img);
     }
   	 
   	 $update_cat="UPDATE category SET cat_name='$cat' WHERE id=$id";

     $conn->query($update_cat);

      header("Location:../category.php");

  }