<?php
include('../datab.php');

$res = [];
$branch = mysqli_real_escape_string($conn, $_POST['branch']);
$dateTime = date("Y-m-d H:i:s");

$sql = "SELECT * FROM branch_data WHERE status = 'Active' AND branch_name = '$branch'";
$rec = mysqli_query($conn, $sql);

if ($data = mysqli_fetch_assoc($rec)) {
    $res['status'] = 'Available';  
    $res['remarks'] = 'Branch Already Available';  
} else {
    $sql1 = "INSERT INTO branch_data (`branch_name`, `status`, `dateTime`) VALUES ('$branch', 'Active', '$dateTime')";
    
    if ($result = mysqli_query($conn, $sql1)) {
        $res['status'] = 'Success';  
        $res['remarks'] = 'Branch Created Successfully';
    } else {
        $res['status'] = 'Failed';  
        $res['remarks'] = 'Failed to Create Branch';
    }
}

echo json_encode($res);
?>
