<?php
header("content-type: text/html; charset=utf-8");

$season = array('春', '夏', '秋', '冬'); 

echo "每年的四季分別為：";

foreach ($season as $value){
	echo "<br>".$value ;

// foreach ($season as $key => $value){
// 	echo "<br>".$value ;

}

?>