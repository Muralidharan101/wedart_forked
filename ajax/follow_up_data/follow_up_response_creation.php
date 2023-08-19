<?php
    include('../datab.php');

    $res = [];

    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $response = mysqli_real_escape_string($conn, $_POST['response']);

    $sql = "UPDATE follow_up SET `response`='$response' WHERE `id`='$id' ";
    mysqli_query($conn, $sql);

    $res['status'] = 'Success';  
    $res['remarks'] = 'Response Added';

    echo json_encode($res);
?>