<?php include 'header.php'; ?>

<div class="content-wrapper">

    <section class="content-header">
        <h1>
            Anak
            <small>Data anak</small>
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
                        <h3 class="box-title">Kategori data anak</h3>
                        <div class="btn-group pull-right">

                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal">
                                <i class="fa fa-plus"></i> &nbsp Tambah Anak
                            </button>
                        </div>
                    </div>
                    <div class="box-body">

                        <!-- Modal -->
                        <form action="anak_act.php" method="post">
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Anak</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <div class="form-group">
                                                <label>Umur Anak Saat Ini</label>
                                                <input type="number" name="sekarang" required="required" class="form-control" placeholder="Masukkan Umur ..">
                                            </div>

                                            <div class="form-group">
                                                <label>Tingkatan Sekolah</label>
                                                <select name="tingkat" class="form-control" required="required">
                                                    <option value="">- Pilih -</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>

                                                </select>
                                            </div>


                                            <div class="form-group">
                                                <label>Sisa Sekolah ke PT</label>
                                                <input type="text" name="sekolah" required="required" class="form-control" placeholder="Masukkan Sisa Sekolah ke PT ..">
                                            </div>

                                            <div class="form-group">
                                                <label>Asumsi inflasi saat ini sampai anak mau kuliah</label>
                                                <input type="text" name="asumsi" required="required" class="form-control" placeholder="Asumsi inflasi saat ini sampai anak mau kuliah ..">
                                            </div>

                                            <div class="form-group">
                                                <label>Biaya uang kuliah atau semester saat ini</label>
                                                <input type="number" name="semester" required="required" class="form-control" placeholder="Biaya uang kuliah atau semester saat ini ..">
                                            </div>
                                            <div class="form-group">
                                                <label>Biaya kuliah pada saat kuliah</label>
                                                <input type="number" name="kuliah" required="required" class="form-control" placeholder="Biaya kuliah pada saat kuliah ..">
                                            </div>
                                            <div class="form-group">
                                                <label>Biaya hidup per bulan saat ini</label>
                                                <input type="number" name="bulan" required="required" class="form-control" placeholder="Biaya hidup per bulan saat ini ..">
                                            </div>
                                            <div class="form-group">
                                                <label>Biaya hidup pada saat kuliah</label>
                                                <input type="number" name="saat_kuliah" required="required" class="form-control" placeholder="Biaya hidup pada saat kuliah ..">
                                            </div>
                                            <div class="form-group">
                                                <label>Biaya buku per semester</label>
                                                <input type="number" name="buku" required="required" class="form-control" placeholder="Biaya buku per semester ..">
                                            </div>
                                            <div class="form-group">
                                                <label>Biaya masuk PT</label>
                                                <input type="number" name="pt" required="required" class="form-control" placeholder="Biaya masuk PT ..">
                                            </div>
                                            <div class="form-group">
                                                <label>Biaya uang kuliah seluruhnya</label>
                                                <input type="number" name="seluruh" required="required" class="form-control" placeholder="Biaya uang kuliah seluruhnya ..">
                                            </div>
                                            <div class="form-group">
                                                <label>Biaya hidup selama kuliah</label>
                                                <input type="number" name="hidup" required="required" class="form-control" placeholder="Biaya hidup selama kuliah ..">
                                            </div>
                                            <div class="form-group">
                                                <label>Biaya Buku </label>
                                                <input type="number" name="biaya" required="required" class="form-control" placeholder="Biaya buku ..">
                                            </div>
                                            <div class="form-group">
                                                <label>Biaya Penelitian </label>
                                                <input type="number" name="penelitian" required="required" class="form-control" placeholder="Biaya penelitian ..">
                                            </div>
                                            <div class="form-group">
                                                <label>Total biaya dipersiapkan </label>
                                                <input type="number" name="biaya_siap" required="required" class="form-control" placeholder="Total biaya dipersiapkan ..">
                                            </div>
                                            <div class="form-group">
                                                <label>Return Investasi direncanakan </label>
                                                <input type="number" name="return" required="required" class="form-control" placeholder="Return Investasi direncanakan ..">
                                            </div>
                                            <div class="form-group">
                                                <label>Dana di investasikan atau bulannya </label>
                                                <input type="number" name="investasi" required="required" class="form-control" placeholder="Dana di investasikan atau bulannya ..">
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


                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="table-datatable">
                                <thead>
                                    <tr>
                                        <th width="1%" rowspan="2">No</th>
                                        <th width="10%" rowspan="2" class="text-center">Tingkatan Sekolah</th>
                                        <th rowspan="2" class="text-center">Sisa sekolah ke PT</th>
                                        <th rowspan="2" class="text-center">Asumsi Inflasi saat ini sampai anak mau Kuliah</th>
                                        <th colspan="2" class="text-center">Asumsi Inflasi pada saat Anak Kuliah</th>
                                        <th colspan="2" class="text-center">Biaya uang Kuliah atau Semester Saat ini</th>
                                        <th colspan="2" class="text-center">Biaya kuliah pada saat kuliah</th>
                                        <th colspan="2" class="text-center">Biaya Hidup Per Bulan Saat ini</th>
                                        <th colspan="2" class="text-center">Biaya Hidup pada saat Kuliah</th>
                                        <th colspan="2" class="text-center">Biaya Buku Per Semester</th>
                                        <th colspan="2" class="text-center">Biaya Masuk PT</th>
                                        <th colspan="2" class="text-center">Biaya Uang Kuliah Seluruhnya</th>
                                        <th colspan="2" class="text-center">Biaya Hidup selama Kuliah</th>
                                        <th colspan="2" class="text-center">Biaya Buku</th>
                                        <th colspan="2" class="text-center">Biaya Penelitian</th>
                                        <th colspan="2" class="text-center">Total Biaya Dipersiapkan</th>
                                        <th colspan="2" class="text-center">Return Investasi direncanakan</th>
                                        <th colspan="2" class="text-center">Dana diinvestasikan atau bulannya</th>
                                        <th rowspan="2" width="10%" class="text-center">OPSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include '../koneksi.php';
                                    $no = 1;
                                    $data = mysqli_query($koneksi, "SELECT * FROM anak,tingkat where tingkat_id=tingkat_kategori order by tingkat_id desc");
                                    while ($d = mysqli_fetch_array($data)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $d['tingkat']; ?></td>
                                            <td>
                                                <?php
                                                if ($d['tingkat_kategori'] != 1) {
                                                ?>
                                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_tingkat_<?php echo $d['tingkat_id'] ?>">
                                                        <i class="fa fa-cog"></i>
                                                    </button>

                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_tingkat_<?php echo $d['tingkat_id'] ?>">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                <?php
                                                }
                                                ?>

                                                <form action="anak_update.php" method="post">
                                                    <div class="modal fade" id="edit_anak_<?php echo $d['anak_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Anak</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">

                                                                    <div class="form-group" style="width:100%">
                                                                        <label>Tingkat sekolah</label>
                                                                        <input type="hidden" name="id" required="required" class="form-control" placeholder="Nama tingkat .." value="<?php echo $d['tingkat_id']; ?>">
                                                                        <input type="text" name="tingkat" required="required" class="form-control" placeholder="Nama tingkat .." value="<?php echo $d['tingkat_sekolah']; ?>" style="width:100%">
                                                                    </div>


                                                                    <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                        <label>Sisa sekolah ke PT</label>
                                                                        <input type="number" style="width:100%" name="sekolah" required="required" class="form-control" placeholder="Masukkan Sisa sekolah ke PT .." value="<?php echo $d['sisa_sekolah'] ?>">
                                                                    </div>
                                                                    <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                        <label>Asumsi Inflasi saat ini sampai anak mau Kuliah</label>
                                                                        <input type="number" style="width:100%" name="asumsi" required="required" class="form-control" placeholder="Masukkan Asumsi inflasi sampai anak kuliah .." value="<?php echo $d['asumsi_kuliah'] ?>">
                                                                    </div>

                                                                    <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                        <label>Biaya uang Kuliah atau Semester Saat ini</label>
                                                                        <input type="number" style="width:100%" name="semester" required="required" class="form-control" placeholder="Masukkan Biaya uang Kuliah atau Semester Saat ini .." value="<?php echo $d['biaya_semester'] ?>">
                                                                    </div>

                                                                    <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                        <label>Biaya kuliah pada saat kuliah</label>
                                                                        <input type="number" style="width:100%" name="kuliah" required="required" class="form-control" placeholder="Masukkan Biaya uang Kuliah pada saat kuliah .." value="<?php echo $d['biaya_kuliah'] ?>">
                                                                    </div>

                                                                    <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                        <label>Biaya Hidup Per Bulan Saat ini</label>
                                                                        <input type="number" style="width:100%" name="bulan" required="required" class="form-control" placeholder="Masukkan Biaya hidup per bulan .." value="<?php echo $d['biaya_hidup'] ?>">
                                                                    </div>

                                                                    <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                        <label>Biaya Hidup pada saat Kuliah</label>
                                                                        <input type="number" style="width:100%" name="saat_kuliah" required="required" class="form-control" placeholder="Masukkan Biaya Hidup pada saat Kuliah .." value="<?php echo $d['hidup_kuliah'] ?>">
                                                                    </div>

                                                                    <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                        <label>Biaya Buku Per Semester</label>
                                                                        <input type="number" style="width:100%" name="buku" required="required" class="form-control" placeholder="Masukkan Biaya Buku Per Semester .." value="<?php echo $d['biaya_buku'] ?>">
                                                                    </div>

                                                                    <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                        <label>Biaya Masuk PT</label>
                                                                        <input type="number" style="width:100%" name="pt" required="required" class="form-control" placeholder="Masukkan Biaya Masuk PT .." value="<?php echo $d['biaya_pt'] ?>">
                                                                    </div>

                                                                    <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                        <label>Biaya Uang Kuliah Seluruhnya</label>
                                                                        <input type="number" style="width:100%" name="seluruh" required="required" class="form-control" placeholder="Masukkan Biaya Uang Kuliah Seluruhnya .." value="<?php echo $d['biaya_seluruhnya'] ?>">
                                                                    </div>

                                                                    <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                        <label>Biaya Hidup selama Kuliah</label>
                                                                        <input type="number" style="width:100%" name="hidup" required="required" class="form-control" placeholder="Masukkan Biaya Hidup selama Kuliah  .." value="<?php echo $d['hidup_kuliah'] ?>">
                                                                    </div>

                                                                    <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                        <label>Biaya Buku</label>
                                                                        <input type="number" style="width:100%" name="buku required=" required" class="form-control" placeholder="Masukkan Biaya Buku  .." value="<?php echo $d['biaya_buku'] ?>">
                                                                    </div>

                                                                    <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                        <label>Biaya Penelitian</label>
                                                                        <input type="number" style="width:100%" name="penelitian" required="required" class="form-control" placeholder="Masukkan Biaya Penelitian  .." value="<?php echo $d['biaya_penelitian'] ?>">
                                                                    </div>

                                                                    <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                        <label>Total Biaya Dipersiapkan</label>
                                                                        <input type="number" style="width:100%" name="biaya_siap" required="required" class="form-control" placeholder="Masukkan Total Biaya Dipersiapkan  .." value="<?php echo $d['total_biaya'] ?>">
                                                                    </div>

                                                                    <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                        <label>Return Investasi direncanakan</label>
                                                                        <input type="number" style="width:100%" name="return" required="required" class="form-control" placeholder="Masukkan Return Investasi direncanakan  .." value="<?php echo $d['return_investasi'] ?>">
                                                                    </div>

                                                                    <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                        <label>Dana diinvestasikan atau bulannya</label>
                                                                        <input type="number" style="width:100%" name="investasi" required="required" class="form-control" placeholder="Masukkan Return Investasi direncanakan  .." value="<?php echo $d['dana_investasi'] ?>">
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
                                                <div class="modal fade" id="hapus_anak_<?php echo $d['tingkat_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Peringatan!</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">

                                                                <p>Yakin ingin menghapus data ini ?</p>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                                <a href="anak_hapus.php?id=<?php echo $d['tingkat_id'] ?>" class="btn btn-primary">Hapus</a>
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