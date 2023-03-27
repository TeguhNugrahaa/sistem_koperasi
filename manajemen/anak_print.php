<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laporan anak</title>
    <link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">

</head>

<body>

    <center>
        <h4>LAPORAN</h4>
        <h4>ANAK</h4>
    </center>


    <table class="table table-bordered table-striped" style="border: 1; border-collapse: collapse;">
        <thead>

            <th width="1%">NO</th>
            <th>UMUR ANAK SAAT INI</th>
            <th class="text-center">TINGKATAN SEKOLAH</th>
            <th class="text-center">SISA SEKOLAH KE PT</th>
            <th class="text-center">ASUMSI INFLASI SAAT INI SAMPAI ANAK MAU KULIAH (%)</th>
            <th class="text-center">ASUMSI INFLASI PADA SAAT ANAK MAU KULIAH (%)</th>
            <th class="text-center">BIAYA UANG KULIAH/ SEMESTER SAAT INI</th>
            <th class="text-center">BIAYA KULIAH PADA SAAT KULIAH</th>
            <th class="text-center">BIAYA HIDUP PER BULAN SAAT INI</th>
            <th class="text-center">BIAYA HIDUP PADA SAAT KULIAH</th>
            <th class="text-center">BIAYA BUKU PER SEMESTER</th>
            <th class="text-center">BIAYA MASUK PT</th>
            <th class="text-center">BIAYA UANG KULIAH SELURUHNYA</th>
            <th class="text-center">BIAYA HIDUP SELAMA KULIAH</th>
            <th class="text-center">BIAYA BUKU</th>
            <th class="text-center">BIAYA PENELITIAN</th>
            <th class="text-center">TOTAL BIAYA DIPERSIAPKAN</th>
            <th class="text-center">RETURN INVESTASI DIRENCAKAN (%)</th>
            <th class="text-center">DANA DI INVESTASIKAN/ BULANNYA</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include '../koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * FROM anak");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr style="text-align: center;">
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['umur_sekarang']; ?></td>
                    <td><?php echo $d['tingkat_sekolah']; ?></td>
                    <td><?php echo $d['sisa_sekolah']; ?></td>
                    <td><?php echo $d['asumsi_kuliah']; ?></td>
                    <td><?php echo $d['inflasi_kuliah']; ?></td>
                    <td><?php echo "Rp. " . number_format($d['biaya_semester']) . " ,-"; ?></td>
                    <td><?php echo "Rp. " . number_format($d['biaya_kuliah']) . " ,-"; ?></td>
                    <td><?php echo "Rp. " . number_format($d['biaya_hidup']) . " ,-"; ?></td>
                    <td><?php echo "Rp. " . number_format($d['hidup_kuliah']) . " ,-"; ?></td>
                    <td><?php echo "Rp. " . number_format($d['biaya_buku']) . " ,-"; ?></td>
                    <td><?php echo "Rp. " . number_format($d['biaya_pt']) . " ,-"; ?></td>
                    <td><?php echo "Rp. " . number_format($d['biaya_seluruhnya']) . " ,-"; ?></td>
                    <td><?php echo "Rp. " . number_format($d['kuliah_hidup']) . " ,-"; ?></td>
                    <td><?php echo "Rp. " . number_format($d['buku_biaya']) . " ,-"; ?></td>
                    <td><?php echo "Rp. " . number_format($d['biaya_penelitian']) . " ,-"; ?></td>
                    <td><?php echo "Rp. " . number_format($d['total_biaya']) . " ,-"; ?></td>
                    <td><?php echo $d['return_investasi']; ?></td>
                    <td><?php echo "Rp. " . number_format($d['dana_investasi']) . " ,-"; ?></td>
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


    <script>
        window.print();
    </script>

</body>

</html>