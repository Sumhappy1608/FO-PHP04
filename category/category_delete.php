<?php
    require_once('../../connection.php');
    if(isset($_GET['ID']))
    {
    	$ID = $_GET['ID'];
    }
    $query = "DELETE FROM categories WHERE ID=".$ID;
    $status = $conn->query($query);
    if($status == true)
    {
    	setcookie('msg','Xóa thành công', time()+5);
    }
    else
    {
    	setcookie('msg','Xóa không thành công', time()+5);
    }
    header('Location: categories.php');
?>