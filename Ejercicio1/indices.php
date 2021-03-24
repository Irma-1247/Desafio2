<!DOCTYPE html>
<html>
<head>
	<title>Matriz1</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<script src="https://kit.fontawesome.com/2066ce508e.js" crossorigin="anonymous"></script>
</head>
<body>
</body>
</html>
<?php
//Nivel Básico
$alumnos[0][0] = "25";
$alumnos[0][1] = "10";
$alumnos[0][2] = "8";
$alumnos[0][3] = "12";
$alumnos[0][4] = "30";
//Nivel Intermedio
$alumnos[1][0] = "15";
$alumnos[1][1] = "5";
$alumnos[1][2] = "4";
$alumnos[1][3] = "8";
$alumnos[1][4] = "15";
//Nivel avanzado
$alumnos[2][0] = "10";
$alumnos[2][1] = "2";
$alumnos[2][2] = "1";
$alumnos[2][3] = "4";
$alumnos[2][4] = "10";
//Imprimiendo tablas
echo "<h1>Idiomas</h1><h5>Array por índices</h5>";
echo "<br>";
echo "<table align='center'>";
echo "<tr>";
//Ingles
imprimir("Inglés",$alumnos,0);
//Francés
imprimir("Francés",$alumnos,1);
//Alemán
imprimir("Alemán",$alumnos,2);
//Ruso
imprimir("Ruso",$alumnos,3);
//Chino Mandarin
imprimir("Chino Mandarin",$alumnos,4);
//Función
function imprimir($idioma, $alumnos, $indice){
	echo "<td>";
	echo "<div class=\"table-responsive\">";
	echo "<table class=\"table\">";
	echo "<tr class='table-primary'>";
	echo "<th colspan='2'>$idioma</th>";
	echo "<tr>";
	for ($i=0; $i <= 2 ; $i++) {
		if ($i == 0) {
			echo "<tr class='table-success'><td>Básico</td>";
		}
		else if ($i == 1) {
			echo "<tr class='table-warning'><td>Intermedio</td>";
		}
		else
		{
			echo "<tr class='table-danger'><td>Avanzado</td>";
		}
		for ($j=0; $j <= 4; $j++) {
			if ($j == $indice) {
				echo "<td>" . $alumnos[$i][$j] . "</td>";
			}
		}
	}
	echo "</table>";
	echo "</td>";
}
?>