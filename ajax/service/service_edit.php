<?php
    require_once '../datab.php';

    $res = [];

    $id               = mysqli_real_escape_string($conn, $_POST['id']);
    $service_category = mysqli_real_escape_string($conn, $_POST['service_category']);
    $service          = mysqli_real_escape_string($conn, $_POST['service']);
    $cost             = mysqli_real_escape_string($conn, $_POST['service_cost']);

    $sql = "UPDATE service_data SET `type_id`='$service_category', `service_name`='$service' , `service_cost`='$cost' WHERE `id`='$id'";

    if($result = mysqli_query($conn, $sql))
    {
        $res['status'] = 'Success';
        $res['remarks'] = 'Service updated successfully';
    }
    else
    {
        $res['status'] = 'Failed';
        $res['remarks'] = 'Failed to update service';
    }

    echo json_encode($res);
?>