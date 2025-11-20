<?php

    $servername = "localhost";   
    $username = "root";          
    $password = "";              
    $database = "Diploma";       
    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // SQL query to Update data in same table
    $sql = "UPDATE academicDetails SET studentName = 'aman'  WHERE rollNumber = '0205-CS-191314'";

    // Execute the query
    $create = mysqli_query($conn, $sql);

    // Check if table is created successfully
    if ($create) {
        echo "Data has been updated successfully";
    } else {
        echo "Error in updating table: " . mysqli_error($conn);
    }

    // Close the connection
    mysqli_close($conn);
?>
