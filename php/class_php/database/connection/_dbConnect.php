<?php
    $servernmae = "localhost"; // It is also know as hostname
    $username = "root";
    $password = "";

    // create a connection
    $conn = MySQLi_connect($servernmae, $username, $password);

    // Die if connection was not successful
    if(!$conn){
        die("sorry we failed to connect: ".mysqli_connect_error());
    }
    else{
        echo "Connection was successful";
    }
?>