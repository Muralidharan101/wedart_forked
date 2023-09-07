<?php
require_once '../datab.php';

$res = [];

$sql = "SELECT 
            bd.id, 
            bd.blog_days_id,
            bd.blog_id,
            bd.day_count,
            b.blog_name,
            b.blog_link,
            d.ref_name,
            d.days_count
        FROM 
            blogs_days_data AS bd
        JOIN blog_data AS b
        ON bd.blog_id = b.id
        JOIN blog_days as d
        ON bd.blog_days_id = d.id
        WHERE bd.status = 'Active' ";

$rec = mysqli_query($conn, $sql);

if ($rec) {
    $data = [];
    while ($row = mysqli_fetch_assoc($rec)) {
        $data[] = $row;
    }
    
    if (!empty($data)) {
        $res['data'] = $data;
        $res['status'] = 'Success';
        $res['remarks'] = 'Data sent successfully';
    } else {
        $res['data'] = $data;
        $res['status'] = 'Not-Available';
        $res['remarks'] = 'No Data available';
    }
} else {
    $res['status'] = 'Failed';
    $res['remarks'] = 'Database query error';
}

echo json_encode($res);
?>
