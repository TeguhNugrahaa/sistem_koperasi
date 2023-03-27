<?php

$koneksi = mysqli_connect("localhost", "root", "", "belajar_koperasi");


// Check connection
if (mysqli_connect_error()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// function base_url($url = null)
// {
//     $base_url = "http://localhost/project_uang";
//     if ($url != null) {
//         return $base_url . "/" . $url;
//     } else {
//         return $base_url;
//     }
// }
