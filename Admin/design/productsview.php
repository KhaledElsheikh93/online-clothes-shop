<a class="btn btn-primary" href="?do=add">add product</a>
<table class="table table-bordered table-hover table-responsive">
	

	<thead>
		
		<tr>
			<th>product name</th>
			<th>old price</th>
			<th>product price</th>
			<th>product date</th>
			<th>product des</th>
			<th>product img</th>
			<th>cat id</th>
			<th>control</th>
		</tr>
	</thead>
	<tbody>
		
		<?php 
		include "fun/conn.php";
        $slkpr="SELECT * FROM products";
        $prores=$conn->query($slkpr);
        foreach ($prores as   $prorow) {?>
        	<tr>
        		<td><?php echo $prorow['product_name'];?> </td>
        		<td><?php echo $prorow['old_price'];?> </td>
        		<td><?php echo $prorow['product_price'];?> </td>
        		<td><?php echo $prorow['product_date'];?> </td>
        		<td><?php echo $prorow['product_des'];?> </td>
        		<td> <img style="width:100px;height: 100px" src="fun/uploads/<?php echo $prorow['img'];?>" </td>
        		<td>
        		<?php
        		$caaat= $prorow['cat_id'];
        			$catid="SELECT * FROM categeory WHERE id=$caaat";
        			$rabt=$conn->query($catid);
        			$row=$rabt->fetch_assoc();
        			echo $row['cat_name'];

                       ?>


        		 </td>
        	 <td>
        	 	<a class="btn btn-primary" href="?do=edit&id= <?php echo $prorow['id'];?> ">edit</a>
        	 	<a class="btn btn-danger"  href="fun/deleteproduct.php?id=<?php echo $prorow['id'];?>">delete</a>
        	 </td>
        	</tr>

        	
       <?php }?>
		
	</tbody>
</table> 