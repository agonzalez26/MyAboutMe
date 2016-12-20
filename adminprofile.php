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
  }   //check if form is submitted
    if (isset($_POST['update'])) {//grabs the information when form submitted
       $name = mysqli_real_escape_string($mysqli, $_POST['name']);
       $email = mysqli_real_escape_string($mysqli, $_POST['email']);
       $password = mysqli_real_escape_string($mysqli, $_POST['password']);

       //the query string
        $query="UPDATE login SET email = '$email', password = '$password' WHERE username = '$name'";
        //updates the database
        mysqli_query($mysqli, $query);
     }
     if (isset($_POST['delete'])) {//grabs the information when form submitted
        $dname = mysqli_real_escape_string($mysqli, $_POST['dname']);
        //the query string
         $query2= "DELETE FROM login WHERE username = '$dname'";
         //updates the database
         mysqli_query($mysqli, $query2);
      }
   ?>
 <html>
    <head><title>MyAdminProfile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./stylesheet/style.css">
</head>


    <body>
      <!--introduction to AboutME-->
      <div id="top">
        <h1 class="title">This is your MyAdminProfile <?php echo $user;?>!</h1>
        <h2 class="title">You can modify your users accounts here.</h2>
        <div id="checkin">
              <a href="aboutme.php">Redirect to AboutME home!</a>
              <a href="logout.php">Logout from AboutME!</a>
        </div>
      </div>
      <div id="admin">
        <div id="users">
          <h5>Users in AboutME</h5>
          <div id="userlist">
            <?php
            $sql = "SELECT * FROM login";
            $result = $mysqli->query($sql);
            echo "<table><tr><th>Name</th><th>Email</th><th>Password</th></tr>";
            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                 echo "<tr><td>".$row["username"]."</td><td>".$row["email"]."</td><td>".$row["password"]."</td></tr>";
              }
            } else {
              echo "No users exist.";
            }
            echo "</table>" ?>
          </div>

        </div>
      <div id="account">
        <h5>Pick a user and change their account information.</h5>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>"  method="POST">
          <p><!--area for the email-->
            <label for="name">Name: </label>
            <input id="name"name="name" placeholder="Update name of user here." type="text">
          </p>
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
                echo $check = "<br>Successful.";
              }else{
                echo $check;
              }
             ?>
          </p>
        </form>
      </div>
      <di id="delete">
        <h5>Pick a user and delete their account.</h5>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>"  method="POST">
          <p><!--area for the email-->
            <label for="user">Name: </label>
            <input id="user"name="dname" placeholder="Update name of user here." type="text">
          </p>
          <p><!--the submit button that will transmit the username and password to the login.php-->
            <input type="submit" name="delete" value="    Deleted!    ">
            <?php $check="";
              if(isset($_POST['delete'])){
                echo $check = "<br>Successfully deleted.";
              }else{
                echo $check;
              }
             ?>
          </p>
        </form>
      </div>
    </div>
    </body>
    <style>
    body{
        background-color: #fefdfb;
    }
td{
text-align:center;}
      .title{
        color: #666;
      }
      #top{
        text-align: center;
      }
      #admin{
        background-color: #48d1cc;
        width:60%;
        margin:auto;
        padding:10px;
        text-align: center;
      }
      #users{
        background-color: #48d1cc;
        display:block;
        border:2px dashed grey;
        width:70%;
        margin:auto;
        padding:15px;
        text-align: center;
      }
      #userlist{
        background-color: #fefdfb;
        border-radius: 3px;

      }
      #account{
        background-color: #48d1cc;
        border:2px dashed grey;
        width:70%;
        margin:auto;
        padding:10px;
        text-align: center;
        display: block;
      }
      #delete{
        background-color: #48d1cc;
        display:block;
        border:2px dashed grey;
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
  </body>
 </html>