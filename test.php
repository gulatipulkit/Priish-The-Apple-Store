


<?php

$con=mysqli_connect("localhost","root","") or die("unable to connect");
mysqli_select_db($con,'login');

$querym="insert into otp values('234565691','898911')";
    $query_run=mysqli_query($con,$querym);


$sql = "SELECT otp FROM otp WHERE mobile='234565691'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $row = mysqli_fetch_assoc($result);
    if($row["otp"]=="898911"){
        echo "success";
    
    }
} else {
    echo "0 results";
}


?> 