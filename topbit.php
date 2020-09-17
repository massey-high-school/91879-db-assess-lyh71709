<!DOCTYPE HTML>

<html lang="en">
    
<?php
  
    session_start();
    include("config.php");
    include("functions.php"); // include data sanitising...
    
    // Connect to database...
    
    $dbconnect=mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    if (mysqli_connect_errno())
        
    {
        echo "Connection failed:".mysqli_connect_error();
        exit;
    }
    
?>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="A food review site">
    <meta name="keywords" content="Food, Review">
    <meta name="author" content="Henry Ly">
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
        
        <div class="box side">
            <h2>Search  |   <a class="side" href="showall.php">Show All</a></h2>
            
            <i>Search for your Item, Meal Type or Location here</i>
            
            <hr />
            
            <!-- Start of Item Search -->
        
            <form method="post" action="item_search.php" enctype="multipart/form-data">

                <input class="search" type="text" name="item" size = "40" value="" required placeholder="Item..." />

                <input class="submit" type="submit" name="find_item" value ="Search" />

            </form>

            <!-- End of Title Search -->
            
            <hr />
            
        </div> <!-- / side bar -->