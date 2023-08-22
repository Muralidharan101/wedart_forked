<?php

    require_once '../datab.php';

    $res = [];
    $count = 0;

    $lead = mysqli_real_escape_string($conn, $_POST['lead']);

    $table = $lead == 'wedding' ? 'lead_form_wd' : 'lead_form_baby';

    if($lead == "wedding")
    {
        $sql = "SELECT * FROM closed_leads AS c 
        JOIN `$table` AS l 
        ON c.lead_id = l.id";

        $sql_transaction = "SELECT * FROM closed_leads AS C
        JOIN transaction_details AS t
        ON  c.id = t.closed_leads_id";

        if($result = mysqli_query($conn, $sql))
        {
            while($data = mysqli_fetch_assoc($result) )
            {
                $transaction_data = []; // Initialize the array for each loop iteration

                // Execute the transaction query
                $transaction_result = mysqli_query($conn, $sql_transaction);
                while ($transaction_row = mysqli_fetch_assoc($transaction_result)) {
                    // Add each transaction row to the transaction_data array
                    $transaction_data[] = $transaction_row;
                }

                // Add the transaction_data array to the data array
                $data['history'] = $transaction_data;

                // Add the modified data array to the main data array
                $res['data'][] = $data;
            }
            $res['status']  = 'Success';
            $res['remarks'] = 'Data sent successfully';
        }
        else
        {
            $res['status']  = 'Failed';
            $res['remarks'] = 'Unable to send data';
        }
    }
    
    echo json_encode($res);
?>