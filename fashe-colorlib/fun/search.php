<?php 

 include "connection.php";
 $sea=$_POST['sea'];
 $search="SELECT id,product_name FROM products WHERE product_name LIKE '%$sea%'";
 $result=$conn->query($search);

 foreach ($result as $row) {  ?>
 	<a href="product_detail.php?id=<?php echo $row['id'] ?>"><li><?php echo $row['product_name'] ?></li></a>
 	<?php } ?>
