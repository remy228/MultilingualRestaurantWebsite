<?php
    session_start();
require_once("./class.phpmailer.php");
require "PHPMailerAutoload.php";
    
    if(isset($_SESSION['list']))
    {
        $email= $_SESSION['list'];
    }
    
$list_email_rewards= explode("*",$email);
    
$mail =  new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 1;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = "smtp.gmail.com";
//$mail->Host = "smtp.mail.yahoo.com";
$mail->Port = 465; //587 also works
$mail->IsHTML(true);
$mail->Username="on.the.edge.cs174@gmail.com";
$mail->Password="qwerty12345^";
$mail->SetFrom("on.the.edge.cs174@gmail.com");
$mail->Subject="New Special Menu!";
$mail->Body="We have a new specials menu. Hurry up and come check it out!";
    
    foreach($list_email_rewards as $key => $email)
    {
        $mail->AddBCC($email);
    }
    

if(!$mail->Send())
{
    echo "Error: Email has not been sent".$mail->ErrorInfo;
}
else
{
    $_SESSION['msg']="Email has been sent succesfully";
    header('Location: ../../view/selectView.php');
}


?>
    
