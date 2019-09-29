<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio 1</title>
</head>
<body>
	<?php
		$naturales = [];
		for($i = 0 ; $i < 10 ;$i++){
			array_push($naturales,$i);
		}
		$factoriales = [];
		for ($i = 0; $i < $naturales.length; $i = $i + 1) { 
			for ($j = 1; $j <= $naturales[$i] ; $j = $j + 1)
				$factoriales[$i] *= $j;
			echo $factoriales;
		}
	?>
</body>
</html>