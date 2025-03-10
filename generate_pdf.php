<?php
require_once "app/connection.php";
require_once "fpdf/fpdf.php";

class PDF extends FPDF
{
    // Cabeçalho
    function Header()
    {
        $this->SetFont('Arial', 'B', 14);
        $this->Cell(0, 10, 'Lista de Utilizadores', 0, 1, 'C');
        $this->Ln(5);
    }

    // Rodapé
    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Página ' . $this->PageNo() . ' / {nb}', 0, 0, 'C');
    }
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFont('Arial', '', 12);

$sql = "SELECT username FROM users";
$result = mysqli_query($link, $sql);

if ($result === false) {
    die("Error: " . mysqli_error($link));
}

$marginLeft = ($pdf->GetPageWidth() - 150) / 2;
$pdf->SetX($marginLeft);

// Cabeçalhos da tabela
$pdf->SetFont('Arial', 'B', 12);
$pdf->SetFillColor(230, 230, 230); 
$pdf->Cell(150, 10, 'Username', 1, 0, 'C', true); 
$pdf->Ln();

// Dados da tabela
$pdf->SetFont('Arial', '', 12);
while ($row = mysqli_fetch_assoc($result)) {
    $pdf->SetX($marginLeft);
    $username = $row['username'];
    $pdf->Cell(150, 10, $username, 1, 0, 'C');
    $pdf->Ln();
}

// Saída do PDF
$pdf->Output("usernames.pdf", "D");
