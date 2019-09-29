<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 3</title>
	<meta charset="utf-8">
	<style type="text/css">
		body{
			font-size: 24px;
		}
	</style>
</head>
<body>
	<?php
		$randomNumbers = [];
		for ($i = 0; $i < 20; $i++){
			array_push($randomNumbers, rand(0,300));
			echo $randomNumbers[$i].' ';
		}
		sort($randomNumbers);
		echo '<br>';
		for ($i = 0; $i < sizeof($randomNumbers); $i++){
			if($i == 0)
				echo '<span style="color:blue;font-weight:bold">'.$randomNumbers[$i].'</span> ';
			else if($i == sizeof($randomNumbers)-1)
				echo '<span style="color:green;font-weight:bold">'.$randomNumbers[$i].'</span> ';
			else
				echo $randomNumbers[$i].' ';
		}
		echo '<br>Suma: '.array_sum($randomNumbers);
		echo '<br>Promedio: '.array_sum($randomNumbers)/sizeof($randomNumbers);
	?>
</body>
</html>