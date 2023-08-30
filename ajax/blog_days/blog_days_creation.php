<?php
    require_once '../datab.php';

    $res = [];

    $blog_id = mysqli_real_escape_string($conn, $_POST['blog_id']);
    $blog_days_id = mysqli_real_escape_string($conn, $_POST['blog_days_id']);
    $day_count = mysqli_real_escape_string($conn, $_POST['day_count']);

    $sql = "INSERT INTO blog_days_data (`blog_id`, `blog_days_id`, `day_count`, `status`, `dateTime`) 
                                VALUES ('$blog_id', '$blog_days_id', '$day_count', 'Active', NOW() )";
    
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