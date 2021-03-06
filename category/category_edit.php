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
	<h3 align="center">Update Category Information</h3>
	<hr>
	    <?php if(isset($_COOKIE['msg'])){ ?>
	    <div class="alert alert-warning">
	    	<strong>Thất bại!</strong> <?= $_COOKIE['msg']?>
	    </div>
	    <?php } ?>
	    <form action="category_edit_action.php" method="POST" role="form" enctype="multipart/form-data">
	    	<input type="hidden" name="ID" value="<?= $category['ID'] ?>">
	    	<div class="form-group">
	    		<label for="">Name</label>
	    		<input type="text" class="form-control" id="" placeholder="" name="Title" value="<?= $category['Title'] ?>">
	    	</div>
	    	<div class="form-group">
	    		<label for="">Description</label>
	    	   <input type="text" class="form-control" id="" placeholder="" name="Description" value="<?= $category['Description'] ?>">
	    	</div>
	    	<button type="submit" class="btn btn-primary">Update</button>
	    </form>
	</div>
</body>
</html>