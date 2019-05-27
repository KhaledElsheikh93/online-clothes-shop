<?php 
include "des_includes/header.php";
if (isset($_SESSION['name'])) {
	include "des_includes/sidebar.php";
	include "des_includes/navbar.php";
	?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Messages</li>
			</ol>
		</div><!--/.row-->

		<?php 
		if (!$_GET['do']) {
			include "forms_tables/message_view.php";
		
		}elseif ($_GET['do']=="view") {
			include "forms_tables/message_seen.php";
		}

		?>


		<?php include "des_includes/footer.php"; ?>

	 <?php } else{
	 	header("Location:login.php");
	 }  ?>