<a href="?do=add" class="btn btn-primary">Add New Social Media Channel</a>
<table class="table table-bordered table-hover table-responsive">
	<thead>
		<tr>
			<th>Media Channel</th>
			<th>Content</th>
			<th>Images</th>
			<th>Control</th>
		</tr>
	</thead>
	<tbody>
		<?php 
           include "Fun/connection.php";
           $select_media="SELECT * FROM media";
           $result_media=$conn->query($select_media);
           foreach ($result_media as $row) {
		 ?>
		<tr>
			<td><?php echo $row['media_name']; ?></td>
			<td><?php echo $row['content']; ?></td>
			<td><img style="width: 100px; height: 50px;" src="Fun/uploads/<?php echo $row['images']; ?>"></td>
			<td>
				<a href="?do=edit&id=<?php echo $row['id']; ?>" class="btn btn-success" >Edit</a>
				<a href="Fun/delete_media.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" >Delete</a>
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>