<?php
  header("content-type: text/html; charset=utf-8");
  $s = '許功蓋'; //一個中文字佔３個byte
  echo $s."<br>";
  echo strlen($s);//９
  
?>