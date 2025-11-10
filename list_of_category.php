
<?php
		require ('connection.php');
	require ('config.php');
	include ('sessionstart.php');
?>


<!DOCTYPE html>
	
	<html>
		<head>
			<title> List of Category </title>
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
			
										echo '<h4> List of Product Category </h4>';
										
											$sql 		= "select * from category";
											
											$query 		=$conn->query($sql);
											echo "<table class='table table table-bordered table-info table-striped table-hover table-hober'>
													<tr><th> ID </th> <th>  category_name </th> <th> category_entrydate <th> EDIT </th> <th> DELETE </th> </tr></th>";
											while ($data 		=mysqli_fetch_assoc($query)){
												$category_id= $data['category_id'];
												$category_name= $data['category_name'];
												$category_entrydate= $data['category_entrydate'];
												
												echo "<tr> <td> $category_id </td> <td> $category_name </td> <td> $category_entrydate </td> <td> <a class='btn btn-success' href= 'edit_category.php?id=$category_id'> edit </a> <td> <a class='btn btn-danger' href= 'edit_category.php?id=$category_id'> Delete </td> </td></tr>";
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
		
