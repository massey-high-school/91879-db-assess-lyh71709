<!DOCTYPE HTML>

<html lang="en">
    
<?php
  
    session_start();
    include("config.php");
    
    // Connect tp database...
    
    $dbconnect=mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    if (mysqli_connect_errno())
        
    {
        echo "Connection failed:".mysqli_connect_error();
        exit;
    }
    
?>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Put Content Here">
    <meta name="keywords" content="Put keywords here">
    <meta name="author" content="Put your name here">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Food Review Database</title>
    
    <!-- Edit the link below / replace with your chosen google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato%7cUbuntu" rel="stylesheet"> 
    
    <!-- Edit the name of your style sheet - 'foo' is not a valid name!! -->
    <link rel="stylesheet" href="css/foodstyle.css"> 
    
</head>
    
<body>
    
    <div class="wrapper">
    

        
        <div class="box banner">
            
        <!-- logo image linking to home page goes here -->
        <a href="index.php">
            <div class="box logo"  title="Logo - Click here to go to the Home Page">
            <img class="img-circle" src="Images/chef_logo.png" width="150" height="150" />
            
            </div>    <!-- / logo -->
        </a>
            
            <h1>The Craving Opinion</h1>
        </div>    <!-- / banner -->

        <!-- Navigation goes here.  Edit BOTH the file name and the link name -->
        <div class="box nav">
            <a href="index.html">Home</a> | 
            <a href="page1.html">Page 1</a> | 
            <a href="page2.html">Page 2</a> | 
            <a href="page3.html">Page 3</a> | 
            <a href="contact.html">Contact</a>
        </div>    <!-- / nav -->        
        
        
        <div class="box side">
            <h2>Side Bar goes here</h2>
                <p>items go here</p>
            
                <ol>
                    <li>Here</li>
                    <li>is</li>
                    <li>a</li>
                    <li>list</li>
                </ol>
        </div> <!-- / side bar -->