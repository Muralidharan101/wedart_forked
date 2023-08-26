<?php
    require_once '../datab.php';
    
    $res = [];

    $id     = mysqli_real_escape_string($conn, $_POST['id']);
    $branch = mysqli_real_escape_string($conn, $_POST['branch']);

    $sql = "SELECT * FROM branch_data where status = 'Active' AND branch_name = '$branch' ";
    $rec = mysqli_query($conn, $sql);

    if($data = mysqli_fetch_assoc($rec))
    {
        $res['status'] = 'Available';  
        $res['remarks'] = 'Branch Already Available';  
    }
    else
    {
        $sql2 = "UPDATE branch_data SET `branch_name`='$branch' WHERE `id`='$id'";

        if($result = mysqli_query($conn, $sql2))
        {
            $res['status'] = 'Success';  
            $res['remarks'] = 'Branch Data Updated';
        }
        else
        {
            $res['status']  = 'Failed';
            $res['remarks'] = 'Failed to Update Branch Date';
        }
    }
    echo json_encode($res);
?>