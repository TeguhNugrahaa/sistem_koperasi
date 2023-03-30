<?php
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="file_excel.xls"');



echo '<table class="table table-bordered table-striped" style="border: 1; border-collapse: collapse;">';
echo '  <thead>';
echo '     <tr>';
echo '           <th width="1%">NO</th>';
echo '           <th width="1%">NAMA LENGKAP</th>';
echo '        <th class="text-center">ALAMAT</th>';
echo '   <th class="text-center">TEMPAT LAHIR</th>';
echo '<th class="text-center">TANGGAL LAHIR</th>';
echo '            <th class="text-center">NO. HANDPHONE</th>';
echo '            <th class="text-center">EMAIL</th>';
echo '            <th class="text-center">PEKERJAAN</th>';
echo '            <th class="text-center">JUMLAH TANGGUNGAN SAAT INI</th>';
echo '            <th class="text-center">FOTO KTP</th>';
echo '            <th class="text-center">FOTO NPWP ANGGOTA</th>';
echo '            <th class="text-center">UPLOAD BUKTI PEMBAYARAN</th>';
echo '        </tr>';
echo '    </thead>';
echo '    <tbody>';
include '../koneksi.php';
$no = 1;
$data = mysqli_query($koneksi, "SELECT * FROM anggota");

while ($d = mysqli_fetch_array($data)) {

    $baseUrl = 'http://localhost/sistem_koperasi/';
    $npwp = $baseUrl . 'gambar/user/upload_npwp/' . $d['anggota_npwp'];
    $ktp = $baseUrl . 'gambar/user/upload_ktp/' . $d['anggota_ktp'];
    $bukti = $baseUrl . 'gambar/user/upload_bukti/' . $d['anggota_bukti'];
    $width = 100;
    $imagenpwp = '<img src="' . $npwp . '" width="' . $width . '" />';
    $imagektp = '<img src="' . $ktp . '" width="' . $width . '" />';
    $imagebukti = '<img src="' . $bukti . '" width="' . $width . '" />';


    echo '            <tr style="text-align: center;">';
    echo '                <td class="text-center">' . $no++ . '</td>';
    echo '                <td class="text-center">' . $d['anggota_nama'] . '</td>';
    echo '                <td class="text-center">' . $d['anggota_alamat'] . '</td>';
    echo '                <td class="text-center">' . $d['anggota_tempat'] . '</td>';
    echo '                <td class="text-center">' . $d['anggota_tanggal'] . ' </td>';
    echo '                <td class="text-center">' . $d['anggota_handphone'] . ' </td>';
    echo '                <td class="text-center">' . $d['anggota_email'] . '</td>';
    echo '                <td class="text-center">' . $d['anggota_pekerjaan'] . '</td>';
    echo '                <td class="text-center">' . $d['anggota_tanggungan'] . '</td>';



    echo '                <td class="text-center">' . $imagektp . '</td>';
    echo '                <td class="text-center">' . $imagenpwp . '</td>';
    echo '                <td class="text-center">' . $imagebukti . '</td>';



    echo '            </tr>';
}

echo '    </tbody>';
echo '</table>';
echo '</div>';
echo '</div>';

echo '</div>';
echo '</section>';
echo '</div>';
echo '</section>';

echo '</div>';

?>;
<?php include 'footer.php'; ?>;