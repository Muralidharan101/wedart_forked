<?php

require_once '../datab.php';

$res = [
    'status' => 'Failed',
    'remarks' => 'Unable to send data'
];

$lead = mysqli_real_escape_string($conn, $_POST['lead']);

if ($lead == 'wedding' || $lead == 'baby') 
{
    $table = $lead == 'wedding' ? 'lead_form_wd' : 'lead_form_baby';

    $sql = "SELECT * FROM closed_leads AS c 
            JOIN `$table` AS l 
            ON c.lead_id = l.id";

    $result = mysqli_query($conn, $sql);

    if ($result) 
    {
        $data = [];
        while ($row = mysqli_fetch_assoc($result)) 
        {
            $data[] = $row;
        }

        // Fetch transaction data
        $transaction_data = [];

        $sql_transaction = "SELECT * FROM transaction_details AS t
                            WHERE t.closed_leads_id IN (SELECT c.id FROM closed_leads AS c
                                                      JOIN `$table` AS l
                                                      ON c.lead_id = l.id)";

        $transaction_result = mysqli_query($conn, $sql_transaction);

        while ($transaction_row = mysqli_fetch_assoc($transaction_result)) 
        {
            $transaction_data[$transaction_row['closed_leads_id']][] = $transaction_row;
        }

        foreach ($data as &$lead_row) 
        {
            $lead_id = $lead_row['id'];
            $lead_row['history'] = isset($transaction_data[$lead_id]) ? $transaction_data[$lead_id] : [];
        }

        $res['status'] = 'Success';
        $res['remarks'] = 'Data sent successfully';
        $res['data'] = $data;
    }
}

echo json_encode($res);
?>