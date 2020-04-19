<?php
session_start();

$username = "root";
$servername = "localhost";
$dbname = "orders";
$password = "";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) 
	die ("Server connection failed!");

$name = $_POST['fname'];
$address = $_POST['addr'];
$mobile = $_POST['mno'];
$f1 = $_POST['pq'];
$f2 = $_POST['gq'];
$f3 = $_POST['cq'];
$radio = $_POST['mode'];

$sql = "INSERT INTO details (Name, Address, Pizza, GarlicBread, Cheesecake, Payment, Mobile)
VALUES ('$name', '$address', '$f1', '$f2', '$f3', '$radio', '$mobile')"; 

$conn->query($sql);
?>
<!DOCTYPE html>
<html>

<head>

<link href = "https://fonts.googleapis.com/css?family=Lobster|Nunito+Sans&display=swap" rel = "stylesheet">
<link href = "https://fonts.googleapis.com/css?family=Lobster&display=swap" rel = "stylesheet">
<link rel = "stylesheet" type = "text/css" href = "subStyle.css">

<title>Order Confirmed </title>
<h2 class = "X"><b>Your order is confirmed, <?php echo " $name"; ?>!</b></h2>

</head>

<body>
<p class = "X">Your order has been confirmed. The delivery valet assigned to you will soon be at the restaurant to pick up your ordered items. You can expect the delivery
within 45 minutes. For more queries, contact +91 828 393 9800.</p>

</body>

</html>


