<?php
    include('../datab.php');

    $res = [];

    $id = mysqli_real_escape_string($conn, $_POST['id']);

    $sql = "UPDATE branch_data SET status = 'In-Active' WHERE id = '$id' ";
    mysqli_query($conn, $sql);

    $res['status'] = 'Success';  
    $res['remarks'] = 'Branch Removed Successfully';

    echo json_encode($res);
?>