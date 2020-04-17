<?php
    require_once('../../connection.php');
    if(isset( $_POST['Name']))
    {
    	$Name = $_POST['Name'];
    }
    if(isset($_POST['Email']))
    {
    	$Email = $_POST['Email'];
    }
    if(isset($_POST['Password']))
    {
        $Password = $_POST['Password'];
    }
    if(isset($_POST['Status']))
    {
        $Status = 1;  //cho phép hiển thị
    }
    else
    {
        $Status = 0;   //không cho phép hiển thị
    }
    $query = "INSERT INTO authors(Name,Email,Password,Status) VALUES ('".$Name."','".$Email."','".$Password."','".$Status."');";
    $status_query = $conn->query($query);
    if($status_query == true)
    {
    	setcookie('msg','Thêm mới thành công', time()+5);
    	header('Location: authors.php');
    }
    else
    {
    	setcookie('msg','Thêm mới không thành công', time()+5);
    	header('Location: author_add.php');
    }
?>