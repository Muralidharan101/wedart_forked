<?php
    require_once '../datab.php';

    $res = [];

    $id       = mysqli_real_escape_string($conn, $_POST['id']);
    $name     = mysqli_real_escape_string($conn, $_POST['ref_name']);
    $days     = mysqli_real_escape_string($conn, $_POST['days_count']);

   
    $sql = "UPDATE blog_days SET `ref_name`='$name', `days_count`='$days' WHERE `id`='$id'";
    
    if($result = mysqli_query($conn, $sql))
    {
        $res['status']  = 'Success';
        $res['remarks'] = 'Days Updated successfully';
    }
    else
    {
        $res['status']  = 'Failed';
        $res['remarks'] = 'Unable to create referrer';
    }

    echo json_encode($res);
?>