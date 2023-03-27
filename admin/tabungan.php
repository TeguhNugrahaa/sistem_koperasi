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
            Tabungan
            <small>Data Tabungan</small>
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
                        <h3 class="box-title">Tabungan</h3>
                        <div class="btn-group pull-right">

                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal">
                                <i class="fa fa-plus"></i> &nbsp Tambah Tabungan
                            </button>
                        </div>
                    </div>
                    <div class="box-body">

                        <!-- Modal -->
                        <form action="tabungan_act.php" method="post">
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="exampleModalLabel">Tambah Tabungan</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <div class="form-group">
                                                <label>Kode Tabungan</label>
                                                <input type="text" name="kode_tabungan" required="required" class="form-control" placeholder="Masukkan Kode Tabungan ..">
                                            </div>

                                            <div class="form-group">
                                                <label>Nama Anggota</label>
                                                <input type="text" name="nama" required="required" class="form-control" placeholder="Masukkan Nama Anggota ..">
                                            </div>

                                            <div class="form-group">
                                                <label>Tanggal Investasi</label>
                                                <input type="text" name="tanggal" required="required" class="form-control datepicker2">
                                            </div>

                                            <div class="form-group">
                                                <label>Jumlah Saldo</label>
                                                <input type="text" name="saldo" required="required" class="form-control" placeholder="Masukkan Jumlah Saldo ..">
                                            </div>


                                            <div class="form-group">
                                                <label>Rekening Bank</label>
                                                <input type="text" name="bank" required="required" class="form-control" placeholder="Masukkan Rekening Bank ..">
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

                        <a href="tabungan-excel-backup.php?>" target="_blank" class="btn btn-sm btn-success"><i class="fa fa-file-excel-o"></i> &nbsp CETAK EXCEL</a>
                        <a href="tabungan_print.php" target="_blank" class="btn btn-sm btn-primary"><i class="fa fa-print"></i> &nbsp PRINT</a>
                        <div class="table-responsive">


                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="table-datatable">
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
                                            <tr>
                                                <td class="text-center"><?php echo $no++; ?></td>
                                                <td class="text-center"><?php echo $d['kode_tabungan']; ?></td>
                                                <td class="text-center"><?php echo $d['anggota_tabungan']; ?></td>
                                                <td class="text-center"><?php echo $d['tabungan_tanggal']; ?></td>
                                                <td class="text-center"><?php echo $d['saldo']; ?></td>
                                                <td class="text-center"><?php echo $d['rekening_bank']; ?></td>

                                                <td>

                                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_tabungan_<?php echo $d['tabungan_id'] ?>">
                                                        <i class="fa fa-cog"></i>
                                                    </button>

                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_tabungan_<?php echo $d['tabungan_id'] ?>">
                                                        <i class="fa fa-trash"></i>
                                                    </button>


                                                    <form action="tabungan_update.php" method="post">
                                                        <div class="modal fade" id="edit_tabungan_<?php echo $d['tabungan_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="exampleModalLabel">Edit tabungan</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">

                                                                        <input type="hidden" name="id" value="<?php echo $d['tabungan_id'] ?>">



                                                                        <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                            <label>Kode Tabungan</label>
                                                                            <input type="text" style="width:100%" name="kode_tabungan" required="required" class="form-control" placeholder="Masukkan Kode Tabungan .." value="<?php echo $d['kode_tabungan'] ?>">
                                                                        </div>


                                                                        <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                            <label>Nama Anggota</label>
                                                                            <input type="text" style="width:100%" name="nama" required="required" class="form-control" placeholder="Masukkan Nama Anggota .." value="<?php echo $d['anggota_tabungan'] ?>">
                                                                        </div>




                                                                        <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                            <label>Tanggal Investasi</label>
                                                                            <input type="text" style="width:100%" name="tanggal" required="required" class="form-control datepicker2" placeholder="Masukkan Tanggal .." value="<?php echo $d['tabungan_tanggal'] ?>">
                                                                        </div>


                                                                        <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                            <label>Jumlah Saldo</label>
                                                                            <input type="text" style="width:100%" name="saldo" required="required" class="form-control" placeholder="Masukkan Jumlah Saldo .." value="<?php echo $d['saldo'] ?>">
                                                                        </div>


                                                                        <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                            <label>Rekening Bank</label>
                                                                            <input type="text" style="width:100%" name="bank" required="required" class="form-control" placeholder="Masukkan Rekening Bank .." value="<?php echo $d['rekening_bank'] ?>">
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
                                                    <div class="modal fade" id="hapus_tabungan_<?php echo $d['tabungan_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                    <a href="tabungan_hapus.php?id=<?php echo $d['tabungan_id'] ?>" class="btn btn-primary">Hapus</a>
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