<?php
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
// dikurungkan untuk foto_ktp, npwp, sma bukti pembayarannya
//$foto_ktp  = $_POST['foto_ktp'];
//$foto_npwp  = $_POST['foto_npwp'];
//$bukti_pembayaran = $_POST['bukti_pembayaran'];

// ini untuk check postnya
//print_r($_POST);
//die;
$rand = rand(1, 10);
$allowed =  array('gif', 'png', 'jpg', 'jpeg');

//$filefoto_ktp = $rand . $_FILES['foto_ktp']['name'];
//$xfoto_ktp = explode('.', $filefoto_ktp);
//$ekstensifoto_ktp = strtolower(end($xfoto_ktp));
//$ukuranfoto_ktp    = $_FILES['foto_ktp']['size'];
//$file_tmpfoto_ktp = $_FILES['foto_ktp']['tmp_name'];

//$filefoto_npwp = $rand . $_FILES['foto_npwp']['name'];
//$xfoto_npwp = explode('.', $filefoto_npwp);
//$ekstensifoto_npwp = strtolower(end($xfoto_npwp));
//$ukuranfoto_npwp    = $_FILES['foto_npwp']['size'];
//$file_tmpfoto_npwp = $_FILES['foto_npwp']['tmp_name'];

//$filebukti_pembayaran = $rand . $_FILES['bukti_pembayaran']['name'];
//$xbukti_pembayaran = explode('.', $filebukti_pembayaran);
//$ekstensibukti_pembayaran = strtolower(end($xbukti_pembayaran));
//$ukuranbukti_pembayaran    = $_FILES['bukti_pembayaran']['size'];
//$file_tmpbukti_pembayaran = $_FILES['bukti_pembayaran']['tmp_name'];

$sekarang = date('Y-m-d H:i:s');
$unixtime = strtotime($sekarang);
//pastikan ada nama file, jika tidak ada ganti jadi n/a agar database tetap terisi
$filefoto_ktp = !empty($_FILES['foto_ktp']['name']) ? $unixtime . "_" . $_FILES['foto_ktp']['name'] : 'n/a';
$filefoto_npwp = !empty($_FILES['foto_npwp']['name']) ? $unixtime . "_" . $_FILES['foto_npwp']['name'] : 'n/a';
$filebukti_pembayaran = !empty($_FILES['bukti_pembayaran']['name']) ? $unixtime . "_" . $_FILES['bukti_pembayaran']['name'] : 'n/a';

okeupload($_FILES['foto_ktp'], '../gambar/user/upload_ktp/', $unixtime);
okeupload($_FILES['foto_npwp'], '../gambar/user/upload_npwp/', $unixtime);
okeupload($_FILES['bukti_pembayaran'], '../gambar/user/upload_bukti/', $unixtime);

mysqli_query($koneksi, "insert into anggota values (NULL,'$nama','$alamat', '$tempat', '$tanggal', '$handphone', '$email', '$pekerjaan', '$tanggungan', '$filefoto_ktp', '$filefoto_npwp', '$filebukti_pembayaran')");

if (mysqli_affected_rows($koneksi) > 0) header("location:anggota.php?alert=insert");
else header("location:anggota.php?alert=gagalinsert");


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

//
/*
if ($file_tmpfoto_ktp == "foto_ktp") {
    mysqli_query($koneksi, "insert into anggota values (NULL,'$nama','$alamat', '$tempat', '$tanggal', '$handphone', '$email', '$pekerjaan', '$tanggungan', '$filefoto_ktp', '$filefoto_npwp', '$filebukti_pembayaran')");
    header("location:anggota.php?alert=insert");
} else {
    $ext = pathinfo($file_tmpfoto_ktp, PATHINFO_EXTENSION);

    if (!in_array($ext, $allowed)) {
        header("location:anggota.php?alert=gagalinsert");
    } else {

        move_uploaded_file($file_tmpfoto_ktp, '../gambar/user/upload_ktp/' . $filefoto_ktp);
        //move_uploaded_file($file_tmpfoto_npwp, '../gambar/user/upload_npwp/' . $filefoto_npwp);
        //move_uploaded_file($file_tmpbukti_pembayaran, '../gambar/user/upload_bukti/' . $filebukti_pembayaran);

        // $file_gambar = $rand . '_' . $filename;

        mysqli_query($koneksi, "insert into anggota() values (NULL,'$nama','$alamat', '$tempat_lahir', '$tanggal_lahir', '$handphone', '$email', '$pekerjaan', '$tanggungan', '$filefoto_ktp', '$filefoto_npwp', '$filebukti_pembayaran')");
        header("location:anggota.php?alert=insert");
    }
}
*/