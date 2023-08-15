<?php
    include('../datab.php');

    $res = [];

    $source_id = mysqli_real_escape_string($conn, $_POST['source_id']);

    $sql = "UPDATE source_data SET status = 'In-Active' WHERE id = '$source_id' ";
    mysqli_query($conn, $sql);

    $res['status'] = 'Success';  
    $res['remarks'] = 'Source Name Removed Successfully';

    echo json_encode($res);
?>