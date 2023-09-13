<?php
    require_once '../datab.php';

    $res = [];

    if(isset($_POST['wedding']) || isset($_POST['baby']))
    {
        $id                 = mysqli_real_escape_string($conn, $_POST['id']);
        $name               = mysqli_real_escape_string($conn, $_POST['name']);
        $phone              = mysqli_real_escape_string($conn, $_POST['phone']);
        $other_info         = mysqli_real_escape_string($conn, $_POST['other_info']);
        $estimated_amount   = mysqli_real_escape_string($conn, $_POST['estimated_amount']);
        
        if(isset($_POST['baby']))
        {
            $event_dateTime = mysqli_real_escape_string($conn, $_POST['event_dateTime']);
            $age            = mysqli_real_escape_string($conn, $_POST['age']);
            $sex            = mysqli_real_escape_string($conn, $_POST['sex']);


            if(isset($_POST['lead_status']) !==  '')
            {
                $lead_status    = mysqli_real_escape_string($conn, $_POST['lead_status']);

                $sql_baby = "UPDATE lead_form_baby SET `name`='$name',`lead_status`='$lead_status', `phone`='$phone', `other_info`='$other_info', `estimated_amount`='$estimated_amount', `event_dateTime`='$event_dateTime', `age`='$age', `sex`='$sex' WHERE  `id`='$id' ";

                if(mysqli_query($conn, $sql_baby))
                {
                    $res['status']  = 'Success';
                    $res['remarks'] = 'Lead details updated';
                }
                else
                {
                    $res['status']  = 'Failed';
                    $res['remarks'] = 'Unable to update lead';
                }
            }
            else
            {
                $sql_baby = "UPDATE lead_form_baby SET `name`='$name', `phone`='$phone', `other_info`='$other_info', `estimated_amount`='$estimated_amount', `event_dateTime`='$event_dateTime', `age`='$age', `sex`='$sex' WHERE  `id`='$id' ";

                if(mysqli_query($conn, $sql_baby))
                {
                    $res['status']  = 'Success';
                    $res['remarks'] = 'Lead details updated';
                }
                else
                {
                    $res['status']  = 'Failed';
                    $res['remarks'] = 'Unable to update lead';
                }
            }

        }
        else if(isset($_POST['wedding']))
        {
            $event_date = mysqli_real_escape_string($conn, $_POST['event_date']);
            $event      = mysqli_real_escape_string($conn, $_POST['event']);
            $mandapam   = mysqli_real_escape_string($conn, $_POST['mandapam']);

            if(isset($_POST['lead_status']) !==  '')
            {
                $lead_status    = mysqli_real_escape_string($conn, $_POST['lead_status']);

                $sql_wed = "UPDATE lead_form_wd SET `name`= '$name', `lead_status`='$lead_status' ,`phone`='$phone', `other_info`='$other_info', `estimated_amount`='$estimated_amount', `event`='$event', `event_date`='$event_date', `mandapam`='$mandapam' WHERE `id`='$id'";
                
                if(mysqli_query($conn, $sql_wed))
                {
                    $res['status']  = 'Success';
                    $res['remarks'] = 'Lead details updated';
                }
                else
                {
                    $res['status']  = 'Failed';
                    $res['remarks'] = 'Unable to update lead details';
                }
            }
            else
            {
                $sql_wed = "UPDATE lead_form_wd SET `name`= '$name', `phone`='$phone', `other_info`='$other_info', `estimated_amount`='$estimated_amount', `event`='$event', `event_date`='$event_date', `mandapam`='$mandapam' WHERE `id`='$id'";
                
                if(mysqli_query($conn, $sql_wed))
                {
                    $res['status']  = 'Success';
                    $res['remarks'] = 'Lead details updated';
                }
                else
                {
                    $res['status']  = 'Failed';
                    $res['remarks'] = 'Unable to update lead details';
                }
            }
           
        }
    }
    else
    {
        $res['status']  = 'Error';
        $res['remarks'] = 'Error in backend';
    }
    echo json_encode($res);
?>