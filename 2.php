<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 2</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="" method="get">
		<input type="number" name="x" placeholder="columnas">
		<input type="number" name="y" placeholder="filas">
		<input type="submit">
	</form>
	<table>
		<?php
			$rows = $_GET['y'];
			$columns = $_GET['x'];
			for($i = 0; $i < $rows; $i++){
				echo '<tr>';
					for($x = 0; $x < $columns; $x++){
						echo '<td>·</td>';
					}
				echo '</tr>';
			}
		?>
	</table>
</body>
</html>