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


$date_time_arr = explode(" ", $sekarang);
$date = $date_time_arr[1];
$time = $date_time_arr[0];
$new_time = date("H-i-s", strtotime($date));
$unixtime = $time . '_' . $new_time;
// var_dump($unixtime);die;
$filefoto_ktp = $_FILES['foto_ktp']['name'];

$filefoto_npwp = $_FILES['foto_npwp']['name'];
$filebukti_pembayaran = $_FILES['bukti_pembayaran']['name'];


if ($filefoto_ktp == "" && $filefoto_npwp == "" && $filebukti_pembayaran == "") {
    $cekquery = mysqli_query($koneksi, "update anggota set anggota_nama='$nama', anggota_alamat='$alamat', anggota_tempat='$tempat', anggota_tanggal='$tanggal', anggota_handphone='$handphone', anggota_email='$email', anggota_pekerjaan='$pekerjaan', anggota_tanggungan='$tanggungan' where anggota_id='$id'");
} else {

    if ($filefoto_npwp == "" && $filebukti_pembayaran == "") {
        //menghapus data foto lama menjadi baru
        $lama = mysqli_query($koneksi, "select * from anggota where anggota_id='$id'");
        $l = mysqli_fetch_assoc($lama);
        $nama_file_lama = $l['anggota_ktp'];
        unlink("../gambar/user/upload_ktp/" . $nama_file_lama);

        okeupload($_FILES['foto_ktp'], '../gambar/user/upload_ktp/', $unixtime);
        $ktp = $unixtime . '_' . $filefoto_ktp;
        $cekquery = mysqli_query($koneksi, "update anggota set anggota_nama='$nama', anggota_alamat='$alamat', anggota_tempat='$tempat', anggota_tanggal='$tanggal', anggota_handphone='$handphone', anggota_email='$email', anggota_pekerjaan='$pekerjaan', anggota_tanggungan='$tanggungan', anggota_ktp='$ktp' where anggota_id='$id'");
    } else if ($filefoto_ktp == "" && $filebukti_pembayaran == "") {
        $lama = mysqli_query($koneksi, "select * from anggota where anggota_id='$id'");
        $l = mysqli_fetch_assoc($lama);
        $nama_file_lama = $l['anggota_npwp'];
        unlink("../gambar/user/upload_npwp/" . $nama_file_lama);

        okeupload($_FILES['foto_npwp'], '../gambar/user/upload_npwp/', $unixtime);
        $npwp = $unixtime . '_' . $filefoto_npwp;
        $cekquery = mysqli_query($koneksi, "update anggota set anggota_nama='$nama', anggota_alamat='$alamat', anggota_tempat='$tempat', anggota_tanggal='$tanggal', anggota_handphone='$handphone', anggota_email='$email', anggota_pekerjaan='$pekerjaan', anggota_tanggungan='$tanggungan', anggota_npwp='$npwp' where anggota_id='$id'");
    } else if ($filefoto_ktp == "" && $filefoto_npwp == "") {
        $lama = mysqli_query($koneksi, "select * from anggota where anggota_id='$id'");
        $l = mysqli_fetch_assoc($lama);
        $nama_file_lama = $l['anggota_bukti'];
        unlink("../gambar/user/upload_bukti/" . $nama_file_lama);

        okeupload($_FILES['bukti_pembayaran'], '../gambar/user/upload_bukti/', $unixtime);
        $bukti = $unixtime . '_' . $filebukti_pembayaran;
        $cekquery = mysqli_query($koneksi, "update anggota set anggota_nama='$nama', anggota_alamat='$alamat', anggota_tempat='$tempat', anggota_tanggal='$tanggal', anggota_handphone='$handphone', anggota_email='$email', anggota_pekerjaan='$pekerjaan', anggota_tanggungan='$tanggungan', anggota_bukti='$bukti' where anggota_id='$id'");
    } else if ($filefoto_ktp != "" && $filefoto_npwp != "") {
        $lama = mysqli_query($koneksi, "select * from anggota where anggota_id='$id'");
        $l = mysqli_fetch_assoc($lama);
        $nama_file_ktp = $l['anggota_ktp'];
        unlink("../gambar/user/upload_ktp/" . $nama_file_ktp);
        $nama_file_npwp = $l['anggota_npwp'];
        unlink("../gambar/user/upload_npwp/" . $nama_file_npwp);

        okeupload($_FILES['foto_ktp'], '../gambar/user/upload_ktp/', $unixtime);
        okeupload($_FILES['foto_npwp'], '../gambar/user/upload_npwp/', $unixtime);
        $ktp = $unixtime . '_' . $filefoto_ktp;
        $npwp = $unixtime . '_' . $filefoto_npwp;
        $cekquery = mysqli_query($koneksi, "update anggota set anggota_nama='$nama', anggota_alamat='$alamat', anggota_tempat='$tempat', anggota_tanggal='$tanggal', anggota_handphone='$handphone', anggota_email='$email', anggota_pekerjaan='$pekerjaan', anggota_tanggungan='$tanggungan', anggota_ktp='$ktp',anggota_npwp='$npwp' where anggota_id='$id'");
    } else if ($filefoto_ktp != "" && $filebukti_pembayaran != "") {
        $lama = mysqli_query($koneksi, "select * from anggota where anggota_id='$id'");
        $l = mysqli_fetch_assoc($lama);
        $nama_file_ktp = $l['anggota_ktp'];
        unlink("../gambar/user/upload_ktp/" . $nama_file_ktp);
        $nama_file_bukti = $l['anggota_bukti'];
        unlink("../gambar/user/upload_bukti/" . $nama_file_bukti);

        okeupload($_FILES['foto_ktp'], '../gambar/user/upload_ktp/', $unixtime);
        okeupload($_FILES['bukti_pembayaran'], '../gambar/user/upload_bukti/', $unixtime);
        $ktp = $unixtime . '_' . $filefoto_ktp;
        $bukti = $unixtime . '_' . $filebukti_pembayaran;
        $cekquery = mysqli_query($koneksi, "update anggota set anggota_nama='$nama', anggota_alamat='$alamat', anggota_tempat='$tempat', anggota_tanggal='$tanggal', anggota_handphone='$handphone', anggota_email='$email', anggota_pekerjaan='$pekerjaan', anggota_tanggungan='$tanggungan', anggota_ktp='$ktp',anggota_bukti='$bukti' where anggota_id='$id'");
    } else if ($filefoto_npwp != "" && $filebukti_pembayaran != "") {
        $lama = mysqli_query($koneksi, "select * from anggota where anggota_id='$id'");
        $l = mysqli_fetch_assoc($lama);
        $nama_file_npwp = $l['anggota_npwp'];
        unlink("../gambar/user/upload_npwp/" . $nama_file_npwp);
        $nama_file_bukti = $l['anggota_bukti'];
        unlink("../gambar/user/upload_bukti/" . $nama_file_bukti);

        okeupload($_FILES['foto_npwp'], '../gambar/user/upload_npwp/', $unixtime);
        okeupload($_FILES['bukti_pembayaran'], '../gambar/user/upload_bukti/', $unixtime);
        $npwp = $unixtime . '_' . $filefoto_npwp;
        $bukti = $unixtime . '_' . $filebukti_pembayaran;
        $cekquery = mysqli_query($koneksi, "update anggota set anggota_nama='$nama', anggota_alamat='$alamat', anggota_tempat='$tempat', anggota_tanggal='$tanggal', anggota_handphone='$handphone', anggota_email='$email', anggota_pekerjaan='$pekerjaan', anggota_tanggungan='$tanggungan', anggota_npwp='$npwp',anggota_bukti='$bukti' where anggota_id='$id'");
    }
}
// $cekquery = mysqli_query($koneksi, "update anggota set anggota_nama='$nama', anggota_alamat='$alamat', anggota_tempat='$tempat', anggota_tanggal='$tanggal', anggota_handphone='$handphone', anggota_email='$email', anggota_pekerjaan='$pekerjaan', anggota_tanggungan='$tanggungan', anggota_ktp='$filefoto_ktp', anggota_npwp='$filefoto_npwp', anggota_bukti='$filebukti_pembayaran' where anggota_id='$id'");

if (mysqli_affected_rows($koneksi) > 0) {
    // Pesan untuk update data
    $_SESSION["success"] = 'Data Berhasil Diupdate';
    header("location:anggota.php");
} else {

    // Lokasi File
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
