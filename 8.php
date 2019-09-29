<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 8</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		function existeArchivo(){
			if (!file_exists('config.php'))
				throw new exception('El archivo "config.php" no ha sido encontrado');
		}
		existeArchivo();
	?>
</body>
</html>