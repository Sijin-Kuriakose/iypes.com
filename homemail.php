<?php

        $to = "info@iypes.com"; // this is your Email address
        
        $from = $_POST['email'];
        
        $first_name = $_POST['name'];
        $number = $_POST['number'];
        $fmessage=$_POST['message'];



//$to       = 'test@gmail.com';
        $headers .= "From: ".$from . "\r\n";
        $headers .= "Reply-To: ".$from. "\r\n";
        
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        $headers .= "Date: ".date("r")."\r\n";

    $message = '<html><body>';
    $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>". $first_name. "</td></tr>";
    $message .= "<tr><td><strong>Email:</strong> </td><td>" .$from. "</td></tr>";
    $message .= "<tr><td><strong>Phone Number:</strong> </td><td>".$number."</td></tr>";
    $message .= "<tr><td><strong>Message:</strong> </td><td>".$fmessage."</td></tr>";
    
    $message .= "</table>";
    $message .= "</body></html>";




     
        $subject = "Contact Submission Form";
        
        //$headers  = 'MIME-Version: 1.0' . "\r\n";
        //$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        //$headers .= 'From: '.$from . "\r\n" ; 

        
    if(mail($to,$subject,$message,$headers))
        
        { 
   
          header('Location: http://iypes.com'); 
          
        }
        
        else
        { 
            
          header('Location: http://iypes.com');
        }

        
        ?>
