<?php
    include('../datab.php');

    $res = [];

    $id = mysqli_real_escape_string($conn, $_POST['id']);

    $sql = "UPDATE general_settings_data SET status = 'In-Active' WHERE id = '$id' ";
    mysqli_query($conn, $sql);

    $res['status'] = 'Success';  
    $res['remarks'] = 'Files Removed Successfully';

    echo json_encode($res);
?>