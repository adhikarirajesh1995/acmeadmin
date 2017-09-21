<?php
include("db.php");
?>

<html>
<head>
	<title>This is notice display Page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" href="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<hr><h2>Here you can see all your Notice <hr></h2>
<?php
$sql = "select * from notice order by nid desc";
$rows = mysqli_query($con,$sql);

echo "<table border='2'";
echo "<tr>";
echo "<th>";
echo "Action";
echo "</th>";
echo "<th>";
echo "ID";
echo "</th>";
echo "<th>";
echo "Notice Date";
echo "</th>";
echo "<th>";
echo "Notice";
echo "</th>";

while($row = mysqli_fetch_array($rows)){
	$nid = $row['nid'];
	$date = $row['date'];
	$notice = $row['notice'];

	echo "<tr>";
    echo "<td>";
	echo "<a href='update.php?nid=$nid'>Update</a>";
	echo "  |  ";
	echo "<a href='delete.php?nid=$nid'>Delete</a>";
	echo "</td>";

	echo "<td>";
	echo $nid;
	echo "</td>";
	echo "<td>";
	echo $date;
	echo "</td>";
	echo "<td>";
	echo $notice;
	echo "</td>";

	
	echo "</tr>";

}
echo "<table>";


?>
<br>
<a href="notice.php" class="btn btn-info" >Return to Manage Notice</a>
</div>
</body>
</html>