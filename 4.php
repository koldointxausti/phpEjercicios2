<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 4</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		$frase = "manzana pera limón sandía melón";
		$palabras = [];
		$divisor = explode(' ', $frase);
		for ($i = 0; $i < count($divisor); $i++){
			$palabras[$divisor[$i]] = strlen($divisor[$i]);
			echo $palabras[$divisor[$i]].'<br>';
		}
	?>
</body>
</html>