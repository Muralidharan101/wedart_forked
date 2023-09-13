<?php
    require_once '../datab.php';

    $res = [];

    $id      = mysqli_real_escape_string($conn, $_POST['id']);
    $service = mysqli_real_escape_string($conn, $_POST['service']);
    $additional_service = mysqli_real_escape_string($conn, $_POST['additional_service']);
    $cost = mysqli_real_escape_string($conn, $_POST['additional_service_cost']);

    $sql = "UPDATE additional_service_data SET `type_id`='$service', `additional_service_name`='$additional_service',`additional_service_cost`='$cost' WHERE `id`='$id'";
        
    if($result = mysqli_query($conn, $sql))
    {
        $res['status']  = 'Success';
        $res['remarks'] = 'Additional Service updated';
    }
    else
    {
        $res['status']  = 'Failed';
        $res['remarks'] = 'Failed to update additional service';
    }

    echo json_encode($res);
?>