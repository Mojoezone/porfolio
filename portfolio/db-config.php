<?php 
$database = 'projects';
$username = 'portfolio';
$password = 'vmEZBKfWYEL8ttRT';
$db_host  = 'localhost'; 

$db = new mysqli(
    $db_host, $username, $password, $database
);

if($db->config_errno > 0){
    die('Error connecting to database');
}

define('salt', 'dwaldjladjlw&*^&%^@#!@kfka7834280daj&(^(');

//no close php