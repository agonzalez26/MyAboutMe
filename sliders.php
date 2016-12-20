<?php
  //includes page that detects if the database is connected
  include 'session.php';
  $user = $_SESSION['user'];//assigns the current session as the user of the filesystem
  //includes the navigation page
  include './navigation/navigation.php';
  if (isset($_POST['addslider'])) {//grabs the information when form submitted
     $newslideritem = mysqli_real_escape_string($mysqli, $_POST['newslide']);
     if(empty($newslideritem)){
       echo "<h6 style='text-align:center;'>Empty input. Try again.</h6>";
     } else{
       $newsliders = "INSERT INTO sliders(slider, username) VALUES ('$newslideritem', '$user')";
       mysqli_query($mysqli, $newsliders);
   }

  }
?>
 <html>
<head>
  <title>MySliders</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--css for the files incorporated from w3schools-->
  <link rel="stylesheet" type="text/css" href="./stylesheet/style.css">
</head>
  <body>
   <!--information about the page-->
   <h2 class="w3-center title"><?php echo $user;?>'s <span style="color:#48d1cc;">MySliders</span></h2>
   <h3 class="w3-center title">MySliders contains my favorite bands. Check them out!</h3>
   <!--slideshow-->
   <div class="w3-content w3-section" style="max-width:500px">
    <div class="w3-center" style="text-align:center;margin:auto;">
     <?php
        $slides = "SELECT * FROM sliders WHERE username='$user'";
        $res = $mysqli->query($slides);
        if($res->num_rows>0){
          while($row=$res->fetch_assoc()){
              echo "<img class='mySlides' src='" . $row['slider']. "' style='width:100%'>";
          }
        }else{
            echo "<h2 style='text-align:center;color: #666;'>MySliders is empty.</h2>";
          }
         ?>
</div>
   </div>
   <div id="newslider">
     <h3>Would you like to add to your MySliders?<br> Fill out the information below!</h3>
     <div id="news">
       <h4> Example: http://images.google.com/apples.jpg</h4>
       <form action="<?php echo $_SERVER['PHP_SELF'];?>"  method="POST">
         <p><!--area for the email-->
           <label for="newslider">Image Address: </label>
           <input id="newslider" name="newslide" placeholder="Enter Image Address here:" type="text" width="100"><br>
         </p>
         <p><!--the submit button that will transmit the username and password to the login.php-->
           <input type="submit" name="addslider" value="    Add Image to MySliders!    ">
         </p>
       </form>
     </div>
   </div>
   <script>
      var myIndex = 0;
      carousel();
      //function that will allow the images change with animation every three seconds
      function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");//the tags with the class
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
          x[myIndex-1].style.display = "block";
          setTimeout(carousel, 3000); // Change image every 2 seconds
      }
    </script>
    <style>
    #newslider{
      text-align:center;
      color: #666;
    }
    input[type="text"] {
        width: 80%;
    }
    #news{
      background-color: #48d1cc;
      padding:10px;
      border-radius: 3px;
      margin:auto;
      width: 80%;
    }
      /*the images are hidden until they are called from the javascript*/
      .mySlides {display:none;
}
      .title{
        color: #666;
        text-align: center;
      }
body{
        background-color: #fefdfb;
    }
    </style>
  </body>
 </html>