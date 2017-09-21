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
$sql = "select * from vacancy order by vid desc";
$rows = mysqli_query($con,$sql);

echo "<table border='2'";
echo "<tr>";
echo "<th>";
echo "ID";
echo "</th>";
echo "<th>";
echo "vacancy Date";
echo "</th>";
echo "<th>";
echo "vacancy Post";
echo "</th>";

while($row = mysqli_fetch_array($rows)){
	$vid = $row['vid'];
	$date = $row['date'];
	$vacancy = $row['vacancy'];

	echo "<tr>";
    echo "<td>";
	echo $vid;
	echo "</td>";
	echo "<td>";
	echo $date;
	echo "</td>";
	echo "<td>";
	echo $vacancy;
	echo "</td>";

	
	echo "</tr>";

}
echo "<table>";


?>
<br>
<a href="vacancy.php" class="btn btn-info" >Return to Dashboard</a>
</div>
</body>
</html>