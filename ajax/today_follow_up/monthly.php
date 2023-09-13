<?php
require_once '../datab.php';

$res = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sql1 = "SELECT 
                l.id,
                l.lead_no, 
                l.name, 
                l.phone,
                DATE_FORMAT(l.event_date, '%d-%m-%Y') AS event_date, 
                l.estimated_amount,
                fu.lead_id,
                fu.follow_up_date, 
                fu.approach, 
                fu.response
            FROM lead_form_wd AS l
            JOIN follow_up AS fu
            ON l.id = fu.lead_id
            WHERE fu.follow_up_date BETWEEN DATE_SUB(CURDATE(), INTERVAL 30 DAY) AND CURDATE()";

    if ($result1 = mysqli_query($conn, $sql1)) {
        $data1 = [];
        while ($row1 = mysqli_fetch_assoc($result1)) {
            $data1[] = $row1;
        } 
        $res['data1']   = $data1;
        $res['status']  = 'Success';
        $res['remarks'] = 'Data sent';
    } else {
        $res['status']  = 'Failed';
        $res['remarks'] = 'Unable to send data';
    }

    $sql2 = "SELECT 
                l.id,
                l.lead_no, 
                l.name, 
                l.phone,
                CONCAT(
                    DATE_FORMAT(l.event_dateTime, '%d-%m-%Y '),
                    DATE_FORMAT(l.event_dateTime, '%H:%i:%s')
                ) AS event_date,
                l.estimated_amount,
                fu.lead_id,
                fu.follow_up_date, 
                fu.approach, 
                fu.response
            FROM lead_form_baby AS l
            JOIN follow_up AS fu
            ON l.id = fu.lead_id
            WHERE fu.follow_up_date BETWEEN DATE_SUB(CURDATE(), INTERVAL 30 DAY) AND CURDATE()" ;


    if ($result2 = mysqli_query($conn, $sql2)) {
        $data2 = [];
        while ($row2 = mysqli_fetch_assoc($result2)) {
            $data2[] = $row2;
        }
        $res['data2'] = $data2;
        $res['status']  = 'Success';
        $res['remarks'] = 'Data sent';
    } else {
        $res['status']  = 'Failed';
        $res['remarks'] = 'Unable to send data';
    }
} else {
    $res['status']  = 'Error';
    $res['remarks'] = 'Error in request';
}

echo json_encode($res);
?>