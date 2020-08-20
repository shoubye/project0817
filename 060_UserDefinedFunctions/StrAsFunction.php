<?php

function test($i) {
	return $i + 1;
}

function test10($i) {
	return $i + 10;
}

$x = 2;
$p = "test";
echo $p($x);

$x = 3;
$p = "test10";
echo $p($x);

?>