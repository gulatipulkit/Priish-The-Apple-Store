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
       
            <form  class="logbar" action="signup.php" method="post"  style="background-color: gainsboro">
                <h1>Resigtration Form</h1>
                <img src="no_user_logo.jpeg " style="width: 150px; border-radius: 50px; align-content: center; margin: 10px;"><br> 
            <b style="text-align-last: left;">Full name:</b><br>
            <input type="text" name="fullname" placeholder="Enter your Full name" required><br>
            <b>Gender</b><br>
            Male
            <input type="radio" name="gender" value="male" checked >
                Female
            <input type="radio" name="gender" value="female" >
                <br>
           <b>Username</b><br>
            <input type="text" name="username" placeholder="Username" required><br><h6></h6>
           <b> Password </b><br>
            <input type="password" name="password" placeholder="Password" required><br><h6></h6>
           <b>Confirm Password</b><br>
            <input type="password" name="cpassword" placeholder="Confirm Password" required><br><h6></h6>
           
            <input type="submit" value="REGISTER" name="submitb" style="width=50%;color: white; background-color: black">
                <br><b>Already Registered..?</b><br>
                <button type="button" style="width=50%;color: white; background-color: black"><a href="login.php">LogIn</a></button>
                
            </form>
            </div>

        
        <?php
    if(isset($_POST['submitb']))
    {
       /*echo ' <script type="text/javascript">
        alert("sign up buttom clicked");
        </script>';*/
        
         $fullname=$_POST['fullname'];
         $gender=$_POST['gender'];
         $username=$_POST['username'];
         $password=$_POST['password'];
         $cpassword=$_POST['cpassword'];
            if($password==$cpassword)  
            {
                $query="select * from user WHERE username='$username'";
                $query_run=mysqli_query($con,$query);
                
     if(mysqli_num_rows($query_run)>0)
                {
                 echo '<script type="text/javascript">
        alert("username already exits..try again");
        </script>';                       
                    
                }
                else
              {
                       $query="insert into user values('$username','$password','$fullname','$gender')";
               
               $query_run=mysqli_query($con,$query);
    if($query_run)
    {
     
        echo '<script type="text/javascript">
        alert("Please verify OTP");
        </script>';  
        header('location:otp.php'); 
    }
    else
    {   
        /*echo '<script type="text/javascript">
        alert("error");
        </script>'; */     
    }
                }
            }
        else
        {
            echo '<script type="text/javascript">
        alert("Password and confirm password doesnot match!!!");
        </script>'; 
        }
    }     
    ?>
        
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

