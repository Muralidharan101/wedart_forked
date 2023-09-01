<?php
    require_once '../datab.php';

    $res = [];
    $count = [];

    $sql = "SELECT (count(follow_up_date))follow_date_count FROM follow_up WHERE DATE(follow_up_date) = CURDATE()";

    if($row = mysqli_query($conn, $sql))
    {
        $count = mysqli_fetch_assoc($row);
        $res['today_count'] = $count;
        $res['status'] = 'Success';
        $res['remarks'] = 'Data sent successfully';
    }
    else
    {
        $res['status']  = 'Failed';
        $res['remarks'] = 'Unable to send data'; 
    }
    echo json_encode($res);
?>