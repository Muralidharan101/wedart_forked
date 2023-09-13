<?php
    require_once '../datab.php';

    $res = [];

    $id          = mysqli_real_escape_string($conn, $_POST['id']);
    $source_data = mysqli_real_escape_string($conn, $_POST['source_data']);

    $sql = "SELECT * FROM source_data WHERE status = 'Active' AND source_data = '$source_data'";
    $rec = mysqli_query($conn, $sql);
    
    if($data = mysqli_fetch_assoc($rec))
    {
        $res['status'] = 'Available';  
        $res['remarks'] = 'Source Already Available';
    }
    else
    {
        $sql ="UPDATE source_data SET `source_data`='$source_data' WHERE `id`='$id'";

        if($result = mysqli_query($conn, $sql))
        {
            $res['status']  = 'Success';
            $res['remarks'] = 'Source updated';
        }
        else
        {
            $res['status']  = 'Failed';
            $res['remarks'] = 'Failed to update Source';
        }
    }
    
    echo json_encode($res);
?>