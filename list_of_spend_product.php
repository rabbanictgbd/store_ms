
<?php
	require ('connection.php');
	include ('sessionstart.php');
	include ('boot_starp5.php');
	/*<!--Delete data -->*/
	if(isset($_GET['deleteid'])){
		$deleteid= $_GET['deleteid'];
		$sqldelete= "DELETE FROM spend_product WHERE spend_product_id= $deleteid";
		if($conn->query($sqldelete)){
		echo "Data deleted";
		echo "<script>
		setTimeout(function(){window.location='http://localhost/StoreMS/php_files/list_of_spend_product.php';}, 3000);
				</script>";
		} else{
		echo "Error";
		}
	}

	$sql 		= "select * from spend_product";
	$sql1 		= "SELECT * FROM product";
	
	$query 		=$conn->query($sql);
	$query1 	= $conn->query($sql1);
	
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
			<title> List of Spend Product </title>
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
										echo ' <h4> List of Spend Product</h4>';
										
										
										
										
										
										echo "<table class='table table table-bordered table-info table-striped table-hover'>
												<tr>
													<th> ID </th>
													<th> Product Name </th>
													<th> Product Quantity </th>
													<th> Product Entry Date </th>
													<th> Action </th>
													
													<th> Action </th>
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
														<td> <a href= 'edit_spend_product.php?id=$spend_product_id'> Edit</a> </td>
														
														<td> <!-- Button trigger modal -->
 
														 <button type='button' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#$spend_product_id'>
														  Delete
														</button>

														<!-- Modal -->
														<div class='modal fade' id='$spend_product_id' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
														  <div class='modal-dialog'>
															<div class='modal-content'>
															  <div class='modal-header'>
																<h5 class='modal-title' id='exampleModalLabel'>Delete message</h5>
																<button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
															  </div>
															  <div class='modal-body'>
																Are you sure you want to delete data?
															  </div>
															  <div class='modal-footer'>
																	<button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
																<a href='list_of_spend_product.php?deleteid=$spend_product_id'>
																	<button type='button' class='btn btn-danger'>Yes</button>
																</a>
															  </div>
															</div>
														  </div>
														</div> </td> </td></tr>";
																								}				
										
										echo "</table>";
										
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
		
			