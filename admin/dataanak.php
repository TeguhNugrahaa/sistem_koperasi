<?php include 'header.php'; ?>

<div class="content-wrapper">

    <section class="content-header">
        <h1>
            Anak
            <small>Data Anak</small>
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
                        <h3 class="box-title">Anak</h3>
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
                                            <h4 class="modal-title" id="exampleModalLabel">Tambah Anak</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <div class="form-group">
                                                <label>Umur Anak Saat Ini</label>
                                                <input type="text" name="sekarang" required="required" class="form-control" placeholder="Masukkan Umur Anak Saat Ini ..">
                                            </div>

                                            <div class="form-group">
                                                <label>Tingkatan Sekolah</label>
                                                <select name="tingkat" class="form-control" required="required">
                                                    <option value="">- Pilih -</option>
                                                    <option value="0">0</option>
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
                                                <input type="text" name="sisa" required="required" class="form-control" placeholder="Masukkan Sisa sekolah ..">
                                            </div>

                                            <div class="form-group">
                                                <label>Asumsi Inflasi saat ini sampai anak mau Kuliah (%)</label>
                                                <input type="text" name="asumsi" required="required" class="form-control" placeholder="Masukkan Asumsi Inflasi saat ini sampai anak mau Kuliah..">
                                            </div>

                                            <div class="form-group">
                                                <label>Asumsi Inflasi pada saat Anak Kuliah (%)</label>
                                                <input type="text" name="inflasi" required="required" class="form-control" placeholder="Masukkan Asumsi Inflasi pada saat Anak Kuliah..">
                                            </div>


                                            <div class="form-group">
                                                <label>Biaya uang Kuliah / Semester Saat ini</label>
                                                <input type="text" name="biaya" required="required" class="form-control" placeholder="Masukkan Biaya uang Kuliah / Semester Saat ini ..">
                                            </div>


                                            <div class="form-group">
                                                <label>Biaya kuliah pada saat kuliah</label>
                                                <input type="text" name="biayakuliah" required="required" class="form-control" placeholder="Masukkan Biaya kuliah pada saat kuliah ..">
                                            </div>

                                            <div class="form-group">
                                                <label>Biaya Hidup Per Bulan Saat ini</label>
                                                <input type="text" name="hidup" required="required" class="form-control" placeholder="Masukkan Biaya Hidup Per Bulan Saat ini ..">
                                            </div>

                                            <div class="form-group">
                                                <label>Biaya Hidup pada saat Kuliah</label>
                                                <input type="text" name="biayahidup" required="required" class="form-control" placeholder="Masukkan Biaya Hidup pada saat Kuliah ..">
                                            </div>


                                            <div class="form-group">
                                                <label>Biaya Buku Per Semester</label>
                                                <input type="text" name="bukusemester" required="required" class="form-control" placeholder="Masukkan Biaya Buku Per Semester ..">
                                            </div>


                                            <div class="form-group">
                                                <label>Biaya Masuk PT</label>
                                                <input type="text" name="masukpt" required="required" class="form-control" placeholder="Masukkan Biaya Masuk PT ..">
                                            </div>

                                            <div class="form-group">
                                                <label>Biaya Uang Kuliah Seluruhnya</label>
                                                <input type="text" name="uangkuliah" required="required" class="form-control" placeholder="Masukkan Biaya uang kuliah seluruhnya ..">
                                            </div>


                                            <div class="form-group">
                                                <label>Biaya Hidup selama Kuliah</label>
                                                <input type="text" name="hidupkuliah" required="required" class="form-control" placeholder="Masukkan Biaya hidup selama kuliah ..">
                                            </div>

                                            <div class="form-group">
                                                <label>Biaya Buku</label>
                                                <input type="text" name="buku" required="required" class="form-control" placeholder="Masukkan Biaya buku ..">
                                            </div>

                                            <div class="form-group">
                                                <label>Biaya Penelitian</label>
                                                <input type="text" name="penelitian" required="required" class="form-control" placeholder="Masukkan Biaya penelitian ..">
                                            </div>

                                            <div class="form-group">
                                                <label>Total Biaya Dipersiapkan</label>
                                                <input type="text" name="total" required="required" class="form-control" placeholder="Masukkan total biaya dipersiapkan ..">
                                            </div>


                                            <div class="form-group">
                                                <label>Return Investasi direncanakan</label>
                                                <input type="text" name="return" required="required" class="form-control" placeholder="Masukkan return investasi direncanakan ..">
                                            </div>


                                            <div class="form-group">
                                                <label>Dana diinvestasikan / bulannya</label>
                                                <input type="text" name="dana" required="required" class="form-control" placeholder="Masukkan dana di investasikan/bulannya ..">
                                            </div>


                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>


                        <a href="anak-excel-backup.php?>" target="_blank" class="btn btn-sm btn-success"><i class="fa fa-file-excel-o"></i> &nbsp CETAK EXCEL</a>
                        <a href="lap_excel_anak.php" target="_blank" class="btn btn-sm btn-success"><i class="fa fa-file-excel-o"></i> &nbsp CETAK EXCEL FORMULA</a>
                        <a href="anak_print.php" target="_blank" class="btn btn-sm btn-primary"><i class="fa fa-print"></i> &nbsp PRINT</a>
                        <div class="table-responsive">


                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="table-datatable">
                                    <thead>
                                        <!-- <tr>
                                            <th width="1%">NO</th>
                                            <th width="1%">UMUR ANAK SAAT INI</th>
                                            <th colspan="2" class="text-center">TINGKATAN SEKOLAH</th>
                                            <th rowspan="2" width="10%" class="text-center">OPSI</th>
                                        </tr> -->
                                        <!-- <tr>
 
                                            <th class="text-center">1</th>
                                            <th class="text-center">2</th>
                                            <th class="text-center">3</th>
                                            <th class="text-center">4</th>
                                            <th class="text-center">5</th>
                                            <th class="text-center">6</th>
                                            <th class="text-center">7</th>
                                            <th class="text-center">8</th>
                                            <th class="text-center">9</th>
                                            <th class="text-center">10</th>
                                            <th class="text-center">11</th>
                                            <th class="text-center">12</th>
                                        </tr> -->
                                        <tr>
                                            <th width="1%">NO</th>
                                            <th width="1%">UMUR ANAK SAAT INI</th>
                                            <th colspan="" class="text-center">TINGKATAN SEKOLAH</th>
                                            <th rowspan="2" width="10%" class="text-center">SISA SEKOLAH KE PT</th>
                                            <th rowspan="2" width="10%" class="text-center">ASUMSI INFLASI SAAT INI SAMPAI ANAK MAU KULIAH (%)</th>
                                            <th rowspan="2" width="10%" class="text-center">ASUMSI INFLASI PADA SAAT ANAK MAU KULIAH (%)</th>
                                            <th rowspan="2" width="10%" class="text-center">BIAYA UANG KULIAH/ SEMESTER SAAT INI</th>
                                            <th rowspan="2" width="10%" class="text-center">BIAYA KULIAH PADA SAAT KULIAH</th>
                                            <th rowspan="2" width="10%" class="text-center">BIAYA HIDUP PER BULAN SAAT INI</th>
                                            <th rowspan="2" width="10%" class="text-center">BIAYA HIDUP PADA SAAT KULIAH</th>
                                            <th rowspan="2" width="10%" class="text-center">BIAYA BUKU PER SEMESTER</th>
                                            <th rowspan="2" width="10%" class="text-center">BIAYA MASUK PT</th>
                                            <th rowspan="2" width="10%" class="text-center">BIAYA UANG KULIAH SELURUHNYA</th>
                                            <th rowspan="2" width="10%" class="text-center">BIAYA HIDUP SELAMA KULIAH</th>
                                            <th rowspan="2" width="10%" class="text-center">BIAYA BUKU</th>
                                            <th rowspan="2" width="10%" class="text-center">BIAYA PENELITIAN</th>
                                            <th rowspan="2" width="10%" class="text-center">TOTAL BIAYA DIPERSIAPKAN</th>
                                            <th rowspan="2" width="10%" class="text-center">RETURN INVESTASI DIRENCAKAN (%)</th>
                                            <th rowspan="2" width="10%" class="text-center">DANA DI INVESTASIKAN/ BULANNYA</th>
                                            <th rowspan="2" width="10%" class="text-center">OPSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include '../koneksi.php';
                                        $no = 1;
                                        $data = mysqli_query($koneksi, "SELECT * FROM anak");
                                        while ($d = mysqli_fetch_array($data)) {
                                        ?>
                                            <tr>
                                                <td class="text-center"><?php echo $no++; ?></td>
                                                <td class="text-center"><?php echo $d['umur_sekarang']; ?></td>
                                                <td class="text-center"><?php echo $d['tingkat_sekolah']; ?></td>
                                                <td class="text-center"><?php echo $d['sisa_sekolah']; ?></td>
                                                <td class="text-center"><?php echo $d['asumsi_kuliah']; ?></td>
                                                <td class="text-center"><?php echo $d['inflasi_kuliah']; ?></td>
                                                <td class="text-center"><?php echo $d['biaya_semester']; ?></td>
                                                <td class="text-center"><?php echo "Rp. " . number_format($d['biaya_kuliah']) . " ,-"; ?></td>
                                                <td class="text-center"><?php echo "Rp. " . number_format($d['biaya_hidup']) . " ,-"; ?></td>
                                                <td class="text-center"><?php echo "Rp. " . number_format($d['hidup_kuliah']) . " ,-"; ?></td>
                                                <td class="text-center"><?php echo "Rp. " . number_format($d['biaya_buku']) . " ,-"; ?></td>
                                                <td class="text-center"><?php echo "Rp. " . number_format($d['biaya_pt']) . " ,-"; ?></td>
                                                <td class="text-center"><?php echo "Rp. " . number_format($d['biaya_seluruhnya']) . " ,-"; ?></td>
                                                <td class="text-center"><?php echo "Rp. " . number_format($d['kuliah_hidup']) . " ,-"; ?></td>
                                                <td class="text-center"><?php echo "Rp. " . number_format($d['buku_biaya']) . " ,-"; ?></td>
                                                <td class="text-center"><?php echo "Rp. " . number_format($d['biaya_penelitian']) . " ,-"; ?></td>
                                                <td class="text-center"><?php echo "Rp. " . number_format($d['total_biaya']) . " ,-"; ?></td>
                                                <td class="text-center"><?php echo $d['return_investasi']; ?></td>
                                                <td class="text-center"><?php echo "Rp. " . number_format($d['dana_investasi']) . " ,-"; ?></td>
                                                <td>
                                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_anak_<?php echo $d['anak_id'] ?>">
                                                        <i class="fa fa-cog"></i>
                                                    </button>

                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_anak_<?php echo $d['anak_id'] ?>">
                                                        <i class="fa fa-trash"></i>
                                                    </button>


                                                    <form action="anak_update.php" method="post">
                                                        <div class="modal fade" id="edit_anak_<?php echo $d['anak_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="exampleModalLabel">Edit anak</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">

                                                                        <input type="hidden" name="id" value="<?php echo $d['anak_id'] ?>">




                                                                        <div class="form-group">
                                                                            <label>Umur Anak Saat Ini</label>
                                                                            <input type="text" name="sekarang" required="required" class="form-control" placeholder="Masukkan Umur Anak Saat Ini .." value="<?php echo $d['umur_sekarang'] ?>">
                                                                        </div>



                                                                        <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                            <label>Tingkatan sekolah</label>
                                                                            <select name="tingkat" style="width:100%" class="form-control" required="required">
                                                                                <option value="">- Pilih -</option>
                                                                                <option <?php if ($d['tingkat_sekolah'] == "0") {
                                                                                            echo "selected='selected'";
                                                                                        } ?> value="0">0</option>
                                                                                <option <?php if ($d['tingkat_sekolah'] == "1") {
                                                                                            echo "selected='selected'";
                                                                                        } ?> value="1">1</option>
                                                                                <option <?php if ($d['tingkat_sekolah'] == "2") {
                                                                                            echo "selected='selected'";
                                                                                        } ?> value="2">2</option>
                                                                                <option <?php if ($d['tingkat_sekolah'] == "3") {
                                                                                            echo "selected='selected'";
                                                                                        } ?> value="3">3</option>
                                                                                <option <?php if ($d['tingkat_sekolah'] == "4") {
                                                                                            echo "selected='selected'";
                                                                                        } ?> value="4">4</option>
                                                                                <option <?php if ($d['tingkat_sekolah'] == "5") {
                                                                                            echo "selected='selected'";
                                                                                        } ?> value="5">5</option>
                                                                                <option <?php if ($d['tingkat_sekolah'] == "5") {
                                                                                            echo "selected='selected'";
                                                                                        } ?> value="5">5</option>
                                                                                <option <?php if ($d['tingkat_sekolah'] == "7") {
                                                                                            echo "selected='selected'";
                                                                                        } ?> value="7">7</option>
                                                                                <option <?php if ($d['tingkat_sekolah'] == "8") {
                                                                                            echo "selected='selected'";
                                                                                        } ?> value="8">8</option>
                                                                                <option <?php if ($d['tingkat_sekolah'] == "9") {
                                                                                            echo "selected='selected'";
                                                                                        } ?> value="9">9</option>
                                                                                <option <?php if ($d['tingkat_sekolah'] == "10") {
                                                                                            echo "selected='selected'";
                                                                                        } ?> value="10">10</option>
                                                                                <option <?php if ($d['tingkat_sekolah'] == "11") {
                                                                                            echo "selected='selected'";
                                                                                        } ?> value="11">11</option>
                                                                                <option <?php if ($d['tingkat_sekolah'] == "12") {
                                                                                            echo "selected='selected'";
                                                                                        } ?> value="12">12</option>

                                                                            </select>
                                                                        </div>





                                                                        <div class="form-group">
                                                                            <label>Sisa Sekolah ke PT</label>
                                                                            <input type="text" name="sisa" required="required" class="form-control" placeholder="Masukkan Sisa sekolah .." value="<?php echo $d['sisa_sekolah'] ?>">
                                                                        </div>

                                                                        <div class=" form-group">
                                                                            <label>Asumsi Inflasi saat ini sampai anak mau Kuliah (%)</label>
                                                                            <input type="text" name="asumsi" required="required" class="form-control" placeholder="Masukkan Asumsi Inflasi saat ini sampai anak mau Kuliah.." value="<?php echo $d['asumsi_kuliah'] ?>">
                                                                        </div>

                                                                        <div class=" form-group">
                                                                            <label>Asumsi Inflasi pada saat Anak Kuliah (%)</label>
                                                                            <input type="text" name="inflasi" required="required" class="form-control" placeholder="Masukkan Asumsi Inflasi pada saat Anak Kuliah.." value="<?php echo $d['inflasi_kuliah'] ?>">
                                                                        </div>


                                                                        <div class=" form-group">
                                                                            <label>Biaya uang Kuliah / Semester Saat ini</label>
                                                                            <input type="text" name="biaya" required="required" class="form-control" placeholder="Masukkan Biaya uang Kuliah / Semester Saat ini .." value="<?php echo $d['biaya_semester'] ?>">
                                                                        </div>


                                                                        <div class=" form-group">
                                                                            <label>Biaya kuliah pada saat kuliah</label>
                                                                            <input type="text" name="biayakuliah" required="required" class="form-control" placeholder="Masukkan Biaya kuliah pada saat kuliah .." value="<?php echo $d['biaya_kuliah'] ?>">
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label>Biaya Hidup Per Bulan Saat ini</label>
                                                                            <input type="text" name="hidup" required="required" class="form-control" placeholder="Masukkan Biaya Hidup Per Bulan Saat ini .." value="<?php echo $d['biaya_hidup'] ?>">
                                                                        </div>

                                                                        <div class=" form-group">
                                                                            <label>Biaya Hidup pada saat Kuliah</label>
                                                                            <input type="text" name="biayahidup" required="required" class="form-control" placeholder="Masukkan Biaya Hidup pada saat Kuliah .." value="<?php echo $d['hidup_kuliah'] ?>">
                                                                        </div>


                                                                        <div class=" form-group">
                                                                            <label>Biaya Buku Per Semester</label>
                                                                            <input type="text" name="bukusemester" required="required" class="form-control" placeholder="Masukkan Biaya Buku Per Semester .." value="<?php echo $d['biaya_buku'] ?>">
                                                                        </div>


                                                                        <div class=" form-group">
                                                                            <label>Biaya Masuk PT</label>
                                                                            <input type="text" name="masukpt" required="required" class="form-control" placeholder="Masukkan Biaya Masuk PT .." value="<?php echo $d['biaya_pt'] ?>">
                                                                        </div>

                                                                        <div class=" form-group">
                                                                            <label>Biaya Uang Kuliah Seluruhnya</label>
                                                                            <input type="text" name="uangkuliah" required="required" class="form-control" placeholder="Masukkan Biaya uang kuliah seluruhnya .." value="<?php echo $d['biaya_seluruhnya'] ?>">
                                                                        </div>


                                                                        <div class=" form-group">
                                                                            <label>Biaya Hidup selama Kuliah</label>
                                                                            <input type="text" name="hidupkuliah" required="required" class="form-control" placeholder="Masukkan Biaya hidup selama kuliah .." value="<?php echo $d['kuliah_hidup'] ?>">
                                                                        </div>

                                                                        <div class=" form-group">
                                                                            <label>Biaya Buku</label>
                                                                            <input type="text" name="buku" required="required" class="form-control" placeholder="Masukkan Biaya buku .." value="<?php echo $d['buku_biaya'] ?>">
                                                                        </div>

                                                                        <div class=" form-group">
                                                                            <label>Biaya Penelitian</label>
                                                                            <input type="text" name="penelitian" required="required" class="form-control" placeholder="Masukkan Biaya penelitian .." value="<?php echo $d['biaya_penelitian'] ?>">
                                                                        </div>

                                                                        <div class=" form-group">
                                                                            <label>Total Biaya Dipersiapkan</label>
                                                                            <input type="text" name="total" required="required" class="form-control" placeholder="Masukkan total biaya dipersiapkan .." value="<?php echo $d['total_biaya'] ?>">
                                                                        </div>


                                                                        <div class=" form-group">
                                                                            <label>Return Investasi direncanakan</label>
                                                                            <input type="text" name="return" required="required" class="form-control" placeholder="Masukkan return investasi direncanakan .." value="<?php echo $d['return_investasi'] ?>">
                                                                        </div>


                                                                        <div class=" form-group">
                                                                            <label>Dana diinvestasikan / bulannya</label>
                                                                            <input type="text" name="dana" required="required" class="form-control" placeholder="Masukkan dana di investasikan/bulannya .." value="<?php echo $d['dana_investasi'] ?>">
                                                                        </div>



                                                                    </div>
                                                                    <div class=" modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>




                                                    <!-- modal hapus -->
                                                    <div class="modal fade" id="hapus_anak_<?php echo $d['anak_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                    <a href="anak_hapus.php?id=<?php echo $d['anak_id'] ?>" class="btn btn-primary">Hapus</a>
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