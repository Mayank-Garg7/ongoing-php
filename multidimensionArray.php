<?php
$favColor = array(
                array(
                    array(
                        array(1,2,3),
                        array(4,5,6)
                    ),
                    array(
                        array(7,8,9),
                        array(1,5,7)
                    ),
                ),
                array(
                    array(
                        array(7,8,9),
                        array(1,5,7)
                    ),
                    array(
                        array(1,2,3),
                        array(4,5,6)
                    ),
                )
            );
// foreach ($favColor as $a) {
//     foreach ($a as $b) {
//         foreach ($b as $c) {
//             foreach ($c as $d) {
//                echo $d." ";
//             }
//             echo "<br>";
//         }
//         echo "<br><br>";
//     }
//     echo "<br><br><br>";
// }

for ($i=0; $i < count($favColor); $i++) { 
    for ($j=0; $j < count($favColor[$i]); $j++) { 
        for ($k=0; $k < count($favColor[$i][$j]); $k++) { 
            for ($l=0; $l < count($favColor[$i][$j][$k]); $l++) { 
                echo $favColor[$i][$j][$k][$l]." ";
            }
            echo "<br>";
        }
        echo "<br><br>";
    }
    echo "<br><br><br>";
}
?>