<?php

    include('../datab.php');

    $res = [];

    $service_category = mysqli_real_escape_string($conn, $_POST['service_category']);
    $service = mysqli_real_escape_string($conn, $_POST['service']);
    $cost = mysqli_real_escape_string($conn, $_POST['service_cost']);


    $sql = "SELECT * FROM service_data where status = 'Active' AND service_name = '$service' AND type_id = '$service_category' ";
    $rec = mysqli_query($conn, $sql);
    if($data = mysqli_fetch_assoc($rec))
    {
        $res['status'] = 'Available';  
        $res['remarks'] = 'Service Already Available';  
    }
    else
    {
        $sql = "INSERT INTO service_data (`type_id`, `service_name`, `service_cost`, `status`, `dateTime`) VALUES ('$service_category','$service', '$cost', 'Active', '$dateTime')";
        mysqli_query($conn, $sql);

        $res['status'] = 'Success';  
        $res['remarks'] = 'Service Created Successfully';
    }

    echo json_encode($res);

?>