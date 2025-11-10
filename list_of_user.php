
<?php
		require ('connection.php');
	require ('config.php');
	include ('sessionstart.php');
	include ('boot_starp5.php');
	
	
?>


<!DOCTYPE html>
	
	<html>
		<head>
			<title> List of Users </title>
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
										echo 'List of Users';
										
										$sql 		= "select * from users";
										
										
										$query 		=$conn->query($sql);
										
										echo "<table class='table table table-bordered table-info table-striped table-hover'>
												<tr>
													<th> User ID </th>
													<th> user first Name </th>
													<th> user Last Name </th>
													<th> user Email </th>
													<th> User Password </th>
													<th> Action </th>
													<th> Action </th>
												</tr>";
										while ($data =mysqli_fetch_assoc($query)){
											$user_id			=$data['user_id'];
											$user_first_name	=$data['user_first_name'];
											$user_last_name		=$data['user_last_name'];
											$user_email			=$data['user_email'];
											$user_password		=$data['user_password'];
											
											echo "<tr> <td>  $user_id </td>
														<td> $user_first_name </td>
														<td> $user_last_name </td>
														<td> $user_email </td>
														<td> $user_password </td>
														<td> <a href= 'edit_user.php?id=$user_id'> Edit </td>
														<td> <a href= 'delete_user.php?id=$user_id'> Delete </td> </td></tr>";
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
		
			