<?php

    include('../datab.php');

    $res = [];
    $count = 0;
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $enc_pass = md5('wedart'.$password);

    $sql = "SELECT u.id, u.name, u.mobile, u.role, u.password, u.branch_id, br.branch_name 
            FROM user_data u 
            JOIN branch_data br 
            ON u.branch_id = br.id 
            where u.status = 'Active'
            AND u.mobile = '$phone'
            AND u.password = '$enc_pass'";

    $rec = mysqli_query($conn, $sql);
    while($data = mysqli_fetch_assoc($rec))
    {
        $count++;
        $res['data'][] = $data;
    }

    if($count == 0)
    {
        $res['status'] = 'Failure';  
        $res['remarks'] = 'User Not Found';  
    }
    else
    {
        $res['status'] = 'Success';  
        $res['remarks'] = 'User Available';  
    }

    $res['count'] = $count;

    echo json_encode($res);

?>