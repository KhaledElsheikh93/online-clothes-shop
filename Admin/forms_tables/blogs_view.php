<a href="?do=add" class="btn btn-primary">Add New Blog</a> 
<table class="table table-bordered table-hover table-responsive">
	<thead>
		<tr>
			<th>Title</th>
			<th>Content</th>
			<th>Author</th>
			<th>Images</th>
			<th>Date</th>
			<th>Control</th>
		</tr>
	</thead>
	<tbody>
		<?php
		  include "Fun/connection.php" ;
          $select_blog="SELECT * FROM blogs";
          $result_blog=$conn->query($select_blog);
          foreach ($result_blog as $row_blog) {
          	
		?>
	    <tr>
		  <td><?php echo $row_blog['blog_title'] ?></td>
		  <td><?php echo $row_blog['content'] ?></td>
		  <td><?php echo $row_blog['author'] ?></td>
		  <td><img style="width: 100px; height: 50px;" src="Fun/uploads/<?php echo $row_blog['images']; ?>"></td>
		  <td><?php echo $row_blog['b_date'] ?></td>
		  	<td>
				<a href="?do=edit&id=<?php echo $row_blog['id']; ?>" class="btn btn-success ">Edit</a>
				<a href="Fun/delete_blog.php?id=<?php echo $row_blog['id'];?>" class="btn btn-danger ">Delete</a>
               <?php } ?>
               
			</td>
	    </tr>
		
	</tbody>
</table>
