<?php
include '../koneksi.php';

$id  = $_POST['id'];
$nama  = $_POST['nama'];
$username = $_POST['username'];
$pwd = $_POST['password'];
$password = md5($_POST['password']);



// cek gambar
$allowed =  array('gif', 'png', 'jpg', 'jpeg');
$filename = $_FILES['foto']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

// $data =
// 	[
// 		"id" => $id,
// 		"nama" => $nama,
// 		"username" => $username,
// 		"password" => $pwd,
// 		"gambar" => $filename
// 	];

// var_dump($data);
// die;


if ($pwd == "" && $filename == "") {
	mysqli_query($koneksi, "update user set user_nama='$nama', user_username='$username' where user_id='$id'");
	header("location:user.php?alert=update");
} else if ($pwd == "") {
	if (!in_array($ext, $allowed)) {
		header("location:user.php?alert=gagalupdate");
	} else {
		move_uploaded_file($_FILES['foto']['tmp_name'], '../gambar/user/' . $rand . '_' . $filename);
		$x = $rand . '_' . $filename;
		mysqli_query($koneksi, "update user set user_nama='$nama', user_username='$username', user_foto='$x' where user_id='$id'");
		header("location:user.php?alert=update");
	}
} else if ($filename == "") {
	mysqli_query($koneksi, "update user set user_nama='$nama', user_username='$username', user_password='$password' where user_id='$id'");
	header("location:user.php?alert=update");
} else {
	move_uploaded_file($_FILES['foto']['tmp_name'], '../gambar/user/' . $rand . '_' . $filename);
	$x = $rand . '_' . $filename;
	mysqli_query($koneksi, "update user set user_nama='$nama', user_username='$username', user_password='$password', user_foto='$x' where user_id='$id'");
	header("location:user.php?alert=update");
}
