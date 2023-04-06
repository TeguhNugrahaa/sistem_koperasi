<?php

include '../koneksi.php';
// Menyiapkan data dari database
$query = mysqli_query($koneksi, "SELECT * FROM pinjaman");
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
$html .= '<thead><tr><th>No</th></th><th>Kode Pinjam</th><th>Nama Anggota</th><th>Tanggal Pinjam</th> <th>Tanggal Tempo</th><th>Jenis Pinjaman</th> <th>Besar Pinjaman</th><th>Lama Angsuran</th><th>Status Pinjaman</tr></thead>';
$html .= '<tbody>';
foreach ($data as $item) {

    $html .= '<tr>';
    $html .= '<td style="padding-bottom:50px;padding-left:5px;">' . $item['pinjaman_id'] . '</td>';
    $html .= '<td style="padding-bottom:50px;padding-left:5px;">' . $item['kode_pinjam'] . '</td>';
    $html .= '<td style="padding-bottom:50px;padding-left:5px;">' . $item['nama_anggota'] . '</td>';
    $html .= '<td style="padding-bottom:50px;padding-left:5px;">' . $item['tanggal_pinjam'] . '</td>';
    $html .= '<td style="padding-bottom:50px;padding-left:5px;">' . $item['tanggal_tempo'] . '</td>';
    $html .= '<td style="padding-bottom:50px;padding-left:5px;">' . $item['jenis_pinjam'] . '</td>';
    $html .= '<td style="padding-bottom:50px;padding-left:5px;">' . $item['besar_pinjam'] . '</td>';
    $html .= '<td style="padding-bottom:50px;padding-left:5px;">' . $item['lama_angsuran'] . '</td>';
    $html .= '<td style="padding-bottom:50px;padding-left:5px;">' . $item['status_pinjaman'] . '</td>';
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
$name = "pinjaman_koperasi";
$dompdf->stream($name . ".pdf");

// untuk yang ini dihilangkan saja
//file_put_contents('anggotakoperasi.pdf', $output);
