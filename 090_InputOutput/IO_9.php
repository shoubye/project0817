<?php
//告訴瀏覽器  網頁內容的類型
header("Content-Type: image/png");

$filename = "cc.png";
$fileHandle = fopen($filename, "rb");   //開檔案
echo fread($fileHandle, filesize($filename)); //讀檔案的檔案大小
fclose($filename);

?>