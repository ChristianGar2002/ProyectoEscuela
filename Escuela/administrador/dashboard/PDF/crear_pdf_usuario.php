<?php 
	//Incluir el fichero de conexion
	include_once("conexion.php");
	//Incluir la libreria FPDF
	include_once("fpdf184/fpdf.php");

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
	$result = mysqli_query($connString, "SELECT * FROM usuarios") or die("Error en la BD: ".mysqli_error($connString));
	$header = mysqli_query($connString, "SELECT * FROM usuarios");

	$pdf = new PDF("L", "mm", "LETTER");

	//Header
	$pdf -> AddPage();

	//Footer
	$pdf->AliasNbPages();

$pdf->SetFont('Arial','B',16);
$pdf->Setx(115);
$pdf->Cell(40,10,'Datos de los Usuarios');
$pdf->Ln();
$pdf->Ln();

	$pdf->SetFont('Arial', 'B', 12);

	//Declaramos el ancho "w" de las columnas
	$w = array(15, 50,30,40,80,40);

	//Declaramos los encabezados de la tabla
	$pdf->Cell(15, 12, 'ID', 1);
	$pdf->Cell(50, 12, 'Nombre', 1);
	$pdf->Cell(30, 12, 'Usuario', 1);
	$pdf->Cell(40, 12, 'Cargo', 1);
	$pdf->Cell(80, 12, utf8_decode('Contraseña'), 1);
	$pdf->Cell(40, 12, 'Fecha_registro', 1);
	$pdf->Ln();
	$pdf->SetFont('Arial', '', 12);

	//Mostramos el contenido de la tabla
	foreach($result as $row)
	{
		$pdf->Cell($w[0], 6, $row['id'], 1);
		$pdf->Cell($w[1], 6, utf8_decode($row['name']), 1);
		$pdf->Cell($w[2], 6, utf8_decode($row['username']), 1);
		$pdf->Cell($w[3], 6, utf8_decode($row['cargo']), 1);
		$pdf->Cell($w[4], 6, $row['password'], 1);
		$pdf->Cell($w[5], 6, $row['fecha_registro'], 1);
		$pdf->Ln();
	}
	
$pdf->OutPut();

?>