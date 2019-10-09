<?php
require 'config.php';
?>
<!DOCTYPE html>
<html>
     <style>
         body{
             background-color: #777;
         }
    
         .logbar{
             border: solid 1px black;
             border-radius: 7px;
             text-align-last: center;
             width: 25%;
             margin: 10px;
             padding: 10px;
             
             font-family: "Lato", sans-serif;
             
         }
         #iid{
             text-align: left;
         }
    
    </style>
<title>Register</title>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <body style="background-image: url(f11.jpg); background-size: cover; ">
        <div>
            <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="p11.php
             " class="w3-bar-item w3-button" >HOME</a>
    <a href="login.html" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red">
      <i>LOG IN</i>
    </a>
                </div>
                <br>
                <br>
            <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity"><span class="w3-hide-small">PRIISH</span></span>
  </div>
<br>
</div>
<br>
        </div>
        <div>
       <center>
            <form  class="logbar" role="form" enctype="multipart/form-data" method="post"  style="background-color: gainsboro">
                <h1>Resigtration Form</h1>
                <img src="no_user_logo.jpeg " style="width: 150px; border-radius: 50px; align-content: center; margin: 10px;"><br> 
             
            <b>Mobile Number</b>
            <input  type="text" name="phone"><br><h3></h3>
            
            <button  type="submit" name="sendotp" style="width=50%;color: white; background-color: black" >Send OTP</button><br>
            
            <b>Enter OPT</b>
           <input type="text" name="otp" style="width=50%;color: white; background-color: black"><br>  
            
            <button type="submit" name="verify" style="width=50%;color: white; background-color: black">Verify</button>
           </form>
              </center>
            </div>
        
<?php
if(isset($_POST['sendotp']))
{
require('textlocal.class.php');
require('cre.php');
$textlocal = new Textlocal(false,false,API_KEY);

$numbers = array($_POST['phone']);
$sender = 'TXTLCL';
$otp=mt_rand(10000,70000);
$message = " Hello,Your OTP is".$otp;

try 
{
    $result = $textlocal->sendSms($numbers, $message, $sender);
    setcookie('otp',$otp);
    echo "OPT successgully send...";
    
} catch (Exception $e) 
{
    die('Error: ' . $e->getMessage());
}
}
        
        if(isset($_POST['verify']))
        {
            
            $otp=$_POST['otp'];
            if($_COOKIE['otp']==$otp)
            {
                 echo '<script type="text/javascript">
        alert("Succesfully Registered,Please Log in")';
               header('location:login.php'); 
            }
            
        }
        
?>       
        <br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  
</footer>
            
        
    </body>
</html>

