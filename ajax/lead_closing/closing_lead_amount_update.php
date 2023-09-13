<?php
    require_once '../datab.php';

    $res = [];

    $closed_lead_id = mysqli_real_escape_string($conn, $_POST['id']);
    $amount         = mysqli_real_escape_string($conn, $_POST['amount']);

    $sql = "UPDATE closed_leads SET `amount` = '$amount'
            WHERE `id` = '$closed_lead_id'";

    if(mysqli_query($conn, $sql))
    {
        $res['status']  = 'Success';
        $res['remarks'] = 'Amonunt updated successfully';
    }
    else
    {
        $res['status']  = 'Failed';
        $res['remarks'] = 'Failed to update amount';
    }
    echo json_encode($res);
?>