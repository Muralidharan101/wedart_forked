<?php

    include('../datab.php');

    $res = [];
    $count = 0;
    $temp = [];

    $sql = "SELECT asd.id, asd.additional_service_name, asd.type_id, std.type_name
            FROM additional_service_data asd 
            JOIN service_type_data AS std
            ON asd.type_id = std.id
            where asd.status = 'Active'";

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