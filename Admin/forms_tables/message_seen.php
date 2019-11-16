<?php 
if(isset($_GET['id'])){
include 'Fun/connection.php';
$id = $_GET['id'];

$sql = "SELECT * FROM messages WHERE id = $id ";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$message = $row['message'];
$name = $row['name'];
$count=$row['count_message']+1;

$update = "UPDATE messages SET read_message = '1' ,count_message=$count WHERE id = $id";
$conn->query($update);

?>
<center>
<h3>
	<label>name:</label>
	<?php echo $name; ?>
</h3>
<p><?php echo $message;?></p>
<a href="messages.php" class="btn btn-info">Back</a>
</center>
<?php }?>
