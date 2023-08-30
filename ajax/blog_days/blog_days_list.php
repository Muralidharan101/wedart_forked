<?php
    require_once '../datab.php';

    $res = [];

    $sql = "SELECT * FROM blog_days_data WHERE `status`='Active' ";

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