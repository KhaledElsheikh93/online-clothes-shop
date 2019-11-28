<a href="?do=add" class="btn btn-primary"> add comment </a>
<table class="table table-bordered table-hover table-responsive">
	<thead>
		
		<tr>
			<th>user ID</th>
			<th>blog ID</th>
			<th>comment</th>
			<th>comment date</th>
         <th>control</th>
		
		</tr>
	</thead>
	<tbody>

		<?php
         include "fun/conn.php";
         $slktuser="SELECT * FROM comments";
         $usresult=$conn->query($slktuser);
         foreach ($usresult as  $usrow) { ?>
         	<tr>
         		<td>

                  <?php
                   $usid= $usrow['user_id'];
                  $slkusid="SELECT * FROM users WHERE id=$usid";
                  $usslkres=$conn->query($slkusid);
                  $rowus=$usslkres->fetch_assoc();
                  echo $rowus['username'];

                   ?>
                     

                  </td>
         		<td>
                  <?php  
                  
                   echo $usrow['blog_id'];
                   ?>
              

               </td>
         		<td><?php echo $usrow['comment']; ?></td>
         		<td><?php echo $usrow['com_date']; ?></td>
         		
         		<td>
         			<a class="btn btn-success" href="?do=edit&id=<?php echo $usrow['id'];?>">edit</a>
         			<a class="btn btn-danger" href="fun/deleteuser.php?id=<?php echo $usrow['id'];?> ">delete</a>
         		</td>

         	</tr>
       <?php  }?>

		 
	</tbody>
	

</table>

