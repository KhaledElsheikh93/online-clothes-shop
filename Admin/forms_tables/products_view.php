<a href="?do=add" class="btn btn-primary">Add New Product</a>
<table class="table table-bordered table-hover table-responsive">
	<thead>
		<tr>
			<th>Name</th>
			<th>Category Id</th>
			<th>Old Price</th>
			<th>New Price</th>
			<th>Images</th>
			<th>description</th>
			<th>Date</th>
			<th>Control</th>
			
		</tr>
	</thead>
	<tbody>
		  <?php 
            include "fun/connection.php";
            $select_product="SELECT * FROM products";
            $result_product=$conn->query($select_product);
            foreach ($result_product as $row_product) {         
		  ?>
	   <tr>
		  <td><?php echo $row_product['product_name'] ?></td>
		   <td>
		  <?php 
             $category=$row_product['cat_id'];
             $cat_id="SELECT * FROM category WHERE id=$category";
             $result_cat=$conn->query($cat_id);
             $row=$result_cat->fetch_assoc();
        			echo $row['cat_name'];

		  	?>
		  </td>		 
		  <td><?php echo $row_product['old_price'] ?></td>
		  <td><?php echo $row_product['price'] ?></td>
		  <td><img style="width:50px ; height: auto;" src="fun/uploads/<?php echo $row_product['images'] ?>" ></td>
		  <td><?php echo $row_product['descr'] ?></td>
		  <td><?php echo $row_product['p_date'] ?></td>
		 
		  
		  <td>
		  	<a href="?do=edit&id=<?php echo $row_product['id']; ?>" class="btn btn-success">Edit</a>
		  	<a href="fun/delete_product.php?id=<?php echo $row_product['id']; ?>" class="btn btn-danger">Delete
		  	</a>
		  	 <?php } ?>   
		  </td>
		        		 
	   </tr>
	</tbody>
</table>