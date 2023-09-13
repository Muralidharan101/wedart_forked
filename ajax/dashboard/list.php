<?php
    require_once '../datab.php';

    $res = [];
    $totalCount = 0;
    $totalPendingCount = 0;
    $total_pending_amount = 0;

    $sql1 = "SELECT (count(*)) AS count FROM lead_form_wd WHERE status='Active' ";
    if($row1 = mysqli_query($conn, $sql1))
    {   
        $count1 = mysqli_fetch_assoc($row1);
        $totalCount += intval($count1['count']);
        mysqli_free_result($row1);
    }
    $sql2 = "SELECT (count(*)) AS count FROM lead_form_baby WHERE status='Active' ";
    if($row2 = mysqli_query($conn, $sql2))
    {   
        $count2 = mysqli_fetch_assoc($row2);
        $totalCount += intval($count2['count']);
        mysqli_free_result($row2);
    }
    $sql3 = "SELECT (count(follow_up_date))follow_date_count FROM follow_up WHERE DATE(follow_up_date) = CURDATE()";
    if($row3 = mysqli_query($conn, $sql3))
    {
        $today_count = mysqli_fetch_assoc($row3);
    }

    $sql = "SELECT cl.id, cl.amount, SUM(td.paid_amount) AS total_paid_amount
        FROM closed_leads AS cl
        JOIN transaction_details AS td ON cl.id = td.closed_leads_id
        GROUP BY cl.id, cl.amount
        HAVING cl.amount > SUM(td.paid_amount)";

    $result4 = mysqli_query($conn, $sql);

    if ($result4) {
        while ($row4 = mysqli_fetch_assoc($result4)) {
            $total_pending_amount += ($row4['amount'] - $row4['total_paid_amount']);
        }
    }
    $totalPendingCount = mysqli_num_rows($result4);

    $res['payment_count'] = $totalPendingCount;
    $res['lead_count'] = $totalCount;
    $res['today_count'] = $today_count;
    $res['status'] = 'Success';
    $res['remarks'] = 'Data sent successfully';

    if ($totalCount === false) {
        $res['status'] = 'Failed';
        $res['remarks'] = 'Unable to send Data';
    }
    echo json_encode($res);
?>