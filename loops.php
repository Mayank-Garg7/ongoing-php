<?php
    // Initialize variable $x with the value 1
    $x = 1;

    // Start a while loop that runs as long as $x is not equal to 5
    while($x != 5){
        // Generate a random number between 1 and 10 and assign it to $x
        $x = rand(1, 10);

        // Print the current value of $x followed by a line break
        echo "The value of x is $x<br>";
    }

    // The loop stops when $x becomes equal to 5
?>
