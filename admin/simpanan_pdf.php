<?php

include '../koneksi.php';
// Menyiapkan data dari database
$query = mysqli_query($koneksi, "SELECT * FROM simpanan");
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
$html .= '<thead><tr><th>No</th></th><th>Kode Simpanan</th><th>Jenis Simpanan</th><th>Besar Simpanan</th> <th>Kode Anggota</th><th>Tanggal Masuk</tr></thead>';
$html .= '<tbody>';
foreach ($data as $item) {

    $html .= '<tr>';
    $html .= '<td style="padding-bottom:50px;padding-left:5px;">' . $item['simpanan_id'] . '</td>';
    $html .= '<td style="padding-bottom:50px;padding-left:5px;">' . $item['kode_simpanan'] . '</td>';
    $html .= '<td style="padding-bottom:50px;padding-left:5px;">' . $item['jenis_simpanan'] . '</td>';
    $html .= '<td style="padding-bottom:50px;padding-left:5px;">' . $item['besar_simpanan'] . '</td>';
    $html .= '<td style="padding-bottom:50px;padding-left:5px;">' . $item['kode_anggota'] . '</td>';
    $html .= '<td style="padding-bottom:50px;padding-left:5px;">' . $item['tanggal_masuk'] . '</td>';
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
$name = "simpanan_koperasi";
$dompdf->stream($name . ".pdf");

// untuk yang ini dihilangkan saja
//file_put_contents('anggotakoperasi.pdf', $output);
