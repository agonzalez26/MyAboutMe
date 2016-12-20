<?php
//error that will not display the changes and redirects to index.php
//includes page that detects if the database is connected
include 'session.php';
$user = $_SESSION['user'];//assigns the current session as the user of the filesystem
 ?>
 <?php
 include './navigation/navigation.php';
 $mysqli=mysqli_connect("localhost", "id319703_agonzalez26", "MyAboutME123", "id319703_company");
 if($mysqli-> connect_errno){//checks if there is an error
   printf("ERROR");
 }
  //check if form is submitted
   if (isset($_POST['update'])) {//grabs the information when form submitted
      //$name = mysqli_real_escape_string($mysqli, $_POST['name']);
      $email = mysqli_real_escape_string($mysqli, $_POST['email']);
      $password = mysqli_real_escape_string($mysqli, $_POST['password']);

      //the query string
       $query="UPDATE login SET email = '$email', password = '$password' WHERE username = '$user'";
       //updates the database
       mysqli_query($mysqli, $query);
    }
  ?>
 <html>
<head>
    <title>MyProfile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="./stylesheet/style.css">
 </head>

    <body>
      <!--introduction to AboutME-->
      <div id="top">
        <h1 class="title">This is your <span style="color:#48d1cc;">MyProfile</span>, <?php echo $user;?>!</h1>
        <h2 class="title">You can modify your profile here.</h2>
      </div>
      <!--the account that updates the email and password of the current user-->
      <div id="account">
        <form action="<?php echo $_SERVER['PHP_SELF'];?>"  method="POST">
           <div id="currentuser" style="text-align:center;width:100%;">
<?php
            $sql = "SELECT * FROM login WHERE username = '$user'";
            $result = $mysqli->query($sql);
            echo "<table>";
            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                 echo "<tr><td><strong>Email:</strong> ".$row["email"]."</td></tr><tr><td><strong>Password: </strong> ".$row["password"]."</td></tr>";
              }
            } else {
              echo "No users exist.";
            }
            echo "</table>" ?>
           </div>
          <p><!--area for the email-->
            <label for="email">Change Email: </label>
            <input id="email"name="email" placeholder="Update email here." type="text">
          </p>
          <p><!--area for the password-->
            <label for="pass">Change Password: </label>
            <input id="pass" name="password" placeholder="Update password here." type="password">
          </p>
          <p><!--the submit button that will transmit the username and password to the login.php-->
            <input type="submit" name="update" value="    Update!    ">
            <?php $check="";
              if(isset($_POST['update'])){
                echo $check = "<br>Successfully changed email and password!";
              }else{
                echo $check;
              }
             ?>
          </p>
        </form>
        <div id="checkin">
              <a href="aboutme.php">Redirect to AboutME home!</a>
              <a href="logout.php">Logout from AboutME!</a>
        </div>
      </div>
    </body>
    <style>
body{
        background-color: #fefdfb;
    }
      .title{
        color: #666;
      }
      #top{
        text-align: center;
      }
      #account{
        background-color: #48d1cc;
        width:70%;
        margin:auto;
        padding:15px;
        text-align: center;
      }
      p{
        text-align: center;
        font-weight:bolder;
      }
      input[type=text]{
        font-weight:normal;
      }
    </style>
     </html>