<?php
    require_once '../datab.php';

    $id        = mysqli_real_escape_string($conn, $_POST['id']);
    $inpt1     = mysqli_real_escape_string($conn, $_POST['blog_name']);
    $inpt2     = mysqli_real_escape_string($conn, $_POST['blog_link']);

    $sql = "UPDATE blog_data SET `blog_name`='$inpt1',`blog_link`='$inpt2' WHERE `id`='$id'";

    if($result = mysqli_query($conn, $sql))
    {
        $res['status']  = 'Success';
        $res['remarks'] = 'Blog Data Updated';
    }
    else
    {
        $res['status']  = 'Failed';
        $res['remarks'] = 'Failed to Update';
    }
    echo json_encode($res);
?>