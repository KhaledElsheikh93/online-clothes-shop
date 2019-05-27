<?php

include "connection.php";

$id=$_GET['id'];

$delete ="DELETE FROM products WHERE id=$id";
$conn->query($delete);

header("Location:../products.php");