<?php

include 'koneksi.php';

if (isset($_POST['addregis'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $level = $_POST["level"];

    $extensi = explode(".", $_FILES['foto']['name']);
    $foto = "foto_user-" . round(microtime(true)) . "." . end($extensi);
    $sumber = $_FILES['foto']['tmp_name'];
    $upload = move_uploaded_file($sumber, "../gambar/user/" . $foto);

    mysqli_query($koneksi, "INSERT INTO user (user_nama, user_username, user_password, user_foto, user_level) VALUES ('$nama', '$username', '$password', '$foto', '$level')");

    header("location:http://localhost/project_keuangan/index.php?alert=daftar");

    //header("location:https://financemci.soalberganda.com/index.php?alert=daftar");
}
// if (isset($_POST['addregis'])) {
//     $nama = $_POST['nama'];
//     // $data = [
//     //     "nama" => $nama,
//     // ];
//     mysqli_query($conn, "INSERT INTO tb_dump (nama_dump) VALUES ('$nama')") or die(mysqli_error($conn));
// } else {
//     echo "S";
// }
