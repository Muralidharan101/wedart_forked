<?php

    include('../datab.php');

    $res = [];
    $lead_id = mysqli_real_escape_string($conn, $_POST['lead_id']);
    $lead = mysqli_real_escape_string($conn, $_POST['lead']);
    $approach = mysqli_real_escape_string($conn, $_POST['approach']);
    $follow_up_date = mysqli_real_escape_string($conn, $_POST['follow_up_date']);

    
    $sql = "INSERT INTO follow_up (`lead_id`, `follow_up_date`, `approach`, `category`, `dateTime`) VALUES ('$lead_id', '$follow_up_date', '$approach', '$lead', '$dateTime')";
    mysqli_query($conn, $sql);
    $res['status'] = 'Success';  
    $res['remarks'] = 'New FollowUp Added';  

    echo json_encode($res);

?>