<?php
require_once('../../connection.php');
$ID = $_GET['ID'];
$query_author="SELECT * FROM authors WHERE ID = ".$ID;
$author = $conn->query($query_author)->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<title>Zent - Education And Technology Group</title>
	<!--Latest compiled and minified CSS-->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!--Optional theme -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!--Latest compiled and minified JavaScript-->
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/jv/bootstrap.min.jv"></script>
</head>
<body>
	
	<div class="container">
	    <h3 align="center">Zent - Education And Technology Group</h3>
	    <h3 align="center">Author Detail</h3>
	    <hr>
	    <h2>Name:<?= $author['Name'] ?></h2>
	    <h2>Email:<?= $author['Email'] ?></h2>
	    <h2>Password:<?= $author['Password'] ?></h2>
        <h2>Status:<?= $author['Status'] ?></h2>
	</div>
</body>
</html>
