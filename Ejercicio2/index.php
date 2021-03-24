<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 2</title>
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
	<h1>Ingreso de libros</h1><br>
	<form method="POST" class="form-inline" action="imprimir.php">
		<br>
		<div class="form-group col-6">
			<div class="try">
				<label>Autor:</label>
				<input class="form-control" type="text" name="autor" required id="autor">
			</div>
		</div>
		<div class="form-group col-6">
			<div>
				<label>Título del libro:</label>
				<input class="form-control" type="text" name="title" required id="title">
			</div>
		</div>
		<div class="form-group col-6">
			<div>
				<br><label>Número de edición:</label>
				<input class="form-control" type="number" name="edi" required min="1">
			</div>
		</div>
		<div class="form-group col-6">
			<div>
				<br><label>Lugar de la publicación:</label>
				<input class="form-control" type="text" name="ciudad" required id="place">
			</div>
		</div>
		<div class="form-group col-6">
			<div>
				<br><label>Editorial:</label>
				<input class="form-control" type="text" name="editorial" required id="edi">
			</div>
		</div>
		<div class="form-group col-6">
			<div>
				<br><label>Año de edición:</label>
				<input class="form-control" type="number" name="año" min="0" max="2021" required id="año">
			</div>
		</div>
		<div class="form-group col-6">
			<div>
				<br><label>Número de páginas:</label>
				<input class="form-control" type="number" name="pag" required min="49">
			</div>
		</div>
		<div class="form-group col-6">
			<div>
				<br><label>Notas:</label>
				<textarea class="form-control" name="note" placeholder="Información adicional"></textarea>
			</div>
		</div>
		<div class="form-group col-6">
			<div>
				<br><label>ISBN</label>
				<input class="form-control" type="text" name="isbn" id="isbn">
			</div>
		</div>
		<div class="form-group col-6">
			<br><button class="btn btn-info" id="send" name="send">Enviar</button>
		</div>
	</form>
	<script type="text/javascript" src="js/index.js"></script>
</body>
</html>