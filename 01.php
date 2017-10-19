<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>


<?php for($j=1;$j<10;$j++){?>
	<div class="a">
		<?php for($i=$j;$i<10;$i++){ ?>
		<span><?php printf("%d*%d=%d",$i,$j,$i*$j) ?></span>
        <?php } ?>
	</div>
<?php } ?>

</body>
</html>