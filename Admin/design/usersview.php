<a href="?do=add" class="btn btn-primary"> add user </a>
<table class="table table-bordered table-hover table-responsive">
	<thead>
		
		<tr>
			<th>username</th>
			<th>password</th>
			<th>firstname</th>
			<th>lastname</th>
			<th>email</th>
			<th>address</th>
			<th>phone</th>
			<th>gender</th>
			<th>age</th>
			<th>control</th>

		</tr>
	</thead>
	<tbody>

		<?php
         include "fun/conn.php";
         $slktuser="SELECT * FROM users";
         $usresult=$conn->query($slktuser);
         foreach ($usresult as  $usrow) { ?>
         	<tr>
         		<td><?php echo $usrow['username']; ?></td>
         		<td><?php echo $usrow['password']; ?></td>
         		<td><?php echo $usrow['firstname']; ?></td>
         		<td><?php echo $usrow['lastname']; ?></td>
         		<td><?php echo $usrow['email']; ?></td>
         		<td><?php echo $usrow['addresss']; ?></td>
         		<td><?php echo $usrow['phone']; ?></td>
         		<td><?php  
         		if ($usrow['gender'] ==1) {
         			echo "male";
         		}else{echo "female";}
         		; ?></td>
         		<td><?php echo $usrow['age']; ?></td>
         		<td>
         			<a class="btn btn-success" href="?do=edit&id=<?php echo $usrow['id'];?>">edit</a>
         			<a class="btn btn-danger" href="fun/deleteuser.php?id=<?php echo $usrow['id'];?> ">delete</a>
         		</td>

         	</tr>
       <?php  }?>

		 
	</tbody>
	

</table>

