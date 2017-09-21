<?php 
session_start();
 ?>
 <html>
<head>
	<title>This is admin pannel</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" href="js/bootstrap.min.js"></script>
</head>
<body>
	<?php 
if(!isset($_SESSION['user'])){
	include('acmelogin.php');
}else{
	$user = $_SESSION['user'];
?>
	<div class="container" >
		<a href="acmelogin.php" class="btn btn-info">Logout</a>
	<h2><hr><hr>Admin Dashboard <hr><hr></h2><br>
	<p><a href="admdetails.php" class="btn btn-success">Admission Details</a><br></p>
	<hr><p><a href="notice.php"class="btn btn-danger">Notice Activities</a><br></p>
	<hr><p><a href="message.php" class="btn btn-info"> Read Messages</a><br></p>
	<hr><p><a href="manageteacher.php" class="btn btn-info">Manage Staffs</a><br></p>
	<hr><p><a href="vacancy.php" class="btn btn-Primary"> Vacancy Announcement</a><br></p>
<hr>
</div>

<?php
}
?>
</body>
</html>