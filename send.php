<?php

$emailAddress = 'praneeshedachalil@winsgroup.in'; //To address



require "phpmailer/class.phpmailer.php";


$msg='Name:	'.$_POST['name'].'<br />
Email:	'.$_POST['email'].'<br />



Message:<br /><br />

'.nl2br($_POST['message']).'

';


$mail = new PHPMailer();
//$mail->IsMail();

    $mail->IsSMTP();                // Sets up a SMTP connection 
	$mail->SMTPAuth = true;         // Connection with the SMTP does require authorization  
    $mail->SMTPSecure = "tls";      
    $mail->Host = "smtp.gmail.com";  //Host Address
    $mail->Port = 587;  
    $mail->Encoding = '7bit';    
          
    // Authentication  
    $mail->Username   = "praneeshedachalil@winsgroup.in"; // Login  
    $mail->Password   = "pRS28143183"; // Password  
      
$mail->Subject="Message From Winsgroup.in Website";
$mail->AddReplyTo($_POST['email'], $_POST['name']);
$mail->AddAddress($emailAddress);
$mail->SetFrom("praneeshedachalil@winsgroup.in");
$mail->MsgHTML($msg);

$mail->Send();
unset($mail);
?>
<script>
alert("Thanks For Contacting");
window.location="http://www.winsgroup.in/index.html";
</script>