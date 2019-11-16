<?php
  if (isset($_POST['submit'])) {
  	include "connection.php" ;

     $id         =$_POST['id'];
     $collection =$_POST['collection_name'];
   	 $img        =$_FILES['images']['name'];
   	 $img_tmp    =$_FILES['images']['tmp_name'];

   	 if (!empty($img)) {
       move_uploaded_file($img_tmp, "uploads/images");
       $update_img="UPDATE collection SET images='$img' WHERE id='$id'";
       $conn->query($update_img);
     }
   	 
   	 $update_collection="UPDATE collection SET collection_name='$collection' WHERE id=$id";

     $conn->query($update_cat);

      header("Location:../new_arrivals.php");

  }