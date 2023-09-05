<?php

include('../datab.php');

$res = [];

$sql = "SELECT id, source_data FROM source_data WHERE status = 'Active'";
$rec = mysqli_query($conn, $sql);

if (!$rec) {
    $res['status'] = 'Error';
    $res['remarks'] = 'Database query error';
} else {
    $data = [];
    while ($row = mysqli_fetch_assoc($rec)) {
        $data[] = $row;
    }

    $res['data'] = $data;
    $res['count'] = count($data);

    if ($res['count'] == 0) {
        $res['status'] = 'Not-Available';
        $res['remarks'] = 'Source Name Not-Available';
    } else {
        $res['status'] = 'Success';
        $res['remarks'] = 'Source Name Sent';
    }
}

echo json_encode($res);

?>