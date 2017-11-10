<?php
error_reporting(E_ALL & ~E_NOTICE);
require('db-config.php');
$p_id = $_GET['p_id'];
include_once('functions.php');
$url = $_SERVER['PHP_SELF'];
$urlName = basename($url);
$urlName = basename($urlName, '.php');
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo get_title();?></title>
        <link rel="shortcut icon" href="images/logo.ico">
        <link rel="apple-touch-icon" href="images/logo.png" >
        <link href="https://fonts.googleapis.com/css?family=Monda:400,700" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/normalize.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <header id="stickyHeader">
            <h1 id="myLogo"><a href="index.php"><img id="imgToggle" src="images/logo.png" alt="Joe Mo Logo"></a></h1>
            <div id="mobileMenu"><span class="icon-menu"></span></div>
            <nav id="mainNavContainer">
                <div class="fadedLogo"><a href="#"><img src="images/logoFaded.png" alt="Joe Mo Logo"></a></div>
                <div><span id="mobileClose" class="icon-cancel"></span></div>
                <ul class="mainNav">
                    <li>
                        <a class="<?php if($urlName == 'index'){echo 'active';} ?>" href="index.php">Home</a>
                    </li>
                    <li class="subNavContainer">
                        <a class="<?php if($urlName == 'portfolio'){echo 'active';} ?>" href="portfolio.php">Portfolio</a><span id="openSubNav">&#187;</span>
                        <ul class="subNav">
                           <?php 
                            $query = "SELECT p_id, p_name
                                      FROM projects";
                            $result = $db->query($query);
                            if($result->num_rows >= 1){
                                while($row = $result->fetch_assoc()){
                            
                            ?>
                            <li>
                                <a  class="<?php if($p_id == $row['p_id']){echo 'active';} ?>" href="project.php?p_id=<?php echo $row['p_id']; ?>"><?php echo $row['p_name']; ?></a>
                            </li>
                         <?php
                                }
                             $result->free();   
                            }
                                    ?>
                        </ul>
                    </li>
                    <li>
                        <a class="<?php if($urlName == 'about'){echo 'active';} ?>" href="about.php">About</a>
                    </li>
                    <li>
                        <a class="<?php if($urlName == 'contact'){echo 'active';} ?>" href="contact.php">Contact</a>
                    </li>
                </ul>
                <div class="mailContainer"><a class="icon-mail" href="mailto:mojoezone@gmail.com">mojoezone@gmail.com</a></div>
            </nav>

        </header>
