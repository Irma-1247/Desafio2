<!DOCTYPE html>
<html>
<head>
	<title>Libros</title>
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
	<div class='table-responsive' align='center'>
		<a href='index.php'>Ingrese un nuevo libro</a><br><br>
		<table class='table table-striped table-bordered'>
			<thead class="thead-dark">
				<tr><th colspan='10'>Libros Ingresados</th></tr>
				<tr><td>Indice</td><td>Autor</td><td>Titulo</td><td>Edicion</td><td>Lugar</td><td>Editorial</td><td>Año</td><td>Páginas</td><td>Notas</td><td>ISBN</td></tr>
			</thead>
			<?php
			//Recibiendo variables
			$autor = $_POST['autor'];
			$titulo = $_POST['title'];
			$edicion = $_POST['edi'];
			$lugar = $_POST['ciudad'];
			$editorial = $_POST['editorial'];
			$año = $_POST['año'];
			$paginas = $_POST['pag'];
			$notas = $_POST['note'];
			$isbn = $_POST['isbn'];
			$inf = array();
			//Objeto de la clase
			function __autoload($classname) {
				include_once("indexclass.php");
			}
			$objeto = new libro();
			if (isset($_COOKIE['Array'])){
				$a=stripslashes ($_COOKIE['Array']);
				$mi_array=unserialize($a);
				$objeto->recuperar($mi_array);
			}
			$objeto->añadir($autor, $titulo, $edicion, $lugar, $editorial, $año, $paginas, $notas, $isbn);
			$objeto->imprimir();
			$mi_pasa_array = $objeto->libros;
			$compactada = serialize($mi_pasa_array);
			setcookie('Array',$compactada);
			?>
		</table>
	</div>
</body>
</html>