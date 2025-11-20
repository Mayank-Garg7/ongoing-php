<?php

    $servername = "localhost";   
    $username = "root";          
    $password = "";              
    $database = "Diploma";       

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // SQL query to delete data
    $sql = "DELETE FROM academicDetails WHERE studentName = 'aman'";

    // Execute the query
    $delete = mysqli_query($conn, $sql);

    // Check result
    if ($delete) {
        echo "Data has been deleted successfully";
    } else {
        echo "Error in deleting data: " . mysqli_error($conn);
    }

    // Close the connection
    mysqli_close($conn);
?>
