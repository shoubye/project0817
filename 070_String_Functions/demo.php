<?php

$s = "1234567";

//從第三個位置取４個
$result = substr($s,3,4);   //3,4,5,6
echo $result;



//把12換成-
$result = str_replace("12","-",$s);  //0-34567
echo $result;



//找第2個    12的位置   
$s = "012345671289";
$pos = strpos($s ,"12" ,2)  //8


?>