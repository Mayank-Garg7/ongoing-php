<?php 
    $servernmae = "localhost";
    $username = "root";
    $password = "";
    $conn = MySQLi_connect($servernmae, $username, $password);

    
    if(!$conn){
        die("sorry we failed to connect: ".mysqli_connect_error());
    }
    else{
        echo "Connection was successful";
    }
    $sql = "CREATE DATABASE mayankDb";    
    $result = MySQLi_query($conn, $sql);


    if($result){
        echo "The db was created successfully";
    }
    else{
        echo "The db was not created successfully because of this error --> " . mysqli_error($conn);
    }
?>