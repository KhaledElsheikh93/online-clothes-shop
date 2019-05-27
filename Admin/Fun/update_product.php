<?php

  if (isset($_POST['submit'])) {
  	include "connection.php" ;

     $id         =$_POST['id'];
     $product    =$_POST['product_name'];
   	 $category   =$_POST['cat_id'];
   	 $old_price  =$_POST['old_price'];
   	 $price      =$_POST['price'];
     $descr      =$_POST['descr'];
   	
     $images     =$_FILES['images']['name'];
     $img_tmp    =$_FILES['images']['tmp_name'];

   	 if (!empty($images)) {
       move_uploaded_file($img_tmp, "uploads/images");
       $update_img="UPDATE products SET images='$images' WHERE id
           ='$id'";
       $conn->query($update_img);
     }
   
   	 

   	 $update_product="UPDATE products SET product_name='$product', cat_id='$category', old_price='$old_price',
                     price='$price',descr='$descr' WHERE id=$id ";

     $conn->query($update_product);

     header("Location:../products.php");

  }