<?php
include '../koneksi.php';
session_start();
$id  = $_POST['id'];
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

$sekarang = date('Y-m-d H:i:s');
$unixtime = strtotime($sekarang);
$filefoto_ktp = !empty($_FILES['foto_ktp']['name']) ? $unixtime . "_" . $_FILES['foto_ktp']['name'] : 'n/a';
$filefoto_npwp = !empty($_FILES['foto_npwp']['name']) ? $unixtime . "_" . $_FILES['foto_npwp']['name'] : 'n/a';
$filebukti_pembayaran = !empty($_FILES['bukti_pembayaran']['name']) ? $unixtime . "_" . $_FILES['bukti_pembayaran']['name'] : 'n/a';

okeupload($_FILES['foto_ktp'], '../gambar/user/upload_ktp/', $unixtime);
okeupload($_FILES['foto_npwp'], '../gambar/user/upload_npwp/', $unixtime);
okeupload($_FILES['bukti_pembayaran'], '../gambar/user/upload_bukti/', $unixtime);

$cekquery = mysqli_query($koneksi, "update anggota set anggota_nama='$nama', anggota_alamat='$alamat', anggota_tempat='$tempat', anggota_tanggal='$tanggal', anggota_handphone='$handphone', anggota_email='$email', anggota_pekerjaan='$pekerjaan', anggota_tanggungan='$tanggungan', anggota_ktp='$filefoto_ktp', anggota_npwp='$filefoto_npwp', anggota_bukti='$filebukti_pembayaran' where anggota_id='$id'");

if (mysqli_affected_rows($koneksi) > 0) {
    $_SESSION["success"] = 'Data Berhasil Diupdate';
    header("location:anggota.php");
} else {
    header("location:anggota.php?alert=gagalupdate");
}


function okeupload($filename, $target_folder, $unixtime)
{
    $allowed = array("gif", "png", "jpg", "jpeg");

    $selected_file = $filename['name'];

    //ganti nama dg awal unix time
    $namaselected_file = $unixtime . '_' . $selected_file;

    if (empty($selected_file)) {
        die("No File Selected " . $filename['name']);
    } else {

        $ukuran = $filename['size'];

        $ext = strtolower(pathinfo($selected_file, PATHINFO_EXTENSION));
        //cek extension
        if (!in_array($ext, $allowed)) echo "File tidak valid";
        else {
            //ukuran di bawah 10 MB
            if ($ukuran > 10000000) echo "File maks. 10MB";
            else {
                //validasi oke, uploads tmp_name
                move_uploaded_file($filename['tmp_name'], $target_folder . $namaselected_file) or die("Error Completing Request");
            }
        }
    }
}
