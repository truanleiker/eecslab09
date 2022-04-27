<?php

function product($x, $y) {
    $z = $x * $y;
    return $z;
}

echo "<table>";

for ($i = 0; $i < 101; $i++) {

    echo "<tr>";

    for ($j = 0; $j < 101; $j++) {
    
        if ($i == 0) {
            if ($j == 0) {
                echo "<th> </th>";
            }
            else {
                echo "<th>" . $j . "</th>";
            }
        }
        else {
            if ($j == 0) {
                echo "<th>" . $i . "</th>";
            }
            else {
                echo "<td>" . product($i, $j) . "</td>";
            }
        }
    }

    echo "</tr>";
}

echo "</table>";
?>