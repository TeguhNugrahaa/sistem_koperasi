<?php include 'header.php'; ?>

<div class="content-wrapper">

    <section class="content-header">
        <h1>
            Anggota
            <small>Data Anggota</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <section class="col-lg-12">
                <div class="box box-info">

                    <div class="box-header">
                        <h3 class="box-title">Anggota</h3>
                        <div class="btn-group pull-right">

                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal">
                                <i class="fa fa-plus"></i> &nbsp Tambah Anggota
                            </button>
                        </div>
                    </div>
                    <div class="box-body">
                        <a href="#" target="_blank" class="btn btn-sm btn-primary"><i class="fa fa-print"></i> &nbsp PRINT</a>
                        <div class="table-responsive">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="table-datatable">
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
                                            <th width="10%" class="text-center">OPSI</th>
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

                                                <!-- Ini Buat Coret Coretan-->

                                                <!--td class="text-center"><img src="../gambar/user/<?php echo $d['anggota_ktp']; ?>" width="50px"></td>-->
                                                <!--td class="text-center"><img src="../gambar/user/<?php echo $d['anggota_npwp']; ?>" width="50px"></td>-->
                                                <!--td class="text-center"><img src="../gambar/user/<?php echo $d['anggota_bukti']; ?>" width="50px"></td>-->
                                                <td>

                                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_anggota_<?php echo $d['anggota_id'] ?>">
                                                        <i class="fa fa-cog"></i>
                                                    </button>

                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_anggota_<?php echo $d['anggota_id'] ?>">
                                                        <i class="fa fa-trash"></i>
                                                    </button>


                                                    <form action="anggota_update.php" method="post" enctype="multipart/form-data">
                                                        <div class="modal fade" id="edit_anggota_<?php echo $d['anggota_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="exampleModalLabel">Edit anggota</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">

                                                                        <input type="hidden" name="id" value="<?php echo $d['anggota_id'] ?>">


                                                                        <!-- Modal untuk panggil form anggota table -->

                                                                        <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                            <label>Nama Lengkap</label>
                                                                            <input type="text" style="width:100%" name="nama" required="required" class="form-control" placeholder="Masukkan Nama Lengkap .." value="<?php echo $d['anggota_nama'] ?>">
                                                                        </div>


                                                                        <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                            <label>Alamat</label>
                                                                            <input type="text" style="width:100%" name="alamat" required="required" class="form-control" placeholder="Masukkan Alamat .." value="<?php echo $d['anggota_alamat'] ?>">
                                                                        </div>

                                                                        <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                            <label>Tempat lahir</label>
                                                                            <input type="text" style="width:100%" name="tempat" required="required" class="form-control" placeholder="Masukkan Tempat Lahir .." value="<?php echo $d['anggota_tempat'] ?>">
                                                                        </div>


                                                                        <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                            <label>Tanggal lahir</label>
                                                                            <input type="hidden" name="id" value="<?php echo $d['anggota_id'] ?>">
                                                                            <input type="text" style="width:100%" name="tanggal" required="required" class="form-control datepicker2" value="<?php echo $d['anggota_tanggal'] ?>">
                                                                        </div>


                                                                        <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                            <label>No Handphone</label>
                                                                            <input type="text" style="width:100%" name="handphone" required="required" class="form-control" placeholder="Masukkan No Handphone .." value="<?php echo $d['anggota_handphone'] ?>">
                                                                        </div>

                                                                        <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                            <label>Email</label>
                                                                            <input type="email" style="width:100%" name="email" required="required" class="form-control" placeholder="Masukkan Email Anda .." value="<?php echo $d['anggota_email'] ?>">
                                                                        </div>

                                                                        <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                            <label>Pekerjaan</label>
                                                                            <input type="text" style="width:100%" name="pekerjaan" required="required" class="form-control" placeholder="Masukkan Pekerjaan .." value="<?php echo $d['anggota_pekerjaan'] ?>">
                                                                        </div>

                                                                        <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                            <label>Jumlah Tanggungan Saat Ini</label>
                                                                            <input type="text" style="width:100%" name="tanggungan" required="required" class="form-control" placeholder="Masukkan Jumlah Tanggungan .." value="<?php echo $d['anggota_tanggungan'] ?>">
                                                                        </div>

                                                                        <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                            <label>Foto KTP</label>
                                                                            <input type="file" style="width:100%" name="foto_ktp" required="required" class="form-control" placeholder="Masukkan Foto KTP .." value="<?php echo $d['anggota_ktp'] ?>" accept="image/*">
                                                                        </div>

                                                                        <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                            <label>Foto NPWP Anggota</label>
                                                                            <input type="file" style="width:100%" name="foto_npwp" required="required" class="form-control" placeholder="Masukkan Foto NPWP .." value="<?php echo $d['anggota_npwp'] ?>" accept=".jpg">
                                                                        </div>

                                                                        <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                            <label>Upload bukti pembayaran</label>
                                                                            <input type="file" style="width:100%" name="bukti_pembayaran" required="required" class="form-control" placeholder="Masukkan Bukti Pembayaran .." value="<?php echo $d['anggota_bukti'] ?>" accept="image/*">
                                                                        </div>




                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>

                                                    <!-- modal hapus -->
                                                    <div class="modal fade" id="hapus_anggota_<?php echo $d['anggota_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="exampleModalLabel">Peringatan!</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">

                                                                    <p>Yakin ingin menghapus data ini ?</p>

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                                    <a href="anggota_hapus.php?id=<?php echo $d['anggota_id'] ?>" class="btn btn-primary">Hapus</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Modal -->
                            <form action="anggota_act.php" method="post" enctype="multipart/form-data">
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="exampleModalLabel">Tambah Anggota</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                <!-- Modal Form Tambah Anggota -->

                                                <div class="form-group">
                                                    <label>Nama Lengkap</label>
                                                    <input type="text" name="nama" required="required" class="form-control" placeholder="Masukkan Nama Lengkap ..">
                                                </div>


                                                <div class="form-group">
                                                    <label>Alamat</label>
                                                    <input type="text" name="alamat" required="required" class="form-control" placeholder="Masukkan Alamat ..">
                                                </div>


                                                <div class="form-group">
                                                    <label>Tempat Lahir</label>
                                                    <input type="text" name="tempat" required="required" class="form-control" placeholder="Masukkan Tempat Lahir ..">
                                                </div>

                                                <div class="form-group">
                                                    <label>Tanggal Lahir</label>
                                                    <input type="text" style="width:100%" name="tanggal" required="required" class="form-control datepicker2" placeholder="Masukkan Tanggal Lahir ..">
                                                </div>


                                                <div class="form-group">
                                                    <label>No. Handphone</label>
                                                    <input type="text" name="handphone" required="required" class="form-control" placeholder="Masukkan no handphone ..">
                                                </div>


                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="email" name="email" required="required" class="form-control" placeholder="Masukkan Email ..">
                                                </div>


                                                <div class="form-group">
                                                    <label>Pekerjaan</label>
                                                    <input type="text" name="pekerjaan" required="required" class="form-control" placeholder="Masukkan Pekerjaan ..">
                                                </div>

                                                <div class="form-group">
                                                    <label>Jumlah tanggungan saat ini</label>
                                                    <input type="text" name="tanggungan" required="required" class="form-control" placeholder="Masukkan Jumlah Tanggungan Saat Ini ..">
                                                </div>


                                                <div class="form-group">
                                                    <label>Foto KTP</label>
                                                    <input type="file" name="foto_ktp" required="required" class="form-control" placeholder="Masukkan Foto KTP .." accept=".jpg">
                                                </div>


                                                <div class="form-group">
                                                    <label>Foto NPWP</label>
                                                    <input type="file" name="foto_npwp" required="required" class="form-control" placeholder="Masukkan Foto NPWP .." accept="image/*">
                                                </div>


                                                <div class="form-group">
                                                    <label>Upload Bukti Pembayaran</label>
                                                    <input type="file" name="bukti_pembayaran" required="required" class="form-control" placeholder="Masukkan Upload Bukti Pembayaran .." accept="image/*">
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </form>





                        </div>

                    </div>
            </section>
        </div>
    </section>

</div>
<?php include 'footer.php'; ?>