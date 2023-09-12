<?php
    require_once '../datab.php';

    $res = [];

    $lead_id       = mysqli_real_escape_string($conn, $_POST['id']);
    $lead_category = mysqli_real_escape_string($conn, $_POST['lead']);

    if($lead_category == 'wedding')
    {
        $sql = "SELECT 
                    l.id,
                    l.lead_no, 
                    l.name, 
                    l.event,
                    l.mandapam,
                    l.phone,
                    DATE_FORMAT(l.event_date, '%d-%m-%Y') AS event_date, 
                    l.service, 
                    l.main_service, 
                    l.lead_status, 
                    l.other_info, 
                    l.estimated_amount,
                    sd.service_name,
                    sd.service_cost,
                    sod.source_data
                FROM lead_form_wd AS l
                JOIN service_data AS sd
                ON l.main_service = sd.id
                JOIN source_data AS sod
                ON l.source_id = sod.id
                WHERE l.id = '$lead_id'";

                if( $result = mysqli_query($conn, $sql))
                {
                    $data = [];
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $data[] = $row;
                    }

                    $res['data']    = $data;
                    $res['status']  = 'Success';
                    $res['remarks'] = 'Data sent successfully';
                }
                else
                {
                    $res['status']  = 'Failed';
                    $res['remarks'] = 'Unable to sent data';
                }
    }
    else
    {
        $sql = "SELECT 
                l.id, 
                l.lead_no, 
                l.name, 
                l.lead_status,
                l.estimated_amount,
                l.age,
                l.phone,
                l.sex,
                CONCAT(
                    DATE_FORMAT(l.event_dateTime, '%d-%m-%Y '),
                    DATE_FORMAT(l.event_dateTime, '%H:%i:%s')
                ) AS event_datetime, 
                l.service, 
                l.main_service, 
                l.lead_status, 
                l.other_info,
                sd.service_name,
                sd.service_cost,
                sod.source_data 
            FROM lead_form_baby AS l
            JOIN service_data AS sd
            ON l.main_service = sd.id
            JOIN source_data AS sod
            ON l.source_id = sod.id
            WHERE l.id = '$lead_id'";

            if( $result = mysqli_query($conn, $sql))
            {
                $data = [];
                while($row = mysqli_fetch_assoc($result))
                {
                    $data[] = $row;
                }

                $res['data']    = $data;
                $res['status']  = 'Success';
                $res['remarks'] = 'Data sent successfully';
            }
            else
            {
                $res['status']  = 'Failed';
                $res['remarks'] = 'Unable to sent data';
            }
    }

    echo json_encode($res);
?>