<?php
	require ('connection.php');


session_start();

$user_first_name	=$_SESSION['user_first_name']; 
$user_last_name		=$_SESSION['user_last_name'];

	if(!empty($user_first_name)){
		echo $user_first_name ." ". $user_last_name;

	
	
?>

<!DOCTYPE html>
	
	<html>
		<head>
			<title> Edit User </title>
		</head>
		<body>
			<?php
				if(isset($_GET['id'])){
					$getid	= $_GET['id'];
					
					$sql		="SELECT * FROM users WHERE user_id=$getid";

					$query		=$conn->query($sql);

					$data		=mysqli_fetch_assoc($query);
					
					$user_id 			= $data['user_id'];
					$user_first_name 	= $data['user_first_name'];
					$user_last_name 	= $data['user_last_name'];
					$user_email 		= $data['user_email'];
					$user_password 		= $data['user_password'];
							
					
					}
					
					if(isset($_GET['user_first_name'])){
					$new_user_id			=$_GET['user_id'];
					$new_user_first_name	=$_GET['user_first_name'];
					$new_user_last_name		=$_GET['user_last_name'];
					$new_user_email			=$_GET['user_email'];
					$new_user_password		=$_GET['user_password'];
					
					$sql1	="UPDATE users SET
								user_first_name='$new_user_first_name',
								user_last_name='$new_user_last_name',
								user_email='$new_user_email',
								user_password='$new_user_password'
							WHERE user_id =$new_user_id";
					if($conn->query($sql1) == TRUE){
						echo 'update sucsessfull';
					}else{
						echo 'Not updated';
					}

					}
				
			?>
		
			<?php
				
				
				
				
				
				
			?>
			
			<form action= <?php echo $_SERVER['PHP_SELF'] ?> method= "GET">
				
				User First Name : <br>
				<input type= "text" name='user_first_name' value= "<?php echo $user_first_name?>" > <br> <br>
				
				<input type= "text" name='user_id'  value= "<?php echo $user_id?>" hidden> 
				User Last Name: <br>
				<input type= "text" name= 'user_last_name' value= "<?php echo $user_last_name?>" > <br> <br>
				User Email: <br>
				<input type= "email" name= "user_email" value= "<?php echo $user_email?>" > <br> <br>
				User Password: <br>
				<input type= "Password" name= "user_password" value= "<?php echo $user_password?>" > <br> <br>
				<input type= "submit" value= "update">
				
			</form>
			
		</body>
	</html>
	
				<?php
	}
	else header ('location:login.php');
	
	echo "<h3> <a href= 'logout.php'> Logout </h3>";
	
	?>