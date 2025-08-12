<?php
    // Step 1: Define a string variable
    $name = "this is my simple string";

    // Step 2: Print the string
    print $name;
    print "<br>";  // Line break in HTML

    // Step 3: Print the length of the string using strlen()
    echo "The length of " . "my string is : " . strlen($name);
    print "<br>";

    // Step 4: Count the number of words in the string using str_word_count()
    echo str_word_count($name);
    print "<br>";

    // Step 5: Reverse the string using strrev()
    echo strrev($name);
    print "<br>";

    // Step 6: Find the position of the first occurrence of the substring " is" using strpos()
    echo strpos($name, " is");
    print "<br>";

    // Step 7: Replace the word "string" with "sequence of characters" using str_replace()
    echo str_replace("string", "sequence of characters", $name);
    print "<br>";

    // Step 8: Repeat the string 4 times using str_repeat()
    echo str_repeat($name, 4);
    print "<br>";

    // Step 9: Remove whitespace from the left side of the string using ltrim()
    echo ltrim("    this text is trimmed from left side");
    print "<br>";

    // Step 10: Remove whitespace from the right side of the string using rtrim()
    echo rtrim("this text is trimmed from right side    ");
?>
