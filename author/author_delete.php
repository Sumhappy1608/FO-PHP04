<?php
    require_once('../../connection.php');
    if(isset($_GET['ID']))
    {
    	$ID = $_GET['ID'];
    }
    $query = "DELETE FROM authors WHERE ID=".$ID;
    $status_query = $conn->query($query);
    if($status_query == true)
    {
    	setcookie('msg','Xóa thành công', time()+5);
    }
    else
    {
    	setcookie('msg','Xóa không thành công', time()+5);
    }
    header('Location: authors.php');
?>