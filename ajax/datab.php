<?php

    $host_name = 'localhost';
    $db_user = 'linkwork_wedart_new';
    $db_password = 'Admin@1234$$';
    $db_name = 'linkwork_wedart_new';

    $conn = new mysqli($host_name, $db_user, $db_password, $db_name);

    if($conn -> connect_error)
    {
        die('Connection failed: '. $conn->connect_error);
    }

    $dateTime  =  date('Y-m-d H:i:s');
    $today_date = date('Y-m-d');
    $crt_date = date('d-m-Y');
?>