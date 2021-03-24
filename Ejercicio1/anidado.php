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
//Creando arreglo
$niveles = array(
	"Básico" => array(
		"Inglés" => 25,
		"Francés" => 10,
		"Alemán" => 8,
		"Ruso" => 12,
		"Chino Mandarin" => 30
	),
	"Intermedio" => array(
		"Inglés" => 15,
		"Francés" => 5,
		"Alemán" => 4,
		"Ruso" => 8,
		"Chino Mandarin" => 15
	),
	"Avanzado" => array(
		"Inglés" => 10,
		"Francés" => 2,
		"Alemán" => 1,
		"Ruso" => 4,
		"Chino Mandarin" => 10
	)
);
//Imprimiendo
echo "<h1>Idiomas</h1><h5>Array anidado</h5><br>";
imprimir($niveles);
//Función
function imprimir($niveles){
	echo "<div class=\"table-responsive\" align='center'>";
	echo "<table class=\"table\">";
	echo "<tr class='table-primary'><th>Niveles</th><th>Inglés</th><th>Francés</th><th>Alemán</th><th>Ruso</th><th>Chino Mandarin</th><tr>";
	foreach ($niveles as $nivel => $grado) {
		if ($nivel == "Básico") {
			echo "<tr class='table-success'><td>Básico</td>";
		}
		elseif ($nivel == "Intermedio") {
			echo "<tr class='table-warning'><td>Intermedio</td>";
		}
		else
		{
			echo "<tr class='table-danger'><td>Avanzado</td>";
		}
		foreach ($grado as $materia => $name) {
			echo "<td>" . $name . "</td>";
		}
	}
	echo "</table>";
	echo "</div>";
}
?>