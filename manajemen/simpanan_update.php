<?php
include '../koneksi.php';
session_start();
$id  = $_POST['id'];
$kode_simpanan  = $_POST['kode_simpanan'];
$jenis  = $_POST['jenis'];
$besar  = $_POST['besar'];
$kode  = $_POST['kode'];
$tanggal  = $_POST['tanggal'];







//mysqli_query($koneksi, "UPDATE pensiun SET umur_sekarang='$sekarang', umur_pensiun='$pensiun', jumlah_sisa ='$sisa', biaya_berdua = '$berdua', asumsi_inflasi = '$asumsi', bunga_deposito = '$bunga', total_dana = '$total', return_investasi = '$return', simpanan = '$simpan' where id ='$id'") or die(mysqli_error($koneksi)); 
//header("location:datapensiun.php"); 





$qry = "UPDATE simpanan SET kode_simpanan='$kode_simpanan', jenis_simpanan='$jenis', besar_simpanan='$besar', kode_anggota='$kode', tanggal_masuk='$tanggal' WHERE simpanan_id='$id'";

//$qry = "UPDATE simpanan SET kode_simpanan='$kode_simpanan', jenis='$jenis', besar='$besar', kode='$kode', tanggal='$tanggal' WHERE simpanan_id='$id'";

$execute = mysqli_query($koneksi, $qry);
if (!$execute) {
    printf("Error message: %s<br>", mysqli_error($koneksi));
} else {
    $_SESSION["success"] = 'Data Berhasil Diupdate';
    header("location:simpanan.php");

    //header("location:../admin/simpanan.php");
}
