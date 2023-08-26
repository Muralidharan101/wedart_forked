<?php
    require_once '../datab.php';

    $res = [];
    $count = 0;

    $date = mysqli_real_escape_string($conn, $_POST['date']);

    $sql = "SELECT * FROM transaction_details WHERE date = $date ";

    if($row = mysqli_query($conn, $sql))
    {
        while($data = mysqli_fetch_assoc($row))
        {
            $count++;
            $res['data'][] = $data;
        }

        if($count == 0)
        {
            $res['status']  = 'Failed';
            $res['remarks'] = 'Failed to send data';
        }
        else
        {
            $res['status']  = 'Success';
            $res['remarks'] = 'Data sent successfully';
        }
    }
    echo json_encode($res);

?>