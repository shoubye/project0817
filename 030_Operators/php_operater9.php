<?php

$x = 100;
$y = &$x;

$y = 300;
echo "x = $x </br>";

unset($x);
echo "y = $y </br>";

?>