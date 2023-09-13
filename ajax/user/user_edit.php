<?php
    require_once '../datab.php';

    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
    $user_mobile = mysqli_real_escape_string($conn, $_POST['user_mobile']);
    $user_password = mysqli_real_escape_string($conn, $_POST['user_password']);
    $user_branch = mysqli_real_escape_string($conn, $_POST['user_branch']);
    $user_role = mysqli_real_escape_string($conn, $_POST['user_role']);

    $enc_pass = md5('wedart'.$user_password);

    $sql = "SELECT mobile FROM user_data WHERE mobile='$user_mobile' AND id != '$id' ";
    $Available = mysqli_query($conn, $sql);
    if (mysqli_num_rows($Available) != 0)

    {
        $res['status']  = 'Available';
        $res['remarks'] = 'Mobile number already exists';
    }
    else
    {
        if($user_password == '' || $user_password == null)
        {
            $sql2 = "UPDATE user_data SET `name`='$user_name', `mobile`='$user_mobile', `branch_id`='$user_branch', `role`='$user_role', `created_by`='null' WHERE `id`='$id'";

            if(mysqli_query($conn, $sql2))
            {
                $res['status']  = 'Success';
                $res['remarks'] = 'User Details Updated';
            }
            else
            {
                $res['status']  = 'Failed';
                $res['remarks'] = 'Failed to Update User';
            }    
        }
        else
        {
            $sql2 = "UPDATE user_data SET `name`='$user_name', `mobile`='$user_mobile', `password`='$enc_pass', `branch_id`='$user_branch', `role`='$user_role', `created_by`='null' WHERE `id`='$id'";

            if(mysqli_query($conn, $sql2))
            {
                $res['status']  = 'Success';
                $res['remarks'] = 'User Details Updated';
            }
            else
            {
                $res['status']  = 'Failed';
                $res['remarks'] = 'Failed to Update User';
            }
        }
        
    }
    echo json_encode($res);
?>