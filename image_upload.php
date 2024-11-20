<?php
$conn= mysqli_connect('localhost','root','','store_db');


 if(isset($_POST['submit'])){
	$filename= 		$_FILES['upfile']['name'];
	$tmplock= 		$_FILES['upfile']['tmp_name'];
	$filetype=	 	$_FILES['upfile']['type'];
	$filesize=	 	$_FILES['upfile']['size'];
	
	$uploc= 		"images/".$filename;
	
	if($filesize <20000){
		if($filetype == 'image/jpeg'){
			if(file_exists($uploc)){
				echo "file already exist.";
			}else{
				if(move_uploaded_file ($tmplock,$uploc)){
					mysqli_query(mysqli_connect('localhost','root','','store_db'),"INSERT INTO images(image_name) VALUES('$filename')");
					
					echo "Uploaded";
				}else{
					echo "Not Uploaded";
				}
			}
		} else echo "please select an image file.";
	}else{
		echo   "file size shuold be less than 20000 bite.";
	}
 } else{
	 echo "ERROR";
 }
 
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
	please select a file <br> <br>
	<input type="file" name="upfile"> <br> <br>
	<input type="submit" value="Upload" name="submit">

</form>

<?php
$sql1= "SELECT * FROM images";
$query1= mysqli_query($conn, $sql1);
while ($data= mysqli_fetch_assoc($query1)){;
$imagename= $data['image_name'];
	
	//echo $imagename;
	echo "<img src='images/$imagename'>";
}
//mysqli_fetch_assoc(mysqli_query(mysqli_connect('localhost','root','','store_db'),"SELECT * FROM images"));

//echo "<img src='images/mysqli_fetch_assoc(mysqli_query(mysqli_connect('localhost','root','','store_db'),$sql1))['image_name']'>";

?>