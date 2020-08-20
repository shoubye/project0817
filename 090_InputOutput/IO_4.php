<?php
header("content-type: text/html; charset=utf-8");

$lines = file ( 'data.txt' );  //呼叫file這個方法，得到一個檔名，獲得一個陣列
foreach ( $lines as $line_num => $line ) {
	echo "#<i>$line_num</i> : " . 
		 htmlspecialchars ( $line ) . "<br />\n";
}

?> 