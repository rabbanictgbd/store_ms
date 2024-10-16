
<?php
	require ( 'connection.php');
	include ('sessionstart.php');
	include ('boot_starp5.php');
	
	$sql1 = "SELECT * FROM category";
	
	$query1 = $conn->query($sql1);
	
	$data_list = array();
	
	while ($data1 = mysqli_fetch_array($query1)){
		
	$category_id = $data1['category_id'];
	$category_name = $data1['category_name'];
	
	$data_list[$category_id] =$category_name;
	}
	
	
?>


<!DOCTYPE html>
	
	<html>
		<head>
			<title> List of Product </title>
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
				
										echo '<h4> List of Product </h4>';
										
										$sql 		= "select * from product";
										
										
										$query 		=$conn->query($sql);
										echo "<table class='table table table-bordered table-info table-striped table-hover'>
												<tr>
													<th> ID </th>
													<th> Product Name </th>
													<th> Product Code </th>
													<th> Product Category </th>
													<th> Product Entry Date </th>
													<th> Edit </th>
												</tr>";
										while ($data 			=mysqli_fetch_assoc($query)){
											$product_id			=$data['product_id'];
											$product_name		=$data['product_name'];
											$product_code		=$data['product_code'];
											$product_category	=$data['product_category'];
											$product_entry_date	=$data['product_entry_date'];
											
											echo "<tr> <td> $product_id </td>
														<td> $product_name </td>
														<td> $product_code </td>
														<td> $data_list[$product_category] </td>
														<td> $product_entry_date </td>
														<td> <a href= 'edit_product.php?id=$product_id'> Edit </td> </td>
													</tr>";
										}				
										
										echo "</table>";
										
									?>
							
							</div>
							
						</div> <!--right bar end-->

				</div> <!--body end-->
				
				<div class="cointainer-foulid border-top border-success"> <!--bottom bar start-->
					<?php include ('bottombar.php') ?>
				</div> <!--bottom bar end-->
				
			</div><!--cointainer end-->
		</body>
		
			