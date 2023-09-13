<?php
    require_once '../datab.php';

    $res = [];

    $name     = mysqli_real_escape_string($conn, $_POST['follow_up_name']);
   
    $sql = "INSERT INTO follow_up_data (`follow_up_name`, `status`, `dateTime` ) VALUES('$name' , 'Active', '$dateTime')";
    

    if($result = mysqli_query($conn, $sql))
    {
        $res['status']  = 'Success';
        $res['remarks'] = 'Follow up created successfully';
    }
    else
    {
        $res['status']  = 'Failed';
        $res['remarks'] = 'Unable to create follow up';
    }

    echo json_encode($res);
?>