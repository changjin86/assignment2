<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/styles.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

@font-face {
  font-family: foremanbold;
  src: url(fonts/Foreman-Bold.otf)format("opentype");
  font-weight: bold;
}


.navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
  font-family: foremanbold;
}

.navbar a:hover {
  background-color: #000;
}

.active {
  background-color: #4CAF50;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}

body{
    background-image: url('images/background.jpg');
    background-size:cover;
    background-repeat: repeat;
}
/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  border-radius:2px;
  color: white;
  padding: 8px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
  .signupbtn {
     width: 100%;
  }
}
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin-top: 20px;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}
.Welcometext{
  position: absolute;
  top:5%;
  left: 10%;
  font-family: foremanbold;
  font-size: 30px;
}
/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 2s;
  animation-name: fade;
  animation-duration: 1s;
  animation-timing-function: ease-in;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

.body-box{
  background:white;
  top: 45%;
  bottom: 1%;
  width:99.5%;
  right:5px;
  position: absolute;
  border:rgb(44, 43, 43);
  border-style: ridge;
}

/* Three columns side by side */
.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

/* Display the columns below each other instead of side by side on small screens */
@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

/* Add some shadows to create a card effect */
.card {
  background: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

/* Some left and right padding inside the container */
.container {
  padding: 0 16px;
}

/* Clear floats */
.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}


</style>
<body>


<div class="navbar">
    <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a> 

    <?php
      if(isset($_SESSION['USERID']))
      { 
        echo '<a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile Management</a>
        <a href="calculator.php"><i class="fa fa-fw fa-calculator"></i> Quote Calculator</a> 
        <a href="history.php"><i class="fa fa-fw fa-clipboard"></i> Fuel Quote History</a> ';
        echo '
        <div class= "sign-up">
        <a href="includes/logout.inc.php" class="button">Logout</a>
        </div>';

      }
      else{
        echo '
        <div class= "sign-up">
        <a href="signuppage.php" class="button">Sign Up</a>
        </div>
        <div class= "login">
        <a href="loginpage.php" class="button">Log In</a>
        </div>';
      }


    ?>
  
</div>

<?php
  if(isset($_GET["error"]))
  {
    if($_GET["error"]== "usernameExists")
    {
      echo "<p class='error'>Username Already Exists! Please Try Again!</p>";
    }
    else if($_GET["error"]== "pwdMatchFalse")
    {
      echo "<p class='error'>Passwords do not match! Please Try Again!</p>";
    }
    else if($_GET["error"]== "stmtFail")
    {
      echo "<p class='error'>Something went wrong try again! Please Try Again!</p>";
    }
    else if($_GET["error"]== "usernameDNE")
    {
      echo "<p class='error'>Username does not exist! Please Try Again!</p>";
    }
    else if($_GET["error"]== "WrongPassword")
    {
      echo "<p class='error'>Wrong Password! Please Try Again!</p>";
    }
    else if($_GET["error"]== "noErrorSignUpSuccessful")
    {
      echo "<p>Sign-up Successful!</p>";
    }
  }


?>

<?php
  if(isset($_GET["LoginSuccessful"]))
  {
      echo "<p class='error'>Successfully logged in! Welcome!</p>";
      echo "<p>" . $_SESSION['USERID'] . "</p>";
  }

  if(isset($_GET["updateSuccess"]))
  {
      echo "<p class='error'>Successfully Updated!</p>";
  }
  
  if(isset($_GET["quoteFilled"]))
  {
      echo "<p class='error'>Quote filled! Check History Tab!</p>";
  }

?>
