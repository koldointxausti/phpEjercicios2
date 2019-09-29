<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 5</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		$mesesJson = '[
			{
				"nombre":"Enero",
				"numDias":31
			},{
				"nombre":"Febrero",
				"numDias":28
			},{
				"nombre":"Marzo",
				"numDias":31
			},{
				"nombre":"Abril",
				"numDias":30
			},{
				"nombre":"Mayo",
				"numDias":31
			},{
				"nombre":"Junio",
				"numDias":30
			},{
				"nombre":"Julio",
				"numDias":31
			},{
				"nombre":"Agosto",
				"numDias":31
			},{
				"nombre":"Septiembre",
				"numDias":30
			},{
				"nombre":"Octubre",
				"numDias":31
			},{
				"nombre":"Noviembre",
				"numDias":30
			},{
				"nombre":"Diciembre",
				"numDias":31
			}	
		]';
		$mesesArray =  json_decode($mesesJson, true);
		for($i = 0; $i < sizeof($mesesArray); $i++)
			echo $mesesArray[$i]['nombre'].' tiene '.$mesesArray[$i]['numDias'].' días<br>';
	?>
</body>
</html>