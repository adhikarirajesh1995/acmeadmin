<?php
$nid = $_GET['nid'];
include('db.php');
$query = "select nid,notice from notice where nid=$nid";
$query_result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($query_result)){
	$pid = $row['nid'];
	$notice = $row['notice'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" href="js/bootstrap.min.js"></script>
</head>
<body>
<h2>Update Record</h2><hr>

<form method="POST" action='updatepro.php'>
	
<table>

<tr>
	<td>Notice ID :</td>
	<td><input type="text" name="nid" value="<?php echo $nid ?>"></td>
</tr>

<tr>
	<td>Notice :</td>
	<td><input type="text" name="notice" value="<?php echo $notice ?>"></td>
</tr>
<tr>
	<br><td><input type="submit" class="btn btn-info" value="Update"></td>
</tr>
	
</table>
</form>


</body>
</html>