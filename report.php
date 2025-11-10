
<?php
		require ('connection.php');
	require ('config.php');
	include ('sessionstart.php');
	include ('boot_starp5.php');

	
	$sql1 = "SELECT * FROM product";
	
	$query1 = $conn->query($sql1);
	
	$data_list = array();
	
	while ($data1 = mysqli_fetch_array($query1)){
		
	$product_id = $data1['product_id'];
	$product_name = $data1['product_name'];
	
	$data_list[$product_id] =$product_name; 
	}
	
	
?>


<!DOCTYPE html>
	
	<html>
		<head>
			<title> Report </title>
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
								
									<form action= <?php echo $_SERVER['PHP_SELF'] ?> method= "GET">
				
										<select name='s_product_name'>
											
											
											<?php
											
											$sql1 = "SELECT * FROM product";
										
												$query1 =$conn->query($sql1);
													
												while($data =mysqli_fetch_array($query1)){
										
												 $data_id= $data['product_id'];
												 $data_name= $data['product_name'];
											?>
												<option value= '<?php echo $data_id ?>' > <?php echo  $data_name ?> </option>;
												<?php } ?>
											?>
										</select>
										<input class="btn btn-success" type= "submit" value= "Genetate">
										
									</form>
								
									<?php
									
										echo '<br> <br>';
										echo '<h4> List of Entry Product </h4>';
										
									if(isset($_GET['s_product_name'])){
											
										$s_product_name=	$_GET['s_product_name'];
										$sql 		= "select * from store_product WHERE store_product_name='$s_product_name'";
										
										
										$query 		=$conn->query($sql);
										
										
										echo "<table class='table table table-bordered table-info table-striped table-hover'>
												<tr>
													<td> ID </td>
													<th> Product Name </th>
													<th> Product Quantity </th>
													<th> Product Entry Date </th>
													
												</tr>";
										while ($data 			=mysqli_fetch_assoc($query)){
											$store_product_id			=$data['store_product_id'];
											$store_product_name			=$data['store_product_name'];
											$store_product_quantity		=$data['store_product_quantity'];
											$store_product_entry_date	=$data['store_product_entry_date'];
											
											echo "<tr> 	<td> $store_product_id </td>
														<td> $data_list[$store_product_name] </td>
														<td> $store_product_quantity </td>
														<td> $store_product_entry_date </td>
													</tr>";
										}				
										
										
										echo "</table>";
										
										
									}
									
									?>
									
									
									<?php
									echo '<br> <br>';
										echo '<h4> List of Spend Product </h4>';
									if(isset($_GET['s_product_name'])){
										
										$sql 		= "select * from spend_product WHERE spend_product_name='$s_product_name'";
										
										
										$query 		=$conn->query($sql);
										echo "<table class='table table table-bordered table-info table-striped table-hover'>
												<tr>
													<th> ID </th>
													<th> Product Name </th>
													<th> Product Quantity </th>
													<th> Product Entry Date </th>
													
												</tr>";
										while ($data 					=mysqli_fetch_assoc($query)){
											$spend_product_id			=$data['spend_product_id'];
											$spend_product_name			=$data['spend_product_name'];
											$spend_product_quantity		=$data['spend_product_quantity'];
											$spend_product_entry_date	=$data['spend_product_entry_date'];
											
											echo "<tr> <td>  $spend_product_id </td>
														<td> $data_list[$spend_product_name] </td>
														<td> $spend_product_quantity </td>
														<td> $spend_product_entry_date </td>
													</tr>";
										}				
										
										echo "</table>";
									}
									?>
		
								</div>
							
						</div> <!--right bar end-->
					</div>
				</div> <!--body end-->
				
				<div class="cointainer-foulid border-top border-success"> <!--bottom bar start-->
					<?php include ('bottombar.php') ?>
				</div> <!--bottom bar end-->
				
			</div><!--cointainer end-->
			
			
		</body>
		
			