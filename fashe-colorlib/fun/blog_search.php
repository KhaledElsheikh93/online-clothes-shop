<?php
  
  include "connection.php";
  $rg=$_POST['rg'];
  $search="SELECT id,blog_title FROM blogs WHERE blog_title LIKE '%$rg%' ";
  $result=$conn->query($search);
  foreach ($result as $row_search) { ?>
  	<li><?php echo $row_search['blog_title'] ?></li>
  
  <?php } ?>