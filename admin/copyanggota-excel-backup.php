 <?php

    $rowNumber = 22;
    foreach ($anggota as $data) {
        $this->excel->getActiveSheet()->setCellValue('A' . $rowNumber, $data->anggota_id)
            ->setCellValue('B' . $rowNumber, $data->anggota_nama);


        $this->excel->getActiveSheet()->setCellValue('C' . $rowNumber, $data->$anggota_nama);
        $this->excel->getActiveSheet()->setCellValue('D' . $rowNumber, $data->$anggota_alamat);
        $this->excel->getActiveSheet()->setCellValue('E' . $rowNumber, $data->$anggota_tempat);
        $this->excel->getActiveSheet()->setCellValue('F' . $rowNumber, $data->$anggota_tanggal);
        $this->excel->getActiveSheet()->setCellValue('G' . $rowNumber, $data->$anggota_handphone);
        $this->excel->getActiveSheet()->setCellValue('H' . $rowNumber, $data->$anggota_email);
        $this->excel->getActiveSheet()->setCellValue('I' . $rowNumber, $data->$anggota_pekerjaan);
        $this->excel->getActiveSheet()->setCellValue('J' . $rowNumber, $data->$anggota_tanggungan);
        $rowNumber++;

        if (file_exists('../gambar/user/upload_ktp/' . $data->image . 'KTP.jpg')) {
            $objDrawing = new PHPExcel_Worksheet_Drawing();
            $objDrawing->setPath('../gambar/user/upload_ktp/' . $data->image . 'KTP.jpg');
            $objDrawing->setCoordinates('K' . $rowNumber);
            $objDrawing->setWorksheet($this->excel->getActiveSheet());
            $this->excel->getActiveSheet()->getRowDimension($rowNumber)->setRowHeight(120);
        } else {
            $this->excel->getActiveSheet()->setCellValue('K' . $rowNumber, '');
        }

        if (file_exists('../gambar/user/upload_npwp/' . $data->image . 'NPWP.jpg')) {
            $objDrawing = new PHPExcel_Worksheet_Drawing();
            $objDrawing->setPath('../gambar/user/upload_npwp/' . $data->image . 'NPWP.jpg');
            $objDrawing->setCoordinates('L' . $rowNumber);
            $objDrawing->setWorksheet($this->excel->getActiveSheet());
            $this->excel->getActiveSheet()->getRowDimension($rowNumber)->setRowHeight(120);
        } else {
            $this->excel->getActiveSheet()->setCellValue('L' . $rowNumber, '');
        }

        if (file_exists('../gambar/user/upload_bukti/' . $data->image . 'Bukti.jpg')) {
            $objDrawing = new PHPExcel_Worksheet_Drawing();
            $objDrawing->setPath('../gambar/user/upload_bukti/' . $data->image . 'Bukti.jpg');
            $objDrawing->setCoordinates('M' . $rowNumber);
            $objDrawing->setWorksheet($this->excel->getActiveSheet());
            $this->excel->getActiveSheet()->getRowDimension($rowNumber)->setRowHeight(120);
        } else {
            $this->excel->getActiveSheet()->setCellValue('M' . $rowNumber, '');
        }
    } ?>