<?php
    include('../datab.php');

    $res = [];

    if(isset($conn, $_POST['id']))
    {
        $id = mysqli_real_escape_string($conn, $_POST['id']);

        $sql = "UPDATE additional_service_data SET status = 'In-Active' WHERE id = '$id' ";
        mysqli_query($conn, $sql);

        $res['status'] = 'Success';  
        $res['remarks'] = 'Additional Service Removed';
    }
    else
    {
        $res['status']  = 'Failed';
        $res['remarks'] = 'Failed to remove'; 
    }
    
    echo json_encode($res);
?>