<?php 
    // Step 1: Print a welcome message
    echo "Welcome to the stage where we are ready to get connected to a database <br>";

    // Step 2: Define MySQL server connection parameters
    $servernmae = "localhost";   // The server name (usually 'localhost' for local server)
    $username = "root";          // The username to access MySQL (default is 'root' for XAMPP/WAMP)
    $password = "";              // Password for MySQL (empty by default for local server)

    // Step 3: Attempt to establish a connection to MySQL server using MySQLi
    $conn = MySQLi_connect($servernmae, $username, $password);

    // Step 4: Check if the connection was successful
    if(!$conn){
        // If connection failed, display an error and stop script execution
        die("Sorry, we failed to connect: " . mysqli_connect_error());
    }
    else{
        // If connection was successful, print success message
        echo "Connection was successful";
    }
?>
