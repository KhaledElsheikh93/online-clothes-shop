<a class="btn btn-primary " href="?do=add">Add New</a>
<table class="table table-bordered table-hover table-responsive">
	<thead>
		<tr>
			<th>Ahmin Name</th>
			<th>Control</th>
		</tr>
	</thead>
	<tbody>
		<?php  

		     include "fun/connection.php";

             $select_admin = "SELECT * FROM admin";
             $result_admin =$conn->query($select_admin);
             foreach ($result_admin as $row_admin ) {
                     	
		?>
		<tr>
			<td><?php echo $row_admin['name']; ?></td>
			<td>
				<a class="btn btn-success" href="?do=edit&id=<?php echo $row_admin['id']; ?>">Edit</a>
				<a class="btn btn-danger" href="fun/delete_admin.php?id=<?php echo $row_admin['id'];?>">Delete</a>

               <?php } ?>
			</td>
		</tr>
	</tbody>
</table>