<?php
    require_once '../datab.php';

    $res = [];

    $paid_amount     = mysqli_real_escape_string($conn, $_POST['paid_amount']);
    $closed_leads_id = mysqli_real_escape_string($conn, $_POST['closed_leads_id']);
    $payment_method  = mysqli_real_escape_string($conn, $_POST['payment_method']);
    $payment_remarks  = mysqli_real_escape_string($conn, $_POST['payment_remarks']);


    $sql = "INSERT INTO transaction_details (`closed_leads_id`, `paid_amount`, `payment_method`, `payment_remarks`, `status`, `date`) 
                                    VALUES ('$closed_leads_id', '$paid_amount', '$payment_method', '$payment_remarks', 'Active', '$dateTime')";

    if(mysqli_query($conn, $sql))
    {
        $res['status']  = 'Success';
        $res['remarks'] = 'Payment details added';
    }
    else
    {
        $res['status']  = 'Failed';
        $res['remarks'] = 'Unable to add Payment details';   
    }
    echo json_encode($res);
?>