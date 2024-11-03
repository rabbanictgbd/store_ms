<?php
	require ('connection.php');

	
	
?>

<!DOCTYPE html>
	
	<html>
		<head>
			<title> Edit Store Product </title>
		</head>
		<body>
			<?php
				if(isset($_GET['id'])){
					$getid	= $_GET['id'];
					
					$sql		="SELECT * FROM store_product WHERE store_product_id=$getid";

					$query		=$conn->query($sql);

					$data		=mysqli_fetch_assoc($query);
					
					$store_product_id 			    = $data['store_product_id'];
					$store_product_name 			= $data['store_product_name'];
					$store_product_quantity 		= $data['store_product_quantity'];
					$store_product_entry_date 		= $data['store_product_entry_date'];
							
					
					}
					
					if(isset($_GET['store_product_name'])){
					$new_store_product_id			=$_GET['store_product_id'];
					$new_store_product_name			=$_GET['store_product_name'];
					$new_store_product_quantity		=$_GET['store_product_quantity'];
					$new_store_product_entry_date	=$_GET['store_product_entry_date'];
					
					$sql1	="UPDATE store_product SET 
								store_product_name='$new_store_product_name',
								store_product_quantity='$new_store_product_quantity',
								store_product_entry_date='$new_store_product_entry_date'
							WHERE store_product_id =$new_store_product_id";
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
				
				Product : <br>
				<select name='store_product_name'>
					
					
					<?php
					
					$sql1 = "SELECT * FROM product";
				
						$query1 =$conn->query($sql1);
							
						while($data =mysqli_fetch_array($query1)){
				
						 $data_id= $data['product_id'];
						 $data_name= $data['product_name'];
					?>
						<option value= '<?php echo $data_id ?>' <?php if($store_product_name == $data_id) {echo 'selected';} ?>> <?php echo  $data_name ?> </option>;
						<?php } ?>
					?>
				</select> <br> <br>
				Product Quantity: <br>
				<input type= "text" name= "store_product_id" value= "<?php echo $store_product_id ?>" hidden >
				<input type= "number" name= "store_product_quantity" value= "<?php echo $store_product_quantity?>" > <br> <br>
				Store Entry Date: <br>
				<input type= "date" name= "store_product_entry_date" value= "<?php echo $store_product_entry_date ?>"> <br> <br>
				<input type= "submit" value= "update">
			</form>
		</body>
	</html>