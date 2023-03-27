<?php
include '../koneksi.php';
$kode_tabungan  = $_POST['kode_tabungan'];
$nama  = $_POST['nama'];
$tanggal  = $_POST['tanggal'];
$saldo  = $_POST['saldo'];
$bank  = $_POST['bank'];







//mysqli_query($koneksi, "UPDATE pensiun SET umur_sekarang='$sekarang', umur_pensiun='$pensiun', jumlah_sisa ='$sisa', biaya_berdua = '$berdua', asumsi_inflasi = '$asumsi', bunga_deposito = '$bunga', total_dana = '$total', return_investasi = '$return', simpanan = '$simpan', where id ='$id'") or die(mysqli_error($koneksi)); 
//header("location:datapensiun.php"); 





$qry = "UPDATE tabungan SET kode_tabungan='$kode_tabungan', nama='$nama', tanggal='$tanggal', saldo='$saldo', bank='$bank', WHERE tabungan_id='$id'";


$execute = mysqli_query($koneksi, $qry);
header("location:tabungan.php");

if (!$execute) {
    printf("Error message: %s<br>", mysqli_error($koneksi));
}
