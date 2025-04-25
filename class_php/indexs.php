<?php
$a = "hallo i am here";
$c = "i";
$b = "HOW ARE YOU THERE";

// echo strtolower($b)."<br>";
// echo strtoupper($a)."<br>";
// echo ucfirst($a)."<br>";
// echo lcfirst($b)."<br>";
// echo strcmp("hello","Hello this is here")."\n";
// echo ord('h')." = ".ord("H")."\n";
echo strrev($a)."<br>";
echo strlen($b)."<br>";

echo substr($a,0,9)."<br>";
echo strtok($a, $c)."<br>";

echo substr_replace($a, "this is ", 8, 0)."<br>";
print_r(str_split($a, 3))."<br>";





?>