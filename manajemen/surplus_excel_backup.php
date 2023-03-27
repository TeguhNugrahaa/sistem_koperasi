<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Surplus-Excel.xls");
?>


<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th width="1%" rowspan="2">NO</th>
            <th width="10%" rowspan="2" class="text-center">TANGGAL</th>
            <th rowspan="2" class="text-center">KATEGORI</th>
            <th rowspan="2" class="text-center">KETERANGAN</th>
            <th colspan="2" class="text-center">JENIS</th>
        </tr>
        <tr>
            <th class="text-center">PEMASUKAN</th>
            <th class="text-center">PENGELUARAN</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include '../koneksi.php';
        $no = 1;
        $total_pemasukan = 0;
        $total_pengeluaran = 0;

        if (isset($_GET['tanggal_sampai']) && isset($_GET['tanggal_dari']) && isset($_GET['kategori']));
        $tgl_dari = $_GET['tanggal_dari'];
        $tgl_sampai = $_GET['tanggal_sampai'];
        $kategori = $_GET['kategori'];


        if ($kategori == "semua") {
            $data = mysqli_query($koneksi, "SELECT * FROM transaksi,kategori where kategori_id=transaksi_kategori order by transaksi_id desc");
        } else {
            $data = mysqli_query($koneksi, "SELECT * FROM transaksi,kategori where transaksi_id=transaksi_kategori and transaksi_id='$transaksi' and date(transaksi_tanggal)>='$tgl_dari' and date(transaksi_tanggal)<='$tgl_sampai'");
        }
        while ($d = mysqli_fetch_array($data)) {

            if ($d['transaksi_jenis'] == "Pemasukan") {
                $total_pemasukan += $d['transaksi_nominal'];
            } elseif ($d['transaksi_jenis'] == "Pengeluaran") {
                $total_pengeluaran += $d['transaksi_nominal'];
            }
        ?>
            <tr>
                <td class="text-center"><?php echo $no++; ?></td>
                <td class="text-center"><?php echo date('d-m-Y', strtotime($d['transaksi_tanggal'])); ?></td>
                <td><?php echo $d['kategori']; ?></td>
                <td><?php echo $d['transaksi_keterangan']; ?></td>
                <td class="text-center">
                    <?php
                    if ($d['transaksi_jenis'] == "Pemasukan") {
                        echo "Rp. " . number_format($d['transaksi_nominal']) . " ,-";
                    } else {
                        echo "-";
                    }
                    ?>
                </td>
                <td class="text-center">
                    <?php
                    if ($d['transaksi_jenis'] == "Pengeluaran") {
                        echo "Rp. " . number_format($d['transaksi_nominal']) . " ,-";
                    } else {
                        echo "-";
                    }
                    ?>
                </td>
                </td>
            </tr>
        <?php
        }
        ?>
        <tr>
            <th colspan="4" class="text-right">TOTAL</th>
            <td class="text-center text-bold text-success"><?php echo "Rp. " . number_format($total_pemasukan) . " ,-"; ?></td>
            <td class="text-center text-bold text-danger"><?php echo "Rp. " . number_format($total_pengeluaran) . " ,-"; ?></td>

        </tr>
        <tr>
            <th colspan="4" class="text-right">SALDO</th>
            <td colspan="2" class="text-center text-bold text-white bg-primary"><?php echo "Rp. " . number_format($total_pemasukan - $total_pengeluaran) . " ,-"; ?></td>
        </tr>
    </tbody>
</table>



</div>