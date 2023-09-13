<?php
require_once '../datab.php';

$res = [];

$dateTime     = date("Y-m-d H:i:s");

$pdf          = $_FILES['pdf']['name'];
$pdf_ext      = pathinfo($pdf, PATHINFO_EXTENSION);
$pdf_size     = $_FILES['pdf']['size'];

$video          = $_FILES ['video']['name'];
$video_ext      = pathinfo($video, PATHINFO_EXTENSION);
$video_size     = $_FILES['video']['size'];

if(!file_exists($_FILES['pdf']['tmp_name']) || !is_uploaded_file($_FILES['pdf']['tmp_name']) || !file_exists($_FILES['video']['tmp_name']) || !is_uploaded_file($_FILES['video']['tmp_name']))
{
    $res['status']  = 'Failed';
    $res['remarks'] = 'Error on file upload!';
}
else if($pdf_ext !== 'pdf')
{
    $res['status']  = 'Invalid PDF file';
    $res['remarks'] = 'Invalid File Format ' .$pdf_ext. ' Not valid format!';  
}
else if($pdf_size > 5242880)
{
    $res['status']  = 'pdfBigFile';
    $res['remarks'] = 'PDF File size more than 5MB!';
}
else if($video_ext !== 'mp4')
{
    $res['status']  = 'Invalid Video file';
    $res['remarks'] = 'Invalid file format ' .$video_ext. ' Not a valid format!'; 
}
else if($video_size > 52428800)
{
    $res['status']  = 'videoBigFile';
    $res['remarks'] = 'Video File size more than 50MB!';
}
else
{
    $pdf_name = mysqli_real_escape_string($conn, $pdf);
    $video_name = mysqli_real_escape_string($conn, $video);

    $sql_pdf_query = mysqli_query($conn, "INSERT INTO general_settings_data (portfolio_file, sample_video_file, status, dateTime) VALUES ('$pdf_name', '$video_name', 'Active', '$dateTime')");
    
    if ($sql_pdf_query) 
    {
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
            mysqli_query($conn, "UPDATE `general_settings_data` SET `portfolio_file` = '$pdf_name', `sample_video_file` = '$video_name' WHERE id ='$inserted_id'");
            
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
    else
    {
        $res['status']  = 'Failed';
        $res['remarks'] = 'Error on database insert!';
    }
}
$conn->close();

echo json_encode($res);

?>