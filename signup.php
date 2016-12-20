<?php
$mysqli=mysqli_connect("localhost", "id319703_agonzalez26", "MyAboutME123", "id319703_company");
if($mysqli-> connect_errno){//checks if there is an error
  printf("ERROR");
}
  session_start();//
  if(isset($_SESSION['user'])){//if there is a current user in session
    header("Location: aboutme.php");
  }
  $error = false;//flag
  $errorMessage = "";

  $subject = "My subject";
 //check if form is submitted
  if (isset($_POST['signup'])) {//grabs the information when form submitted
     $name = mysqli_real_escape_string($mysqli, $_POST['name']);
     $email = mysqli_real_escape_string($mysqli, $_POST['email']);
     $password = mysqli_real_escape_string($mysqli, $_POST['password']);
     $cpassword = mysqli_real_escape_string($mysqli, $_POST['cpassword']);

     //to mail an email for successful registration
     $to = $email;
     $subject = "AboutME Confirmation";
     $emailconfirm = "You have successful created an account with AboutME!!";

     //name can contain only alpha characters and space
     if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
         $error = true;
         $name_error = "Name must contain only alphabets and space";
     }
     if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
         $error = true;
         $email_error = "Please Enter Valid Email ID";
     }
     if(strlen($password) < 6) {
         $error = true;
         $password_error = "Password must be minimum of 6 characters";
     }
     if($password != $cpassword) {
         $error = true;
         $cpassword_error = "Password and Confirm Password doesn't match";
     }
     if (!$error) {
         if(mysqli_query($mysqli, "INSERT INTO login(username,email,password) VALUES('" . $name . "', '" . $email . "', '" . $password . "')")) {
           $successmsg = "Successfully Registered! <a href='index.php'>Click here to Login!</a>";
          mail($email,$subject,$emailconfirm);
         } else {
             $errormsg = "Error in registering...Please try again later!";
         }
     }
 }
 ?>
 <html>
  <head>
    <title>Welcome to AboutME</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="./stylesheet/style.css">
  </head>
  <div id="main">
    <h1>Welcome to <span style="color:#48d1cc;">AboutME.</span></h1>
    <h2>Please enter the information below.</h2>
  </div>
  <div id="login">
    <!--form for the user to login to the filemanagement system-->
    <form action="<?php echo $_SERVER['PHP_SELF'];?>"  method="POST">
      <p><!--area for the name-->
        <label for="name">Name: </label>
        <input type="text" name="name" placeholder="Enter name here." id="name" required="<?php if($error) echo $name;?>">
        <span style="color:red;"><?php if(isset($name_error)) echo $errorMessage; ?></span>
      </p>
      <p><!--area for the email-->
        <label for="email">Email: </label>
        <input id="email"name="email" placeholder="Enter email here." type="text" required value="<?php if($error) echo $email; ?>"><br>
         <span style="color:red;"><?php if (isset($email_error)) echo $email_error; ?></span>
      </p>
      <p><!--area for the email-->
        <label for="pass">Password: </label>
        <input id="pass" name="password" placeholder="Enter password here." type="password"><br>
        <span style="color:red;"><?php if (isset($password_error)) echo $password_error; ?></span>
      </p>
      <p><!--area for the email-->
        <label for="passcheck">Confirm Password: </label>
        <input id="passcheck" name="cpassword" placeholder="Confirm password here." type="password"><br>
         <span style="color:red;"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
      </p>
      <p><!--the submit button that will transmit the username and password to the login.php-->
        <input type="submit" name="signup" value="    SignUP!    ">
      </p>
    </form>
    <!--if the information is successful-->
    <span><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
    <!--if the infomration is not successful-->
    <span><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
  </div>
  <!--redirects to login page if already have an account-->
  <div id="checkin">
        Already Registered? <a href="index.php">Login Here!</a>
  </div>
<style>
body{
        background-color: #fefdfb;
    }
#main{
  text-align: center;
  font-size: 80%;
}
#login{
  background-color: #48d1cc;
  padding:20px;
  margin:20px;
  border-radius: 8px;
  text-align: center;
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
#checkin{
  text-align: center;
}
</style>
</body>
<!-- http://www.kodingmadesimple.com/2016/01/php-login-and-registration-script-with-mysql-example.html -->
</html>