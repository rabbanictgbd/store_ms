<?php
$conn= mysqli_connect('localhost','root','','store_db');
	if(isset($_POST['submit'])){
	$total_file=	count ($_FILES['upfile']['name']);
		
 
	 for($x=0;$x<$total_file;$x++){
	$filename= 		$_FILES['upfile']['name'][$x];
	$tmplock= 		$_FILES['upfile']['tmp_name'][$x];
	$filetype=	 	$_FILES['upfile']['type'][$x];
	$filesize=	 	$_FILES['upfile']['size'][$x];
	
	$uploc= 		"../docs/".$filename;
	
	if($filesize <26214400){
		//if($filetype == 'image/jpeg'){
			if(file_exists($uploc)){
				echo "file already exist.<br>" ;
			}else{
				if(move_uploaded_file ($tmplock,$uploc)){
					mysqli_query(mysqli_connect('localhost','root','','store_db'),"INSERT INTO docs(doc_name) VALUES('$filename')");
					
					echo "Uploaded.<br>";
				}else{
					echo "Not Uploaded <br>";
				}
			}
		//} else echo "please select an image file.";
	}else{
		echo   "file size shuold be less than 25 MB.";
	}
	 }
 } else{
	 echo "No action is taken";
 }
 
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
	please select the files <br> <br>
	<input type="file" name="upfile[]" multiple> <br> <br>
	<input type="submit" value="Upload" name="submit">

</form>

<?php
$sql1= "SELECT * FROM docs";
$query1= mysqli_query($conn, $sql1);
while ($data= mysqli_fetch_assoc($query1)){
$docname= $data['doc_name'];
	
	
	echo "<img src='../docs/$docname' style='height: 100px; width: 100px;'>";//echo "<iframe src='../docs/$docname' style='height: 200px; width: 250px;'> a ehfjklehnfoesadhfiodsajhnfioeh</iframe>";
}


?>