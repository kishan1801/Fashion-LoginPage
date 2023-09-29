<?php

    $sname = "localhost";
    $db_root = "root";
    $password = "";

    $db_name = "test_db";

    $conn = mysqli_connect($sname,$db_root,$password,$db_name);

    if(!$conn){
        echo "Connection Failed.";
    }