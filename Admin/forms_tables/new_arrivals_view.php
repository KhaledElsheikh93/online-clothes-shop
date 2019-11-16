<a href="?do=add" class="btn btn-primary">Add New Arrival</a>
<table class="table table-bordered table-hover table-responsive">
	<thead>
		<tr>
			<th>Collection Name</th>
			<th>Images</th>
			<th>Date</th>
		</tr>
	</thead>
	<tbody>
		<?php
           include "Fun/connection.php";
           $select_collection="SELECT * FROM collection";
           $result_collection=$conn->query($select_collection);
           foreach ($result_collection as $row_collection) {
		 ?>
		 <tr>
		 	<td><?php echo $row_collection['collection_name'] ?></td>
		 	<td><img  style="width: 100px; height: 50px;"
		 	 src="Fun/uploads/<?php echo $row_collection['images'] ?>"></td>
		 	 <td>
		 	 	<a href="?do=edit&id=<?php echo $row_collection['id']; ?>" class="btn btn-success">Edit</a>
		 	    <a href="Fun/delete_new_arrivals.php?id=<?php echo $row_collection['id']; ?>" 
		 	 	class="btn btn-danger" >Delete</a>
		 	 </td>
		 </tr>
		<?php } ?>
		
	</tbody>
</table>
     
      

