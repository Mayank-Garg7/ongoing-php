<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
</head>

<body>

    <!-- HTML Form using GET method -->
    <form method="get">
        <!-- Input field for user name -->
        <input type="text" name="user_name" placeholder="Mayank">

        <!-- Input field for password -->
        <input type="password" name="password" placeholder="*******">

        <!-- Submit button -->
        <button type="submit">Submit</button>
    </form>

</body>

</html>

<?php 
// Check if the form is submitted using GET method
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Retrieve user input from URL parameters
    $name = $_GET['user_name'];
    $pass = $_GET['password'];

    // Check if name field is empty
    if (empty($name)) {
        // Display error message if name is empty
        echo "Name is empty";
    } else {
        // Display the user name and password
        echo $name;              // Show user name
        echo "<br>" . $pass;     // Show password on next line (not recommended in real apps)
    }
}
?>
