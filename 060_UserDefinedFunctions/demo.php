<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
  
   $x = 100;

   function haha(){    
   global $x ;  //宣告global才讀得到外面
   if(isset($x))
      {            
           echo $x;
      }
    else 
      {
          echo '$x not found 林蛤仔湯勒';
      }
   }
   haha();
?>


</body>
</html>