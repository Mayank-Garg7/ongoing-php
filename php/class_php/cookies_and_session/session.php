<!-- In PHP, a session is a mechanism for storing user-specific information across multiple web pages, allowing you to maintain state and track data during a user's visit. -->

<?php
    // What is session?
    // Used to manage information across different pages.


    // Verify the user login information
    session_start();

    $_SESSION['username'] = "mayank";
    $_SESSION['favCat'] = "books";
    echo "hello it is started here";
?>

