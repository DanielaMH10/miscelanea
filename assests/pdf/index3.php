
<?php


require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('logo.png',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(70);
    // Título
    $this->Cell(70,10,'Reporte de proveedores',1,0,'C');
    // Salto de línea
    $this->Ln(40);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}

require 'cn.php';
$consulta = "SELECT * FROM  proveedores";
$resultado = $mysqli->query($consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

while($row = $resultado->fetch_assoc()){
    $pdf->Cell(10, 10, $row['id_proveedor'], 1, 0, 'c', 0);
    $pdf->Cell(30, 10, $row['nombre'], 1, 0, 'c', 0);
    $pdf->Cell(30, 10, $row['identificacion'], 1, 0, 'c', 0);
    $pdf->Cell(30, 10, $row['telefono'], 1, 0, 'c', 0);
    $pdf->Cell(30, 10, $row['direccion'], 1, 1, 'c', 0);
}

$pdf->Output();


?>