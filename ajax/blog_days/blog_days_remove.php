<?php
    require_once '../datab.php';
    $res = [];

    $id = mysqli_real_escape_string($conn, $_POST['id']);

    $sql = "UPDATE blog_days_data SET `status`='In-Active' WHERE `id`='$id'";

    if(mysqli_query($conn, $sql))
    {
        $res['status']  = 'Success';
        $res['remarks'] = 'Blog day removed';  
    }
    else
    {
        $res['status']  = 'Failed';
        $res['remarks'] = 'Unable to remove blog day';
    }
    echo json_encode($res);
?>