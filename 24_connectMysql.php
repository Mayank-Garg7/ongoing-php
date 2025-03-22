<?php 
echo "welcome to the stage where we are ready to get connected to a database <br>";
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


?>