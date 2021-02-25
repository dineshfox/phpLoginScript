<?php

    //$link = mysqli_connect("shareddb1b.hosting.stackcp.net", "cl29-secretdi", "D-fnT^Hbz", "cl29-secretdi");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb1";

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
$link = mysqli_connect($servername, $username, $password, $dbname);
        
        if (mysqli_connect_error()) {
            
            die ("Database Connection Error");
            
        }else {
            // echo ("db connected");
        }

?>