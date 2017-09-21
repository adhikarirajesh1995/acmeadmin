<html>
<head>
	<title>this  is dashboard</title>
</head>
<body>
<?php 
if(isset($_SESSION['user'])){
	header("location:loginform.php");
}else{
	sql1="select * from account where user='$user' ";
	$rows=mysqli_query($con,$sql);
	while ($row=mysli_fetch_array($rows)) {

		$acc_n0=$_POST['acc_no'];
		$acc_name=$_POST['acc_name'];
		$balance=$_POST['balance];
		
		echo "welcome,".$acc_name;
		echo "welcome,"$acc_name;

	}
}
echo <a href="logout.php">logout</a>

$user=$_SESSION['user'];
echo "welcome,".$user;

 ?>
</body>
</html>