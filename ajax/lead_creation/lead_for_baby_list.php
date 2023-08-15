<?php
    require_once '../datab.php';

    $res = [];

    $count = 0;
    
    $sql = "SELECT * FROM lead_form_baby WHERE status = 'Active'";
    $result = mysqli_query($conn, $sql);
    while($data = mysqli_fetch_assoc($result))
    {
        $count++;
        $res['data'][] = $data; 
    }

    if($count == 0)
    {
        $res['status']  = 'Error';
        $res['remarks'] = 'Baby lead data Not-Available'; 
    }
    else
    {
        $res['status']  = 'Success';
        $res['remarks'] = 'Baby lead data sent successfully';
    }
    
    $res['count'] = $count;
    

    echo json_encode($res);
?>