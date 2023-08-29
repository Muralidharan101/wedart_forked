<?php
    require_once '../datab.php';

    $res = [];

    if(isset($_POST['baby']) || isset($_POST['wedding']))
    {
        $lead_no            = mysqli_real_escape_string($conn, $_POST['lead_no']);
        $source_id          = mysqli_real_escape_string($conn, $_POST['source_id']);
        $name               = mysqli_real_escape_string($conn, $_POST['name']);
        $phone              = mysqli_real_escape_string($conn, $_POST['phone']);
        $other_info         = mysqli_real_escape_string($conn, $_POST['other_info']);
        $service_category   = mysqli_real_escape_string($conn, $_POST['service_category']);
        $main_service       = mysqli_real_escape_string($conn, $_POST['main_service']);
        $service            = mysqli_real_escape_string($conn, $_POST['service']);
        $follow_up_date     = mysqli_real_escape_string($conn, $_POST['follow_up']);
        $follow_up_details  = mysqli_real_escape_string($conn, $_POST['follow_up_details']);

        $estimated_amount   = mysqli_real_escape_string($conn, $_POST['estimated_amount']);
        $follow_up_category = mysqli_real_escape_string($conn, $_POST['follow_up_category']);



        if(isset($_POST['baby']))
        {
            $event_dateTime = mysqli_real_escape_string($conn, $_POST['event_dateTime']);
            $age            = mysqli_real_escape_string($conn, $_POST['age']);
            $sex            = mysqli_real_escape_string($conn, $_POST['sex']);

            $sql = "INSERT INTO lead_form_baby (`lead_no`,`source_id`, `name`, `age`, `estimated_amount`, `follow_up_category`, `sex`, `event_dateTime`, `phone`, `service_category`, `service`, `main_service`, `other_info`, `status`, `dateTime`) 
                                    VALUES ('$lead_no', '$source_id', '$name', '$age', '$estimated_amount','$follow_up_category', '$sex', '$event_dateTime', '$phone', '$service_category', '$service', '$main_service', '$other_info', 'Active', '$dateTime')";

            if($row = mysqli_query($conn, $sql))
            {
                $lead_form_baby_insert_id = mysqli_insert_id($conn);

                $sql_follow_up = "INSERT INTO `follow_up` (`lead_id`, `follow_up_date`, `approach`, `category`, `dateTime`) 
                 VALUES ('$lead_form_baby_insert_id', '$follow_up_date', '$follow_up_details', 'baby', '$dateTime')";


                if(mysqli_query($conn, $sql_follow_up))
                {
                    $res['status']  = 'Success';
                    $res['remarks'] = 'Lead created successfully';    
                }
                else
                {
                    $res['status']  = 'Failed';
                    $res['remarks'] = 'Failed to Create Lead';
                }
            }
            else
            {
                $res['status']  = 'Failed';
                $res['remarks'] = 'Failed to Create Baby Lead';  
            }
        }
        else if(isset($_POST['wedding']))
        {
            $event_date = mysqli_real_escape_string($conn, $_POST['event_date']);
            $event      = mysqli_real_escape_string($conn, $_POST['event']);
            $mandapam   = mysqli_real_escape_string($conn, $_POST['mandapam']);

            $sql_wed = "INSERT INTO lead_form_wd (`lead_no`, `name`, `source_id`, `event`, `estimated_amount`, `follow_up_category`, `event_date`, `mandapam`, `phone`, `service_category`, `service`, `main_service`, `other_info`, `status`, `dateTime`) 
                                         VALUES ('$lead_no', '$name', '$source_id', '$event', '$estimated_amount', '$follow_up_category', '$event_date', '$mandapam', '$phone', '$service_category', '$service', '$main_service', '$other_info', 'Active', '$dateTime')";

            if($row = mysqli_query($conn, $sql_wed))
            {
                $lead_form_wd_insert_id = mysqli_insert_id($conn);

                $sql_follow_up = "INSERT INTO `follow_up` (`lead_id`, `follow_up_date`, `approach`, `category`, `dateTime`) 
                                VALUES ('$lead_form_wd_insert_id', '$follow_up_date', '$follow_up_details', 'wedding', '$dateTime') ";

                if(mysqli_query($conn, $sql_follow_up))
                {
                    $res['status']  = 'Success';
                    $res['remarks'] = 'Lead created successfully';    
                }
                else
                {
                    $res['status']  = 'Failed';
                    $res['remarks'] = 'Failed to Create Lead';
                }
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