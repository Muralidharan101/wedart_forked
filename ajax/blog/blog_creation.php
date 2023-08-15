<?php
    require_once '../datab.php';

    $res = [];

    $inpt1     = mysqli_real_escape_string($conn, $_POST['blog_name']);
    $inpt2     = mysqli_real_escape_string($conn, $_POST['blog_link']);

   
    $sql = "INSERT INTO blog_data (`blog_name`,`blog_link`, `status`, `dateTime` ) VALUES('$inpt1', '$inpt2' , 'Active', '$dateTime')";
    

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