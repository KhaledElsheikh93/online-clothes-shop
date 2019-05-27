<a href="?do=add" class="btn btn-primary">Add NewUser</a>
<table class="table table-bordered table-hover table-responsive">
	<thead>
		<tr>
			<th>username</th>
			<th>firstname</th>
			<th>lastname</th>
			<th>email</th>
			<th>password</th>
			<th>gender</th>
			<th>adress</th>
			<th>phone</th>
			<th>age</th>
			<th>nationality</th>
			<th>date</th>
			<th>Control</th>
		</tr>
	</thead>
	<tbody>
			<?php
             include "fun/connection.php";
             $select = "SELECT * FROM users";
             $result =$conn->query($select);
             foreach ($result as $row_user) {
            
			  ?>
	    <tr>
			<td><?php echo $row_user['username'] ?></td>
			<td><?php echo $row_user['firstname'] ?></td>
			<td><?php echo $row_user['lastname'] ?></td>
			<td><?php echo $row_user['email'] ?></td>
			<td><?php echo $row_user['password'] ?></td>
			<td><?php echo $row_user['gender'] ?></td>
			<td><?php echo $row_user['adress'] ?></td>
			<td><?php echo $row_user['phone'] ?></td>
			<td><?php echo $row_user['age'] ?></td>
			<td><?php echo $row_user['nationality'] ?></td>
			<td><?php echo $row_user['u_date'] ?></td>
			<td>
			<a href="?do=edit&id=<?php echo $row_user['id'] ?>" class="btn btn-success"> Edit</a>
		   	<a href="fun/delete_user.php?id=<?php echo $row_user['id'] ?>" class="btn btn-danger">Delete</a>

		   	<?php } ?>
		   </td>
		
		
		</tr>
	</tbody>

</table>
