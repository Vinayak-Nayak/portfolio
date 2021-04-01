<?php

    $name = $_POST['name'];
    $visitoremail = $_POST['email'];
    $message = $_POST['message'];
    $emailsubject = "New Form submission";
    $to = "vinayaknayak4321@gmail.com";
    $headers = "From : ". $visitoremail;

    $txt = "You have received an email from ".$name . "\n\n". $message;

    $mail = mail($to, $emailsubject, $txt, $headers);
    if($mail){
      echo "Mail sent successfully";
    }
    else{
      echo "Mail not sent";
    }

    header("Location : index.html");


 ?>
