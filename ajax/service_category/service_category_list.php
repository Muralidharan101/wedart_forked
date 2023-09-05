<?php
    include('../datab.php');

    $res = [];
    $count = 0;

    $sql = "SELECT id, type_name FROM service_type_data WHERE status = 'Active'";
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
        $count = count($data);

        if ($count == 0) {
            $res['status'] = 'Not-Available';
            $res['remarks'] = 'Service Type Not-Available';
        } else {
            $res['status'] = 'Success';
            $res['remarks'] = 'Service Type Sent';
        }
    }

    $res['count'] = $count;

    echo json_encode($res);
?>
