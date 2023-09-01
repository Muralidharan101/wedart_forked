<?php
    require_once '../datab.php';

    $res = [];

    $temp = [];


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

    if($result = mysqli_query($conn, $sql))
    {
        while($data = mysqli_fetch_assoc($result))
        {

           $temp[] = $data;
        }
        $res['data'] = $temp;

        $res['status']  = 'Success';
        $res['remarks'] = 'Data sent successfully';
    }
    else
    {

        $res['data'] = $temp;

        $res['status']  = 'Failed';
        $res['remarks'] = 'No Data available';
    }
    echo json_encode($res);
?>