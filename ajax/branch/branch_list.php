<?php

    include('../datab.php');

    $res = [];
    $count = 0;

    $sql = "SELECT id, branch_name FROM branch_data where status = 'Active' ";
    $rec = mysqli_query($conn, $sql);
    while($data = mysqli_fetch_assoc($rec))
    {
        $count++;
        $res['data'][] = $data;
    }

    if($count == 0)
    {
        $res['status'] = 'Not-Available';  
        $res['remarks'] = 'Branch Name Not-Available';  
    }
    else
    {
        $res['status'] = 'Success';  
        $res['remarks'] = 'Branch Sent';  
    }

    $res['count'] = $count;

    echo json_encode($res);

?>