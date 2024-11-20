<?php
	require ('connection.php');
	session_start();
	require ('myfunction.php');
	
	include ('boot_starp5.php');
?>

<!DOCTYPE html>
	
	<html>
		<head>
			<title> Login </title>
		</head>
		<body>
			<?php
				if(isset($_POST['user_email'])){
					
					$user_email 		= $_POST['user_email'];
					$user_password 		= $_POST['user_password'];
					
					
					$sql = "SELECT * FROM users WHERE user_email='$user_email' AND
													user_password='$user_password'";
													
					$query = $conn->query($sql);
					
					$data=mysqli_fetch_array($query);
					
					$user_first_name=$data['user_first_name'];
					$user_last_name=$data['user_last_name'];
				
					$_SESSION['user_first_name']=$user_first_name;
					$_SESSION['user_last_name']=$user_last_name;
					
					if(mysqli_num_rows($query) > 0) {
						header ('location:index.php');
						
					}else{
						echo 'Error';
					}
				}
			?>
		
			
			
			
	
	
	<div class="container"> <!--cointainer start-->
			
				<div class="cointainer-foulid border-bottom border-success"> <!--top bar start-->
					<h1>
							<a href='index.php' class='text-decoration-none text-dark'>Store Management System </a>
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
							Please lonin or Sign up.
							</h3>
									<form action= <?php echo $_SERVER['PHP_SELF'] ?> method= "POST">
				
				
										User Email: <br>
										<input type= "email" name= "user_email"> <br> <br>
										User Password: <br>
										<input type= "Password" name= "user_password"> <br> <br>
										<input class="btn btn-success" type= "submit" value= "submit">
										<a href="new_user.php"> Sign up</a>
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