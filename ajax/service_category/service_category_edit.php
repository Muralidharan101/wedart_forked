<?php
    require_once '../datab.php';

    $res = [];

    $id               = mysqli_real_escape_string($conn, $_POST['id']);
    $service_category = mysqli_real_escape_string($conn, $_POST['service_category']);
    
    $sql = "SELECT * FROM service_type_data WHERE status = 'Active' AND type_name = '$service_category'";
    $rec = mysqli_query($conn, $sql);
    
    if($data = mysqli_fetch_assoc($rec))
    {
        $res['status'] = 'Available';  
        $res['remarks'] = 'Service Category Already Available';
    }
    else
    {
        $sql ="UPDATE service_type_data SET `type_name`='$service_category' WHERE `id`='$id'";

        if($result = mysqli_query($conn, $sql))
        {
            $res['status']  = 'Success';
            $res['remarks'] = 'Service Category updated successfully';
        }
        else
        {
            $res['status']  =  'Failed';
            $res['remarks'] = 'Failed to update service category';
        }
    }
    echo json_encode($res);
?>