<?php
    require_once('../../connection.php');
    //Lấy tiêu đề
    if(isset( $_POST['Title']))
    {
        $Title = $_POST['Title'];
    }
    //Lấy mô tả
    if(isset($_POST['Description']))
    {
        $Description = $_POST['Description'];
    }
    //Lấy nội dung
    if(isset($_POST['Contents']))
    {
        $Contents = $_POST['Contents'];
    }
    //Lấy categoty_id
    if(isset($_POST['Category_id']))
    {
        $Category_id = $_POST['Category_id'];
    }

    //Lấy ảnh từ file và add vào thư mục img trong blogs
    $target_dir = "../../img/";  // thư mục chứa file upload
    $thumbnail="";

    $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]); // link sẽ upload file lên

    $status_upload = move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file);

    if ($status_upload) { // nếu upload file không có lỗi 
        $thumbnail = basename( $_FILES["thumbnail"]["name"]);
    }

    //Lấy trạng thài hiển thị 
    $Status = 0;
    if(isset($_POST['Status']))  //Nếu check vào hiển thị thì status = 1
    {
        $Status = 1;  //cho phép hiển thị
    }
    else
    {
        $Status = 0;
    }

    //Lấy author_id nhưng chưa có yêu cầu trong post_add nên để mặc định là 1
    //ở đây lấy category_id vì trong post_add chưa có author_id, nếu lấy author_id thì add không thành công
    if(isset($_POST['Category_id']))    
    {
       $Author_id = 1;
    }

    //Lấy ngày giờ ngay tại thời điểm thêm bài viết
    date_default_timezone_set('Asia/Ho_Chi_Minh');

    $created_at =  date('Y-m-d H:i:s');
    
    $query = "INSERT INTO posts(Title,Description,Contents,thumbnail,Category_id,Author_id,Status,created_at) VALUES ('".$Title."','".$Description."','".$Contents."','".$thumbnail."','".$Category_id."','$Author_id','".$Status."','".$created_at."');";
    $status_query = $conn->query($query);
    if($status_query == true)
    {
        setcookie('msg','Thêm mới thành công', time()+5);
        header('Location: posts.php');
    }
    else
    {
        setcookie('msg','Thêm mới không thành công', time()+5);
        header('Location: post_add.php');
    }
?>