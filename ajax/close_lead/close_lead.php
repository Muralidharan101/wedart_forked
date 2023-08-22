<?php
require_once '../datab.php';

    $res = [];
    $lead_id = mysqli_real_escape_string($conn, $_POST['lead_id']);
    $lead_category = mysqli_real_escape_string($conn, $_POST['lead']);
    $converted_status = mysqli_real_escape_string($conn, $_POST['converted']);
    $blog_status = mysqli_real_escape_string($conn, $_POST['blog']);
    $table = $lead_category == 'wedding' ? 'lead_form_wd' : 'lead_form_baby';

    if($converted_status == 'true'){  
        $update_lead_status = "UPDATE `$table` SET `lead_status` = 'converted' WHERE `id`='$lead_id' ";

            if(mysqli_query($conn, $update_lead_status))
            {
                
                $amount          = mysqli_real_escape_string($conn, $_POST['amount']);
                $paid_amount     = mysqli_real_escape_string($conn, $_POST['paid_amount']);
                $payment_method  = mysqli_real_escape_string($conn, $_POST['payment_method']);

                if($blog_status == 'true')
                {

                    $blog_id         = mysqli_real_escape_string($conn, $_POST['blog_id']);
                    $blog_days_id    = mysqli_real_escape_string($conn, $_POST['day_id']);
                    $sql = "INSERT INTO closed_leads (`lead_id`, `blog_id`, `day_id`, `lead_category`, `amount`, `status`, `date`) 
                                            VALUES ('$lead_id', '$blog_id', '$blog_days_id', '$lead_category', '$amount', 'Active', '$dateTime')";
                    
                    if(mysqli_query($conn, $sql))
                    {
                        $closed_leads_inserted_id = mysqli_insert_id($conn);
                        $insert_query_to_payment_details = "INSERT INTO transaction_details (`closed_leads_id`, `paid_amount`, `payment_method`, `payment_remarks`, `status`, `date`) 
                                                                                VALUES ('$closed_leads_inserted_id', '$paid_amount', '$payment_method', 'paid', 'Active', '$dateTime')";

                        if(mysqli_query($conn, $insert_query_to_payment_details) && mysqli_query($conn, $update_lead_status))
                        {
                            $res['status']  = 'Success';
                            $res['remarks'] = 'Lead Converted';
                        }
                        else
                        {
                            $res['status']  = 'Failed';
                            $res['remarks'] = 'Unable to convert lead';
                        }
                    }
                } 
                else 
                {
                    $sql = "INSERT INTO closed_leads (`lead_id`, `blog_id`, `day_id`, `lead_category`, `amount`, `status`, `date`) 
                                         VALUES ('$lead_id', '', '', '$lead_category', '$amount', 'Active', '$dateTime')";

                    if(mysqli_query($conn, $sql)){
                        $closed_leads_inserted_id = mysqli_insert_id($conn);
                        $insert_query_to_payment_details = "INSERT INTO transaction_details (`closed_leads_id`, `paid_amount`, `payment_method`, `payment_remarks`, `status`, `date`) 
                                                                                VALUES ('$closed_leads_inserted_id', '$paid_amount', '$payment_method', 'paid', 'Active', '$dateTime')";
                        if(mysqli_query($conn, $insert_query_to_payment_details) && mysqli_query($conn, $update_lead_status))
                        {
                            $res['status']  = 'Success';
                            $res['remarks'] = 'Lead Converted';
                        }
                        else
                        {
                            $res['status']  = 'Failed';
                            $res['remarks'] = 'Unable to convert lead';
                        }
                    }
                }
            }
            else
            {
                $res['status']  = 'Failed';
                $res['remarks'] = 'Failed to Update Lead status';
            }
        
    } else {
        $update_lead_status = "UPDATE `$table` SET `lead_status` = 'closed' WHERE `id`='$lead_id' ";

            if(mysqli_query($conn, $update_lead_status))
            {
                $res['status']  = 'Success';
                $res['remarks'] = 'Lead Closed!';
            }
            else
            {
                $res['status']  = 'Failed';
                $res['remarks'] = 'Failed to Update Lead status';
            }
    }

    echo json_encode($res);

?>