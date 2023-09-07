<?php

    include('../datab.php');

    $res = [];

    $service = mysqli_real_escape_string($conn, $_POST['service']);
    $additional_service = mysqli_real_escape_string($conn, $_POST['additional_service']);
    $cost = mysqli_real_escape_string($conn, $_POST['additional_service_cost']);


    $sql = "SELECT * FROM additional_service_data where status = 'Active' AND type_id = '$service' AND additional_service_name = '$additional_service' ";
    $rec = mysqli_query($conn, $sql);
    if($data = mysqli_fetch_assoc($rec))
    {
        $res['status'] = 'Available';  
        $res['remarks'] = 'Additional Service Already Available';  
    }
    else
    {
        $sql = "INSERT INTO additional_service_data (`type_id`, `additional_service_name`, `additional_service_cost`, `status`, `dateTime`) VALUES ('$service','$additional_service', '$cost', 'Active', '$dateTime')";
        mysqli_query($conn, $sql);

        $res['status'] = 'Success';  
        $res['remarks'] = 'Additional Service Created';
    }

    echo json_encode($res);

?>