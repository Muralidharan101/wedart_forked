<?php

    include('../datab.php');

    $res = [];

    $service_category = mysqli_real_escape_string($conn, $_POST['service_category']);


    $sql = "SELECT * FROM service_type_data where status = 'Active' AND type_name = '$service_category' ";
    $rec = mysqli_query($conn, $sql);
    if($data = mysqli_fetch_assoc($rec))
    {
        $res['status'] = 'Available';  
        $res['remarks'] = 'Service Category Name Already Available';  
    }
    else
    {
        $sql = "INSERT INTO service_type_data (`type_name`, `status`, `dateTime`) VALUES ('$service_category', 'Active', '$dateTime')";
        mysqli_query($conn, $sql);

        $res['status'] = 'Success';  
        $res['remarks'] = 'Service Category Created Successfully';
    }

    echo json_encode($res);

?>