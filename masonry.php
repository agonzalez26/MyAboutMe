<?php
//includes page that detects if the database is connected
include 'session.php';
$user = $_SESSION['user'];//assigns the current session as the user of the filesystem
include './navigation/navigation.php';
if (isset($_POST['additem'])) {//grabs the information when form submitted
   $newitem = mysqli_real_escape_string($mysqli, $_POST['newi']);
   $newi = "INSERT INTO masonry(item, username) VALUES ('$newitem', '$user')";
   mysqli_query($mysqli, $newi);


}
 ?>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="./stylesheet/style.css">
	<title>MyMasonry</title>
</style>
</head>
<body style=" background-color: #fefdfb;">
	<div class="wrapper">
	<div class="wrapper">
    <!--introduction to the AboutME-->
	<div class="title">
		<h1>Welcome to <span style="color:#48d1cc;">AboutME,</span> <?php echo $login_session; ?>!</h1>
		<h1>MyMasonry contains everything I like.</h1>
  </div>
    <!--displays the masonry depending on the user-->
	<div class="masonry" align:"center" style="text-align:center;">
      <?php
      $items = "SELECT * FROM masonry WHERE username='$user'";
      $res = $mysqli->query($items);
      if($res->num_rows>0){
        while($row=$res->fetch_assoc()){
            echo "<div class='item'>" . $row['item']. "</div>";

        }
      }else{
          echo "<h3 style='text-align:center;color: #666;'>MyMasonry is empty.</h3>";
        }
       ?>
     </div>
     <div id="newmasonry">
       <h3>Would you like to add to your MyMasonry?<br> Fill out the information below!</h3>
       <div id="new">
         <h4> Example: tag src="pictursdfasdfsadfsdaf.extension"</h4>
         <form action="<?php echo $_SERVER['PHP_SELF'];?>"  method="POST">
           <p><!--area for the email-->
             <label for="newi">Address(including html tag): </label>
             <input id="newi" name="newi" placeholder="Enter address(including html tag):" type="text" width="100"><br>
           </p>
           <p><!--the submit button that will transmit the username and password to the login.php-->
             <input type="submit" name="additem" value="    Add Item to MyMasonry!    ">
           </p>
         </form>
       </div>
     </div>
   </div>
 </div>

<style>
#newmasonry{
  text-align:center;
  color: #666;
}
input[type="text"] {
    width: 80%;
}
body{
        background-color: #fefdfb;
    }
#new{
  background-color: #48d1cc;
  padding:10px;
  border-radius: 3px;
  margin:auto;
  width: 80%;
}
.item h1,h2,h3,h4,h5,h6,a,img{
	text-align: center;
}
#profilemain{
	text-align:center;
}
#logout,#logout a{
	margin:auto;
	text-decoration: none;
	text-align: center;
	text-transform: uppercase;
}
#logout{
	margin: 5px;
	font-size: 20px;
}
body {
    font: 1em/1.67 Arial, Sans-serif;
    margin: 0;
    background: #e9e9e9;
}
img, iframe {
max-width: 100%;
height: auto;
display: block;
}
.wrapper {
    width: 95%;
    margin: 1.5em auto;
}
.masonry {
    margin: 1.5em 0;
    padding: 0;
    -moz-column-gap: 1.5em;
    -webkit-column-gap: 1.5em;
    column-gap: 1.5em;
    font-size: .85em;
}
.item {
    display: inline-block;
    background: #fff;
    padding: 1.5em;
    margin: 0 0 1.5em;
    width: 100%;
		box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.18);
    border-radius: 3px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
}

.title {
	color: #666;
font-size: 1.75em;
margin: .25em 0;
text-align: center;
}
.title a {
display: inline-block;
padding: .75em 1.25em;
color: #888;
border: 2px solid #aaa;
margin: .25em 1em 1em;
text-decoration: none;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
-ms-border-radius: 3px;
-o-border-radius: 3px;
}

.title a:hover {
color: #666;
border-color: #888;
}
.share-link,
.article-link {
color: #888;
}
@media only screen and (min-width: 700px) {
    .masonry {
        -moz-column-count: 2;
        -webkit-column-count: 2;
        column-count: 2;
    }
}
@media only screen and (min-width: 900px) {
    .masonry {
        -moz-column-count: 3;
        -webkit-column-count: 3;
        column-count: 3;
    }
}
@media only screen and (min-width: 1100px) {
    .masonry {
        -moz-column-count: 4;
        -webkit-column-count: 4;
        column-count: 4;
    }
}
@media only screen and (min-width: 1280px) {
    .wrapper {
        width: 1260px;
    }
}</style>
</body>
</html>
<!--http://w3bits.com/demo/css-masonry/-->