<?php
//starts the session of the user
  session_start();
  $errorMessage="";//error message
  if(isset($_POST['SUBMIT'])){//if submit button is clicked
    if(empty($_POST['NAME'])|| empty($_POST['PASSWORD'])){//checks to see if the username or password is empty
      $errorMessage ="NAME AND/OR PASSWORD MISSING!! TRY AGAIN!!";//prompts user that one of them is empty
    }else{
      $username=trim($_POST['NAME']);//grabs the usernam
      $username = strip_tags($username);
      $username = htmlspecialchars($username);
      $password=trim($_POST['PASSWORD']);//grabs the password
      $password=strip_tags($password);
      $password=htmlspecialchars($password);
      $mysqli = mysqli_connect("localhost", "id319703_agonzalez26", "MyAboutME123", "id319703_company");//checks the connection of the database
      $search = "select * from login where password='$password' AND username='$username'";//selects from the login table for the username and the password
      $result = $mysqli->query($search);
      $row = $result->fetch_assoc();
      if($result->num_rows==1){//pulls the name from database where there is only one result
        $_SESSION['user']= $username;//ests the username as the current session
        header("location: aboutme.php");//moves to the profile file
      }else{
        $errorMessage="NAME AND/OR PASSWORD INCORRECT!! TRY AGAIN!!";//if there is an error with the login
      }
      mysqli_close($mysqli);
    }
}
 ?>