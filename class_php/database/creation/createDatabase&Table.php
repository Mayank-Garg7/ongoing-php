<?php
    // connecting to the mysql
    $conn = mysqli_connect("localhost", "root", "");

    // creating database here
    $sql = "CREATE DATABASE trial";

    // executing the sql query
    $result = mysqli_query($conn, $sql);

    // Die if table is not created
    if(!$result){
        die("sorry we failed to create table: ".mysqli_connect_error());
    }
    else{
        echo "Connection was successful";
    }

    // creating table 
    $sql2 = "CREATE TABLE registration ('s_id' int(8) NOT NULL, 'name' varchar(20) NOT NULL, 'email' varchar(50) NOT NULL, PRIMARY KEY('s_id'))";

    // executing the sql query
    $result = mysqli_query($conn, $sql2);
?>