<?php
    include('../datab.php');

    $res = [];
    $count = 0;

    $sql = "SELECT id, ref_name, days_count FROM blog_days where status = 'Active' ";
    $rec = mysqli_query($conn, $sql);
    while($data = mysqli_fetch_assoc($rec))
    {
        $count++;
        $res['data'][] = $data;
    }

    if($count == 0)
    {
        $res['status'] = 'Not-Available';  
        $res['remarks'] = 'Blog days Not-Available';  
    }
    else
    {
        $res['status'] = 'Success';  
        $res['remarks'] = 'Blog days Sent';  
    }

    $res['count'] = $count;

    echo json_encode($res);

?>