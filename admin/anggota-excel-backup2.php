<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Anggota-Excel.xls");
?>


<table class="table table-bordered table-striped" style="border: 1; border-collapse: collapse;">
    <thead>
        <tr>

            <th style="border-width:medium;" rowspan="2">NO</th>
            <th style="border:medium;" rowspan="2">NAMA LENGKAP</th>
            <th style="border-width:medium;" rowspan="2">ALAMAT</th>
            <th style="border-width:medium;" rowspan="2">TEMPAT LAHIR</th>
            <th style="border-width:medium;" rowspan="2">NO HANDPHONE</th>
            <th style="border-width:medium;" rowspan="2">EMAIL</th>
            <th style="border-width:medium;" rowspan="2">PEKERJAAN</th>
            <th style="border-width:medium;" rowspan="2">JUMLAH TANGGUNGAN SAAT INI</th>
            <th style="border-width:medium;" rowspan="2">FOTO KTP</th>
            <th style="border-width:medium;" rowspan="2">FOTO NPWP ANGGOTA</th>
            <th style="border-width:medium;" rowspan="2">UPLOAD BUKTI PEMBAYARAN</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($anggota as $data) { ?>
            <tr>
                <!--td><!?= no->anggota_id ?></td>-->
                <td><?= $data->anggota_id ?></td>
                <td style="text-align:center"><?= $data->anggota_nama ?></td>
                <td style="text-align:center"><?= $data->anggota_alamat ?></td>
                <td style="text-align:center"><?= $data->anggota_tempat ?></td>
                <td style="text-align:center"><?= $data->anggota_tanggal ?></td>
                <td style="text-align:center"><?= $data->anggota_handphone ?></td>
                <td style="text-align:center"><?= $data->anggota_email ?></td>
                <td style="text-align:center"><?= $data->anggota_pekerjaan ?></td>
                <td style="text-align:center"><?= $data->anggota_tanggungan ?></td>


                <td style="width:135px; height:135px; text-align:center;">
                    <img src="<?= base_url() . '../gambar/user/upload_ktp/' . $data->anggota_ktp ?>TH.jpg" style="margin:5px; text-align:center; vertical-align:middle;" />
                    <img src="<?= base_url() . '../gambar/user/upload_npwp/' . $data->anggota_npwp ?>TH.jpg" style="margin:5px; text-align:center; vertical-align:middle;" />
                    <img src="<?= base_url() . '../gambar/user/upload_bukti/' . $data->anggota_bukti ?>TH.jpg" style="margin:5px; text-align:center; vertical-align:middle;" />


                </td>

            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
</div>
</div>

</div>
</section>
</div>
</section>

</div>
<?php include 'footer.php'; ?>