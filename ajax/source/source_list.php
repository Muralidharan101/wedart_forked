<?php

    include('../datab.php');

    $res = [];
    $count = 0;
    $temp = [];

    $sql = "SELECT id, source_data FROM source_data where status = 'Active' ";
    $rec = mysqli_query($conn, $sql);
    while($data = mysqli_fetch_assoc($rec))
    {
        $count++;
        $temp[] = $data;
    }

    if($count == 0)
    {
        $res['data'][] = $temp;
        $res['status'] = 'Not-Available';  
        $res['remarks'] = 'Source Name Not-Available';  
    }
    else
    {
        $res['data'][] = $temp;
        $res['status'] = 'Success';  
        $res['remarks'] = 'Source Name Sent';  
    }

    $res['count'] = $count;

    echo json_encode($res);

?>