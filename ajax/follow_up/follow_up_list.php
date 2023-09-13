<?php
require_once '../datab.php';

$res = [];
$count = 0;

$sql = "SELECT id, follow_up_name FROM follow_up_data WHERE status = 'Active'";
$result = mysqli_query($conn, $sql);

if (!$result) {
    $res['status'] = 'Error';
    $res['remarks'] = 'Database query error';
} else {
    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
        $count++;
    }

    $res['data'] = $data;
    $res['count'] = $count;

    if ($count == 0) {
        $res['status'] = 'Not-Available';
        $res['remarks'] = 'Follow up data Not-Available';
    } else {
        $res['status'] = 'Success';
        $res['remarks'] = 'Follow up data sent successfully';
    }
}

echo json_encode($res);
?>
