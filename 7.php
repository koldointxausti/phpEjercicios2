<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 7</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="" method="get">
		<input type="number" name="num1">
		<input type="number" name="num2">
		<input type="submit">
	</form>
	<?php
		function potencia($base, $potencia=2){
			return pow($base,$potencia);
		}
		echo potencia($_GET['num1'],$_GET['num2']);
	?>
</body>
</html>