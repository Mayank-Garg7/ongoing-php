<?php
    // connecting to the trial database
    $conn = mysqli_connect("localhost", "root", "", "trial");
    if(!$conn){
        die("sorry we failed to connect: ".mysqli_connect_error());
    }
    else{
        echo "Connection was successful<br> ";
    }

    $sql = "DELETE FROM `registration` WHERE s_id = 4 LIMIT 2 ";
    // limit use for telling how many rows or record we want affect from the query we set the limit in select query also 
    $result = MySQLi_query($conn, $sql);

?>