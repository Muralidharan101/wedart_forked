<?php
include('../datab.php');

$res = [];
$count = 0;

$sql = "SELECT sd.id, sd.service_name, sd.service_cost, sd.type_id, std.type_name FROM service_data sd JOIN service_type_data std ON sd.type_id = std.id where sd.status = 'Active'";
$rec = mysqli_query($conn, $sql);

$res['data'] = []; 

if ($rec) {
    while ($data = mysqli_fetch_assoc($rec)) {
        $count++;
        $res['data'][] = $data;
    }

    if ($count == 0) {
        $res['status'] = 'Not-Available';
        $res['remarks'] = 'Service Not-Available';
    } else {
        $res['status'] = 'Success';
        $res['remarks'] = 'Service Sent';
    }
} else {
    $res['status'] = 'Error';
    $res['remarks'] = 'Database query error';
}

$res['count'] = $count;

echo json_encode($res);
?>
