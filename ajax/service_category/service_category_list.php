<?php

    include('../datab.php');

    $res = [];
    $count = 0;

    $sql = "SELECT id, type_name FROM service_type_data where status = 'Active' ";
    $rec = mysqli_query($conn, $sql);
    while($data = mysqli_fetch_assoc($rec))
    {
        $count++;
        $res['data'][] = $data;
    }

    if($count == 0)
    {
        $res['status'] = 'Not-Available';  
        $res['remarks'] = 'Source Name Not-Available';  
    }
    else
    {
        $res['status'] = 'Success';  
        $res['remarks'] = 'Source Name Sent';  
    }

    $res['count'] = $count;

    echo json_encode($res);

?>