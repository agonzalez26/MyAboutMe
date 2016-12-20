<?php
  //php file that deals with the connection of the database
  $mysqli=mysqli_connect("localhost", "id319703_agonzalez26", "MyAboutME123","id319703_company");
  if($mysqli-> connect_errno){//checks if there is an error
    printf("ERROR");
  }
  session_start();//starts the session for the user
  $usercheck=$_SESSION['user'];//assigns the user to a variable
  $sess ="select username from login where username='$usercheck'";//checks if the user is in the database
  $result=$mysqli->query($sess);
  $row=$result->fetch_assoc();
  $login_session = $row['username'];//assigns the correct user to a variable
  if(!isset($login_session)){//if the user does not exist
    mysqli_close($mysqli); // Closing Connection
    header('Location: index.php'); // Redirecting To Home Page
  }
 ?>