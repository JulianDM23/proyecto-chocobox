<?php
// Incluir FPDF
require('../fpdf186/fpdf.php');  // Ruta correcta a la librería FPDF
require_once '../config/database.php';  // Asegúrate de tener la conexión a la base de datos

// Conectar a la base de datos
$database = new Database();
$conn = $database->getConnection();

// Crear una instancia de FPDF
$pdf = new FPDF();
$pdf->AddPage();

// Establecer título y encabezado
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(200, 10, 'Lista de Usuarios', 0, 1, 'C');
$pdf->Ln(10);  // Salto de línea

// Establecer encabezados de columna
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(30, 10, 'ID', 1, 0, 'C');
$pdf->Cell(50, 10, 'Nombre', 1, 0, 'C');
$pdf->Cell(50, 10, 'Apellido', 1, 0, 'C');  // Agregar columna "Apellido"
$pdf->Cell(50, 10, 'Email', 1, 0, 'C');  // Cambié "Correo" a "Email"
$pdf->Cell(30, 10, 'Fecha Nacimiento', 1, 1, 'C');  // Cambié "Fecha Registro" a "Fecha Nacimiento"

// Establecer el contenido
$pdf->SetFont('Arial', '', 12);

// Consulta para obtener todos los usuarios
$query = "SELECT id, nombre, apellido, email, fecha_nacimiento FROM users";  // Usar 'apellido' en la consulta SQL
$stmt = $conn->prepare($query);
$stmt->execute();
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Agregar filas de usuarios al PDF
foreach ($usuarios as $usuario) {
    $pdf->Cell(30, 10, $usuario['id'], 1, 0, 'C');
    $pdf->Cell(50, 10, $usuario['nombre'], 1, 0, 'C');
    $pdf->Cell(50, 10, $usuario['apellido'], 1, 0, 'C');  // Agregar "Apellido"
    $pdf->Cell(50, 10, $usuario['email'], 1, 0, 'C');  // Cambié "correo" a "email"
    $pdf->Cell(30, 10, $usuario['fecha_nacimiento'], 1, 1, 'C');  // Cambié "fecha_registro" a "fecha_nacimiento"
}

// Salida del PDF
$pdf->Output();
?>
