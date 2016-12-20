<?php
//includes page that detects if the database is connected
include 'session.php';
$user = $_SESSION['user'];//assigns the current session as the user of the filesystem
include './navigation/navigation.php';
 ?>
<!--the first page redirected from login-->
 <html>
<head>
 <title>MyAboutME</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="./stylesheet/style.css">
</head>


 <body>
   <!--introduction to AboutME-->
   <h1 class="title">Welcome to your world, <?php echo $user;?>!</h1>
   <h2 class="title">Check out who you are with a click of a button.</h2>
   <h3 class="title">AboutME allows you to add everything you like.</h3>
 </body>
 <style>
  body{
    text-align: center;
  }
body{
        background-color: #fefdfb;
    }
  .title{
    color: #666;
  }
 </style>
 </html>