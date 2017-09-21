<?php
include('db.php');
?>
<html>
<head>
	<title>Create New Notice</title>

</head>
<body>
<?php
$notice = $_POST['notice'];
$sql = "insert into notice(notice) values('$notice')";

$result = mysqli_query($con,$sql);

if($result){
	echo "<script>alert('Create Successful');</script>";
	header('location: displaynotice.php');
}else{
	echo "Operation failed. Try Again";
	include('publishnotice.php');
}


?>
</body>
</html>