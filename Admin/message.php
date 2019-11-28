<?php
session_start();
if (isset($_SESSION['username'])) {
include "design/header.php";
include "design/nav.php";
include "design/sidebar.php";




?>






	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">messages</li>
			</ol>
		</div><!--/.row-->

	<?php
	if ( !$_GET['do']) {
		include "design/messageview.php";}

	//
	// }elseif ($_GET['do']=="add") {
	// 	include "design/adduser.php";
	// }elseif ($_GET['do']=="edit") {
  //  include "design/edituser.php";
	//
	//
	// }}else{
	// 	header('location"login.php');
	// }

	include"design/footer.php";
	}
	?>
