<!-- Before running any of the php file must read the reference.md file first  -->
<?php 
    echo "welcome to the stage where we are ready to get connected to a database <br>";
    /* 
        ways to connect to a mySQL Database
        1. MySQLi Extension
        2. PDO
    */
    // connecting to the Database we need three things that are
    //Database connection details
    $servername = "localhost";  // Server where MySQL is running
    $username = "root";         // MySQL username
    $password = "";             // MySQL password (empty for XAMPP/WAMP)

    // create a connection
    $conn = MySQLi_connect($servername, $username, $password);

    // Die if connection was not successful
    if(!$conn){
        die("sorry we failed to connect: ".mysqli_connect_error());
    }
    else{
        echo "Connection was successful";
    }

?>