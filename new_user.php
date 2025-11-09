<?php
	require ('connection.php');
	require ('myfunction.php');
	
	include ('boot_starp5.php');
	
	
	
?>

<!DOCTYPE html>
	
	<html>
		<head>
			<title> Add User </title>
		</head>
		<body>
			<?php
				if(isset($_GET['user_first_name'])){
					$user_first_name 	= $_GET['user_first_name'];
					$user_last_name 	= $_GET['user_last_name'];
					$user_email 		= $_GET['user_email'];
					$user_password 		= $_GET['user_password'];
					
					
					$sql = "INSERT INTO users (user_first_name, user_last_name, user_email, user_password)
							VALUES ('$user_first_name', '$user_last_name', '$user_email', '$user_password')";
							
					if($conn->query($sql) == TRUE) {
						echo 'Data Inserted';
						echo "<script>
		setTimeout(function(){window.location='{$serverLink}index.php';}, 3000);
				</script>";
					}else{
						echo 'Error';
					}
				}
			?>
		
			<div class="container"> <!--cointainer start-->
			
				<div class="cointainer-foulid border-bottom border-success"> <!--top bar start-->
					<h1>
							<a href='index.php' class='text-decoration-none text-dark'>Welcome to Store Management System </a>
							</h1>
				</div> <!--top bar end-->
				
				<div class="cointainer-foulid"> <!--body start-->
				
					<div class="row">
					
						<div class="col-sm-3 bg-light p-0 m-0" > <!--left bar start-->
							<?php //include ('leftbar.php') ?>
								
						</div> <!--left bar end-->
						
							<div class="col-sm-9"> <!--right bar start-->
								<div class="container p-4 m-4">
								<h3>
							Please entry your information
							</h3>
									<form action= <?php echo $_SERVER['PHP_SELF'] ?> method= "GET">
				
										User First Name : <br>
										<input type= "text" name='user_first_name'> <br> <br>
										User Last Name: <br>
										<input type= "text" name= "user_last_name"> <br> <br>
										User Email: <br>
										<input type= "email" name= "user_email"> <br> <br>
										User Password: <br>
										<input type= "Password" name= "user_password"> <br> <br>
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