<?php

    include('../datab.php');

    $res = [];
    $count = 0;
    $temp = [];

    $sql = "SELECT id, branch_name FROM branch_data where status = 'Active' ";
    $rec = mysqli_query($conn, $sql);
    while($data = mysqli_fetch_assoc($rec))
    {
        $count++;
       $temp[] = $data; 
    }

    if($count == 0)
    {
        $res['data'] = $temp;
        $res['status'] = 'Not-Available';  
        $res['remarks'] = 'Branch Name Not-Available';  
    }
    else
    {
        $res['data'] = $temp;
        $res['status'] = 'Success';  
        $res['remarks'] = 'Branch Sent';  
    }

    $res['count'] = $count;

    echo json_encode($res);

?>