<?php
	require ('connection.php');
	session_start();
	
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
		
			<?php
				
				
				
				
				
				
			?>
			
			<form action= <?php echo $_SERVER['PHP_SELF'] ?> method= "POST">
				
				
				User Email: <br>
				<input type= "email" name= "user_email"> <br> <br>
				User Password: <br>
				<input type= "Password" name= "user_password"> <br> <br>
				<input type= "submit" value= "submit">
			</form>
		</body>
	</html>