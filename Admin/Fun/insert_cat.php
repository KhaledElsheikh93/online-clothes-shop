<?php
   if (isset($_POST['submit'])) {
   	 include "connection.php";

   	 $cat        =$_POST['cat_name'];
   	 $img        =$_FILES['image']['name'];
   	 $img_tmp    =$_FILES['image']['tmp_name'];
   	 move_uploaded_file($img_tmp,"uploads/image");



   	 $insert_cat="INSERT INTO category(cat_name, image )VALUES ('$cat', '$img')";
   	 $conn->query($insert_cat);

   	 header("Location:../category.php");
   }