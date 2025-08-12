<?php
    // connecting to the trial database
    $conn = mysqli_connect("localhost", "root", "", "trial");

    $sql = "UPDATE registration SET `name` = 'vivan' WHERE `name` = 'raman'";
    $result = MySQLi_query($conn, $sql);
    if(!$result){
        die("sorry we failed to update: ".mysqli_error());
    }
    else{
        echo "We updated the data successfully <br> ";
    }
    $aff = mysqli_affected_rows($conn);
    echo "Number of affected row is: " . $aff;

?>