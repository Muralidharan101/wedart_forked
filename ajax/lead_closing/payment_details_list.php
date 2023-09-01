<?php
    require_once '../datab.php';

    $res = [];
    $count = 0;
    $temp = [];

    $lead = mysqli_real_escape_string($conn, $_POST['lead']);

    $sql = "SELECT t.paid_amount FROM transaction_details AS t  
        JOIN closed_leads AS c
        ON t.closed_leads_id = c.id
        WHERE c.lead_category = '$lead' ";

    if($row = mysqli_query($conn, $sql))
    {
        while($data = mysqli_fetch_assoc($row))
        {
            $count++;
            $temp[] = $data;
        }
        
        if($count == 0)
        {
            $res['data'] = $temp; 
            $res['status']  = 'Success';
            $res['remarks'] = 'Data sent successfully';
        }
        else
        {
            $res['data'] = $temp; 
            $res['status']  = 'Failed';
            $res['remarks'] = 'Failed to sent data';
        }
    }
    else
    {
        $res['status']  = 'Error';
        $res['remarks'] = 'Error in the backend';
    }
    echo json_encode($res);
?>