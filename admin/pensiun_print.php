 <!DOCTYPE html>
 <html>

 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Laporan Pensiun</title>
     <link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">

 </head>

 <body>

     <center>
         <h4>LAPORAN</h4>
         <h4>PENSIUN</h4>
     </center>


     <table class="table table-bordered table-striped" style="border: 1; border-collapse: collapse;">
         <thead>
             <tr>

                 <th width="1%">NO</th>
                 <th width="1%">UMUR SAAT INI</th>
                 <th class="text-center">UMUR PENSIUN</th>
                 <th class="text-center">JUMLAH WAKTU SISA</th>
                 <th class="text-center">BIAYA BERDUA SAAT INI</th>
                 <th class="text-center">ASUMSI INFLASI (%)</th>
                 <th class="text-center">BIAYA SAAT PENSIUN</th>
                 <th class="text-center">BUNGA DEPOSITO WAKTU PENSIUN (%)</th>
                 <th class="text-center">TOTAL DANA PERSIAPAN PENSIUN</th>
                 <th class="text-center">RETURN INVESTASI PERIODE KERJA (%)</th>
                 <th class="text-center">SIMPANAN PER BULAN</th>
             </tr>
         </thead>
         <tbody>
             <?php
                include '../koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT * FROM pensiun");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                 <tr style="text-align: center;">
                     <td class="text-center"><?php echo $no++; ?></td>
                     <td class="text-center"><?php echo $d['umur_sekarang']; ?></td>
                     <td class="text-center"><?php echo $d['umur_pensiun']; ?></td>
                     <td class="text-center"><?php echo $d['jumlah_sisa']; ?></td>
                     <td class="text-center"><?php echo "Rp. " . number_format($d['biaya_berdua']) . " ,-"; ?></td>
                     <td class="text-center"><?php echo $d['asumsi_inflasi']; ?></td>
                     <td class="text-center"><?php echo "Rp. " . number_format($d['biaya_pensiun']) . " ,-"; ?></td>
                     <td class="text-center"><?php echo $d['bunga_deposito']; ?></td>
                     <td class="text-center"><?php echo "Rp. " . number_format($d['total_dana']) . " ,-"; ?></td>
                     <td class="text-center"><?php echo $d['return_investasi']; ?></td>
                     <td class="text-center"><?php echo "Rp. " . number_format($d['simpanan']) . " ,-"; ?></td>
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