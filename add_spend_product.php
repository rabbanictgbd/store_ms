<?php
	require ('connection.php');
	require ('myfunction.php');
	include ('sessionstart.php');
	include ('boot_starp5.php');
	
?>

<!DOCTYPE html>
	
	<html>
		<head>
			<title> Spend Product </title>
		</head>
		<body>
			<?php
				if(isset($_GET['spend_product_name'])){
					$spend_product_name 			= $_GET['spend_product_name'];
					$spend_product_quantity 		= $_GET['spend_product_quantity'];
					$spend_product_entry_date 		= $_GET['spend_product_entry_date'];
					
					
					$sql = "INSERT INTO spend_product (spend_product_name, spend_product_quantity, spend_product_entry_date)
							VALUES ('$spend_product_name', '$spend_product_quantity', '$spend_product_entry_date')";
							
					if($conn->query($sql) == TRUE) {
						echo 'Data Inserted';
					}else{
						echo 'Error';
					}
				}
			?>
		
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
									<form action= <?php echo $_SERVER['PHP_SELF'] ?> method= "GET">
										<h4> Add Spend Product </h4>
										Product Name : <br>
										<select name='spend_product_name'>
											
											<?php
											data_list ('product','product_id','product_name');
											?>
										</select> <br> <br>
										Product Quantity: <br>
										<input type= "text" name= "spend_product_quantity"> <br> <br>
										Store Entry Date: <br>
										<input type= "date" name= "spend_product_entry_date"> <br> <br>
										<input class="btn btn-success" type= "submit" value= "submit">
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