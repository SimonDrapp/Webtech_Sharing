<?php

    if( isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['subject']) && isset($_POST['message']))
    {
       $firstname = $_POST['firstname'];
       $lastname = $_POST['lastname'];
       $email = $_POST['email'];
       $mobile = $_POST['mobile'];
       $subject_client = $_POST['subject'];
       $message_client = nl2br($_POST['message']); //nl2br --> new lines to break tags
       $to = "simon.drapp@web.de";
       $from = $email;
       $subject = 'Contact Form Message';
       $message = '<b>Nachname:</b> '.$lastname.' <br><b>Vorname:</b> '.$firstname.' <br><b>Email:</b> '.$email.' <br><b>Mobile Number:</b> '.$mobile.' <br><b>Subject:</b> '.$subject_client.' <p>'.$message_client.':</p>';
       $headers = "From: $from\n";
       $headers .= "MIME-Version: 1.0\n";
       $headers .= "Content-type: text/html; charset=iso-8859-1\n";
       if( mail($to, $subject, $message, $headers) )  {
           echo "success";
       } else {
           echo "The server failed to send the message. Please try again later.";
       }
    }
?>