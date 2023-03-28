 <!DOCTYPE html>
 <html>

 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Laporan Pinjaman</title>
     <link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">

 </head>

 <body>

     <center>
         <h4>LAPORAN</h4>
         <h4>PINJAMAN</h4>
     </center>


     <table class="table table-bordered table-striped" style="border: 1; border-collapse: collapse;">
         <thead>
             <tr>
                 <th width="1%">NO</th>
                 <th width="1%">KODE PINJAM</th>
                 <th class="text-center">NAMA ANGGOTA</th>
                 <th class="text-center">TANGGAL PINJAM</th>
                 <th class="text-center">TANGGAL TEMPO</th>
                 <th class="text-center">JENIS PINJAM</th>
                 <th class="text-center">BESAR PINJAM</th>
                 <th class="text-center">LAMA ANGSURAN</th>
                 <th class="text-center">STATUS</th>
                 <th width="10%" class="text-center">OPSI</th>
             </tr>
         </thead>
         <tbody>
             <?php
                include '../koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT * FROM pinjaman");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                 <td class="text-center"><?php echo $no++; ?></td>
                 <td class="text-center"><?php echo $d['kode_pinjam']; ?></td>
                 <td class="text-center"><?php echo $d['nama_anggota']; ?></td>
                 <td class="text-center"><?php echo $d['tanggal_pinjam']; ?></td>
                 <td class="text-center"><?php echo $d['tanggal_tempo']; ?></td>
                 <td class="text-center"><?php echo $d['jenis_pinjam']; ?></td>
                 <td class="text-center"><?php echo $d['besar_pinjam']; ?></td>
                 <td class="text-center"><?php echo $d['lama_angsuran']; ?></td>
                 <td class="text-center"><?php echo $d['status_pinjaman']; ?></td>
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