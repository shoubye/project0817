<?php

$fileDir = dirname ( __FILE__ );       //路徑
$fileResource = opendir ( $fileDir );  //開啟資料夾

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>

	<p>File list:</p>
	<ul>
	<?php while ($item = readdir($fileResource)) : ?>
		<li><?php echo $item; ?></li>
	<?php endwhile; ?>
	</ul>

<?php closedir($fileResource); ?>  <!-- 關檔 -->
</body>
</html>
