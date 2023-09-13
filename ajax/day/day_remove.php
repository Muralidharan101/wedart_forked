<?php

    require_once '../datab.php';

    $res = [];
    if(isset($conn, $_POST['id']))
    {
        $id = mysqli_real_escape_string($conn, $_POST['id']);

        $sql = "UPDATE blog_days SET status = 'In-Active' WHERE id = '$id' ";
        mysqli_query($conn, $sql);

        $res['status'] = 'Success';  
        $res['remarks'] = 'Days Removed Successfully';
    }
    else
    {
        $res['status']  = 'Failed';
        $res['remarks'] = 'Failed to remove'; 
    }

    echo json_encode($res);

?>