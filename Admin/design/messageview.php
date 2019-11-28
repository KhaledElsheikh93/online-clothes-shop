<table  class="table table-bordered table-hover table-responsive">
	<thead>
		<tr>
			<th>name of sender</th>
			<th>email of sender</th>
      	
        	<th>phone number</th>
          	<th>date</th>
            <th>content</th>
			<th>status</th>



		</tr>
	</thead>
	<tbody>

		<?php
		include "fun/conn.php";
		$slktadmin="SELECT * FROM message";
		$resadminview=$conn->query($slktadmin);
       foreach ( $resadminview as $adrow) {
       	?>

       	<tr>
       		<td>
      <?php echo $adrow['full_name'];  ?>
       		</td>
       		<td>

      <?php echo $adrow['emmail'] ;?>
            	</td>
             
									<td>

	<?php echo $adrow['phone_number'] ;?>
											</td>
											<td>
	<?php echo $adrow['date_time'] ;?>
													</td>
	<td>

	<?php echo $adrow['messae_body'] ;?>
															</td>
															<td>

	<?php  
	if ($adrow['status']==0) {
		echo "unread";
	}else{echo "read";}
	
	?>
																	</td>


<td>
			<a href="fun/readmsg.php?id=<?php echo  $adrow ['id'];?>" class="btn btn-primary">read message</a>
       			<a href="fun/deletemess.php?id=<?php echo  $adrow ['id'];?>" class="btn btn-danger">delete</a>

</td>
       	</tr>
      <?php } ?>




	</tbody>

</table>
