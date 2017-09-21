<?php
include('db.php');
?>
<html>
<head>
	<title>Create New Vacancy</title>

</head>
<body>
<?php
$vacancy = $_POST['vacancy'];
$sql = "insert into vacancy(vacancy) values('$vacancy')";

$result = mysqli_query($con,$sql);

if($result){
	echo "<script>alert('Create Successful');</script>";
	header('location: displayvacancy.php');
}else{
	echo "Operation failed. Try Again";
	include('publishvacancy.php');
}


?>
</body>
</html>