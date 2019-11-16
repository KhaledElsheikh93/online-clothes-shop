<?php
  include "des_includes/header.php";
  if (isset($_SESSION['name'])) {
  	include "des_includes/navbar.php";
  	include "des_includes/sidebar.php";
 ?>
 <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">New Arrivals</li>
			</ol>
		</div><!--/.row-->


<?php 
   if (!isset($_GET['do'])) {
        include "forms_tables/new_arrivals_view.php";


   }elseif ($_GET['do']=='add') {
        include "forms_tables/add_new_arrivals.php";


   }elseif ($_GET['do']=='edit') {
        include "forms_tables/edit_new_arrivals.php";
   }
?>

  <?php include "des_includes/footer.php"; ?>
  <?php  }else {
    header("Location:../new_arrivals.php");
  } 
  
    
     	 
