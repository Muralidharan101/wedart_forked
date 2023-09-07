<?php
include('../datab.php');

$res = [];

$sql = "SELECT id, ref_name, days_count FROM blog_days WHERE status = 'Active'";
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
        $res['remarks'] = 'Blog days Not-Available';
    } else {
        $res['status'] = 'Success';
        $res['remarks'] = 'Blog days Sent';
    }
}

echo json_encode($res);
?>
