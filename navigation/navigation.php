<?php
  $mysqli=mysqli_connect("localhost", "id319703_agonzalez26", "MyAboutME123", "id319703_company");
  if($mysqli-> connect_errno){//checks if there is an error
    printf("ERROR");
  }
  $user = $_SESSION['user'];
?>
<html>
<head>
<!--all the style comes from the link but it did not work when i uploaded it-->
<link rel="stylesheet" type="text/css" href="../stylesheet/style.css">
</head>
  <body>
    <nav class="w3-sidenav w3-white w3-card-2" style="display:none" id="mySidenav">
      <!--button that closes the navigation-->
      <a href="javascript:void(0)" onclick="w3_close()" class="w3-closenav w3-large">Close &times;</a>
      <!--links to the other pages-->
      <a <?php
          if($user == 'admin'){
             echo 'href="adminprofile.php">';
          }else{
            echo 'href="profile.php">';
      }?>
        <?php
          if($user == 'admin'){
            echo "MyAdminProfile";
          }else{
            echo "MyProfile";
      }?></a>
      <?php
      $sql = "SELECT * FROM navigation";
      $result = $mysqli->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "".$row["links"]. "     " . "    ";
        }
      }  ?>
    </nav>
    <div id="main">
      <header class="w3-container">
        <!--button that opens the navigation-->
        <span class="w3-opennav w3-xlarge" onclick="w3_open()" id="openNav">&#9776;</span>
        <h1 class="title" style="text-align:center;">MyAboutME</h1>
      </header>
    </div>
    <script>
      //function that opens the navigation bar on the side
      function w3_open() {
        document.getElementById("main").style.marginLeft = "25%";
        document.getElementById("mySidenav").style.width = "25%";
        document.getElementById("mySidenav").style.display = "block";
        document.getElementById("openNav").style.display = 'none';
      }
      //function that closes the navigation bar on the side
      function w3_close() {
        document.getElementById("main").style.marginLeft = "0%";
        document.getElementById("mySidenav").style.display = "none";
        document.getElementById("openNav").style.display = "inline-block";
      }
    </script>
    <style>
body{
        background-color: #fefdfb;
    }
      .title{
        color: #666;
      }
      .w3-container{
        background-color:#48d1cc;
      }

    </style>
  </body>
</html>