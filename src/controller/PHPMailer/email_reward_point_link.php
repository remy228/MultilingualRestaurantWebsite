<?php

require_once("./class.phpmailer.php");
require "PHPMailerAutoload.php";
$email=$_GET["user"];
//echo $email;
$rewards=$_GET["reward"];
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
$mail->Subject="HELLO CUSTOMER!";
$mail->Body="A big thank you from On the Edge team. You have a balance of ".$rewards. " reward points";
$mail->AddAddress($email);
 if(!$mail->Send())
{
    echo "Error: Email has not been sent".$mail->ErrorInfo;
}
else
{
    
    $_SESSION['msg']="Email has been sent succesfully";
   // header('Location: ../../view/rewardsView.php');
}
header('Location: ../../view/rewardsView.php');


?>
    
