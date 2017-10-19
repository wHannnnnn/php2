<?php 
if(isset($_POST["yonghu"]) && strlen( trim( $_POST [ "yonghu" ] ) ) !=0 && isset( $_POST [ "mima" ] ) && strlen(trim($_POST["mima"]))!=0) {
   $y=$_POST["yonghu"];
   $m=$_POST["mima"];
} else {
	exit("aaaa");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h3><?php print_r($y) ?></h3>
	<h3><?php echo $m ?></h3>
</body>
</html>
