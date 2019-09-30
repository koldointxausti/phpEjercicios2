<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 6</title>
	<meta charset='utf-8'>
	<style>
		body{
			font-size: 24px;
		}
		td, th{
			border:1px solid black;
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
	?>
	<table>
		<?php
			foreach ($data as $mes => $personas) {
				echo '<th>'.$mes.'</th>';
				foreach ($personas as $persona) {
					echo '<td>'.$persona.'</td>';
				}
				echo '</tr>';
			}	
		?>
	</table>
</body>
</html>