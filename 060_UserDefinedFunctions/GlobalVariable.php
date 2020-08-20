<?php
$a = 20;
function myFunction($b) {
	//echo "a = $a<br>";
	$a = 30;
	//echo "a = $a<br>";
	global $a, $c;           //讀到外面的＄a
	//echo "a = $a<br>";
	return $c = ($b + $a);   //40+20 = 60
}
// 請預測答案是多少?
echo myFunction(40) + $c;  //return回傳$c的值  60 + 60 = 120
?>