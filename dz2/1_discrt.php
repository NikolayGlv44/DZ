<?php


function discrt($a, $b, $c) {
    return $b * $b - 4 * $a * $c;
}

$a = 1;
$b = 2;
$c = 0;

echo $d = discrt($a, $b, $c);

?><br><?php

if ($d > 0) {
    echo $x = (-$b + sqrt($d)) / (2*$a);
    ?><br><?php
    echo $x = (-$b - sqrt($d)) / (2*$a);
} elseif ($d == 0){
    echo $x = -$b / (2*$a);
} else {
    echo 'Нет корня';
}

?>


