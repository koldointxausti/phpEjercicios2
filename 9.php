<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 9</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		function calcularArea($lado){
			if($lado < 0)
				throw new Exception ($lado." es negativo");
			else
				return pow($lado, 2);
		}

		$numeros = [];
		for($i = 0; $i < 4; $i++)
			array_push($numeros, random_int(0, 100));
		//el número negativo
		array_push($numeros, random_int(-100, -1));
		
		for($i = 0; $i < sizeof($numeros); $i++) 
			echo calcularArea($numeros[$i])."<br>";
	?>
</body>
</html>