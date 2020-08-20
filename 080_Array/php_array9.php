<?php

//1,2,3,5,6
//$a - $b 由低到高
function cmp($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}



//1,2,3,5,6
//跟上面的意思相等（$a - $b 由低到高）
// function cmp($a, $b)
// {
//    return $a - $b;
// }



//6,5,3,2,1
//$b - $a 由高到低
// function cmp($a, $b)
// {
//    return $b - $a;
// }


$a = array(3, 2, 5, 6, 1);
usort($a, "cmp");

//1,2,3,5,6
foreach ($a as $key => $value) {
    echo "$key: $value <br>";
}

?>