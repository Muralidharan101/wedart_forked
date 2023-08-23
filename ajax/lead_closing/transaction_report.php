<?php
require_once '../datab.php';

$res = [
    'status' => 'Failed',
    'remarks' => 'Unable to send data'
];

$lead  = mysqli_real_escape_string($conn, $_POST['lead']);
$start = mysqli_real_escape_string($conn, $_POST['start']);
$end   = mysqli_real_escape_string($conn, $_POST['end']);

if ($lead == 'wedding' || $lead == 'baby') 
{
    $table = $lead == 'wedding' ? 'lead_form_wd' : 'lead_form_baby';

    $sql = "SELECT c.*, l.lead_no, l.name, l.phone, bd.blog_name, bd.blog_link, bds.ref_name, bds.days_count,
                   t.paid_amount, t.payment_remarks, t.payment_method, (t.date)payment_date
            FROM closed_leads AS c 
            JOIN `$table` AS l 
            ON c.lead_id = l.id
            JOIN `blog_data` AS bd
            ON c.blog_id = bd.id
            JOIN `blog_days` AS bds
            ON c.day_id = bds.id
            JOIN transaction_details AS t
            ON t.closed_leads_id = c.id
            WHERE t.date >= '$start' AND t.date <= '$end'";

    $result = mysqli_query($conn, $sql);

    if ($result) 
    {
        $data = [];
        while ($row = mysqli_fetch_assoc($result)) 
        {
            $data[] = $row;
        }

        $res['status'] = 'Success';
        $res['remarks'] = 'Data sent successfully';
        $res['data'] = $data;
    }
}

echo json_encode($res);
?>