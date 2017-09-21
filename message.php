<?php
include("db.php");
?>

<html>
<head>
	<title>This is Message Page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" href="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
<br>
<br>
<h2><hr><hr>The Messages From the Students &  from other Visitors To the College <hr><hr></h2>

<br>
<br>
<?php
$sql = "select * from contact order by cid desc";
$rows = mysqli_query($con,$sql);

echo "<table border='2'";
echo "<tr>";

echo "<th>";
echo "ID";
echo "</th>";
echo "<th>";
echo "Message Date";
echo "</th>";
echo "<th>";
echo "Name";
echo "</th>";
echo "<th>";
echo "Email";
echo "</th>";
echo "<th>";
echo "Message";
echo "</th>";

while($row = mysqli_fetch_array($rows)){
	$id = $row['cid'];
	$name = $row['name'];
	$message = $row['msg'];
	$email = $row['email'];
	$shortmsg = substr($message,0,40);
	$date = $row['entry_date'];

	echo "<tr>";

	echo "<td>";
	echo $id;
	echo "</td>";
	echo "<td>";
	echo $date;
	echo "</td>";
	echo "<td>";
	echo $name;
	echo "</td>";
	echo "<td>";
	echo $email;
	echo "</td>";
	echo "<td>";
	echo "<a href='readmessage.php?cid=$id'>$shortmsg</a>";
	echo "</td>";
	
	echo "</tr>";

}
echo "<table>";


?>
<br>
<a href="admindashboard.php" class="btn btn-success">Return to dashboard</a>
</div>
</body>
</html>