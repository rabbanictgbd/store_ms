<?php
	require ('connection.php');	
	
	
?>	

<!DOCTYPE html>
	
	<html>
		<head>
			<title>Edit Product</title>
		</head>
		<body>
			<?php
				
				if(isset($_GET['id'])) {
					$getid =$_GET['id'];
				

					$sql		="SELECT * FROM product WHERE product_id=$getid";

					$query		=$conn->query($sql);

					$data		=mysqli_fetch_assoc($query);
					
					$sql1		="SELECT * FROM category";
	
					$query1		=$conn->query($sql1);


					$product_id			=$data['product_id'];
					$product_name		=$data['product_name'];
					$product_code		=$data['product_code'];
					$product_category	=$data['product_category'];
					$product_entry_date	=$data['product_entry_date'];
					
				}
				
				if(isset($_GET['product_name'])){
					$new_product_id			=$_GET['product_id'];
					$new_product_name		=$_GET['product_name'];
					$new_product_code		=$_GET['product_code'];
					$new_product_category	=$_GET['product_category'];
					$new_product_entry_date	=$_GET['product_entry_date'];
					
					$sql1	="UPDATE product SET 
								product_name='$new_product_name',
								product_code='$new_product_code',
								product_category='$new_product_category',
								product_entry_date='$new_product_entry_date'
							WHERE product_id =$new_product_id";
					if($conn->query($sql1) == TRUE){
						echo 'update sucsessfull';
					}else{
						echo 'Not updated';
					}

					}
				
			?>
		
		
			<form action= <?php echo $_SERVER['PHP_SELF'] ?> method= "GET">
				
				<input type= "text" name= "product_id" value="<?php echo $product_id ?>" hidden> <br> <br>
				Product Name: <br>
				<input type= "text" name= "product_name" value="<?php echo $product_name ?>"> <br> <br>
				Product Code: <br>
				<input type= "text" name="product_code" value="<?php echo $product_code ?>" > <br> <br>
				Product Category: <br>
				<select name="product_category"> 
						<?php 
						while ($data1		=mysqli_fetch_assoc($query1)){
		
						$category_id= $data1['category_id'];
						$category_name= $data1['category_name'];
						?>
						 "<option value= '<?php echo $category_id ?>'
						<?php if($category_id==$product_category){echo'selected';}  ?> > 
						<?php echo $category_name ?> </option>";
						<?php } ?>
				</select> <br> <br>
				Product Entry Date: <br>
				<input type= "date" name="product_entry_date"value="<?php echo $product_entry_date ?>" > <br> <br>
				<input type= "submit" value= "update">
			</form>
		</body>
	</html>