<?php
include('../datab.php');

$res = [];

$sql = "SELECT id, branch_name FROM branch_data WHERE status = 'Active'";
$rec = mysqli_query($conn, $sql);

if ($rec) {
    $data = [];
    $count = 0;
    while ($row = mysqli_fetch_assoc($rec)) {
        $data[] = $row;
        $count++;
    }
    
    $res['data'] = $data;
    $res['count'] = $count;
    $res['status'] = 'Success';
    $res['remarks'] = 'Branch Sent';

} else {
    $res['status'] = 'Error';
    $res['remarks'] = 'Database query error';
}

echo json_encode($res);
?>
