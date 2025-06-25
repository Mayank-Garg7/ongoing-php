<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple POST Form</title>
</head>

<body>

    <!-- 
        HTML Form using POST method.
        This form will send the data to the same file when submitted.
        action="handleForm.php" is commented out; by default, form submits to the same page.
    -->
    <form method="post">
        <!-- Input field to enter user name -->
        <input type="text" name="user_name" placeholder="Mayank">

        <!-- Input field to enter password -->
        <input type="password" name="password" placeholder="*******">

        <!-- Submit button -->
        <button type="submit">Submit</button>
    </form>

</body>

</html>

<?php 
// Check if the request method is POST (form submitted)
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve user input from the POST request
    $name = $_POST['user_name'];
    $pass = $_POST['password'];

    // Check if the user_name field is empty
    if (empty($name)) {
        // Display error message if name is empty
        echo "Name is empty";
    } else {
        // Display the user name and password (not recommended to show passwords publicly)
        echo $name;              // Output the entered name
        echo "<br>" . $pass;     // Output the password on the next line
    }
}
?>
