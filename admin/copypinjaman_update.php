<?php
include '../koneksi.php';

$id  = $_POST['id'];
$kode_pinjam  = $_POST['kode_pinjam'];
$nama  = $_POST['nama'];
$tanggal_pinjam  = $_POST['tanggal_pinjam'];
$tanggal_tempo  = $_POST['tanggal_tempo'];
$jenis  = $_POST['jenis'];
$besar  = $_POST['besar'];
$lama  = $_POST['lama'];
$status_pinjaman  = $_POST['status_pinjaman'];




//$pinjaman =
//[
//"pinjaman_id" => $id,
//"kode_pinjam" => $kode_pinjam,
//"nama" => $nama,
//"tanggal_pinjam" => $tanggal_pinjam,
//"tanggal_tempo" => $tanggal_tempo,
//"jenis" => $jenis,
//"besar" => $besar,
//"lama" => $lama,
//"status_pinjaman" => $status_pinjaman

//];

//var_dump($pinjaman);
//die;




//mysqli_query(UPDATE pinjaman SET kode_pinjam='$kode_pinjam' , nama_anggota='$nama', tanggal_pinjam='$tanggal_pinjam', tanggal_tempo='$tanggal_tempo', jenis_pinjam='$jenis', besar_pinjam='$besar', lama_angsuran='$lama', status_pinjaman='$status_pinjaman', WHERE pinjaman_id='$id'") or die (mysqli_error($koneksi));
//header("location:pinjaman.php");



//$query = "UPDATE pinjaman SET(kode_pinjam, nama, tanggal_pinjam, tanggal_tempo, jenis, besar, lama, status_pinjaman)VALUES('$kode_pinjam', '$nama','$tanggal_pinjam','$tanggal_tempo','$jenis', '$besar', '$lama', '$status_pinjaman')";
//mysqli_query($koneksi, "update pinjaman set kode_pinjam='$kode_pinjam', nama='$nama', tanggal_pinjam='$tanggal_pinjam', tanggal_tempo='$tanggal_tempo', jenis='$jenis', besar='$besar', lama='$lama', status_pinjaman='$status_pinjaman', where pinjaman_id='$id'") or die(mysqli_error($koneksi));
//$execute = mysqli_query($koneksi, $query);
//header("location:pinjaman.php");
//if (!$execute) {
//printf("Error message: %s<br>", mysqli_error($koneksi));
//}





$qry = "UPDATE pinjaman SET kode_pinjam='$kode_pinjam', nama_anggota='$nama', tanggal_pinjam='$tanggal_pinjam', tanggal_tempo='$tanggal_tempo', jenis_pinjam='$jenis', besar_pinjam='$besar', lama_angsuran='$lama', status_pinjaman='$status_pinjaman', WHERE pinjaman_id='$id'";
//$qry = "update pinjaman set kode_pinjam='$kode_pinjam', nama='$nama', tanggal_pinjam='$tanggal_pinjam', tanggal_tempo='$tanggal_tempo', jenis='$jenis', besar='$besar', lama='$lama', status_pinjaman='$status_pinjaman', where pinjaman_id='$id'";
$execute = mysqli_query($koneksi, $qry);
header("location:pinjaman.php");

if (!$execute) {
    printf("Error message: %s<br>", mysqli_error($koneksi));
}

//$qry = "UPDATE pinjaman SET kode_pinjam='$kode_pinjam', nama_anggota='$nama', tanggal_pinjam='$tanggal_pinjam', tanggal_tempo='$tanggal_tempo', jenis_pinjam='$jenis', besar_pinjam='$besar', lama_angsuran='$lama', status_pinjaman='$status_pinjaman', WHERE pinjaman_id='$id'";

//$execute = mysqli_query($koneksi, $qry);

//header("location:pinjaman.php");

//if ($execute) {
    //header("location:pinjaman.php");
//} else {
    //printf("Error message: %s<br>", mysqli_error($koneksi));
    //echo "Data Berhasil diupdate";
//}
