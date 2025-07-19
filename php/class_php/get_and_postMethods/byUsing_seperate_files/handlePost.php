<?php 

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve 'user_name' and 'password' from the POST request
    $name = $_POST['user_name'];
    $pass = $_POST['password'];
}

// Check if the 'name' field is empty
if (empty($name)) {
    // If the name is empty, show a message
    echo "Name is empty";
} else {
    // If the name is not empty, display the name and password
    echo $name;              // Display the entered user name
    echo "<br>" . $pass;     // Display the entered password on the next line
}

?>
