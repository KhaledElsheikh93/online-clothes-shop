<?php 	include "fun/conn.php";
					$msslk="SELECT * FROM messages";
					$res=$conn->query($msslk);
					$row=$res-> num_rows;

					$unread="SELECT * FROM messages WHERE read_message='0'";
					$unres=$conn->query($unread);
					$unrow=$unres-> num_rows;
					 ?>

<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Lumino</span>Admin</a>
				<ul class="nav navbar-top-links navbar-right">
				
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info"><?php echo $unrow ?></span>

					</a>
					
						<ul class="dropdown-menu dropdown-alerts">
							<?php
				
					foreach ($unres as $msg) {



					 ?>
							<li><a href="fun/readmsg.php?id=<?php echo $msg['id'] ?>">
								<div><em class="fa fa-envelope"></em> NEW MESSAGE FROM : <?php echo  $msg['full_name'] ?>
									<span class="pull-right text-muted small"><?php echo  $msg['date_time'] ?></span></div>
							</a></li>
							<li class="divider"></li>


						<?php } ?>
							
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
