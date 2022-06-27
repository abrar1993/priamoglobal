<?php
if(isset($_POST['submit'])){
    $to = "ch.abrar50@gmail.com";



    $name = $_POST['name'];
    $phone= $_POST['phone'];
    $email= $_POST['email'];
    $qualification= $_POST['qualification'];
    $state= $_POST['state'];
    $course=$_POST['course'];
    $course=$_POST['message'];
    $subject= $_POST['subject'];
    $body= $_POST['body'];
    $headers = 'From: '.$email . "\r\n";


    $body = "name : ".$name. "\r\n" .
    		"Phone : ".$phone. "\r\n" .
            "email : ".$email. "\r\n" .
            "qualification : ".$qualification. "\r\n" .
            "state : ".$state. "\r\n" .
            "course : ".$course. "\r\n" .
            
    		"Message : " . $body;
    if(mail($to, $subject, $body , $headers)){
        echo "Mail Sent!";
    }else{
         echo "Failed To Send Mail";
    }
}

?>
