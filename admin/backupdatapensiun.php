<?php include 'header.php'; ?>

<div class="content-wrapper">

    <section class="content-header">
        <h1>
            Pensiun
            <small>Data Pensiun</small>
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
                        <h3 class="box-title">Pensiun</h3>
                        <div class="btn-group pull-right">

                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal">
                                <i class="fa fa-plus"></i> &nbsp Tambah Pensiun
                            </button>
                        </div>
                    </div>
                    <div class="box-body">

                        <!-- Modal -->
                        <form action="pensiun_act.php" method="post">
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="exampleModalLabel">Tambah Pensiun</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <div class="form-group">
                                                <label>Umur Saat Ini</label>
                                                <input type="number" name="sekarang" required="required" class="form-control" placeholder="Masukkan Umur Sekarang ..">
                                            </div>


                                            <div class="form-group">
                                                <label>Umur Pensiun</label>
                                                <input type="number" name="pensiun" required="required" class="form-control" placeholder="Masukkan Umur Pensiun ..">
                                            </div>


                                            <div class="form-group">
                                                <label>Jumlah Waktu Sisa</label>
                                                <input type="number" name="sisa" required="required" class="form-control" placeholder="Masukkan Jumlah waktu sisa ..">
                                            </div>

                                            <div class="form-group">
                                                <label>Biaya berdua saat ini</label>
                                                <input type="number" name="berdua" required="required" class="form-control" placeholder="Masukkan biaya berdua saat ini ..">
                                            </div>

                                            <div class="form-group">
                                                <label>Asumsi Inflasi (%)</label>
                                                <input type="number" name="asumsi" required="required" class="form-control" placeholder="Masukkan asumsi inflasi ..">
                                            </div>


                                            <div class="form-group">
                                                <label>Biaya saat pensiun</label>
                                                <input type="number" name="biaya" required="required" class="form-control" placeholder="Masukkan Biaya saat pensiun ..">
                                            </div>


                                            <div class="form-group">
                                                <label>Bunga Deposito Waktu Pensiun (%)</label>
                                                <input type="number" name="bunga" required="required" class="form-control" placeholder="Masukkan Bunga Deposito waktu pensiun ..">
                                            </div>

                                            <div class="form-group">
                                                <label>Total Dana Persiapan pensiun</label>
                                                <input type="number" name="total" required="required" class="form-control" placeholder="Masukkan Total Dana Persiapan pensiun ..">
                                            </div>

                                            <div class="form-group">
                                                <label>Return Investasi periode kerja (%)</label>
                                                <input type="number" name="return" required="required" class="form-control" placeholder="Masukkan Return Investasi periode kerja ..">
                                            </div>


                                            <div class="form-group">
                                                <label>Simpanan periode kerja</label>
                                                <input type="number" name="simpan" required="required" class="form-control" placeholder="Masukkan Simpanan periode kerja ..">
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


                        <a href="pensiun-excel-backup.php?>" target="_blank" class="btn btn-sm btn-success"><i class="fa fa-file-excel-o"></i> &nbsp CETAK EXCEL</a>
                        <a href="pensiun_print.php" target="_blank" class="btn btn-sm btn-primary"><i class="fa fa-print"></i> &nbsp PRINT</a>
                        <div class="table-responsive">


                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="table-datatable">
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
                                            <th width="10%" class="text-center">OPSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include '../koneksi.php';
                                        $no = 1;
                                        $data = mysqli_query($koneksi, "SELECT * FROM pensiun");
                                        while ($d = mysqli_fetch_array($data)) {
                                        ?>
                                            <tr>
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
                                                <td>

                                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_pensiun_<?php echo $d['id_pensiun'] ?>">
                                                        <i class="fa fa-cog"></i>
                                                    </button>

                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_pensiun_<?php echo $d['id_pensiun'] ?>">
                                                        <i class="fa fa-trash"></i>
                                                    </button>


                                                    <form action="pensiun_update.php" method="post">
                                                        <div class="modal fade" id="edit_pensiun_<?php echo $d['id_pensiun'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="exampleModalLabel">Edit pensiun</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">

                                                                        <input type="hidden" name="id" value="<?php echo $d['id_pensiun'] ?>">

                                                                        <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                            <label>Umur Saat Ini</label>
                                                                            <input type="number" style="width:100%" name="sekarang" required="required" class="form-control" placeholder="Masukkan Umur Saat ini .." value="<?php echo $d['umur_sekarang'] ?>">
                                                                        </div>


                                                                        <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                            <label>Umur Pensiun</label>
                                                                            <input type="number" style="width:100%" name="pensiun" required="required" class="form-control" placeholder="Masukkan Umur Pensiun .." value="<?php echo $d['umur_pensiun'] ?>">
                                                                        </div>

                                                                        <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                            <label>Jumlah waktu sisa</label>
                                                                            <input type="number" style="width:100%" name="sisa" required="required" class="form-control" placeholder="Masukkan Jumlah waktu sisa .." value="<?php echo $d['jumlah_sisa'] ?>">
                                                                        </div>


                                                                        <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                            <label>Biaya Berdua Saat Ini</label>
                                                                            <input type="number" style="width:100%" name="berdua" required="required" class="form-control" placeholder="Masukkan biaya berdua saat ini .." value="<?php echo $d['biaya_berdua'] ?>">
                                                                        </div>

                                                                        <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                            <label>Asumsi Inflasi (%)</label>
                                                                            <input type="number" style="width:100%" name="asumsi" required="required" class="form-control" placeholder="Masukkan asumsi inflasi .." value="<?php echo $d['asumsi_inflasi'] ?>">
                                                                        </div>


                                                                        <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                            <label>Biaya Saat Pensiun </label>
                                                                            <input type="number" style="width:100%" name="biaya" required="required" class="form-control" placeholder="Masukkan biaya saat pensiun .." value="<?php echo $d['biaya_pensiun'] ?>">
                                                                        </div>


                                                                        <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                            <label>Bunga deposito waktu pensiun (%)</label>
                                                                            <input type="number" style="width:100%" name="bunga" required="required" class="form-control" placeholder="Masukkan bunga deposito waktu pensiun .." value="<?php echo $d['bunga_deposito'] ?>">
                                                                        </div>

                                                                        <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                            <label>Total dana persiapan pensiun</label>
                                                                            <input type="number" style="width:100%" name="total" required="required" class="form-control" placeholder="Masukkan total dana persiapan pensiun .." value="<?php echo $d['total_dana'] ?>">
                                                                        </div>


                                                                        <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                            <label>Return Investasi periode kerja (%)</label>
                                                                            <input type="number" style="width:100%" name="return" required="required" class="form-control" placeholder="Masukkan return investasi periode kerja .." value="<?php echo $d['return_investasi'] ?>">
                                                                        </div>

                                                                        <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                            <label>Simpanan per bulan</label>
                                                                            <input type="number" style="width:100%" name="simpan" required="required" class="form-control" placeholder="Masukkan return investasi periode kerja .." value="<?php echo $d['simpanan'] ?>">
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
                                                    <div class="modal fade" id="hapus_pensiun_<?php echo $d['id_pensiun'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                    <a href="pensiun_hapus.php?id=<?php echo $d['id_pensiun'] ?>" class="btn btn-primary">Hapus</a>
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