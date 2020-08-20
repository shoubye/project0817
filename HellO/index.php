<?php

session_start();
//  var_dump($_POST);  //把一個陣列,物件show出來
if (isset($_POST["botOK"])) {  //判斷是否第一次
$_SESSION["who"] = $_POST["txtUserName"];
header("Location: hello.php");   //告訴瀏覽器新的位置,見到location要跳轉到新 的目標
exit();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <!-- 一開始看到的表單 -->
    <form method = "post" action = "">     
    Your name: <input type = "text" name = "txtUserName"> 
    <input type = "submit" name = "botOK" value = "OK">    

    </form>
</body>
</html>