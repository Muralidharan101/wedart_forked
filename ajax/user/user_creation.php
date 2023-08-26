<?php

    include('../datab.php');

    $res = [];

    $user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
    $user_mobile = mysqli_real_escape_string($conn, $_POST['user_mobile']);
    $user_password = mysqli_real_escape_string($conn, $_POST['user_password']);
    $user_branch = mysqli_real_escape_string($conn, $_POST['user_branch']);
    $user_role = mysqli_real_escape_string($conn, $_POST['user_role']);

    $enc_pass = md5('wedart'.$user_password);
    
    $sql = "SELECT * FROM user_data where status = 'Active' AND mobile = '$user_mobile' ";
    $rec = mysqli_query($conn, $sql);
    if($data = mysqli_fetch_assoc($rec))
    {
        $res['status'] = 'Available';  
        $res['remarks'] = 'This Mobile Number Already Registered';  
    }
    else
    {
        $sql = "INSERT INTO user_data (`name`, `mobile`, `password`, `branch_id`, `role`, `created_by`, `status`, `dateTime`) 
                VALUES ('$user_name', '$user_mobile', '$enc_pass', '$user_branch', '$user_role', 'null', 'Active', '$dateTime')";
        mysqli_query($conn, $sql);

        $res['status'] = 'Success';  
        $res['remarks'] = 'User Created Successfully';
    }

    echo json_encode($res);

?>