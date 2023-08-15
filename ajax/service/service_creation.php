<?php

    include('../datab.php');

    $res = [];

    $service_category = mysqli_real_escape_string($conn, $_POST['service_category']);
    $service = mysqli_real_escape_string($conn, $_POST['service']);


    $sql = "SELECT * FROM service_data where status = 'Active' AND service_name = '$service' AND type_id = '$service_category' ";
    $rec = mysqli_query($conn, $sql);
    if($data = mysqli_fetch_assoc($rec))
    {
        $res['status'] = 'Available';  
        $res['remarks'] = 'Service Already Available';  
    }
    else
    {
        $sql = "INSERT INTO service_data (`type_id`, `service_name`, `status`, `dateTime`) VALUES ('$service_category','$service', 'Active', '$dateTime')";
        mysqli_query($conn, $sql);

        $res['status'] = 'Success';  
        $res['remarks'] = 'Service Created Successfully';
    }

    echo json_encode($res);

?>