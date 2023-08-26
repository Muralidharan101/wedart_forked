<?php
    require_once '../datab.php';

    $res = [];

    $id      = mysqli_real_escape_string($conn, $_POST['id']);
    $service = mysqli_real_escape_string($conn, $_POST['service']);
    $additional_service = mysqli_real_escape_string($conn, $_POST['additional_service']);

    $sql = "SELECT * FROM additional_service_data where status = 'Active' AND type_id = '$service' AND additional_service_name = '$additional_service' ";
    $rec = mysqli_query($conn, $sql);
    if($data = mysqli_fetch_assoc($rec))
    {
        $res['status'] = 'Available';  
        $res['remarks'] = 'Additional Service Already Available';  
    }
    else
    {

        $sql = "UPDATE additional_service_data SET `type_id`='$service', `additional_service_name`='$additional_service' WHERE `id`='$id'";
        
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
    }

    echo json_encode($res);
?>