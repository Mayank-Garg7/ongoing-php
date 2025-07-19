<?php

// Check if the request method is GET
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Retrieve 'user_name' and 'password' from the GET request
    $name = $_GET['user_name'];
    $pass = $_GET['password'];
}

// Check if the 'name' variable is empty
if (empty($name)) {
    // If name is empty, display a message
    echo "Name is empty";
} else {
    // If name is not empty, display the name and password
    echo $name;
    echo "<br>" . $pass;
}

?>
