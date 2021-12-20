<?php
    // The message
    $name = $_GET["text"];
    $email = $_GET["email"];
    $message = $_GET["message"];
    $full_message = $name + '\n\r' + $email + '\n\r' + $message;
    $subject = 'Someone just emailed you from your own site';
    // Send
    mail('dicucristian24@gmail.com', $subject, $full_message);
  ?>

  Your mail has been sent.