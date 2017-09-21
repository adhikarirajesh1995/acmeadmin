
	<?php
	$nid = $_GET['nid'];
$con = mysqli_connect("localhost","root","","acme");
$query = "delete from notice where nid=$nid ";
$query_result = mysqli_query($con,$query);
	if($query_result){
	echo "<script>alert('Delete Sucessful')</script>";
	include('displaynotice.php');
}else{
	echo "<script>alert('Delete UnSucessful')</script>";
	include('notice.php');
}  
?>