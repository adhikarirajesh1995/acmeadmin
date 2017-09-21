<head>
	<title>Backend of Update File</title>
</head>
<body>
<?php
$nid = $_POST['nid'];
$notice = $_POST['notice'];

$con = mysqli_connect("localhost","root","","acme");
$update_query = "UPDATE notice SET notice='$notice' WHERE nid=$nid";
$query_result = mysqli_query($con,$update_query);
if($query_result){
	echo "<script>alert('Update Sucessful')</script>";
	include('displaynotice.php');
}else{
	echo "Sorry, Update not Sucessful";
	include('displaynotice.php');
}
?>

</body>
</html>