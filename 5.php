<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 5</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="" method="get">
		<input type="number" name="year" minlength="4" maxlength="4" min="1900" max="2150">
		<input type="submit">
	</form>
	<?php
		$year = $_GET['year'];
		$meses = [];
		for($i=1; $i<=12; $i++){
			array_push($meses, cal_days_in_month(CAL_GREGORIAN, $i, $year));
			echo $meses[($i-1)].'<br>';
		}
	?>
</body>
</html>