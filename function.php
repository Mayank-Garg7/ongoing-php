<?php
    function swap(&$x, &$y){
        return $x*$y;
    }
    $a = 7;
    $b = 8;
    $c = swap($a, $b);
    echo $c;
?>