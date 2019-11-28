<a href="?do=add" class="btn btn-primary">add admin</a>
<table  class="table table-bordered table-hover table-responsive">
	<thead>
		<tr>
			<th>name</th>
			<th>controls</th>
			


		</tr>
	</thead>
	<tbody>
		
		<?php  
		include "fun/conn.php";
		$slktadmin="SELECT * FROM admin";
		$resadminview=$conn->query($slktadmin);
       foreach ( $resadminview as $adrow) {
       	?>
       	
       	<tr>
       		<td>
       			<?php echo $adrow['name'];  ?>
       		</td>
       		<td>
       			<a href="?do=edit&id=<?php echo $adrow['id'] ?>" class="btn btn-primary">edit</a>
       			<a href="fun/deleteadmin.php?id=<?php echo  $adrow ['id'];?>" class="btn btn-danger">delete</a>
       		</td>
       	</tr>
      <?php } ?>



		
	</tbody>

</table>