<?php
// $yh=$_GET["yh"];
// $mm=$_GET["mm"];
// 
// isset($xz)结果不为空
if ( isset( $_GET [ "yh" ] ) && strlen(trim( $_GET [ "yh" ] ) ) !=0 && isset( $_GET[ "mm" ] ) && strlen( trim( $_GET[ "mm" ] ) )!=0 ){
	$yh=$_GET["yh"];
	$mm=$_GET["mm"];
}else {
	exit("xxxxxxx");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h3><?php printf($yh) ?></h3>
	<h3><?php echo $mm ?></h3>
</body>
</html>