<table  class="table table-bordered table-hover table-responsive">
	<thead>
		<tr>
			<th>Name</th>
			<th>Phone</th>
			<th>Email</th>
			<th>Message</th>
			<th>Date</th>
			<th>Read</th>
      <th>Count</th>
      <th>Control</th>
		</tr>
	</thead>
	<tbody>
		<?php
		include "Fun/connection.php";
       $select_meesage="SELECT * FROM messages";
       $result=$conn->query($select_meesage);
       foreach ($result as $row) {

            $name    = $row['name'];
            $phone   = $row['phone'];
            $email   = $row['email'];
            $message = $row['message'];
            $view    = $row['read_message'];
            $date    =$row['message_date'];
            $count   = $row['count_message'];
            ?>
       <tr>
       	<td><?php echo $name; ?></td>
       	<td><?php echo $phone; ?></td>
       	<td><?php echo $email; ?></td>
        <td><?php echo $message ?></td>
        <td><?php echo $date ?></td>

        
            
            <td><?php if ($view==0){echo "unread";}else{echo "read";} ?></td>
            <td><?php echo $count; ?></td>
              <td><a href="?do=view&id=<?php echo $row['id']; ?>"><button class="btn btn-info">View</button></a>

      <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $row['id']; ?>">
  Delete
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure delete <span style="color:red";><?php echo $row['message']; ?></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="fun/delete_message.php?id=<?php echo $row['id']; ?>"><button class="btn btn-danger deletee">Delete</button></a>
      </div>
    </div>
  </div>
</div></td>
    </tr>

<?php } ?>

    
  </tbody>
</table>

       