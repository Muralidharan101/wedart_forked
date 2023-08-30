<?php
    require_once '../datab.php';

    $res = [];

    if(isset($_POST['wedding']) || isset($_POST['baby']))
    {
        $id                 = mysqli_real_escape_string($conn, $_POST['id']);
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

            $sql_baby = "UPDATE lead_form_baby SET `lead_no`='$lead_no' `lead_status`='$lead_status' ``='' ``=''  ``=''  ``=''  ``=''  ``=''  ``=''  ``=''  ``=''  ``='' WHERE  `id`='$id' ";
        
            
        }
        else if(isset($_POST['wedding']))
        {
            $event_date = mysqli_real_escape_string($conn, $_POST['event_date']);
            $event      = mysqli_real_escape_string($conn, $_POST['event']);
            $mandapam   = mysqli_real_escape_string($conn, $_POST['mandapam']);

            $sql_wed = "UPDATE lead_form_wd SET ``= '' ";
        
            
        }

    }
    else
    {
        $res['status']  = 'Error';
        $res['remarks'] = 'Error in backend';
    }
    echo json_encode($res);
?>