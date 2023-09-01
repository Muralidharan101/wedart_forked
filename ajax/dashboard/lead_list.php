<?php
    require_once '../datab.php';

    $res = [];
    $count = [];

    $lead    = mysqli_real_escape_string($conn, $_POST['lead']);
    $lead_id = mysqli_real_escape_string($conn, $_POST['lead_id']);
    $today   = mysqli_real_escape_string($conn, $_POST['today']);


    if ($lead = 'wedding') 
    {
        $sql= "SELECT 
                    l.lead_no, 
                    l.lead_status,
                    l.name, 
                    l.estimated_amount,
                    l.event,
                    DATE_FORMAT(l.event_date, '%d-%m-%Y') AS event_date, 
                    l.mandapam,
                    l.phone,
                    sod.source_data,
                    l.service, 
                    sd.service_name,
                    std.type_name,
                    l.other_info,
                    l.follow_up_category
                FROM lead_form_wd AS l 
                JOIN follow_up AS f
                ON l.id = f.lead_id
                JOIN service_data AS sd
                ON l.main_service = sd.id
                JOIN source_data AS sod
                ON l.source_id = sod.id
                JOIN service_type_data AS std
                ON l.service_category = std.id
                WHERE f.category = '$lead' AND l.id = '$lead_id'";

        if($row = mysqli_query($conn, $sql))
        {
            $data = [];

            while($data = mysqli_fetch_assoc($row))
            {
                $count[] = $data;
            }
            $res['data']    = $count;
            $res['status']  = 'Success';
            $res['remarks'] = 'Data sent successfully';
        }
    }
    else if ($lead = 'baby')
    {
        $sql= "SELECT 
                    l.lead_no, 
                    l.lead_status,
                    l.name, 
                    l.estimated_amount,
                    sod.source_data,
                    l.age,
                    l.sex,
                    DATE_FORMAT(l.event_dateTime, '%d-%m-%Y ') AS event_date, 
                    DATE_FORMAT(l.event_dateTime, '%H:%i:%s') AS event_time,
                    l.phone,
                    l.service,
                    sd.service_name,
                    std.type_name,
                    l.other_info,
                    l.follow_up_category
                FROM lead_form_baby AS l 
                JOIN follow_up AS f
                ON l.id = f.lead_id
                JOIN service_data AS sd
                ON l.main_service = sd.id
                JOIN source_data AS sod
                ON l.source_id = sod.id
                JOIN service_type_data AS std
                ON l.service_category = std.id
                WHERE f.category = '$lead' AND l.id = '$lead_id'";
                
                if($row = mysqli_query($conn, $sql))
                {
                    $data = [];

                    while($data = mysqli_fetch_assoc($row))
                    {
                       $count[] = $data;
                    }
                    $res['data']    = $count;
                    $res['status']  = 'Success';
                    $res['remarks'] = 'Data sent successfully';
                }

    }
    else
    {
        $res['status']  = 'Failed';
        $res['remarks'] = 'Unable to sent data';
    }

    echo json_encode($res);
?>
