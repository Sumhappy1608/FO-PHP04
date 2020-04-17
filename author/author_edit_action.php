<?php
    require_once('../../connection.php');
    if(isset($_POST['ID']))
    {
        $ID = $_POST['ID'];
    }
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
        //$Status = $_POST['Status'];
        $Status = 1;
    }
    else
    {
        $Status = 0;
    }
    $query = "UPDATE authors SET Name='".$Name."',Email='".$Email."',Password='".$Password."',Status='".$Status."' WHERE ID=".$ID;
    $status_query = $conn->query($query);
    if($status_query == true)
    {
    	setcookie('msg','Cập nhật thành công', time()+5);
    	header('Location: authors.php');
    }
    else
    {
    	setcookie('msg','Cập nhật không thành công', time()+5);
    	header('Location: author_edit.php?ID='.$ID);
    }
?>