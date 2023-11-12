<?php 
	//Incluir el fichero de conexion
	include_once("conexion.php");
	//Incluir la libreria FPDF
	include_once("fpdf184/fpdf.php");

if($_GET['FOLIO']){
	$dato = $_GET['FOLIO'];
class PDF extends FPDF
{
	//Funcion encragada de realizar el encabezado
	function Header()
	{
		//logo
		$this->Image('logoquetzalt.jpg', 0,5,50);
		$this->SetFont('Arial', 'B', 16);
		$this->SetY(15);
		//Movemos a la derecha la imagen
		$this->Cell(80);
		//Cuadro de titulo
		$this->Cell(95,10,'Base de datos Quetzalcoatl',0,0,'C');
		//Salto de linea desde el logo a la tabla
		$this->Ln(40);
	}
	//Funcion footer
	function Footer()
	{
		//Posicion a 1.5cm de la parte inferior
		$this->SetY(-15);
		//Configuramos en Arial, Italic, tamaño 8
		$this->SetFont('Arial', 'I', 8);
		//Configuramos la paginacion
		$this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
	}
}
	//Cuerpo de la tabla	
	$db = new dbConexion();
	$connString = $db->getConexion();
	$result = mysqli_query($connString, "SELECT * FROM formulario1 WHERE FOLIO = '{$dato}'") or die("Error en la BD: ".mysqli_error($connString));
	$header = mysqli_query($connString, "SELECT * FROM formulario1 WHERE FOLIO = '{$dato}'");

	$pdf = new PDF("L", "mm", "LETTER");

	//Header
	$pdf -> AddPage();

	//Footer
	$pdf->AliasNbPages();

$pdf->SetFont('Arial','B',16);
$pdf->Setx(115);
$pdf->Cell(40,10,'Datos del Alumno');
$pdf->Ln();
$pdf->Ln();

	$pdf->SetFont('Arial', 'B', 12);

	//Declaramos el ancho "w" de las columnas
	$w = array(20, 40,40,40,55,40,15);

	//Declaramos los encabezados de la tabla
	$pdf->Cell(20, 12, 'FOLIO', 1);
	$pdf->Cell(40, 12, 'Apellido_paterno', 1);
	$pdf->Cell(40, 12, 'apellido_materno', 1);
	$pdf->Cell(40, 12, 'Nombre', 1);
	$pdf->Cell(55, 12, 'Curp', 1);
	$pdf->Cell(40, 12, 'Fecha_nacimiento', 1);
	$pdf->Cell(15, 12, 'Edad', 1);
	$pdf->Ln();
	$pdf->SetFont('Arial', '', 12);

	//Mostramos el contenido de la tabla
	foreach($result as $row)
	{
		$pdf->Cell($w[0], 6, $row['FOLIO'], 1);
		$pdf->Cell($w[1], 6, utf8_decode($row['apellido_paterno']), 1);
		$pdf->Cell($w[2], 6, utf8_decode($row['apellido_materno']), 1);
		$pdf->Cell($w[3], 6, utf8_decode($row['nombre']), 1);
		$pdf->Cell($w[4], 6, $row['curp'], 1);
		$pdf->Cell($w[5], 6, $row['fecha_nacimiento'], 1);
		$pdf->Cell($w[6], 6, $row['edad'], 1);
		$pdf->Ln();
	}
	$pdf->Ln();
	$pdf->Ln();

	$pdf->SetFont('Arial', 'B', 12);
	$w = array(50,70,40,60,40);
	//Declaramos los encabezados de la tabla
	$pdf->Cell(50, 12, 'Nacionalidad', 1);
	$pdf->Cell(70, 12, 'Primaria_estudio', 1);
	$pdf->Cell(40, 12, 'Telefono_alumno', 1);
	$pdf->Cell(60, 12, 'Discapacidad', 1);
	$pdf->Cell(40, 12, 'Promedio_primaria', 1);
	$pdf->Ln();
	$pdf->SetFont('Arial', '', 12);

	//Mostramos el contenido de la tabla
	foreach($result as $row)
	{
		$pdf->Cell($w[0], 6, utf8_decode($row['nacionalidad']), 1);
		$pdf->Cell($w[1], 6, utf8_decode($row['primaria_estudio']), 1);
		$pdf->Cell($w[2], 6, $row['telefono_alumno'], 1);
		$pdf->Cell($w[3], 6, utf8_decode($row['discapacidad']), 1);
		$pdf->Cell($w[4], 6, utf8_decode($row['promedio_primaria']), 1);
		$pdf->Ln();
	}
	$pdf->Ln();
	$pdf->Ln();

	$pdf->SetFont('Arial', 'B', 12);
	$w = array(70);
	//Declaramos los encabezados de la tabla
	$pdf->Cell(70, 12, 'Tienes_hermanos', 1);
	$pdf->Ln();
	$pdf->SetFont('Arial', '', 12);

	//Mostramos el contenido de la tabla
	foreach($result as $row)
	{
		$pdf->Cell($w[0], 6, utf8_decode($row['tienes_hermanos']), 1);
		$pdf->Ln();
	}
	$pdf->Ln();
	$pdf->Ln();
	$pdf->Ln();
	$pdf->Ln();
	$pdf->Ln();	
	$pdf->Ln();	

$pdf->SetFont('Arial','B',16);
$pdf->Setx(115);
$pdf->Cell(40,10,'Datos del padre');
$pdf->Ln();
$pdf->Ln();

	$pdf->SetFont('Arial', 'B', 12);
	$w = array(20, 80,75,70);
	//Declaramos los encabezados de la tabla
	$pdf->Cell(20, 12, 'FOLIO', 1);
	$pdf->Cell(80, 12, 'Nombre_completo', 1);
	$pdf->Cell(75, 12, 'Ocupacion', 1);
	$pdf->Cell(70, 12, 'Estudio_maximo', 1);
	$pdf->Ln();
	$pdf->SetFont('Arial', '', 12);

	//Mostramos el contenido de la tabla
	foreach($result as $row)
	{
		$pdf->Cell($w[0], 6, $row['FOLIO'], 1);
		$pdf->Cell($w[1], 6, utf8_decode($row['nombre_completo']), 1);
		$pdf->Cell($w[2], 6, utf8_decode($row['ocupacion']), 1);
		$pdf->Cell($w[3], 6, $row['estudio_maximo'], 1);
		$pdf->Ln();
	}
	$pdf->Ln();
	$pdf->Ln();

	$pdf->SetFont('Arial', 'B', 12);
	$w = array(70,62,62,51);
	//Declaramos los encabezados de la tabla
	$pdf->Cell(70, 12, 'Domicilio', 1);
	$pdf->Cell(62, 12, 'Colonia', 1);
	$pdf->Cell(62, 12, 'Localidad', 1);
	$pdf->Cell(51, 12, 'Municipio', 1);
	$pdf->Ln();
	$pdf->SetFont('Arial', '', 12);

	//Mostramos el contenido de la tabla
	foreach($result as $row)
	{
		$pdf->Cell($w[0], 6, utf8_decode($row['domicilio']), 1);
		$pdf->Cell($w[1], 6, utf8_decode($row['colonia']), 1);
		$pdf->Cell($w[2], 6, utf8_decode($row['localidad']), 1);
		$pdf->Cell($w[3], 6, utf8_decode($row['municipio']), 1);
		$pdf->Ln();
	}
	$pdf->Ln();
	$pdf->Ln();

	$pdf->SetFont('Arial', 'B', 12);
	$w = array(35,60,75,40,38);
	//Declaramos los encabezados de la tabla
	$pdf->Cell(35, 12, 'Codigo_postal', 1);
	$pdf->Cell(60, 12, 'Estado', 1);
	$pdf->Cell(75, 12, 'Correo', 1);
	$pdf->Cell(40, 12, 'Telefono', 1);
	$pdf->Cell(38, 12, 'Telefono_familiar', 1);
	$pdf->Ln();
	$pdf->SetFont('Arial', '', 12);

	//Mostramos el contenido de la tabla
	foreach($result as $row)
	{
		$pdf->Cell($w[0], 6, $row['codigo_postal'], 1);
		$pdf->Cell($w[1], 6, utf8_decode($row['estado']), 1);
		$pdf->Cell($w[2], 6, $row['correo'], 1);
		$pdf->Cell($w[3], 6, $row['telefono_tutor'], 1);
		$pdf->Cell($w[4], 6, $row['telefono_familiar'], 1);
		$pdf->Ln();
	}
	$pdf->Ln();
	$pdf->Ln();

	$pdf->SetFont('Arial', 'B', 12);
	$w = array(134,134);
	//Declaramos los encabezados de la tabla
	$pdf->Cell(134, 12, 'Taller_1', 1);
	$pdf->Cell(134, 12, 'Taller_2', 1);
	$pdf->Ln();
	$pdf->SetFont('Arial', '', 12);

	//Mostramos el contenido de la tabla
	foreach($result as $row)
	{
		$pdf->Cell($w[0], 6, utf8_decode($row['carrera_1']), 1);
		$pdf->Cell($w[1], 6, utf8_decode($row['carrera_2']), 1);
		$pdf->Ln();
	}
	$pdf->Ln();
	$pdf->Ln();

	$pdf->SetFont('Arial', 'B', 12);
	$w = array(134,134);
	//Declaramos los encabezados de la tabla
	$pdf->Cell(134, 12, 'Taller_3', 1);
	$pdf->Cell(134, 12, 'Taller_4', 1);
	$pdf->Ln();
	$pdf->SetFont('Arial', '', 12);

	//Mostramos el contenido de la tabla
	foreach($result as $row)
	{
		$pdf->Cell($w[0], 6, utf8_decode($row['carrera_3']), 1);
		$pdf->Cell($w[1], 6, utf8_decode($row['carrera_4']), 1);
		$pdf->Ln();
	}
	$pdf->Ln();
	$pdf->Ln();

	$pdf->SetFont('Arial', 'B', 12);
	$w = array(40);
	//Declaramos los encabezados de la tabla
	$pdf->Cell(40, 12, 'Fecha_registro', 1);
	$pdf->Ln();
	$pdf->SetFont('Arial', '', 12);

	//Mostramos el contenido de la tabla
	foreach($result as $row)
	{
		$pdf->Cell($w[0], 6, $row['fecha_registro'], 1);
		$pdf->Ln();
	}

$pdf->OutPut();
}
?>