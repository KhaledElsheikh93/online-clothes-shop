<?php
   if (isset($_POST['submit'])) {
   	 include "connection.php";

      
   	 $product    =$_POST['product_name'];
   	 $category   =$_POST['cat'];
   	 $old_price  =$_POST['old_price'];
   	 $price      =$_POST['price'];
   	 $img        =$_FILES['image']['name'];
   	 $img_tmp    =$_FILES['images']['tmp_name'];
   	 move_uploaded_file($img_tmp,"uploads/images");
   	 $descr      =$_POST['descr'];
   	 $date       =date("Y-m-d");


   	 $insert="INSERT INTO products (product_name, cat_id, old_price, price, images, descr, p_date)
   	               VALUES('$product', '$category', '$old_price', '$price', '$img', '$descr', '$date')";
   	 $conn->query($insert);

   	 header("Location:../products.php");
   }