<?php
  
  // include phpmailer class
  require_once 'mailer/class.phpmailer.php';
  // creates object
  $mail = new PHPMailer(true); 
  
try{
    $mail->IsSMTP(); 
    $mail->isHTML(true);
    $mail->SMTPDebug  = 0;                     
    $mail->SMTPAuth   = true;                  
    $mail->SMTPSecure = "ssl";                 
    $mail->Host       = "smtp.gmail.com";      
    $mail->Port       = 465;             
    $mail->AddAddress($email);
    $mail->Username   ="your_gmail_id@gmail.com";  
                         $mail->Password   ="your_gmail_password";            
                         $mail->SetFrom('your_gmail_id@gmail.com','Programacion net');
                         $mail->AddReplyTo("your_gmail_id@gmail.com","Programacion net");
    $mail->Subject    = $subject;
    $mail->Body    = $message;
    $mail->AltBody    = $message;
     
    if($mail->Send())
    {
     
     $msg = "<div class='alert alert-success'>
       Hi,<br /> ".$full_name." mail was successfully sent to ".$email." go and check, cheers :)
       </div>";
     
    }
   } catch(phpmailerException $ex)
   {
    $msg = "<div class='alert alert-warning'>".$ex->errorMessage()."</div>";
   }
  ?>