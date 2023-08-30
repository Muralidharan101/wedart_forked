<?php
    require_once '../datab.php';

    $res = [];

    $id      = mysqli_real_escape_string($conn, $_POST['id']);
    $blog_id = mysqli_real_escape_string($conn, $_POST['blog_id']);
    $blog_days_id = mysqli_real_escape_string($conn, $_POST['blog_days_id']);
    $day_count = mysqli_real_escape_string($conn, $_POST['day_count']);

    $sql = "UPDATE blog_days_data SET `blog_id`='$blog_id', `blog_days_id`='$blog_days_id', `day_count`='$day_count' WHERE `id`='$id' ";
    
    if($row = mysqli_query($conn, $sql))
    {
        $res['status']  = 'Success';
        $res['remarks'] = 'Blog days created successfully';
    }
    else
    {
        $res['status']  = 'Failed';
        $res['remarks'] = 'Unable to create blog days';
    }
    echo json_encode($res);
?>