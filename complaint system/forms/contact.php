<?php
if(!empty($_POST["send"])){
  $name=$_POST["name"];
  $email=$_POST["email"];
  $subject=$_POST["subject"];
  $message=$_POST["message"];
  $toEmail="ghirnikarrugved@gmail.com";

  $mailHeaders = "Name:  "  . $name  . 
  "\r\n Email: " .  $email  . 
  "\r\n subject: " . $subject  . 
  "\r\n message: " . $message  . "\r\n";

  if(mail($toEmail, $name, $mailHeaders)){
    $message ="Your Information is Received Successfully.";
    
  }


  

}