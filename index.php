<?php
  //information of the login.php file
  include 'login.php';
  if(isset($_SESSION['user'])){//if there is a current user then head to the profile.php file
    header("aboutme.php");
  }
 ?>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css"><!--access to the style.css file-->
<link rel="stylesheet" type="text/css" href="./stylesheet/style.css">
    <title>Login to MyAboutME</title>
  </head>
  <body>
    <div id="main"><!--displays at the top of the page-->
      <h1>Welcome to my <span style="color:#48d1cc;">AboutME</span> Page!</h1>
      <div id="login">
        <!--form for the user to login to the filemanagement system-->
        <form action="" method="POST">
          <p><!--area for the user-->
            <label for="name">Name: </label><br>
            <input id="name" name="NAME" placeholder="Name" type="text"><br>
          </p>
          <p><!--area for the password-->
            <label for="pass">Password: </label><br>
            <input id="pass" name="PASSWORD" placeholder="Password" type="password"><br>
          </p>
          <p><!--the submit button that will transmit the username and password to the login.php-->
            <input type="submit" name="SUBMIT" value="    LOGIN    ">
          </p>
          <!--displays if there is an error-->
          <span style="color:red;"><?php echo $errorMessage; ?></span>
        </form>
      </div>
      <div>
        <h2>New User?</h2>
        <a href="signup.php">Signup Here!</a>
      </div>
  </body>
  <!--styling of the index.php file-->
  <style>
body{
        background-color: #fefdfb;
    }
  #main{
    text-align: center;
  }
  #login{
    background-color: #48d1cc;
    padding:20px;
    margin:20px;
    border-radius: 8px;
  }
  label{
    text-transform: uppercase;
    font-weight: bolder;
  }
  p{
    background-color: #f9f9f9;
    border-radius: 7px;
    padding:10px;
  }
  input[type=text], input[type=password]{
    text-align: center;
    padding:5px;
    border-radius: 3px;
  }
  </style>
</html>