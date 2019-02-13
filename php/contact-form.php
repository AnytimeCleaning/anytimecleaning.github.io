<?php
      if(null!==($_POST["name"])) {
          $name = $_POST["name"];
         /* echo "Please enter 'Name'<br />"; */
      } else {
          $name = "";
      }
      if(null!==($_POST["email"])) {
          $email = $_POST["email"];
          /* echo "Please enter 'E_Mail'<br />"; */
      } else {
          $email = "";
      }
    if(null!==($_POST["message"])) {
        $message = $_POST["message"];
        /* echo "Please enter your message<br />"; */
    }   else {
        $message = "";
    }
    /*echo "{$name}, {$email}, {$message}";*/

  $email_subject = "New Form submission";

  $email_body = "You have received a new message from the user $name.\n".
                "Here is the message:\n $message";

  $to = "stellacleaning1@gmail.com";
    $headers = "From: $email \r\n";
    $headers .= "Reply-To: $email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: thank-you.html");
   ?>