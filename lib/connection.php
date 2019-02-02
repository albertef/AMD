<?php
    $servername = "localhost";
    $dbname = "amd_web_data";
    //$dbname = "amdeduin_web_data";

    $username = "root";
    $password = "";

    // Vibrant Angle
    // $username = "amd_user";
    // $password = "amd_pass_2019";

    // AMD EDU
    // $username = "amdeduin_web_19";
    // $password = "amdeduin_pass_2019";
    
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>