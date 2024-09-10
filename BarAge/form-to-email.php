<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $message = $_POST['message'];
  $email_from = 'westflowbarmans@gmail.com';
  $email_subject = "New form from WEST FLOW!";
  $email_body = "Пользователь $name хочет связаться с вами!"." его почта - $email,"." его телефон - $number"." Дополнительное сообщение от пользователя - $message";
  $to = "westflowbarmans@gmail.com";
  $headers = "From: $email_from \r\n";
  mail($to,$email_subject,$email_body,$headers);
  header("Location: http://barschoolwestflow.pl/");
?>