<?php
    require_once '../datab.php';

    $id   = mysqli_real_escape_string($conn, $_POST['id']); 
    $name = mysqli_real_escape_string($conn, $_POST['follow_up_name']);

    $sql = "UPDATE follow_up_data SET `follow_up_name`='$name' WHERE `id`='$id'";

    if($result = mysqli_query($conn, $sql))
    {
        $res['status']  = 'Success';
        $res['remarks'] = 'Follow Up Data Updated';
    }
    else
    {
        $res['status']  = 'Failed';
        $res['remarks'] = 'Failed to Update';
    }
    echo json_encode($res);
?>