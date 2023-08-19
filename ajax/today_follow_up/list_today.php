<?php
    require_once '../datab.php';
    $res = [];
    $count = 0; 
    $today = date("Y-m-d");

    $lead    = mysqli_real_escape_string($conn, $_POST['lead']);

    if ($lead == 'baby') 
    {

        $sql = "SELECT l.id, l.lead_no, l.name, l.phone, l.age, l.sex, l.lead_status, l.event_dateTime, l.service, l.main_service, l.other_info, f.follow_up_date, f.approach, f.response   
                FROM lead_form_baby AS l 
                JOIN follow_up AS f
                ON l.id = f.lead_id
                WHERE f.category = '$lead' AND f.follow_up_date = '$today'";

            
        if ($result = mysqli_query($conn, $sql)) 
        {
            while ($data = mysqli_fetch_assoc($result)) 
            { 
                $count++;
                $res['data'][] = $data;
            }
            $res['status'] = 'Success';
            $res['remarks'] = 'Follow Data Listed Successfully';
        } else {
            $res['status'] = 'Failed';
            $res['remarks'] = 'Failed to List Follow Data';
        }
    } 
    else if ($lead == 'wedding') 
    {
        $sql = "SELECT l.id, l.lead_no, l.name, l.lead_status, l.phone, l.event, l.mandapam, l.event_date, l.service, l.main_service, l.other_info, f.follow_up_date, f.follow_up_details, f.approach, f.response  
            FROM lead_form_wd AS l 
            JOIN follow_up AS f
            ON l.id = f.lead_id
            WHERE f.category = '$lead' 
            AND f.follow_up_date = '$today'";
            
        if ($result = mysqli_query($conn, $sql)) {
            while ($data = mysqli_fetch_assoc($result)) 
            { 
                $count++;
                $res['data'][] = $data;
            }
            $res['status'] = 'Success';
            $res['remarks'] = 'Follow Up Data Listed Successfully';
        } 
        else {
            $res['status'] = 'Failed';
            $res['remarks'] = 'Failed to List Follow Up Data';
        }
    } 
    else 
    {
        $res['status'] = 'Error';
        $res['remarks'] = 'Error in backend';
    }
    
    $res['count'] = $count;

    echo json_encode($res);
?>