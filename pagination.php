<?php 



if(isset($_GET['pageno'])){
	
	$getpageno=$_GET['pageno'];
	
	echo $getpageno;
	echo "<br>";
	
	$offset=($getpageno-1)*5;
	
	echo $offset;
	echo "<br>";
	
	$getpageno_increament=$getpageno+1;
	$getpageno_decreament=$getpageno-1;
	
	
	echo $getpageno_increament;
	echo "<br>";
	echo $getpageno_decreament;
	echo "<br>";
}
?>

<a href='pagination.php?pageno=1'> < </a>
<a href='pagination.php?pageno=2'> > </a>

<?php
if($getpageno_decreament ==0 ){
	echo "<";
}else{
	
	echo "<a href='pagination.php?pageno=$getpageno_decreament'> << </a>";
}

 ?>

<a href='pagination.php?pageno=<?php echo $getpageno_increament  ?>'> >> </a>

