<?php
    //connection
    $conn = new mysqli("localhost","root","","project264") or die(mysql_error);
    
    //check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>