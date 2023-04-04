<?php
// memanggil library FPDF
require('../library/fpdf181/fpdf.php');
include '../koneksi.php';

// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('L', 'mm', 'A4');
$pdf->AddPage();

$pdf->SetFont('Times', 'B', 13);

$pdf->Cell(280, 7, 'Data Koperasi Anggota', 0, 0, 'C');

$pdf->Cell(10, 15, '', 0, 1);
$pdf->SetFont('Times', 'B', 13);

$pdf->Cell(10, 7, "NO", 1, 0, 'C');
$pdf->Cell(40, 7, "NAMA", 1, 0, 'C');
$pdf->Cell(40, 7, "ALAMAT", 1, 0, 'C');
$pdf->Cell(40, 7, "TEMPAT\r\n\LAHIR", 1, 0, 'C');
//$pdf->Cell(40, 7, 'TEMPAT LAHIR', 1, 0, 'C');
$pdf->Cell(40, 7, "TANGGAL\r\n\LAHIR", 1, 0, 'C');
//$pdf->Cell(50, 7, 'TANGGAL LAHIR', 1, 0, 'C');
$pdf->Cell(40, 7, "NO\r\n\HP", 1, 0, 'C');
//$pdf->Cell(50, 7, 'NO HP', 1, 0, 'C');
$pdf->Cell(40, 7, "EMAIL", 1, 0, 'C');
$pdf->Cell(40, 7, "PEKERJAAN", 1, 0, 'C');
$pdf->Cell(40, 7, "JUMLAH\r\n\TANGGUNGAN", 1, 0, 'C');
//$pdf->Cell(50, 7, 'JUMLAH TANGGUNGAN', 1, 0, 'C');
$pdf->Cell(40, 7, "FOTO\r\n\KTP", 1, 0, 'C');
//$pdf->Cell(50, 7, 'FOTO KTP', 0, 0, 'C');
$pdf->Cell(40, 7, "FOTO\r\n\NPWP", 1, 0, 'C');
//$pdf->Cell(50, 7, 'FOTO NPWP', 0, 0, 'C');
$pdf->Cell(40, 7, "BUKTI\r\n\PEMBAYARAN", 1, 0, 'C');
//$pdf->Cell(50, 7, 'BUKTI PEMBAYARAN', 0, 0, 'C');




$pdf->Cell(10, 7, '', 0, 1);

$no = 1;
$data = mysqli_query($koneksi, "SELECT  * FROM anggota");
while ($d = mysqli_fetch_array($data)) {
    $pdf->Cell(10, 7, $no++, 1, 0, 'C');
    $pdf->Cell(40, 7, $d['anggota_nama'], 1, 0,);
    $pdf->Cell(40, 7, $d['anggota_alamat'], 1, 0,);
    $pdf->Cell(40, 7, $d['anggota_tempat'], 1, 0,);
    $pdf->Cell(40, 7, $d['anggota_tanggal'], 1, 0,);
    $pdf->Cell(40, 7, $d['anggota_handphone'], 1, 0,);
    $pdf->Cell(40, 7, $d['anggota_email'], 1, 0,);
    $pdf->Cell(40, 7, $d['anggota_pekerjaan'], 1, 0,);
    $pdf->Cell(40, 7, $d['anggota_tanggungan'], 1, 0,);
    $pdf->Cell(40, 7, $d['anggota_ktp'], 1, 0,);
    $pdf->Cell(40, 7, $d['anggota_npwp'], 1, 0,);
    $pdf->Cell(40, 7, $d['anggota_bukti'], 1, 0,);
}

$pdf->Output();
