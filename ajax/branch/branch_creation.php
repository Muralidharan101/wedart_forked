<?php

    include('../datab.php');

    $res = [];

    $branch = mysqli_real_escape_string($conn, $_POST['branch']);


    $sql = "SELECT * FROM branch_data where status = 'Active' AND branch_name = '$branch' ";
    $rec = mysqli_query($conn, $sql);
    if($data = mysqli_fetch_assoc($rec))
    {
        $res['status'] = 'Available';  
        $res['remarks'] = 'Branch Already Available';  
    }
    else
    {
        $sql = "INSERT INTO branch_data (`branch_name`, `status`, `dateTime`) VALUES ('$branch', 'Active', '$dateTime')";
        mysqli_query($conn, $sql);

        $res['status'] = 'Success';  
        $res['remarks'] = 'Branch Created Successfully';
    }

    echo json_encode($res);

?>