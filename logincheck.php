<?php 
session_start();
include('db.php');
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>This is login controller page</title>
</head>
<body>

<?php 
$username=$_POST['username'];
$password=$_POST['password'];
$sql="SELECT username,password from login where username='$username' and password='$password'";
$rows=mysqli_query($con,$sql);
$num_rows = mysqli_num_rows($rows);


if($num_rows>0){
	while($row = mysqli_fetch_array($rows)){
	$u = $row['username'];
	$p = $row['password'];

	if(($u==$username) && ($p==$password)){
		$_SESSION['user']=$user;
		header('location: admindashboard.php');

	}else{
		echo "Username or Password is wrong please try again";
		include('acmelogin.php');
	}

}
}else{
	echo "User Not Found. Please try again";
	include('acmelogin.php');
}

?>

</body>
</html>