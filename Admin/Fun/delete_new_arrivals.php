<?php

include "connection.php";

$id=$_GET['id'];

$delete ="DELETE FROM collection WHERE id=$id";
$conn->query($delete);

header("Location:../new_arrivals.php");