


<?PHP
	require ('connection.php');
	include ('sessionstart.php');
	include ('boot_starp5.php');

?>

<form action="<?php $_SERVER['PHP_SELF']?>" method="GET">
Type here
<input type= "text" name= "search">
<input type= "submit" value= "search">

</form>


<?php
$search=$_GET['search'];
$sql= "SELECT * FROM product where product_name LIKE '$search'";
$query=mysqli_query($conn,$sql);
$num_rows=mysqli_num_rows($query);

echo "<table class='table table table-bordered table-info table-striped table-hover table-hober'>
		<th>
		ID
		</th>
		<th>
		NAME
		</th>
		<th>
		CODE
		</th>
		<th>
		DATE
		</th>
		<th>
		CATEGORY
		</th>";
		
	while($data= mysqli_fetch_assoc($query)){

	$product_id=$data['product_id'];
	$product_name=$data['product_name'];
	$product_code=$data['product_code'];
	$product_entry_date=$data['product_entry_date'];
	$product_category=$data['product_category'];



echo "
		<tr>
		
			
				<td>
					$product_id
				</td>
				<td>
					$product_name
				</td>
				<td>
					$product_code
				</td>
				<td>
					$product_entry_date
				</td>
				<td>
					$product_category
				</td>
				
			
		</tr>";
}
echo "</table>";
echo "<br>";
echo "total=";
echo $num_rows;
?>


<br>
<br>
<br>
Store product

<form action="<?php $_SERVER['PHP_SELF']?>" method="GET">
Type here
<input type= "text" name= "search">
<input type= "submit" value= "search">

</form>


<?php
$search=$_GET['search'];
$sql1= "SELECT * FROM store_product where store_product_name LIKE '$search'";
$query1=mysqli_query($conn,$sql1);
$num_rows1=mysqli_num_rows($query1);
while($data= mysqli_fetch_assoc($query1)){

$store_product_id=$data['store_product_id'];
$store_product_name=$data['store_product_name'];
$store_product_quantity=$data['store_product_quantity'];
$store_product_entry_date=$data['store_product_entry_date'];




echo $store_product_name;
echo "<br>";
}
echo "<br>";
echo "total=";
echo $num_rows1;
?>