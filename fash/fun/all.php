<?php
include "conn.php" ;
$slkall="SELECT * FROM products";
$reees=$conn->query($slkall);
header('location:../product.php');





