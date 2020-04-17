<?php
require_once('../../connection.php');
$ID = $_GET['ID'];
$query_category="SELECT * FROM categories WHERE ID = ".$ID;
$category = $conn->query($query_category)->fetch_assoc();

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
	    <h3 align="center">Category Detail</h3>
	    <hr>
	    <h2>Title:<?= $category['Title'] ?></h2>
	    <h2>Description:<?= $category['Description'] ?></h2>

	</div>
</body>
</html>
