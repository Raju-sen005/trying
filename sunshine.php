<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $to = "sensaab0005@gmail.com";
    $subject = "Form Submission";
    $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
    $message =htmlspecialchars($_POST['message']);

    $headers = "Form: ".$email."\r\n";
    $headers = "Reply-To: ".$email."\r\n";

    if(mail($to, $subject, $message,$headers)){
        echo "Email sent successfully!";
    }
    else{
        echo"Failed to send email.Please try again.";
    }
}
?>