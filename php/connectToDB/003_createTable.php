<?php

    $servername = "localhost";   
    $username = "root";          
    $password = "";              
    $database = "Diploma";       
    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // SQL query to create table (with columns)
    $sql = "CREATE TABLE academicDetails (
                id INT(11) AUTO_INCREMENT PRIMARY KEY,
                studentName VARCHAR(10),
                rollNumber VARCHAR(15),
                course VARCHAR(10),
                year INT(4)
            )";

    // Execute the query
    $create = mysqli_query($conn, $sql);

    // Check if table is created successfully
    if ($create) {
        echo "Table 'academicDetails' created successfully!";
    } else {
        echo "Error in creating table: " . mysqli_error($conn);
    }

    // Close the connection
    mysqli_close($conn);
?>
