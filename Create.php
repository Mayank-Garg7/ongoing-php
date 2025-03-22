<?php 
// connecting to the Database we need three things that are
$servernmae = "localhost";
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


$sql = "CREATE DATABASE mayankDb";    
$result = MySQLi_query($conn, $sql);
if($result){
    echo "The db was created successfully";
}
else{
    echo "The db was not created successfully because of this error --> " . mysqli_error($conn);
}


?>