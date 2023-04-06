<?php

include '../koneksi.php';
// Menyiapkan data dari database
$query = mysqli_query($koneksi, "SELECT * FROM anggota");
$data = array();
while ($row = mysqli_fetch_assoc($query)) {
    $data[] = $row;
}
$baseUrl = 'http://localhost/belajarkoperasi/';


// Membuat objek Dompdf
require_once '../library/dompdf/autoload.inc.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$html = '<table border="1" style="border-collapse: collapse; width: 100%;">';
$html .= '<thead><tr><th>No</th></th><th>Nama Lengkap</th><th>Alamat</th><th>Tempat Lahir</th> <th>Tanggal Lahir</th><th>No Handphone</th><th>Email</th><th>Pekerjaan</th><th>Jumlah Tanggungan</th><th>KTP</th><th>NPWP</th><th>Bukti Bayar</th></tr></thead>';
$html .= '<tbody>';
foreach ($data as $item) {
    $npwp = $baseUrl . 'gambar/user/upload_npwp/' . $item['anggota_npwp'];
    $ktp = $baseUrl . 'gambar/user/upload_ktp/' . $item['anggota_ktp'];
    $bukti = $baseUrl . 'gambar/user/upload_bukti/' . $item['anggota_bukti'];
    $html .= '<tr>';
    $html .= '<td style="padding-bottom:50px;padding-left:5px;">' . $item['anggota_id'] . '</td>';
    $html .= '<td style="padding-bottom:50px;padding-left:5px;">' . $item['anggota_nama'] . '</td>';
    $html .= '<td style="padding-bottom:50px;padding-left:5px;">' . $item['anggota_alamat'] . '</td>';
    $html .= '<td style="padding-bottom:50px;padding-left:5px;">' . $item['anggota_tempat'] . '</td>';
    $html .= '<td style="padding-bottom:50px;padding-left:5px;">' . $item['anggota_tanggal'] . '</td>';
    $html .= '<td style="padding-bottom:50px;padding-left:5px;">' . $item['anggota_handphone'] . '</td>';
    $html .= '<td style="padding-bottom:50px;padding-left:5px;">' . $item['anggota_email'] . '</td>';
    $html .= '<td style="padding-bottom:50px;padding-left:5px;">' . $item['anggota_pekerjaan'] . '</td>';
    $html .= '<td style="padding-bottom:50px;padding-left:5px;">' . $item['anggota_tanggungan'] . '</td>';
    $html .= '<td><img src="' . $ktp . '" width="50"></td>';
    $html .= '<td><img src="' . $npwp . '" width="50"></td>';
    $html .= '<td><img src="' . $bukti . '" width="50"></td>';
    $html .= '</tr>';
}
$html .= '</tbody></table>';
// Menambahkan HTML ke dalam objek Dompdf
$dompdf->loadHtml($html);
//var_dump($html);
//die;

// Konfigurasi opsi Dompdf
$dompdf->setPaper('A4', 'landscape');
$dompdf->set_option('isRemoteEnabled', true);

// Render dokumen PDF dan simpan dalam bentuk file
$dompdf->render();
$output = $dompdf->output();
$name = "anggota_koperasi";
$dompdf->stream($name . ".pdf");

// untuk yang ini dihilangkan saja
//file_put_contents('anggotakoperasi.pdf', $output);
