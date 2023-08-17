<?php

    include('../datab.php');

    $res = [];
    $count = 0;

    $sql = "SELECT id, portfolio_file, sample_video_file FROM general_settings_data where status = 'Active' ";
    $rec = mysqli_query($conn, $sql);
    while($data = mysqli_fetch_assoc($rec))
    {
        $count++;
        $res['data'][] = $data;
    }

    if($count == 0)
    {
        $res['status'] = 'Not-Available';  
        $res['remarks'] = 'Data Not-Available';  
    }
    else
    {
        $res['status'] = 'Success';  
        $res['remarks'] = 'Data Sent';  
    }

    $res['count'] = $count;

    echo json_encode($res);

?>