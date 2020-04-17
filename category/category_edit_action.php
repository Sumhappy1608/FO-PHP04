<?php
    require_once('../../connection.php');
    if(isset( $_POST['Title']))
    {
    	$Title = $_POST['Title'];
    }
    if(isset($_POST['Description']))
    {
    	$Description = $_POST['Description'];
    }
      if(isset($_POST['ID']))
    {
    	$ID = $_POST['ID'];
    }
    $query = "UPDATE categories SET Title='".$Title."',Description='".$Description."' WHERE ID=".$ID;
    $status = $conn->query($query);
    if($status == true)
    {
    	setcookie('msg','Cập nhật thành công', time()+5);
    	header('Location: categories.php');
    }
    else
    {
    	setcookie('msg','Cập nhật không thành công', time()+5);
    	header('Location: category_edit.php?ID='.$ID);
    }
?>