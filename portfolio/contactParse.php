<?php
$nameErr; 
$emailErr; 
$commentErr;
$name;
$email;
$comment;
    

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["name"])){
        $nameErr = 'Name is required';
}else{
        $name = test_input($_POST['name']);
        if(!preg_match("/^[a-zA-Z]*$/", $name)){
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
}


