<?php

    include('../datab.php');

    $res = [];
    $count = 0;
    $temp = [];
    $sql = "SELECT sd.id, sd.service_name, sd.type_id, std.type_name FROM service_data sd JOIN service_type_data std ON sd.type_id = std.id where sd.status = 'Active'";
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
        $res['remarks'] = 'Service Not-Available';  
    }
    else
    {
        $res['data'] = $temp;
        $res['status'] = 'Success';  
        $res['remarks'] = 'Service Sent';  
    }

    $res['count'] = $count;

    echo json_encode($res);

?>