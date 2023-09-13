<?php
    include('../datab.php');

    $res = [];

    $id = mysqli_real_escape_string($conn, $_POST['id']);

    $sql = "UPDATE service_data SET status = 'In-Active' WHERE id = '$id' ";
    mysqli_query($conn, $sql);

    $res['status'] = 'Success';  
    $res['remarks'] = 'Service Removed Successfully';

    echo json_encode($res);
?>