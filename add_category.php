<?php
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname   = 'store_db';
		
	$conn = new mysqli ($hostname, $username, $password, $dbname);
	
	if($conn){
		echo '';
	}else{
		echo 'databese not connected';
	}
	include ('sessionstart.php');
?>

<!DOCTYPE html>
	
	<html>
		<head>
			<title> Add Category </title>
				<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		</head>
		<body>
			
			<div class="container"> <!--cointainer start-->
			
				<div class="cointainer-foulid border-bottom border-success"> <!--top bar start-->
					<?php include ('topbar.php') ?>
				</div> <!--top bar end-->
				
				<div class="cointainer-foulid"> <!--body start-->
				
					<div class="row">
					
						<div class="col-sm-3 bg-light p-0 m-0" > <!--left bar start-->
							<?php include ('leftbar.php') ?>
								
						</div> <!--left bar end-->
						
							<div class="col-sm-9"> <!--right bar start-->
								<div class="container p-4 m-4">
								
									<?php
										if(isset($_GET['category_name'])){
											$category_name 		= $_GET["category_name"];
											$category_entrydate = $_GET["category_entrydate"];
											
											$sql = "INSERT INTO category (category_name, category_entrydate)
													VALUES ('$category_name', '$category_entrydate')";
													
											if($conn-> query($sql) == TRUE) {
												echo 'Data Inserted';
											}else{
												echo 'Error';
											}
										}
									?>
								
									<form action= "add_category.php" method= "GET">
									<h4> Add Category </h4> <br>
									Category Name : <br>
									<input type= "text" name= "category_name"> <br> <br>
									Category Entry Date: <br>
									<input type= "date" name= "category_entrydate"> <br> <br>
									<input type= "submit" value= "submit" >
									</form>
								</div>
							</div>
							
						</div> <!--right bar end-->

				</div> <!--body end-->
				
				<div class="cointainer-foulid border-top border-success"> <!--bottom bar start-->
					<?php include ('bottombar.php') ?>
				</div> <!--bottom bar end-->
				
			</div><!--cointainer end-->
		
		
			
		</body>
	</html>