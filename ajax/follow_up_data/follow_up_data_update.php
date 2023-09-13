<?php
    require_once '../datab.php';

    $res = [];

    $id             = mysqli_real_escape_string($conn, $_POST['id']);
    // $lead_id        = mysqli_real_escape_string($conn, $_POST['lead_id']);
    $follow_up_date = mysqli_real_escape_string($conn, $_POST['follow_up_date']);
    $approach       = mysqli_real_escape_string($conn, $_POST['approach']);
    // $lead           = mysqli_real_escape_string($conn, $_POST['lead']);

    $sql = "UPDATE follow_up SET `follow_up_date`='$follow_up_date', `approach`='$approach' WHERE `id`='$id' ";

    if(mysqli_query($conn, $sql))
    {
        $res['status'] = 'Success';  
        $res['remarks'] = 'FollowUp Updated';
    }
    else
    {
        $res['status'] = 'Failed';  
        $res['remarks'] = 'Failed to Update follow up';
    }
    echo json_encode($res);
?>