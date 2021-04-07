<?php

    $name = $_POST['visitorname'];
    $visitoremail = $_POST['emailaddr'];
    $message = $_POST['message'];
    $emailsubject = "New Form submission";
    $to = "vinayaknayak4321@gmail.com";
    $headers = "From : ". $visitoremail . "\r\n";

    $txt = "You have received an email from ".$name . "\n\n". $message;
    $txt = wordwrap($txt , 70);

    mail($to, $emailsubject, $txt, $headers);

    header("Location : index.php");


 ?>
