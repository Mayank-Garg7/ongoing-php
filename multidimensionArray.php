<?php
// Define a 4-dimensional array named $favColor
$favColor = array(
    array( // First layer (0th index)
        array( // Second layer (0th index of 0th)
            array(1, 2, 3),     // Third layer (0th index of 0th of 0th)
            array(4, 5, 6)      // Third layer (1st index of 0th of 0th)
        ),
        array( // Second layer (1st index of 0th)
            array(7, 8, 9),
            array(1, 5, 7)
        )
    ),
    array( // First layer (1st index)
        array(
            array(7, 8, 9),
            array(1, 5, 7)
        ),
        array(
            array(1, 2, 3),
            array(4, 5, 6)
        )
    )
);

// Using nested for loops to traverse and print the values of the 4D array

for ($i = 0; $i < count($favColor); $i++) { // Loop through the 1st dimension
    for ($j = 0; $j < count($favColor[$i]); $j++) { // Loop through the 2nd dimension
        for ($k = 0; $k < count($favColor[$i][$j]); $k++) { // Loop through the 3rd dimension
            for ($l = 0; $l < count($favColor[$i][$j][$k]); $l++) { // Loop through the 4th dimension (actual values)
                
                // Print each element of the innermost array followed by a space
                echo $favColor[$i][$j][$k][$l] . " ";
            }

            // Line break after each innermost array
            echo "<br>";
        }

        // Extra line break after finishing one 3rd-level array
        echo "<br><br>";
    }

    // Extra line breaks after finishing one 2nd-level array
    echo "<br><br><br>";
}
?>
