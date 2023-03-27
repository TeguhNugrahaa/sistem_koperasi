<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Tabungan-Excel.xls");
?>


<table class="table table-bordered table-striped" style="border: 1; border-collapse: collapse;">
    <thead>
        <tr>

            <th width="1%">NO</th>
            <th width="1%">KODE TABUNGAN</th>
            <th class="text-center">NAMA ANGGOTA</th>
            <th class="text-center">TANGGAL INVESTASI</th>
            <th class="text-center">JUMLAH SALDO</th>
            <th class="text-center">REKENING BANK</th>
            <th width="10%" class="text-center">OPSI</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include '../koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM tabungan");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr style="text-align: center;">
                <td class="text-center"><?php echo $no++; ?></td>
                <td class="text-center"><?php echo $d['kode_tabungan']; ?></td>
                <td class="text-center"><?php echo $d['anggota_tabungan']; ?></td>
                <td class="text-center"><?php echo $d['tabungan_tanggal']; ?></td>
                <td class="text-center"><?php echo $d['saldo']; ?></td>
                <td class="text-center"><?php echo $d['rekening_bank']; ?></td>

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