<?php
    // include  the configuration file
    require_once('config.php');
    // connect to database
   $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

    //   check the status of the connection

    if($conn){
        // echo "Connected to db" . "<br>";
    }else{
        echo "ERROR " . mysqli_connect_error();
    }
?>