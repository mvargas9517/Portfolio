<?php
if (isset($_POST['submit'])) 
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $message = $_POST['message'];
    
    $mailTo = "mvargas517@gmail.com";
    $headers = "From: " . $mailFrom;
    &txt = "You have received an e-mail from". $name. ". \n\n",$message;

    mail($mailTo, $name, $txt, $headers);
    header("Location: index.php")
?>