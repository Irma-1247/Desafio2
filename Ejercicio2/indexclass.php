<?php
//Definición de la clase
class libro {
	//Propiedades de la clase auto
	private $autor;
	private $titulo;
	private $edicion;
	private $lugar;
	private $editorial;
	private $año;
	private $paginas;
	private $notas;
	private $isbn;
	public $libros = array();
	//Métodos
	function añadir($autor, $titulo, $edicion, $lugar, $editorial, $año, $paginas, $notas, $isbn){
		$this->$autor = $autor;
		$this->$titulo = $titulo;
		$this->$edicion = $edicion;
		$this->$lugar = $lugar;
		$this->$editorial = $editorial;
		$this->$año = $año;
		$this->$paginas = $paginas;
		$this->$notas = $notas;
		$this->$isbn = $isbn;
		$info = array($this -> $autor, $this -> $titulo, $this -> $edicion, $this -> $lugar, $this-> $editorial, $this -> $año, $this -> $paginas, $this -> $notas, $this -> $isbn);
		array_push($this->libros, $info);
	}

	function imprimir(){
		for ($i=0; $i < count($this->libros); $i++) {
			echo "<tr><td>" . ($i + 1) . "</td><td>" . $this->libros[$i][0] . "</td><td>" . $this->libros[$i][1] . "</td><td>" . $this->libros[$i][2] . "</td><td>" . $this->libros[$i][3] . "</td><td>" . $this->libros[$i][4] . "</td><td>" . $this->libros[$i][5] . "</td><td>" . $this->libros[$i][6] . "</td><td>" . $this->libros[$i][7] . "</td><td>" . $this->libros[$i][8] . "</td></tr>";
		}
	}

	function recuperar($array){
		$this->libros = $array;
	}
}
?>