<?php
    $servername = "localhost";
    $dbname = "amd_web_data";

    $username = "root";
    $password = "";

    // $username = "eei_user";
    // $password = "eei_password@123";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>