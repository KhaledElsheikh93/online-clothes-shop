<?php 
include "conn.php";
$rg=$_POST['rg'];
$slk="SELECT id,blog_tittle FROM blogs where blog_tittle like '%$rg%' ";
$res=$conn->query($slk);
foreach ($res as $row) {?>
	<li><?php echo $row['blog_tittle']?></li>
	<?php
}




 ?>