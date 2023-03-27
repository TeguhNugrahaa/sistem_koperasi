<?php
// Load file autoload.php

include '../koneksi.php';

require '../library/vendor/autoload.php';

// Include librari PhpSpreadsheet
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
// Buat sebuah variabel untuk menampung pengaturan style dari header tabel
$style_col = [
    'font' => ['bold' => true], // Set font nya jadi bold
    'alignment' => [
        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
        'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
    ],
    'borders' => [
        'top' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN], // Set border top dengan garis tipis
        'right' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],  // Set border right dengan garis tipis
        'bottom' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN], // Set border bottom dengan garis tipis
        'left' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN] // Set border left dengan garis tipis
    ]
];
// Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
$style_row = [
    'alignment' => [
        'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
    ],
    'borders' => [
        'top' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN], // Set border top dengan garis tipis
        'right' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],  // Set border right dengan garis tipis
        'bottom' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN], // Set border bottom dengan garis tipis
        'left' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN] // Set border left dengan garis tipis
    ]
];
$sheet->setCellValue('A1', "Perencanaan Pendidikan Anak Perguruan Tinggi"); // Set kolom A1 dengan tulisan "DATA SISWA"
$sheet->mergeCells('A1:S1'); // Set Merge Cell pada kolom A1 sampai F1
$sheet->getStyle('A1')->getFont()->setBold(true); // Set bold kolom A1
$sheet->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
// Buat header tabel nya pada baris ke 3

$sheet->setCellValue('A3', "Nomor"); // Umur Anak Saat ini
$sheet->setCellValue('B3', "Umur Anak Saat ini"); // Umur Anak Saat ini
$sheet->setCellValue('C3', "Tingkatan Sekolah"); // Tingkatan Sekolah
$sheet->setCellValue('D3', "Sisa sekolah ke PT"); // Sisa sekolah ke PT
$sheet->setCellValue('E3', "Asumsi Inflasi saat ini sampai anak mau Kuliah"); // "Asumsi Inflasi saat ini sampai anak mau Kuliah"
$sheet->setCellValue('F3', "Asumsi Inflasi pada saat Anak Kuliah"); //"Asumsi Inflasi pada saat Anak Kuliah"
$sheet->setCellValue('G3', "Biaya uang Kuliah / Semester Saat ini"); // Biaya uang Kuliah / Semester Saat ini
$sheet->setCellValue('H3', "Biaya kuliah pada saat kuliah"); // Biaya kuliah pada saat kuliah
$sheet->setCellValue('I3', "Biaya Hidup Per Bulan Saat ini"); // Biaya Hidup Per Bulan Saat ini
$sheet->setCellValue('J3', "Biaya Hidup pada saat Kuliah"); // Biaya Hidup pada saat Kuliah
$sheet->setCellValue('K3', "Biaya Buku Per Semester"); // Biaya Buku Per Semester
$sheet->setCellValue('L3', "Biaya Masuk PT"); // Biaya Masuk PT
$sheet->setCellValue('M3', "Biaya Uang Kuliah Seluruhnya"); // Biaya Uang Kuliah Seluruhnya
$sheet->setCellValue('N3', "Biaya Hidup selama Kuliah"); // Biaya Hidup selama Kuliah
$sheet->setCellValue('O3', "Biaya Buku"); // Biaya Buku
$sheet->setCellValue('P3', "Biaya Penelitian"); // Biaya Penelitian
$sheet->setCellValue('Q3', "Total Biaya Dipersiapkan"); // Total Biaya Dipersiapkan
$sheet->setCellValue('R3', "Return Investasi direncanakan"); // Return Investasi direncanakan
$sheet->setCellValue('S3', "Dana diinvestasikan / bulannya"); // Dana diinvestasikan / bulannya




// Apply style header yang telah kita buat tadi ke masing-masing kolom header
$sheet->getStyle('A3')->applyFromArray($style_col);
$sheet->getStyle('B3')->applyFromArray($style_col);
$sheet->getStyle('C3')->applyFromArray($style_col);
$sheet->getStyle('D3')->applyFromArray($style_col);
$sheet->getStyle('E3')->applyFromArray($style_col);
$sheet->getStyle('F3')->applyFromArray($style_col);
$sheet->getStyle('G3')->applyFromArray($style_col);
$sheet->getStyle('H3')->applyFromArray($style_col);
$sheet->getStyle('I3')->applyFromArray($style_col);
$sheet->getStyle('J3')->applyFromArray($style_col);
$sheet->getStyle('K3')->applyFromArray($style_col);
$sheet->getStyle('L3')->applyFromArray($style_col);
$sheet->getStyle('M3')->applyFromArray($style_col);
$sheet->getStyle('N3')->applyFromArray($style_col);
$sheet->getStyle('O3')->applyFromArray($style_col);
$sheet->getStyle('P3')->applyFromArray($style_col);
$sheet->getStyle('Q3')->applyFromArray($style_col);
$sheet->getStyle('R3')->applyFromArray($style_col);
$sheet->getStyle('S3')->applyFromArray($style_col);

// Set height baris ke 1, 2 dan 3
$sheet->getRowDimension('1')->setRowHeight(20);
$sheet->getRowDimension('2')->setRowHeight(20);
$sheet->getRowDimension('3')->setRowHeight(20);
// Buat query untuk menampilkan semua data anak
$no = 1; // Untuk penomoran tabel, di awal set dengan 1
$row = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
$sql = mysqli_query($koneksi, "SELECT * FROM anak");
while ($data = mysqli_fetch_array($sql)) {
    // Ambil semua data dari hasil eksekusi $sql
    $sheet->setCellValue('A' . $row, $no);
    $sheet->setCellValue('B' . $row, $data['umur_sekarang']);
    $sheet->setCellValue('C' . $row, $data['tingkat_sekolah']);
    $sheet->setCellValue('D' . $row, $data['sisa_sekolah']);
    $sheet->setCellValue('E' . $row, $data['asumsi_kuliah']);
    $sheet->setCellValue('F' . $row, $data['inflasi_kuliah']);
    $sheet->setCellValue('G' . $row, $data['biaya_semester']);
    $sheet->setCellValue('H' . $row, $data['biaya_kuliah']);
    $sheet->setCellValue('I' . $row, $data['biaya_hidup']);
    $sheet->setCellValue('J' . $row, $data['hidup_kuliah']);
    $sheet->setCellValue('K' . $row, $data['biaya_buku']);
    $sheet->setCellValue('L' . $row, $data['biaya_pt']);
    $sheet->setCellValue('M' . $row, $data['biaya_seluruhnya']);
    $sheet->setCellValue('N' . $row, $data['kuliah_hidup']);
    $sheet->setCellValue('O' . $row, $data['buku_biaya']);
    $sheet->setCellValue('P' . $row, $data['biaya_penelitian']);
    $sheet->setCellValue('Q' . $row, $data['total_biaya']);
    $sheet->setCellValue('R' . $row, $data['return_investasi']);
    $sheet->setCellValue('S' . $row, $data['dana_investasi']);

    // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
    $sheet->getStyle('A' . $row)->applyFromArray($style_row);
    $sheet->getStyle('B' . $row)->applyFromArray($style_row);
    $sheet->getStyle('C' . $row)->applyFromArray($style_row);
    $sheet->getStyle('D' . $row)->applyFromArray($style_row);
    $sheet->getStyle('E' . $row)->applyFromArray($style_row);
    $sheet->getStyle('F' . $row)->applyFromArray($style_row);
    $sheet->getStyle('G' . $row)->applyFromArray($style_row);
    $sheet->getStyle('H' . $row)->applyFromArray($style_row);
    $sheet->getStyle('I' . $row)->applyFromArray($style_row);
    $sheet->getStyle('J' . $row)->applyFromArray($style_row);
    $sheet->getStyle('K' . $row)->applyFromArray($style_row);
    $sheet->getStyle('L' . $row)->applyFromArray($style_row);
    $sheet->getStyle('M' . $row)->applyFromArray($style_row);
    $sheet->getStyle('N' . $row)->applyFromArray($style_row);
    $sheet->getStyle('O' . $row)->applyFromArray($style_row);
    $sheet->getStyle('P' . $row)->applyFromArray($style_row);
    $sheet->getStyle('Q' . $row)->applyFromArray($style_row);
    $sheet->getStyle('R' . $row)->applyFromArray($style_row);
    $sheet->getStyle('S' . $row)->applyFromArray($style_row);

    $sheet->getStyle('A' . $row)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom No
    $sheet->getStyle('B' . $row)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT); // Set text left untuk kolom NIS
    $sheet->getRowDimension($row)->setRowHeight(80); // Set height tiap row
    $no++; // Tambah 1 setiap kali looping
    $row++; // Tambah 1 setiap kali looping
}
// Set width kolom
$sheet->getColumnDimension('A')->setWidth(5); // Set width kolom A
$sheet->getColumnDimension('B')->setWidth(20); // Set width kolom B
$sheet->getColumnDimension('C')->setWidth(20); // Set width kolom C
$sheet->getColumnDimension('D')->setWidth(20); // Set width kolom D
$sheet->getColumnDimension('E')->setWidth(20); // Set width kolom E
$sheet->getColumnDimension('F')->setWidth(20); // Set width kolom F
$sheet->getColumnDimension('G')->setWidth(20); // Set width kolom G
$sheet->getColumnDimension('H')->setWidth(20); // Set width kolom H
$sheet->getColumnDimension('I')->setWidth(20); // Set width kolom I
$sheet->getColumnDimension('J')->setWidth(20); // Set width kolom J
$sheet->getColumnDimension('K')->setWidth(20); // Set width kolom K
$sheet->getColumnDimension('L')->setWidth(20); // Set width kolom L
$sheet->getColumnDimension('M')->setWidth(20); // Set width kolom M
$sheet->getColumnDimension('N')->setWidth(20); // Set width kolom N
$sheet->getColumnDimension('O')->setWidth(20); // Set width kolom O
$sheet->getColumnDimension('P')->setWidth(20); // Set width kolom P
$sheet->getColumnDimension('Q')->setWidth(20); // Set width kolom Q
$sheet->getColumnDimension('R')->setWidth(20); // Set width kolom R
$sheet->getColumnDimension('S')->setWidth(20); // Set width kolom S




// set get active sheet



$spreadsheet->getActiveSheet()->setCellValue('A3', 'Nomor');
$spreadsheet->getActiveSheet()->setCellValue('B3', 'Umur Anak Saat ini');
$spreadsheet->getActiveSheet()->setCellValue('C3', 'Tingkatan Sekolah');
$spreadsheet->getActiveSheet()->setCellValue('D3', 'Sisa sekolah ke PT');
// ini untuk sisa sekolah ke pt
$spreadsheet->getActiveSheet()
    ->setCellValue('D4', '=IF(B4<6,(12+(6-B4)),(12-C4))');
$spreadsheet->getActiveSheet()->setCellValue('E3', 'Asumsi Inflasi saat ini sampai anak mau Kuliah');
$spreadsheet->getActiveSheet()->setCellValue('F3', 'Asumsi Inflasi pada saat Anak Kuliah');
$spreadsheet->getActiveSheet()->setCellValue('G3', 'Biaya uang Kuliah / Semester Saat ini');
$spreadsheet->getActiveSheet()->setCellValue('H3', 'Biaya kuliah pada saat kuliah');

// ini untuk biaya kuliah pada saat kuliah
$spreadsheet->getActiveSheet()
    ->setCellValue('H4', '=G4*(1+E4)^D4');
$spreadsheet->getActiveSheet()->setCellValue('I3', 'Biaya Hidup Per Bulan Saat ini');
$spreadsheet->getActiveSheet()->setCellValue('J3', 'Biaya Hidup pada saat Kuliah');
//ini untuk biaya hidup pada saat kuliah
$spreadsheet->getActiveSheet()
    ->setCellValue('J4', '=+I4*(1+E4)^D4');
$spreadsheet->getActiveSheet()->setCellValue('K3', 'Biaya Buku Per Semester');
$spreadsheet->getActiveSheet()->setCellValue('L3', 'Biaya Masuk PT');
$spreadsheet->getActiveSheet()->setCellValue('M3', 'Biaya Uang Kuliah Seluruhnya');
//Ini untuk biaya uang kuliah seluruhnya
$spreadsheet->getActiveSheet()
    ->setCellValue('M4', '=+H4*10');
$spreadsheet->getActiveSheet()->setCellValue('N3', 'Biaya Hidup selama Kuliah');
// Ini untuk biaya hidup pada saat kuliah
$spreadsheet->getActiveSheet()
    ->setCellValue('N4', '=5*12*J4');

$spreadsheet->getActiveSheet()->setCellValue('O3', 'Biaya Buku');
$spreadsheet->getActiveSheet()->setCellValue('P3', 'Biaya Penelitian');
$spreadsheet->getActiveSheet()->setCellValue('Q3', 'Total Biaya Dipersiapkan');
$spreadsheet->getActiveSheet()->setCellValue('R3', 'Return Investasi direncanakan');
$spreadsheet->getActiveSheet()->setCellValue('S3', 'Dana diinvestasikan / bulannya');
//Ini untuk dana investasi per bulannya
$spreadsheet->getActiveSheet()
    ->setCellValue('S4', '=+Q4/(((1+(R4/12))^(D4*12)-1)/(R4/12))');









//$spreadsheet->getActiveSheet()
//->setCellValue('D4', '=IF(B5<6, (12+(6-B5)), (12-C5))');

// ini untuk biaya kuliah pada saat kuliah
//$spreadsheet->getActiveSheet()
//->setCellValue('H4', '=G3*(1+E3)^D3');

//ini untuk biaya hidup pada saat kuliah
//$spreadsheet->getActiveSheet()
//->setCellValue('J4', '=+I4*(1+E4)^D4');

//Ini untuk biaya uang kuliah seluruhnya
//$spreadsheet->getActiveSheet()
//->setCellValue('M4', '=+H4*10');

// Ini untuk biaya hidup pada saat kuliah
//$spreadsheet->getActiveSheet()
//->setCellValue('N4', '=5*12*J3');

//Ini untuk dana investasi per bulannya

//$spreadsheet->getActiveSheet()
//->setCellValue('S4', '=+Q4/(((1+(R4/12))^(D4*12)-1)/(R4/12))');


//Set orientasi kertas jadi LANDSCAPE
$sheet->getPageSetup()->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
// Set judul file excel nya
//$sheet->setTitle("Laporan Data Anak");
// Proses file excel
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="Data Anak.xls"'); // Set nama file excel nya
header('Cache-Control: max-age=0');
$writer = new Xlsx($spreadsheet);
$writer->save('php://output');
