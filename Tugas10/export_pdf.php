<?php
require('fpdf.php');

// Function to export student data to PDF
function exportToPDF()
{
    // Create a new PDF instance
    $pdf = new FPDF();
    $pdf->AddPage();

    // Set font settings
    $pdf->SetFont('Arial', 'B', 14);

    // Add a title
    $pdf->Cell(0, 10, 'Data Siswa', 0, 1, 'C');
    $pdf->Ln(10);

    // Set font settings for table header
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(30, 10, 'NIK', 1, 0, 'C');
    $pdf->Cell(60, 10, 'Nama', 1, 0, 'C');
    $pdf->Cell(30, 10, 'Gender', 1, 0, 'C');
    $pdf->Cell(70, 10, 'Alamat', 1, 1, 'C');

    // Set font settings for table content
    $pdf->SetFont('Arial', '', 12);

    // Load file koneksi.php
    include "koneksi.php";

    // Fetch student data from the database
    $sql = $pdo->prepare("SELECT * FROM siswa");
    $sql->execute();

    // Iterate through the student data and add rows to the PDF table
    while ($data = $sql->fetch()) {
        $pdf->Cell(30, 10, $data['nik'], 1, 0, 'C');
        $pdf->Cell(60, 10, $data['nama'], 1, 0, 'C');
        $pdf->Cell(30, 10, $data['jenis_kelamin'], 1, 0, 'C');
        $pdf->MultiCell(70, 10, $data['alamat'], 1, 'C');
    }

    // Output the PDF
    $pdf->Output();
}

// Call the exportToPDF function
exportToPDF();
