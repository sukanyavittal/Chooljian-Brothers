<?php

$name=$_POST['name'];
$email_from=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];
$email_to='contactme@bhaskarsettipalli.com';
    $email_subject='Message from Chooljian Brothers website';
    
     $email_message = "Hey Mike! Here's a message from ".$name;
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
$email_message .= "\n\n";
 $email_message .= "Name: ".clean_string($name)."\n";
 
   
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Telephone: ".clean_string($phone)."\n";
 
    $email_message .= "Message: ".clean_string($message)."\n";

$email_message .="\n\nCheers,\nchooljianbrothers.org";


mail($email_to, $email_subject, $email_message); 


echo "Thank you for contacting us. We will be in touch with you very soon.";
?>

