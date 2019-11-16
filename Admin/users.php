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
				<li class="active">Users</li>
			</ol>
		</div><!--/.row-->



<?php 
    if (!isset($_GET["do"])) {
    	include "forms_tables/user_view.php";

    }elseif ($_GET["do"]=="add") {
    	include "forms_tables/add_user.php";

    }elseif ($_GET["do"]=="edit"){
    	include "forms_tables/edit_user.php";

    }
?>
<?php include "des_includes/footer.php"; ?>

 <?php }else{
 	header("Location:login.php");
 }