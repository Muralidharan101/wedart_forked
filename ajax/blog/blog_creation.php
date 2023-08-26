<?php
    require_once '../datab.php';

    $res = [];

    $inpt1     = mysqli_real_escape_string($conn, $_POST['blog_name']);
    $inpt2     = mysqli_real_escape_string($conn, $_POST['blog_link']);

    $sql = "SELECT * FROM blog_data where status = 'Active' AND blog_name = '$inpt1' ";
    $rec = mysqli_query($conn, $sql);

    if($data = mysqli_fetch_assoc($rec))
    {
        $res['status'] = 'Available';  
        $res['remarks'] = 'Blog Name Already Available';
    }
    else
    {
        $sql = "INSERT INTO blog_data (`blog_name`,`blog_link`, `status`, `dateTime` ) VALUES('$inpt1', '$inpt2' , 'Active', '$dateTime')";
        
        if($result = mysqli_query($conn, $sql))
        {
            $res['status']  = 'Success';
            $res['remarks'] = 'Blog created successfully';
        }
        else
        {
            $res['status']  = 'Failed';
            $res['remarks'] = 'Unable to create Blog';
        }
    }

    echo json_encode($res);
?>