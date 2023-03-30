<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Anggota-Excel.xls");
?>


<table class="table table-bordered table-striped" style="border: 1; border-collapse: collapse;">
    <thead>
        <tr>
            <th width="1%">NO</th>
            <th width="1%">NAMA LENGKAP</th>
            <th class="text-center">ALAMAT</th>
            <th class="text-center">TEMPAT LAHIR</th>
            <th class="text-center">TANGGAL LAHIR</th>
            <th class="text-center">NO. HANDPHONE</th>
            <th class="text-center">EMAIL</th>
            <th class="text-center">PEKERJAAN</th>
            <th class="text-center">JUMLAH TANGGUNGAN SAAT INI</th>
            <th class="text-center">FOTO KTP</th>
            <th class="text-center">FOTO NPWP ANGGOTA</th>
            <th class="text-center">UPLOAD BUKTI PEMBAYARAN</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include '../koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM anggota");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr style="text-align: center;">
                <td class="text-center"><?php echo $no++; ?></td>
                <td class="text-center"><?php echo $d['anggota_nama']; ?></td>
                <td class="text-center"><?php echo $d['anggota_alamat']; ?></td>
                <td class="text-center"><?php echo $d['anggota_tempat']; ?></td>
                <td class="text-center"><?php echo $d['anggota_tanggal']; ?></td>
                <td class="text-center"><?php echo $d['anggota_handphone']; ?></td>
                <td class="text-center"><?php echo $d['anggota_email']; ?></td>
                <td class="text-center"><?php echo $d['anggota_pekerjaan']; ?></td>
                <td class="text-center"><?php echo $d['anggota_tanggungan']; ?></td>



                <td class="text-center"><img src="../gambar/user/upload_ktp/<?php echo $d['anggota_ktp']; ?>" width="50px"></td>
                <td class="text-center"><img src="../gambar/user/upload_npwp/<?php echo $d['anggota_npwp']; ?>" width="50px"></td>
                <td class="text-center"><img src="../gambar/user/upload_bukti/<?php echo $d['anggota_bukti']; ?>" width="50px"></td>

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