<?php
    require_once '../datab.php';

    $res = [];

    $id               = mysqli_real_escape_string($conn, $_POST['id']);
    $service_category = mysqli_real_escape_string($conn, $_POST['service_category']);
    $service          = mysqli_real_escape_string($conn, $_POST['service']);

    $sql = "SELECT * FROM service_data where status = 'Active' AND type_id = '$service_category' AND `service_name`='$service'";
    $rec = mysqli_query($conn, $sql);
    
    if($data = mysqli_fetch_assoc($rec))
    {
        $res['status'] = 'Available';  
        $res['remarks'] = 'Service Already Available';
    }
    else
    {
        $sql = "UPDATE service_data SET `type_id`='$service_category', `service_name`='$service' WHERE `id`='$id'";

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
    }
    echo json_encode($res);
?>