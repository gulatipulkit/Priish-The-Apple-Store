<?php
session_start();
require 'config.php';
?>
<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <style>
         body{
             background-color: #777;
             background-image: url(sss.jpg);
         }
         .logbar{
             border: solid 2px black;
             border-radius: 10px;
             text-align-last: center;
             width: 40%;
             align-content: center;
            font-family: "Lato", sans-serif;
             margin: 10px;
             padding: 10px   
         }
    </style>
<title>LogIN</title>
    <body >
        <div >
        <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="p11.php" class="w3-bar-item w3-button">HOME</a>
  </div>
             </div>
        
            <div class="bgimg-1 w3-display-container w3-opacity-min" id="home"><br><br>
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity"><span class="w3-hide-small">PRIISH</span></span>
  </div>
<br>
</div>
<br>
        <div>
        <center>
            <form class="logbar" method="post" action="login.php"  style="background-color: gainsboro">
            <h1>Log in</h1>
            <img src="no_user_logo.jpeg " style="width: 150px; border-radius: 50px; align-content: center; margin: 10px; border:solid 1px"><br> 
           <b> Username </b>
            <input type="text" name="username" placeholder="Username" required><br><h6></h6>
           <b> Password. </b>
            <input type="password" name="pass" placeholder="Password" required><br><h6></h6>
            <input type="submit" value="Login"  style="width: 40%; color: white; background-color: black" name="login">
            <br>
            Havn't register till now..?<br><h6></h6><button type="button" style="width:40%; color: white; background-color: black" ><a href="signup.php">Sign up </a> </button>
            </form>
            </center>
        </div>
        
        <?php
         if(isset($_POST['login']))
    {
             $username=$_POST['username'];
             $password=$_POST['pass'];
             $query="select * from user WHERE username='$username'";
    $query_run=mysqli_query($con,$query);
             if(mysqli_num_rows($query_run)>0)
             {
                $_SESSION['username']=$username;
                header('location:homepage.php');
             }
             else
                {
                  echo '<script type="text/javascript">
        alert("invalid Credentials");
        </script>'; 
             }
             
        
         }
        
        
        ?>
       <br><br><br><br><br><br>
        <footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
            <h4>Social Connect</h4>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
      <a href="www.facebook.com"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>
    
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  
</footer>
        
    </body>
</html>