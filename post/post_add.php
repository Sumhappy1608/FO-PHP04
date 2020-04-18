<?php
require_once('../../connection.php');
//Load category
$query_category = "SELECT * FROM categories";
$result_cate = $conn->query($query_category);
$categories = array();
while($row = $result_cate->fetch_assoc())
{
	$categories[] = $row;
}

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
	<h3 align="center">Add New Post</h3>
	<hr>
	    <?php if(isset($_COOKIE['msg'])){ ?>
	    <div class="alert alert-warning">
	    	<strong>Thất bại!</strong>Thêm mới không thành công!!!
	    </div>
	    <?php } ?>
	    <form action="post_add_action.php" method="POST" role="form" enctype="multipart/form-data">
	    	<div class="form-group">
	    		<label for="">Title</label>
	    		<input type="text" class="form-control" id="" placeholder="" name="Title">
	    	</div>
	    	<div class="form-group">
	    		<label for="">Description</label>
	    		<input type="text" class="form-control" id="" placeholder="" name="Description">
	    	</div>
	    	<div class="form-group">
	    		<label for="">Contents</label>
	    		<textarea class="form-control" id="" placeholder="" name="Contents" rows="8"></textarea> 
	    	</div>
	    	<div class="form-group">
	    		<label for="">Category</label>
	    		<select name="Category_id" class="form-control">
	    			<?php foreach($categories as $cate){
	    			?>
	    			<option value="<?= $cate['ID']?>"><?= $cate['Title']?></option>
	    			<?php } ?>
	    		</select>
	    	</div>
	    	<div class="form-group">
	    		<label for="">Thumbnail</label>
	    		<input type="file" class="form-control" id="" placeholder="" name="Thumbnail">
	    	</div>
	    	<div class="form-group">
	    		<label for="">Status</label>
	    		<input type="checkbox" id="" placeholder="" name="Status"><em>(Check để hiển thị tác giả)</em>
	    	</div>
	    	<button type="submit" class="btn btn-primary">Create</button>
	    </form>
	</div>
</body>
</html>