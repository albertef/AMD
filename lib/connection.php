<?php
    $servername = "localhost";
    $dbname = "amd_web_data";

    $username = "root";
    $password = "";

    // $username = "amd_user";
    // $password = "amd_pass_2019";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>