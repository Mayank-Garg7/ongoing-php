<?php 
    // Step 1: Define connection parameters
    $servernmae = "localhost";   // Name of the server where MySQL is hosted
    $username = "root";          // MySQL username (default is 'root' for XAMPP/WAMP)
    $password = "";              // MySQL password (empty by default in XAMPP/WAMP)

    // Step 2: Create a connection to the MySQL server
    $conn = MySQLi_connect($servernmae, $username, $password);

    // Step 3: Check if the connection was successful
    if(!$conn){
        // If the connection failed, show an error message and stop further execution
        die("Sorry, we failed to connect: " . mysqli_connect_error());
    }
    else{
        // If the connection is successful, display a success message
        echo "Connection was successful<br>";
    }

    // Step 4: Write SQL query to create a new database
    $sql = "CREATE DATABASE mayankDb";    

    // Step 5: Execute the SQL query
    $result = MySQLi_query($conn, $sql);

    // Step 6: Check if the database was created successfully
    if($result){
        echo "The database was created successfully";
    }
    else{
        // If the database creation failed, show the error returned by MySQL
        echo "The database was not created successfully because of this error --> " . mysqli_error($conn);
    }
?>
