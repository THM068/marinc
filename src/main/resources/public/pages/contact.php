<?php

if (isset($_POST['submit'])){
    $fname = $_POST['name'];
    $lname = $_POST['lastName'];
    $emailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $mailTo = "marincprivatelimited@yahoo.com";
    $headers = "From: ".$emailFrom;
    $text = "You have received an email from ".$fname .$lname. ".\n\n" .$message;

    mail($mailTo, $subject, $text, $headers);    
    header("Location: contactus.html?mailsent");
}
