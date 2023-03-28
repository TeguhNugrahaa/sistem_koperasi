<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Simpanan-Excel.xlsx");
?>


<table class="table table-bordered table-striped" style="border: 1; border-collapse: collapse;">
    <thead>
        <tr>

            <th width="1%">NO</th>
            <th width="1%">KODE SIMPANAN</th>
            <th class="text-center">JENIS SIMPANAN</th>
            <th class="text-center">BESAR SIMPANAN</th>
            <th class="text-center">KODE ANGGOTA</th>
            <th class="text-center">TANGGAL MASUK</th>
            <th width="10%" class="text-center">OPSI</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include '../koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM simpanan");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr style="text-align: center;">
                <td class="text-center"><?php echo $no++; ?></td>
                <td class="text-center"><?php echo $d['kode_simpanan']; ?></td>
                <td class="text-center"><?php echo $d['jenis_simpanan']; ?></td>
                <td class="text-center"><?php echo $d['besar_simpanan']; ?></td>
                <td class="text-center"><?php echo $d['kode_anggota']; ?></td>
                <td class="text-center"><?php echo $d['tanggal_masuk']; ?></td>

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