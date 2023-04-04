<?php include 'header.php';
?>

<div class="content-wrapper">

    <section class="content-header">
        <h1>
            Anggota
            <small>Data Anggota</small>
        </h1>

    </section>

    <section class="content">
        <div class="row">
            <section class="col-lg-12">
                <div class="box box-info">
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

                    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>

                    <style>
                        #printDiv {
                            padding: 30px;
                            width: 1000px;
                        }

                        #pdfDownloader {
                            margin: 20px 0 0 20px
                        }
                    </style>
                    </head>

                    <button type="button" class="btn btn-primary" id="pdfDownloader">Download PDF</button>

                    <div id="printDiv" class="container">

                        <h2>Data Anggota Koperasi</h2>

                        <table class="table table-striped">
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
                                    <tr>
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
                                    <?php
                                }
                                    ?>

                                    </tr>
                            </tbody>
                        </table>
                    </div>
                    <script>
                        $(document).ready(function() {


                            $("#pdfDownloader").click(function() {

                                html2canvas(document.getElementById("printDiv"), {
                                    dpi: 300, // Set to 300 DPI
                                    scale: 5, // Adjusts your resolution
                                    onrendered: function(canvas) {

                                        var imgData = canvas.toDataURL('image/png');
                                        console.log('Report Image URL: ' + imgData);
                                        //var doc = new jsPDF('p', 'mm', [297, 210]); //210mm wide and 297mm high
                                        var doc = new jsPDF('L', 'mm', [210, 297]);
                                        //var doc = new jsPDF('L', 'mm', [210, 297]);
                                        doc.addImage(imgData, 'PNG', 10, 10);
                                        doc.save('sample.pdf');
                                    }
                                });

                            });


                        })
                    </script>
                </div>
            </section>

        </div>