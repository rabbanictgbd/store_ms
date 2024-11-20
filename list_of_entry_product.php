
<?php
	require ( 'connection.php');
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
			<title> List of Entry Product </title>
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
									
										$sql2= "SELECT * FROM store_product";
										$query2= mysqli_query($conn,$sql2);
										$num_rows= mysqli_num_rows($query2);
										
										$num_rows_div= ($num_rows/5)+1;
										
										
				
										echo ' <h4> List of Entry Product </h4>';
										
										if(!isset($_GET['pageno'])){
										
											
										
										$offset=0;
										
										$getpageno_increment=2;
										$getpageno_decrement=1;	
										}else
										{											
											
										if(isset($_GET['pageno'])){
										$getpageno=$_GET['pageno'];	
										
										$offset=($getpageno-1)*5;
										
										$getpageno_increment=$getpageno+1;
										$getpageno_decrement=$getpageno-1;
										
										}
										}
										
										
										$sl=0;
										$total=0;
										$total3=0;

										$sql 		= "select * from store_product limit 5 offset $offset";
										$sql3 		= "select * from store_product";
										
										
										
										$query 		=$conn->query($sql);
										$query3 		=$conn->query($sql3);
										echo "<table class='table table table-bordered table-info table-striped table-hover'>
												<tr>
													<th> SL </th>
													<th> ID </th>
													<th> Product Name </th>
													<th> Product Quantity </th>
													<th> Product Entry Date </th>
													<th> Action </th>
												</tr>";
										while ($data 			=mysqli_fetch_assoc($query)){
											$store_product_id			=$data['store_product_id'];
											$store_product_name			=$data['store_product_name'];
											$store_product_quantity		=$data['store_product_quantity'];
											$store_product_entry_date	=$data['store_product_entry_date'];
											$sl++;
											$total += $store_product_quantity;
											
											echo "<tr> 
														<td>  $sl </td>
														<td>  $store_product_id </td>
														<td> $data_list[$store_product_name] </td>
														<td> $store_product_quantity </td>
														<td> $store_product_entry_date </td>
														<td> <a href= 'edit_entry_product.php?id=$store_product_id'> Edit </td> </td></tr>";
										}

										while ($data3 			=mysqli_fetch_assoc($query3)){
											
											$store_product_quantity3		=$data3['store_product_quantity'];
										
											
										$total3 += $store_product_quantity3;	
										}									
										
										echo "</table>";
										
										echo "<table class='table table table-bordered table-info table-striped table-hover'>
										<tr>
											<td>
												 
											</td>
											<td>
												Total Quantity=
											</td>
											<td>
												$total/$total3
											</td>
											<td>
												
											</td>
											<td>
											
											</td>
											
										</tr>
											</table>";
									
									
									if($getpageno_decrement==0){
										
									echo "<span class='bg-success border round p-3'> < </span>";
									}else
									{										
										
										echo "<span class='bg-success border round p-3'> <a class='text-white' href='list_of_entry_product.php?pageno=$getpageno_decrement'> < </a> </span>";
									}
									$php_self=$_SERVER['PHP_SELF'];
									
									for($x=1;$x<$num_rows_div;$x++){
									echo " <a href='$php_self?pageno=$x'> <span class='bg-success border round p-3 text-white'> $x </span> </a> ";
									}
									// if($x == $getpageno){
										// echo "<span class='bg-dark border round p-3 text-white'> $x </span>";
									// }
									if($getpageno_increment >= $num_rows_div){
									echo "<span class='bg-success border round p-3'> > </span>";
									}
									else{
										
										echo "<span class='bg-success border round p-3'> <a class='text-white' href='list_of_entry_product.php?pageno=$getpageno_increment'> > </a> </span>";
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
		
			