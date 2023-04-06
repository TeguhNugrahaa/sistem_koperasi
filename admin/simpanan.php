<?php include 'header.php'; ?>
<?php session_start(); ?>
<?php if (@$_SESSION['success']) { ?>
    <script>
        Swal.fire(
            'Good job!',
            '<?php echo $_SESSION['success']; ?>',
            'success'
        )
    </script>

<?php unset($_SESSION['success']);
} ?>


<div class="content-wrapper">

    <section class="content-header">
        <h1>
            Simpanan
            <small>Data Simpanan</small>
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
                        <h3 class="box-title">Simpanan</h3>
                        <div class="btn-group pull-right">

                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal">
                                <i class="fa fa-plus"></i> &nbsp Tambah Simpanan
                            </button>
                        </div>
                    </div>
                    <div class="box-body">

                        <!-- Modal -->
                        <form action="simpanan_act.php" method="post">
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="exampleModalLabel">Tambah Simpanan</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <div class="form-group">
                                                <label>Kode Simpanan</label>
                                                <input type="text" name="kode_simpanan" required="required" class="form-control" placeholder="Masukkan Kode Simpanan ..">
                                            </div>

                                            <div class="form-group">
                                                <label>Jenis Simpanan</label>
                                                <select name="jenis" class="form-control" required="required">
                                                    <option value="">- Pilih -</option>
                                                    <option value="Pokok">Pokok</option>
                                                    <option value="Wajib">Wajib</option>
                                                    <option value="Sukarela">Sukarela</option>

                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Besar Simpanan</label>
                                                <input type="text" name="besar" required="required" class="form-control" placeholder="Masukkan Besar Simpanan ..">
                                            </div>

                                            <div class="form-group">
                                                <label>Kode Anggota</label>
                                                <input type="text" name="kode" required="required" class="form-control" placeholder="Masukkan Kode Anggota ..">
                                            </div>

                                            <div class="form-group">
                                                <label>Tanggal Masuk</label>
                                                <input type="text" name="tanggal" required="required" class="form-control datepicker2">
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

                        <a href="simpanan_pdf.php?>" target="_blank" class="btn btn-sm btn-success"><i class="fa fa-file-pdf-o"></i> &nbsp CETAK PDF</a>
                        <a href="simpanan-excel-backup.php?>" target="_blank" class="btn btn-sm btn-success"><i class="fa fa-file-excel-o"></i> &nbsp CETAK EXCEL</a>
                        <a href="simpanan_print.php" target="_blank" class="btn btn-sm btn-primary"><i class="fa fa-print"></i> &nbsp PRINT</a>
                        <div class="table-responsive">


                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="table-datatable">
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
                                            <tr>
                                                <td class="text-center"><?php echo $no++; ?></td>
                                                <td class="text-center"><?php echo $d['kode_simpanan']; ?></td>
                                                <td class="text-center"><?php echo $d['jenis_simpanan']; ?></td>
                                                <td class="text-center"><?php echo $d['besar_simpanan']; ?></td>
                                                <td class="text-center"><?php echo $d['kode_anggota']; ?></td>
                                                <td class="text-center"><?php echo $d['tanggal_masuk']; ?></td>

                                                <td>

                                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_simpanan_<?php echo $d['simpanan_id'] ?>">
                                                        <i class="fa fa-cog"></i>
                                                    </button>

                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_simpanan_<?php echo $d['simpanan_id'] ?>">
                                                        <i class="fa fa-trash"></i>
                                                    </button>






                                                    <form action="simpanan_update.php" method="post">
                                                        <div class="modal fade" id="edit_simpanan_<?php echo $d['simpanan_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="exampleModalLabel">Edit simpanan</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">

                                                                        <input type="hidden" name="id" value="<?php echo $d['simpanan_id'] ?>">


                                                                        <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                            <label>Kode Simpanan</label>
                                                                            <input type="text" style="width:100%" name="kode_simpanan" required="required" class="form-control" placeholder="Masukkan Kode Simpanan .." value="<?php echo $d['kode_simpanan'] ?>">
                                                                        </div>


                                                                        <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                            <label>Jenis Simpanan</label>
                                                                            <select name="jenis" style="width:100%" class="form-control" required="required">
                                                                                <option value="">- Pilih -</option>
                                                                                <option <?php if ($d['jenis_simpanan'] == "Pokok") {
                                                                                            echo "selected='selected'";
                                                                                        } ?> value="Pokok">Pokok</option>
                                                                                <option <?php if ($d['jenis_simpanan'] == "Wajib") {
                                                                                            echo "selected='selected'";
                                                                                        } ?> value="Wajib">Wajib</option>
                                                                                <option <?php if ($d['jenis_simpanan'] == "Sukarela") {
                                                                                            echo "selected='selected'";
                                                                                        } ?> value="Sukarela">Sukarela</option>

                                                                            </select>
                                                                        </div>


                                                                        <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                            <label>Besar Simpanan</label>
                                                                            <input type="text" style="width:100%" name="besar" required="required" class="form-control" placeholder="Masukkan Besar Simpanan .." value="<?php echo $d['besar_simpanan'] ?>">
                                                                        </div>


                                                                        <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                            <label>Kode Anggota</label>
                                                                            <input type="text" style="width:100%" name="kode" required="required" class="form-control" placeholder="Masukkan Kode Anggota .." value="<?php echo $d['kode_anggota'] ?>">
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label>Tanggal Masuk</label>
                                                                            <input type="text" name="tanggal" required="required" class="form-control datepicker2">
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
                                                    <div class="modal fade" id="hapus_simpanan_<?php echo $d['simpanan_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                    <a href="simpanan_hapus.php?id=<?php echo $d['simpanan_id'] ?>" class="btn btn-primary">Hapus</a>
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
                        </div>

                    </div>
            </section>
        </div>
    </section>

</div>
<?php include 'footer.php'; ?>
