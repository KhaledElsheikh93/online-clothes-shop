<a class="btn btn-primary" href="?do=add">add blog</a>
<table class="table table-bordered table-hover table-responsive">
	

	<thead>
		
		<tr>
			<th>blog tittle</th>
			<th>content</th>
			<th>blog image</th>
			<th>blog comment</th>
			<th>date</th>
			
			<th>controls</th>
			
		</tr>
	</thead>
	<tbody>
		
		<?php 
		include "fun/conn.php";
        $slkbl="SELECT * FROM blogs";
        $blores=$conn->query($slkbl);
        foreach ($blores as   $blorow) {?>
        	<tr>
        		<td><?php echo $blorow['blog_title'];?> </td>
        		<td><?php echo $blorow['content'];?> </td>
        		<td><img style="width: 100px; height: 50px;" src="fun/uploads/<?php echo $blorow['images'];?>" </td>
        		<td><?php echo $blorow['blog_comments'];?> </td>
        		<td><?php echo $blorow['b_date'];?> </td>
        		<td><?php echo $blorow['author'];?> </td>
        	 <td>
        	 	<a class="btn btn-primary" href="?do=edit&id= <?php echo $blorow['id'];?> ">edit</a>
        	 	<a class="btn btn-danger"  href="fun/deleteblog.php?id=<?php echo $blorow['id'];?>">delete</a>
        	 </td>
        	</tr>

        	
       <?php }?>
		
	</tbody>
</table> 