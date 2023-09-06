<?php
    require_once '../datab.php';

    $res = [];

    $count = 0;

    $lead_status = mysqli_real_escape_string($conn, $_POST['lead_status']);

    if($lead_status == 'all')
    {
        $sql = "SELECT * FROM lead_form_baby WHERE status = 'Active'";
        $result = mysqli_query($conn, $sql);

        $data = [];
        while($rec = mysqli_fetch_assoc($result))
        {
            $count++;
            $data[] = $rec;
        }

        $res['data'] = $data;
        $count = count($data);

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
    }
    else
    {   
        $sql = "SELECT * FROM lead_form_baby WHERE lead_status = '$lead_status' AND status='Active' ";
        $rec = mysqli_query($conn, $sql);

        if(!$rec)
        {
            $res['status']  = 'Error';
            $res['remarks'] = 'Database error';
        }
        else
        {
            $data = [];
            while($row = mysqli_fetch_assoc($rec))
            {
                $data[] = $row;
            }
            
            $res['data'] = $data;
            $count = count($data);

            if($count == 0)
            {
                $res['status']  = 'Failed';
                $res['remarks'] = 'No data available';
            }
            else
            {
                $res['status']  = 'Success';
                $res['remarks'] = 'Data sent successfully';
            }
        }
    }
        
    $res['count'] = $count;
    

    echo json_encode($res);
?>