<?php
// Step 1: Display current date with day of the month, full day name, and short day name
$a = date("d l D");  
// "d" = Day of the month (2 digits with leading zeros)
// "l" = Full name of the day (e.g., Monday)
// "D" = Short name of the day (e.g., Mon)
echo $a . "<br>";

// Step 2: Display formatted date with suffix, full month name, year, and full day name
$b = date("dS F Y l");  
// "dS" = Day of the month with ordinal suffix (e.g., 18th)
// "F" = Full month name (e.g., June)
// "Y" = 4-digit year (e.g., 2025)
// "l" = Full name of the day (e.g., Wednesday)
echo $b;
?>
