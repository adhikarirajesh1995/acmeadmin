<?php
include("db.php");
?>

<html>
<head>
	<title>This is admission details</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" href="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
<br>		
<h2><hr><hr>This is the Details of the Students who have asked to join Acme College <hr><hr></h2>
<br>
<?php
$sql = "select sid,name,mobileno,diploma from admission order by sid desc";
$rows = mysqli_query($con,$sql);

echo "<table border='2'";
echo "<tr>";

echo "<th>";
echo "ID";
echo "</th>";
echo "<th>";
echo "Student Name";
echo "</th>";
echo "<th>";
echo "Phone no";
echo "</th>";
echo "<th>";
echo "Stream";
echo "</th>";

while($row = mysqli_fetch_array($rows)){
	$id = $row['sid'];
	$name = $row['name'];
	$phone = $row['mobileno'];
	$stream = $row['diploma'];

	echo "<tr>";

	echo "<td>";
	echo $id;
	echo "</td>";
	echo "<td>";
	echo $name;
	echo "</td>";
	echo "<td>";
	echo $phone;
	echo "</td>";
	echo "<td>";
	echo $stream;
	echo "</td>";
	
	echo "</tr>";

}
echo "<table>";


?>
<br>
<a href="admindashboard.php" class ="btn btn-primary">Return to dashboard</a>
</div>
</body>
</html>