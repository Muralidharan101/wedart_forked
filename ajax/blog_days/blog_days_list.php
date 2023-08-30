<?php
    require_once '../datab.php';

    $res = [];

    $sql = "SELECT bd.id, bd.blog_days_id,bd.blog_id,bd.day_count,b.blog_name,b.blog_link,d.ref_name,d.days_count
            FROM 
                blogs_days_data AS bd
            JOIN blog_data AS b
            ON bd.blog_id = b.id
            JOIN blog_days as d
            ON bd.blog_days_id = d.id
            WHERE bd.status = 'Active' ";

    if( $row = mysqli_query($conn, $sql))
    {
        
        $data = [];
        while($result = mysqli_fetch_assoc($result))
        {
            $data[] = $result;
        }

        $res['status']  = 'Success';
        $res['remarks'] = 'Data sent successfully';
        $res            = $data; 
    }
    else
    {
        $res['status']  = 'Failed';
        $res['remarks'] = 'No Data available';
    }
    echo json_encode($res);
?>