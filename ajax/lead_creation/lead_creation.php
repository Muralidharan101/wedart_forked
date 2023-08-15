<?php
    require_once '../datab.php';

    $res = [];

    if(isset($_POST['baby']) || isset($_POST['wedding']))
    {
        $name        = mysqli_real_escape_string($conn, $_POST['name']);
        $lead_no     = mysqli_real_escape_string($conn, $_POST['lead_no']);
        $phone       = mysqli_real_escape_string($conn, $_POST['phone']);
        $source_id   = mysqli_real_escape_string($conn, $_POST['source_id']);
        $service     = mysqli_real_escape_string($conn, $_POST['service']);
        $other_info  = mysqli_real_escape_string($conn, $_POST['other_info']);
        // $follow_up_status = mysqli_real_escape_string($con, $_POST['follow_status']);

        if(isset($_POST['baby']))
        {   
            $event_dateTime = mysqli_real_escape_string($conn, $_POST['event_dateTime']);
            $age            = mysqli_real_escape_string($conn, $_POST['age']);
            $sex            = mysqli_real_escape_string($conn, $_POST['sex']);

            $sql = "INSERT INTO lead_form_baby (`lead_no`, `name`, `age`, `sex`, `event_dateTime`, `phone`, `source_id`, `service`, `other_info`,`follow_up_status`, `status`, `dateTime`) 
                                        VALUES ('$lead_no', '$name', '$age', '$sex', '$event_dateTime', '$phone', '$source_id', '$service', '$other_info','open', 'Active', '$dateTime')";

            if($row = mysqli_query($conn, $sql))
            {
                $res['status']  = 'Success';
                $res['remarks'] = 'Lead created successfully';
            }
            else
            {
                $res['status']  = 'Failed';
                $res['remarks'] = 'Failed to create baby lead';
                
            }
        }
        else if(isset($_POST['wedding']))
        {
            $event_date = mysqli_real_escape_string($conn, $_POST['event_date']);
            $event      = mysqli_real_escape_string($conn, $_POST['event']);
            $mandapam   = mysqli_real_escape_string($conn, $_POST['mandapam']);

            $sql_wed = "INSERT INTO lead_form_wd (`lead_no`, `name`, `event`, `event_date`, `mandapam`, `phone`, `source_id`, `service`, `other_info`,`follow_up_status`, `status`, `dateTime`) 
                                         VALUES ('$lead_no', '$name', '$event', '$event_date', '$mandapam', '$phone', '$source_id', '$service', '$other_info','open', 'Active', '$dateTime')";

            if($result = mysqli_query($conn, $sql_wed))
            {
                $res['status']  = 'Success';
                $res['remarks'] = 'Lead Created Successfully';
            }
            else
            {
                $res['status']  = 'Success';
                $res['remarks'] = 'Failed to create wedding lead';
            }
        }
    }
    else
    {
        $res['status']  = 'Error';
        $res['remarks'] = 'Error in the backend';
    }
    
    echo json_encode($res);
?>