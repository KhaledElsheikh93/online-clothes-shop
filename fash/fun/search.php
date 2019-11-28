<?php 
include "conn.php";
$sea=$_POST['sea'];
$slk="SELECT id,product_name FROM products WHERE product_name like '%$sea'";
$res=$conn->query($slk);
foreach ($res as $row) {
	?>
	<a href="product-detail.php?id=<?php echo $row['id']?>"><li><?php echo $row['product_name'] ?></li></a>
	<?php
}


 ?>