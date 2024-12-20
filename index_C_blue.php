<?php
include ('sessionstart.php');
?>

<!DOCTYPE html>
	
	<html>
		<head>
			<title> Store Management System </title>
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		</head>
		<body>
		
			<div class="container"> <!--cointainer start-->
			
				<div class="cointainer-foulid border-bottom border-text-"; style="color:#0a006b;""> <!--top bar start-->
					<?php include ('topbar.php') ?>
				</div> <!--top bar end-->
				
				<div class="cointainer-foulid"> <!--body start-->
				
					<div class="row">
					
						<div class="col-sm-3 bg-light p-0 m-0" > <!--left bar start-->
							<?php include ('leftbar.php') ?>
								
						</div> <!--left bar end-->
						
						<div class="col-sm-9"> <!--right bar start-->
							<div class="row p-2 border-start border-text-"; style="color:#0a006b;"">
								<div class="col-sm-3">
									<a href="add_category.php"><i class="fa-solid fa-folder-plus fa-5x text-text-"; style="color:#0a006b;""> </i> </a>
									<p> Add Category </p>
								</div>
								<div class="col-sm-3">
									<a href="list_of_category.php"><i class="fa-solid fa-folder-open fa-5x text-text-"; style="color:#0a006b;""> </i> </a>
									<p> Category List </p>
								</div>
								<div class="col-sm-3">
									<a href="add_Product.php"><i class="fa-solid fa-box-open fa-5x text-text-"; style="color:#0a006b;""> </i> </a>
									<p> Add Product </p>
								</div>
								<div class="col-sm-3">
									<a href="list_of_product.php"><i class="fa-solid fa-stream fa-5x text-text-"; style="color:#0a006b;""> </i> </a>
									<p> Product List </p>
								</div>
							<hr/>
								<div class="col-sm-3">
									<a href="add_store_product.php"><i class="fa-solid fa-trash-restore fa-5x text-text-"; style="color:#0a006b;""> </i> </a>
									<p> Add Store Product </p>
								</div>
								<div class="col-sm-3">
									<a href="list_of_spend_product.php"><i class="fa-solid fa-box fa-5x text-text-"; style="color:#0a006b;""> </i> </a>
									<p> Store Product List </p>
								</div>
								<div class="col-sm-3">
									<a href="add_spend_product.php"><i class="fas fa-plus-circle fa-5x text-text-"; style="color:#0a006b;""> </i> </a>
									<p> Add Spend Product </p>
								</div>
								<div class="col-sm-3">
									<a href="list_of_spend_product.php"><i class="fa-solid fa-window-restore fa-5x text-text-"; style="color:#0a006b;""> </i> </a>
									<p> Spend Product List </p>
								</div>
								<hr/>
								<div class="col-sm-3">
									<a href="report.php"><i class="fa-solid fa-chart-bar fa-5x text-text-"; style="color:#0a006b;""> </i> </a>
									<p> Report </p>
								</div>
								<div class="col-sm-3">
									
								</div>
								<div class="col-sm-3">
									
								</div>
								<div class="col-sm-3">
									
								</div>
							<hr/>
								<div class="col-sm-3">
									<a href="add_user.php"><i class="fa-solid fa-user-plus fa-5x text-text-"; style="color:#0a006b;""; style="color:#0a006b;"> </i> </a>
									<p> Add User </p>
								</div>
								<div class="col-sm-3">
									<a href="list_of_user.php"><i class="fa-solid fa-users fa-5x text-text-"; style="color:#0a006b;""> </i> </a>
									<p> User List </p>
								</div>
								<div class="col-sm-3">
									 
									<p class=" fa-1x text-danger">Operation & maintenance by </p>
								</div>
								<div class="col-sm-3">
									
									<p class="fa-solid fa-admin fa-2x text-text-"; style="color:#0a006b;""> Abdul Kader Rabbani & pavel with yousuf </p>
								</div>
								
								<div class="col-sm-3">
									
								</div>
								<div class="col-sm-3">
									
								</div>
								
												
							</div>
						</div> <!--right bar end-->
						
						
					</div>
					
				</div> <!--body end-->
				
				<div class="cointainer-foulid border-top border-text-"; style="color:#0a006b;" p-0 bottom-0 bg-text-"; style="color:#0a006b;""> <!--bottom bar start-->
					<?php include ('bottombar.php') ?>
				</div> <!--bottom bar end-->
				
			</div><!--cointainer end-->
			
		</body>
	</html>
	
	