<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>

</head>

<body>
<?php 
$username = "root";
$servername = "localhost";
$dbname = "orders";
$password = "";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) 
	die ("Server connection failed!");
else
	echo "Connection to server successful!";
?>

</body>
</html>
