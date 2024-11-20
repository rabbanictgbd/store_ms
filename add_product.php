<?php
	require ('connection.php');
	include ('sessionstart.php');
	include ('boot_starp5.php');
?>

<!DOCTYPE html>
	
	<html>
		<head>
			<title> Add Product </title>
				
		</head>
		<body>
			
			<?php
				if(isset($_GET['product_name'])){
					$product_name 			= $_GET['product_name'];
					$product_code 			= $_GET['product_code'];
					$product_category 		= $_GET['product_category'];
					$product_entry_date 	= $_GET['product_entry_date'];
					
					$sql = "INSERT INTO product (product_name, product_code, product_category, product_entry_date)
							VALUES ('$product_name', '$product_code', '$product_category', '$product_entry_date')";
							
					if($conn->query($sql) == TRUE) {
						echo 'Data Inserted';
					}else{
						echo 'Error';
					}
				}
			?>
		
			<?php
				
				$sql = "SELECT * FROM category";
				
				$query =$conn->query($sql);
	
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
										<h4> Add Product </h4> <br>
										Product Name : <br>
										<input type= "text" name= "product_name"> <br> <br>
										
										Product Code : <br>
										<input type= "text" name= "product_code"> <br> <br>
										
										Product Category : <br>
										<select name='product_category'>
											
											<?php
											while($data =mysqli_fetch_array($query)){
										
												 $category_id= $data['category_id'];
												 $category_name= $data['category_name'];
										
											echo "<option value= '$category_id'>$category_name</option>";
											}
											?>
										</select> <br> <br>
										
										Product Entry Date: <br>
										<input type= "date" name= "product_entry_date" value="<?php echo date('Y-m-d') ?>"> <br> <br>
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