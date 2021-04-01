<?php

  $(isset($_POST['submit'])){
    $name = $_POST['name'];
    $visitoremail = $_POST['email'];
    $message = $_POST['message'];
    $emailsubject = "New Form submission";
    $to = "vinayaknayak4321@gmail.com";
    $headers = "From : ". $visitoremail;

    $txt = "You have received an email from ".$name.".\n\n".$message;

    mail($to, $emailsubject, $txt, $headers);

    header("Location : index.php");
  }

 ?>
