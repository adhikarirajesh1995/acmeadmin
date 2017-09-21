<?php
include("db.php");
$id = $_GET['cid'];
?>

<html>
<head>
	<title>This is detail message page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" href="js/bootstrap.min.js"></script>
</head>
<body>
<br>
<br>
<?php
$sql = "select * from contact where cid=$id";
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
	echo $message;
	echo "</td>";
	
	echo "</tr>";

}
echo "<table>";


?>
<br>
<a href="message.php" class="btn btn-info">Return to Message</a>



</body>
</html>