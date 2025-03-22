<?php 
echo "welcome to the stage where we are ready to get connected to a database <br>";
/* 
    ways to connect to a mySQL Database
    1. MySQLi Extension
    2. PDO
*/
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


?>