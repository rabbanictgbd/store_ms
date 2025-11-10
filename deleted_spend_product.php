<?php
		require ('connection.php');
	require ('config.php');

	
	
?>

<!DOCTYPE html>
	
	<html>
		<head>
			<title> Delete Spend Product </title>
		</head>
		<body>
			<?php
				if(isset($_GET['id'])){
					$getid	= $_GET['id'];
					
					$sql		="SELECT * FROM spend_product WHERE spend_product_id=$getid";

					$query		=$conn->query($sql);

					$data		=mysqli_fetch_assoc($query);
					
					$spend_product_id 			    = $data['spend_product_id'];
					$spend_product_name 			= $data['spend_product_name'];
					$spend_product_quantity 		= $data['spend_product_quantity'];
					$spend_product_entry_date 		= $data['spend_product_entry_date'];
							
					
					}
					
					if(isset($spend_product_name)){
					$sql1	="DELETE FROM spend_product WHERE spend_product_id =$getid";
					if($conn->query($sql1) == TRUE){
						echo 'Deleted sucsessfully';
					}else{
						echo 'Not Deleted';
					}

					}
				
			?>
		
			<?php
				
				
				
				
				
				
			?>
			
			<form action= <?php echo $_SERVER['PHP_SELF'] ?> method= "GET">
				
				Product : <br>
				<select name='spend_product_name'>
					
					
					<?php
					
					$sql1 = "SELECT * FROM product";
				
						$query1 =$conn->query($sql1);
							
						while($data =mysqli_fetch_array($query1)){
				
						 $data_id= $data['product_id'];
						 $data_name= $data['product_name'];
					?>
						<option value= '<?php echo $data_id ?>' <?php if($spend_product_name == $data_id) {echo 'selected';} ?>> <?php echo  $data_name ?> </option>;
						<?php } ?>
					?>
				</select> <br> <br>
				Product Quantity: <br>
				<input type= "text" name= "spend_product_id" value= "<?php echo $spend_product_id ?>" hidden >
				<input type= "number" name= "spend_product_quantity" value= "<?php echo $spend_product_quantity?>" > <br> <br>
				Store Entry Date: <br>
				<input type= "date" name= "spend_product_entry_date" value= "<?php echo $spend_product_entry_date ?>"> <br> <br>
				<input type= "submit" value= "Delete">
			</form>
		</body>
	</html>