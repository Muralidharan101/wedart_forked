<?php
    require_once '../datab.php';

    $res = [];


    $dateTime     = date("Y-m-d H:i:s");

    
    $pdf          = $_FILES['pdf']['name'];
    $pdf_basename = basename($pdf);
    $pdf_ext      = pathinfo($pdf_basename, PATHINFO_EXTENSION);
    $pdf_size     = $_FILES['pdf']['size'];

    $video          = $_FILES ['video']['name'];
    $video_basename = basename($video);
    $video_ext      = pathinfo($video_basename, PATHINFO_EXTENSION);
    $video_size     = $_FILES['video']['size'];

    if($pdf_ext != 'pdf')
    {
        $res['status']  = 'Invalid PDF file';
        $res['remarks'] = 'Invalid File Format' .$pdf_ext. 'Not valid format!';  
    }
    else if($pdf_size > 41943040)
    {
        $res['status']  = 'pdfBigFile';
        $res['remarks'] = 'PDF File size more than 5MB!';
    }
    else if($video_ext != 'mp4')
    {
        $res['status']  = 'Invalid Video file';
        $res['remarks'] = 'Invalid file format' .$vide_ext. 'Not a valid format!'; 
    }
    else if($video_size > 209715200)
    {
        $res['status']  = 'videoBigFile';
        $res['remarks'] = 'Video File size more than 25MB!';
    }
    else
    {
        $sql_pdf_query = mysqli_query($conn, "INSERT INTO general_settings_data (portfolio_file, sample_video_file, status, dateTime) VALUES ('', '', 'Active', '$dateTime')");
        
        $sql_pdf = $sql_pdf_query;

        if ($sql_pdf) 
        {
            $inserted_id = mysqli_insert_id($conn);

            

            $inserted_id = mysqli_insert_id($conn);

            if(!file_exists('files/featured_files/'.$inserted_id.'/'))
            {
                mkdir('files/featured_files/'.$inserted_id.'/', 0777, true);
            }

            $path = 'files/featured_files/'.$inserted_id.'/';

            $newfileName_pdf   = $path.''.$pdf.'';
            $newfileName_video = $path.''.$video.'';

            if(move_uploaded_file($_FILES["pdf"]["tmp_name"], $newfileName_pdf) && move_uploaded_file($_FILES["video"]["tmp_name"], $newfileName_video))
            {
                mysqli_query($conn, "UPDATE `general_settings_data` SET `portfolio_file` = '$pdf', `sample_video_file` = '$video' WHERE id ='$inserted_id'");
                
                $res['status']     = 'Success';
                $res['remarks']    = 'Files uploaded successfully';
                $res['pdf_name']   = $pdf;
                $res['video_name'] = $video;

            }
            else
            {
                $res['status']  = 'Failed';
                $res['remarks'] = 'Error on file upload!';
            }
        }
        
    }
    $conn->close();

    echo json_encode($res);
?>