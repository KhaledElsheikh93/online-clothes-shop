<a href="?do=add" class="btn btn-primary">Add New category</a> 
<table class="table table-bordered table-hover table-responsive">
	<thead>
		<tr>
			<th>Cat Name</th>
			<th>Image</th>
			<th>Control</th>
		</tr>
	</thead>
	<tbody>
		<?php
		  include "Fun/connection.php" ;
          $select_cat="SELECT * FROM category";
          $result_cat=$conn->query($select_cat);
         foreach ($result_cat as $row_cat) {
         
		?>
		<tr>
		  <td><?php echo $row_cat['cat_name'] ?></td>
		  <td><img style="width: 100px; height: 50px;" src="Fun/uploads/<?php echo $row_cat['image'] ?>"></td>
		  	<td>
				<a href="?do=edit&id=<?php echo $row_cat['id']; ?>" class="btn btn-success ">Edit</a>
				<a href="Fun/delete_cat.php?id=<?php echo $row_cat['id'];?>" class="btn btn-danger ">Delete</a>

        <?php } ?>      
			</td>
	    </tr>
		
	</tbody>
</table>

