<?php
    
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $product = $_POST['products'];
    $states = $_POST['states'];
    $country = $_POST['country'];
    $message = $_POST['message',];
    $subject="hello";
    
    
    $mail_header =  "From:".$name."<".$email.">\r\n"

    $recipient = "devapraveen10@gmail.com";
    // mail(to,subject,message,headers,parameters);
    mail($recipient,$subject,$message) or die("Error!");
     echo "Message Send succefully";
    
    ?>