<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 6</title>
	<meta charset='utf-8'>
	<style>
		body{
			font-size: 24px;
		}
	</style>
</head>
<body>
	<?php
		function añadir($nombre, $mes, &$data){
			array_push($data[$mes], $nombre);
			return sizeof($data[$mes]);
		}
		$data = [
			'Enero' => ['Mikel','Ainara','Xabi'],
			'Febrero' => ['Irati','Ibai'],
			'Marzo' => ['Haizea'],
			'Abril' => ['Koldo','Maria'],
			'Mayo' => ['Jose'],
			'Junio' => ['Ramón','Fernanada'],
			'Julio' => ['Javier','Javiera'],
			'Agosto' => ['Rebeca'],
			'Septiembre' => ['Juan Manuel','Fernandito'],
			'Octubre' => ['Enmanuel'],
			'Noviembre' => ['Eider'],
			'Diciembre' => ['Laia','Olinka','Alaitz']
		];
		echo 'Tamaño del array de nombres por mes tras añadir a Naia: '. añadir('Naia','Diciembre',$data).'<br>';
		foreach ($data as $mes => $personas) {
			echo '<span style="color:blue">'.$mes.'</span><br>';
			foreach ($personas as $persona) {
				echo $persona.'<br>';
			}
		}	
	?>
</body>
</html>