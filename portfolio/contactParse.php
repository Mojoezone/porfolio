<?php
$nameErr; 
$emailErr; 
$commentErr;
$name;
$email;
$comment;

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
    

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["name"])){
        $nameErr = 'Name is required';
    }else{
        $name = test_input($_POST['name']);
        if(!preg_match("/^[a-zA-Z ]*$/",$name)){
            $nameErr = 'Only letters and white space allowed';
        }
    }

    if(empty($_POST['email'])){
        $emailErr = "Email is required";
    }else{
        $email = test_input($_POST['email']);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $emailErr = "Invalid email format";
    }
    }
    if(empty($_POST['comment'])){
        $commentErr = "Message is required";
    }else{
        $comment = test_input($_POST['comment']);
    }
   if($_POST['did_send'] == 1){
        echo "<p>Thank You ".$name." I will contact you within 24 hours.</p>";
   }else{
        echo "<p style='color: #f00'>An error has occured, please resend the message, thank you.</p>";
   }
    
    $to = 'mojoezone@gmail.com';
    $subject = 'Message from portfolio';
    $header = "From: ".$email;
    mail($to, $subject, $comment, $header);
}
