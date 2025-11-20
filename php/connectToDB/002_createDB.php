<?php
    //Database connection details
    $servername = "localhost";  // Server where MySQL is running
    $username = "root";         // MySQL username
    $password = "";             // MySQL password (empty for XAMPP/WAMP)

    // Create connection to MySQL server
    $conn = mysqli_connect($servername, $username, $password);

    // Check if connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // SQL query to create a new database named 'Diploma'
    $sql = "CREATE DATABASE Diploma";

    // Execute the query
    $create = mysqli_query($conn, $sql);

    // Check if database is created successfully
    if ($create) {
        echo "Database 'Diploma' created successfully!";
    } else {
        echo "Error in creating database: " . mysqli_error($conn);
    }

?>
