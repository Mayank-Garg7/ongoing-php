<?php

    $servername = "localhost";   
    $username = "root";          
    $password = "";              
    $database = "Diploma";       
    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // SQL query to Insert data into table
    $sql = "INSERT INTO academicDetails (studentName, rollNumber, course, year)
    VALUES ('manav', '0203-CS-191326', 'DCS', '2023'),
    ('vivan', '0205-CS-191314', 'DCS', '2025'),
    ('rohan', '0203-CS-191234', 'DES', '2024')";

    // Execute the query
    $create = mysqli_query($conn, $sql);

    // Check if table is created successfully
    if ($create) {
        echo "Data has been inserted successfully";
    } else {
        echo "Error in inserting table: " . mysqli_error($conn);
    }

    // Close the connection
    mysqli_close($conn);
?>
