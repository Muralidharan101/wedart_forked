<?php

    include('../datab.php');

    $res = [];
    $count = 0;
    $res['data'] = [];

    $sql = "SELECT u.id, u.name, u.mobile, u.role, u.password, u.branch_id, br.branch_name FROM user_data u JOIN branch_data br ON u.branch_id = br.id where u.status = 'Active'";
    $rec = mysqli_query($conn, $sql);
    while($data = mysqli_fetch_assoc($rec))
    {
        $count++;
        $res['data'][] = $data;
    }

    if($count == 0)
    {
        $res['status'] = 'Not-Available';  
        $res['remarks'] = 'Service Not-Available';  
    }
    else
    {
        $res['status'] = 'Success';  
        $res['remarks'] = 'Service Sent';  
    }

    $res['count'] = $count;

    echo json_encode($res);

?>