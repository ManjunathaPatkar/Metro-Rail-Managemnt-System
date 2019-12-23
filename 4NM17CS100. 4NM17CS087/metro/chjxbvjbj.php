<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 

$link = mysqli_connect("localhost","root","root","mother");
$query = "insert into son values (1);";
mysqli_query($link,$query);
$query = "insert into son values (90);";
mysqli_query($link,$query);



?>
</body>
</html>