<?php 
include 'conn.php';
$st=$_POST['st'];
$usid=$_POST['usid'];
$prid=$_POST['prid'];
$date=date('Y-m-d');
$ins="INSERT INTO rate (rate,user_id,pro_id,rate_date)VALUES('$st','$usid','$prid','$date')";
$res=$conn->query($ins);


$slkfrate="select count(id),  rate from rate where pro_id ='$prid' GROUP BY rate " ;
$sum=$conn->query($slkfrate);
$total=0;
$h=0;
foreach ($sum as $key ) {
	$total+=$key['count(id)']*$key['rate'];
	$h+=$key['count(id)'];


}
$r=$total/$h;
echo $r;
$update="update products set rate = '$r' WHERE id='$prid'";
$conn->query($update);
 