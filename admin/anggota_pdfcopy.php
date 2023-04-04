<?php
// memanggil library FPDF
require('../library/fpdf181/fpdf.php');


include '../koneksi.php';
$nama  = $_POST['nama'];
$alamat  = $_POST['alamat'];
$tempat  = $_POST['tempat'];
$tanggal  = $_POST['tanggal'];
//$lahir  = print_r($_POST['tanggal']);
$handphone  = $_POST['handphone'];
$email  = $_POST['email'];
$pekerjaan  = $_POST['pekerjaan'];
$tanggungan  = $_POST['tanggungan'];

$rand = rand(1, 10);
$allowed =  array('gif', 'png', 'jpg', 'jpeg');

// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l', 'mm', 'A4');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial', 'B', 14);
// mencetak string 
$pdf->Cell(280, 7, 'SISTEM INFORMASI KOPERASI MCI', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(280, 7, 'DATA ANGGOTA KOPERASI', 0, 1, 'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10, 7, '', 0, 1);
$pdf->SetFont('Arial', 'B', 10);

$pdf->Cell(35, 6, 'NAMA', 0, 0);
$pdf->Cell(5, 6, ':', 0, 0);
$pdf->Cell(35, 6, 'ALAMAT', 0, 0);
$pdf->Cell(5, 6, ':', 0, 0);
$pdf->Cell(35, 6, 'TEMPAT LAHIR', 0, 0);
$pdf->Cell(5, 6, ':', 0, 0);
$pdf->Cell(35, 6, 'NO HANDPHONE', 0, 0);
$pdf->Cell(5, 6, ':', 0, 0);
$pdf->Cell(35, 6, 'EMAIL', 0, 0);
$pdf->Cell(5, 6, ':', 0, 0);
$pdf->Cell(35, 6, 'PEKERJAAN', 0, 0);
$pdf->Cell(5, 6, ':', 0, 0);
$pdf->Cell(35, 6, 'JUMLAH TANGGUNGAN SAAT INI', 0, 0);
$pdf->Cell(5, 6, ':', 0, 0);
$pdf->Cell(35, 6, 'FOTO KTP', 0, 0);
$pdf->Cell(5, 6, ':', 0, 0);
$filefoto_ktp  = $_POST['foto_ktp'];

$pdf->Cell(35, 6, 'FOTO NPWP', 0, 0);
$pdf->Cell(5, 6, ':', 0, 0);
$filefoto_npwp  = $_POST['foto_npwp'];

$pdf->Cell(35, 6, 'Bukti Pembayaran', 0, 0);
$pdf->Cell(5, 6, ':', 0, 0);


$filebukti_pembayaran  = $_POST['bukti_pembayaran'];

// variabel untuk upload fotonya
$filefoto_ktp = $_FILES['foto_ktp']['name'];
$filefoto_npwp = $_FILES['foto_npwp']['name'];
$filebukti_pembayaran = $_FILES['bukti_pembayaran']['name'];

if ($filefoto_ktp == "") {
    $foto = "foto_ktp";
} else {
    $file = mysqli_query($koneksi, "select * from anggota where anggota_id='$anggota'");
    $foto = mysqli_fetch_assoc($file);
    $file_foto = $foto['file_foto'];
    unlink("../gambar/user/upload_ktp/" . $file_foto);
}


if ($filefoto_npwp == "") {
    $npwp = "foto_npwp";
} else {
    $file = mysqli_query($koneksi, "select * from anggota where anggota_id='$anggota'");
    $npwp = mysqli_fetch_assoc($file);
    $file_foto = $foto['file_npwp'];
    unlink("../gambar/user/upload_npwp/" . $file_foto);
}

if ($filebukti_pembayaran == "") {
    $bukti = "bukti_pembayaran";
} else {
    $file = mysqli_query($koneksi, "select * from anggota where anggota_id='$anggota'");
    $bukti = mysqli_fetch_assoc($file);
    $file_bukti = $foto['file_npwp'];
    unlink("../gambar/user/upload_bukti/" . $file_bukti);
}

$pdf->Cell(10, 7, '', 0, 1);
$pdf->SetFont('Arial', '', 10);
$pdf->Output();
