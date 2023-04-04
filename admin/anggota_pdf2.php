<?php
// memanggil library FPDF
require('../library/fpdf181/fpdf.php');
include 'koneksi.php';

// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();

$pdf->SetFont('Arial', 'B', 14);

$pdf->Cell(280, 7, 'SISTEM INFORMASI KOPERASI MCI', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(280, 7, 'DATA ANGGOTA KOPERASI', 0, 1, 'C');

$pdf->Cell(10, 15, '', 0, 1);

$pdf->Cell(10, 7, 'NO', 1, 0, 'C');
$pdf->Cell(35, 6, 'NAMA', 1, 0, 'C');
$pdf->Cell(35, 6, 'ALAMAT', 1, 0, 'C');
$pdf->Cell(35, 6, 'TEMPAT LAHIR', 1, 0, 'C');
$pdf->Cell(35, 6, 'NO HANDPHONE', 1, 0, 'C');
$pdf->Cell(35, 6, 'EMAIL', 1, 0, 'C');
$pdf->Cell(35, 6, 'PEKERJAAN', 1, 0, 'C');
$pdf->Cell(35, 6, 'JUMLAH TANGGUNGAN SAAT INI', 1, 0, 'C');
$pdf->Cell(35, 6, 'FOTO KTP', 0, 0, 'C');
$pdf->Cell(35, 6, 'FOTO NPWP', 0, 0, 'C');
$pdf->Cell(35, 6, 'BUKTI PEMBAYARAN', 0, 0, 'C');




$pdf->Cell(10, 7, '', 0, 1);

$no = 1;
$data = mysqli_query($koneksi, "SELECT  * FROM anggota");
while ($d = mysqli_fetch_array($data)) {
    $pdf->Cell(10, 6, $no++, 1, 0, 'C');
    $pdf->Cell(50, 6, $d['anggota_nama'], 1, 0);
    $pdf->Cell(75, 6, $d['anggota_alamat'], 1, 0);
    $pdf->Cell(55, 6, $d['anggota_email'], 1, 1);
    $pdf->Cell(55, 6, $d['anggota_tempat'], 1, 1);
    $pdf->Cell(55, 6, $d['anggota_tanggal'], 1, 1);
    $pdf->Cell(55, 6, $d['anggota_handphone'], 1, 1);
    $pdf->Cell(55, 6, $d['anggota_email'], 1, 1);
    $pdf->Cell(55, 6, $d['anggota_pekerjaan'], 1, 1);
    $pdf->Cell(55, 6, $d['anggota_tanggungan'], 1, 1);
    $pdf->Cell(55, 6, $d['anggota_ktp'], 1, 1);
    $pdf->Cell(55, 6, $d['anggota_npwp'], 1, 1);
    $pdf->Cell(55, 6, $d['anggota_bukti'], 1, 1);
}

$pdf->Output();
