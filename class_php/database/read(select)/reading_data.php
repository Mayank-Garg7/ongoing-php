<?php
    // connecting to the trial database
    $conn = mysqli_connect("localhost", "root", "", "trial");

    // creating database here
    $sql = "SELECT * FROM trial WHERE s_id = 2";

    // executing the sql query
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num >= 0){
        while($row = mysqli_fetch_assoc($result)){
            echo $row['s_id'] .". Hello <strong>" . $row['name'] . "</strong>, Your e-mail is " . $row['email'] . " Are you fine.<br>";

        }
    }

?>