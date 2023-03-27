
<?php
// Load file autoload.php

include '../koneksi.php';

require '../library/vendor/autoload.php';

// Include library PhpSpreadsheet
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
$sheet->setCellValue('A1', "Perhitungan Pensiun"); // Set kolom A1 dengan tulisan "Perhitungan pensiun"
$sheet->mergeCells('A1:K1'); // Set Merge Cell pada kolom A1 sampai K1
$sheet->getStyle('A1')->getFont()->setBold(true); // Set bold kolom A1
$sheet->getStyle('A1')->getFont()->setSize(20); // Set font size 15 untuk kolom A1
// Buat header tabel nya pada baris ke 3

$sheet->setCellValue('A3', "Nomor"); // Nomor
$sheet->setCellValue('B3', "Umur saat ini"); //Umur saat ini
$sheet->setCellValue('C3', "Umur Pensiun"); // Umur Pensiun
$sheet->setCellValue('D3', "Jumlah Waktu sisa"); // Jumlah Waktu sisa
$sheet->setCellValue('E3', "Biaya Berdua saat ini"); // "Biaya Berdua saat ini
$sheet->setCellValue('F3', "Asumsi Inflasi"); //"Asumsi Inflasi"
$sheet->setCellValue('G3', "Biaya Saat Pensiun"); // Biaya Saat Pensiun
$sheet->setCellValue('H3', "Bunga Deposito Waktu Pensiun"); // Bunga Deposito Waktu Pensiun
$sheet->setCellValue('I3', "Total Dana Persiapan Pensiun"); // Total Dana Persiapan Pensiun
$sheet->setCellValue('J3', "Return Investasi Periode Kerja"); // Return Investasi Periode Kerja
$sheet->setCellValue('K3', "Simpanan Per Bulan"); // Simpanan Per Bulan



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


// Set height baris ke 1, 2 dan 3
$sheet->getRowDimension('1')->setRowHeight(30);
$sheet->getRowDimension('2')->setRowHeight(30);
$sheet->getRowDimension('3')->setRowHeight(30);
// Buat query untuk menampilkan semua data anak
$no = 1; // Untuk penomoran tabel, di awal set dengan 1
$row = 3; // Set baris pertama untuk isi tabel adalah baris ke 4
$sql = mysqli_query($koneksi, "SELECT * FROM pensiun");
while ($data = mysqli_fetch_array($sql)) {
    // Ambil semua data dari hasil eksekusi $sql
    $sheet->setCellValue('A' . $row, $no);
    $sheet->setCellValue('B' . $row, $data['umur_sekarang']);
    $sheet->setCellValue('C' . $row, $data['umur_pensiun']);
    $sheet->setCellValue('D' . $row, $data['jumlah_sisa']);
    $sheet->setCellValue('E' . $row, $data['biaya_berdua']);
    $sheet->setCellValue('F' . $row, $data['asumsi_inflasi']);
    $sheet->setCellValue('G' . $row, $data['biaya_pensiun']);
    $sheet->setCellValue('H' . $row, $data['bunga_deposito']);
    $sheet->setCellValue('I' . $row, $data['total_dana']);
    $sheet->setCellValue('J' . $row, $data['return_investasi']);
    $sheet->setCellValue('K' . $row, $data['simpanan']);



    //$umur_sekarang  = $_POST['umur_sekarang'];
    //$umur_pensiun  = $_POST['umur_pensiun'];


    //$data =
    //[
    //"umur_sekarang" => $umur_sekarang,
    //"umur_pensiun" => $umur_pensiun

    //];

    //var_dump($data);
    //die;




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

    $sheet->getStyle('A' . $row)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom No
    $sheet->getStyle('B' . $row)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT); // Set text left untuk kolom NIS
    $sheet->getRowDimension($row)->setRowHeight(80); // Set height tiap row
    $no++; // Tambah 1 setiap kali looping
    $row++; // Tambah 1 setiap kali looping
}
// Set width kolom
$sheet->getColumnDimension('A')->setWidth(10); // Set width kolom A
$sheet->getColumnDimension('B')->setWidth(30); // Set width kolom B
$sheet->getColumnDimension('C')->setWidth(30); // Set width kolom C
$sheet->getColumnDimension('D')->setWidth(30); // Set width kolom D
$sheet->getColumnDimension('E')->setWidth(30); // Set width kolom E
$sheet->getColumnDimension('F')->setWidth(30); // Set width kolom F
$sheet->getColumnDimension('G')->setWidth(30); // Set width kolom G
$sheet->getColumnDimension('H')->setWidth(30); // Set width kolom H
$sheet->getColumnDimension('I')->setWidth(30); // Set width kolom I
$sheet->getColumnDimension('J')->setWidth(30); // Set width kolom J
$sheet->getColumnDimension('K')->setWidth(30); // Set width kolom K



// set get active sheet

$spreadsheet->getActiveSheet()->setCellValue('A3', 'Nomor');
$spreadsheet->getActiveSheet()->setCellValue('B3', 'Umur saat ini');
$spreadsheet->getActiveSheet()->setCellValue('C3', 'Umur Pensiun');
$spreadsheet->getActiveSheet()->setCellValue('D3', 'Jumlah Waktu sisa');
// ini jumlah waktu sisa pensiun
$spreadsheet->getActiveSheet()
    ->setCellValue('D4', '=(B4-A4)');
$spreadsheet->getActiveSheet()->setCellValue('E3', 'Biaya Berdua saat ini');
$spreadsheet->getActiveSheet()->setCellValue('F3', 'Asumsi Inflasi');
$spreadsheet->getActiveSheet()->setCellValue('G3', 'Biaya Saat Pensiun');
// ini untuk biaya saat pensiun
$spreadsheet->getActiveSheet()
    ->setCellValue('G4', '=E4*(1+F4/100) ^ (D4)');
$spreadsheet->getActiveSheet()->setCellValue('H3', 'Bunga Deposito Waktu Pensiun');


$spreadsheet->getActiveSheet()->setCellValue('I3', 'Total Dana Persiapan Pensiun');
//Ini untuk total dana persiapan pensiun
$spreadsheet->getActiveSheet()
    ->setCellValue('I4', '=(G4*12)/ (H4/100)');
$spreadsheet->getActiveSheet()->setCellValue('J3', 'Return Investasi Periode Kerja');

$spreadsheet->getActiveSheet()->setCellValue('K3', 'Simpanan Per Bulan');

// ini untuk simpanan per bulan
$spreadsheet->getActiveSheet()
    ->setCellValue('K4', '=I4/(((1+(J4/12))^(F4*12)-1)/(J4/12))');

//Set orientasi kertas jadi LANDSCAPE
$sheet->getPageSetup()->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
// Set judul file excel nya
// Proses file excel
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header("Content-Disposition: attachment; filename=Laporan-Pensiun-Formula-Excel.xlsx"); // Set nama file excel nya
header('Cache-Control: max-age=0');
$writer = new Xlsx($spreadsheet);
$writer->save('php://output');
