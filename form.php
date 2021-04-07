<?php

    $name = $_POST['visitorname'];
    $visitoremail = $_POST['emailaddr'];
    $message = $_POST['message'];
    $emailsubject = "New Form submission";
    $headers = "From : ". $visitoremail . "\r\n";

    $txt = "You have received an email from ".$name . "\n\n". $message;
    $txt = wordwrap($txt , 70);

    echo $txt;

    header("Location : index.php");


 ?>
