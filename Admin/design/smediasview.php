<a href="?do=add" class="btn btn-primary"> add social media </a>
<table class="table table-bordered table-hover table-responsive">
	<thead>
		
		<tr>
			<th>username</th>
			<th>caption</th>
			<th>img</th>
			
			
		</tr>
	</thead>
	<tbody>

		<?php
         include "fun/conn.php";
         $slktuser="SELECT * FROM instgram";
         $usresult=$conn->query($slktuser);
         foreach ($usresult as  $usrow) { ?>
         	<tr>
         		<td><?php echo $usrow['byy']; ?></td>
         		<td><?php echo $usrow['caption']; ?></td>
         		 <td><img style="width: 100px; height: 50px;" src="fun/uploads/<?php echo $usrow['img'];?>" </td>
         		
         		<td>
         			<a class="btn btn-success" href="?do=edit&id=<?php echo $usrow['id'];?>">edit</a>
         			<a class="btn btn-danger" href="fun/deletesmedia.php?id=<?php echo $usrow['id'];?> ">delete</a>
         		</td>

         	</tr>
       <?php  }?>

		 
	</tbody>
	

</table>

