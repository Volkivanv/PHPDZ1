<?php
$a = 1;
$b = 2;
var_dump($a, $b);

$a = $a - $b;
$b = $b + $a;
$a = $b - $a;

var_dump($a, $b);

// docker run --rm -v ${pwd}:/cli php:8.2-cli php /cli/lectureDZ2.php 