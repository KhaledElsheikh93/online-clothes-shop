<a href="?do=add" class="btn btn-primary"> Add Comment </a>
<table class="table table-bordered table-hover table-responsive">
	<thead>
		<tr>
			<th>User ID</th>
			<th>Blog ID</th>
			<th>Comment</th>
			<th>Date</th>
			<th>Control</th>
		</tr>
	</thead>
	<tbody>
		<?php
		include "Fun/connection.php";
        $select="SELECT * FROM comments";
        $result=$conn->query($select);
        foreach ($result as $row_comment) { ?>
        	<tr>
        		<td>
        			<?php 
                     $user_id    =$row_comment['user_id'];
                     $select_user="SELECT * FROM users WHERE id='$user_id'";
                     $result_user=$conn->query($select_user);
                     $rows       =$result_user->fetch_assoc();
                      echo $rows['username'];
        			?>
        		</td>
        		<td>
              <?php 
                $blog_id     =$row_comment['blog_id'];
                $select_blog ="SELECT * FROM blogs WHERE id='$blog_id'";
                $result_blog =$conn->query($select_blog);
                $row_blog    =$result_blog->fetch_assoc();
                    echo $row_blog['blog_title'];
              ?>
              
            </td>
        		<td><?php $row_comment['comment'] ?></td>
        		<td><?php $row_comment['com_date'] ?></td>
        		<td>
        			<a href="?do=edit&id=<?php echo $row_comment['id']; ?>" class="btn btn-success">Edit</a>
        			<a href="fun/delete_comment.php?id=<?php echo $row_comment['id']; ?>" class="btn btn-danger">Delete</a>
        		</td>
        	</tr>
        <?php } ?>     
		
	</tbody>
</table>