<?php
include('../datab.php');

$res = [];

$sql = "SELECT asd.id, asd.additional_service_name, asd.additional_service_cost, asd.type_id, std.type_name
        FROM additional_service_data asd 
        JOIN service_type_data AS std
        ON asd.type_id = std.id
        where asd.status = 'Active'";

$rec = mysqli_query($conn, $sql);

if (!$rec) {
    $res['status'] = 'Error';
    $res['remarks'] = 'Database query error';
} else {
    $data = [];
    $count = 0;
    while ($row = mysqli_fetch_assoc($rec)) {
        $data[] = $row;
        $count++;
    }

    $res['data'] = $data;
    $res['count'] = $count;

    if ($count == 0) {
        $res['status'] = 'Not-Available';
        $res['remarks'] = 'Service Not-Available';
    } else {
        $res['status'] = 'Success';
        $res['remarks'] = 'Service Sent';
    }
}

echo json_encode($res);
?>
