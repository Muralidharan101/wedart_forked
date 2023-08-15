<?php
    require_once '../datab.php';

    $res = [];

    $name     = mysqli_real_escape_string($conn, $_POST['ref_name']);
    $days     = mysqli_real_escape_string($conn, $_POST['days_count']);

   
    $sql = "INSERT INTO blog_days (`ref_name`, `days_count`, `status`, `dateTime` ) VALUES('$name', '$days', 'Active', '$dateTime')";
    

    if($result = mysqli_query($conn, $sql))
    {
        $res['status']  = 'Success';
        $res['remarks'] = 'Referrer created successfully';
    }
    else
    {
        $res['status']  = 'Failed';
        $res['remarks'] = 'Unable to create referrer';
    }

    echo json_encode($res);
?>