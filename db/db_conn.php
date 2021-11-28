<?php
    // For development
    // $host="localhost";
    // $user = "root";
    // $pass = "";
    // $db = "phpproject";

    // Remote database connection
    $host="remotemysql.com";
    $user = "oVdipl3Crx";
    $pass = "BxCIgGaNf6";
    $db = "oVdipl3Crx";

    $conn = mysqli_connect($host,$user,$pass,$db);

    if(!$conn){
        echo "Connection failed";
    }
?>