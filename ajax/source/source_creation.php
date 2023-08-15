<?php

    include('../datab.php');

    $res = [];

    $source_name = mysqli_real_escape_string($conn, $_POST['source']);


    $sql = "SELECT * FROM source_data where status = 'Active' AND source_data = '$source_name' ";
    $rec = mysqli_query($conn, $sql);
    if($data = mysqli_fetch_assoc($rec))
    {
        $res['status'] = 'Available';  
        $res['remarks'] = 'Source Name Already Available';  
    }
    else
    {
        $sql = "INSERT INTO source_data (`source_data`, `status`, `dateTime`) VALUES ('$source_name', 'Active', '$dateTime')";
        mysqli_query($conn, $sql);

        $res['status'] = 'Success';  
        $res['remarks'] = 'Source Name Created Successfully';
    }

    echo json_encode($res);

?>