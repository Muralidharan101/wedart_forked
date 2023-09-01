<?php
    require_once '../datab.php';

    $res = [];
    $count = 0;
    $temp =[];

    $sql = "SELECT id,follow_up_name FROM follow_up_data WHERE status = 'Active'";
    $result = mysqli_query($conn, $sql);
    while($data = mysqli_fetch_assoc($result))
    {
        $count++;
        $temp[] = $data;
    }

    if($count == 0)
    {
        $res['data'] = $temp; 
        $res['status']  = 'Error';
        $res['remarks'] = 'Follow up data Not-Available'; 
    }
    else
    {
        $res['data'] = $temp;
        $res['status']  = 'Success';
        $res['remarks'] = 'Follow up data sent successfully';
    }
    
    $res['count'] = $count;

    echo json_encode($res);
?>