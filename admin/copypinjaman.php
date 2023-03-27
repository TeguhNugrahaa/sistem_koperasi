<?php include 'header.php'; ?>

<div class="content-wrapper">

    <section class="content-header">
        <h1>
            Pinjaman
            <small>Data Pinjaman</small>
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
                        <h3 class="box-title">Pinjaman</h3>
                        <div class="btn-group pull-right">

                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal">
                                <i class="fa fa-plus"></i> &nbsp Tambah Pinjaman
                            </button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="table-datatable">
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
                                        <tr>
                                            <td class="text-center"><?php echo $no++; ?></td>
                                            <td class="text-center"><?php echo $d['kode_pinjam']; ?></td>
                                            <td class="text-center"><?php echo $d['nama_anggota']; ?></td>
                                            <td class="text-center"><?php echo $d['tanggal_pinjam']; ?></td>
                                            <td class="text-center"><?php echo $d['tanggal_tempo']; ?></td>
                                            <td class="text-center"><?php echo $d['jenis_pinjam']; ?></td>
                                            <td class="text-center"><?php echo $d['besar_pinjam']; ?></td>
                                            <td class="text-center"><?php echo $d['lama_angsuran']; ?></td>
                                            <td class="text-center"><?php echo $d['status_pinjaman']; ?></td>

                                            <td>

                                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_pinjaman_<?php echo $d['pinjaman_id'] ?>">
                                                    <i class="fa fa-cog"></i>
                                                </button>

                                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_pinjaman_<?php echo $d['pinjaman_id'] ?>">
                                                    <i class="fa fa-trash"></i>
                                                </button>


                                                <form action="pinjaman_update.php/<?php echo $d['pinjaman_id'] ?>" method="post">
                                                    <div class="modal fade" id="edit_pinjaman_<?php echo $d['pinjaman_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="exampleModalLabel">Edit pinjaman</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">

                                                                    <!-- <input type="text" name="id" value="<?php echo $d['pinjaman_id'] ?>" hidden> -->

                                                                    <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                        <label>Kode Pinjam</label>
                                                                        <input type="text" style="width:100%" name="kode_pinjam" required="required" class="form-control" placeholder="Masukkan Kode Pinjam .." value="<?php echo $d['kode_pinjam'] ?>">
                                                                    </div>


                                                                    <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                        <label>Nama Anggota</label>
                                                                        <input type="text" style="width:100%" name="nama" required="required" class="form-control" placeholder="Masukkan Nama Anggota .." value="<?php echo $d['nama_anggota'] ?>">
                                                                    </div>

                                                                    <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                        <label>Tanggal Pinjam</label>
                                                                        <input type="hidden" name="id" value="<?php echo $d['pinjaman_id'] ?>">
                                                                        <input type="text" style="width:100%" name="tanggal_pinjam" required="required" class="form-control datepicker2" value="<?php echo $d['tanggal_pinjam'] ?>">
                                                                    </div>

                                                                    <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                        <label>Tanggal Tempo</label>
                                                                        <input type="hidden" name="id" value="<?php echo $d['pinjaman_id'] ?>">
                                                                        <input type="text" style="width:100%" name="tanggal_tempo" required="required" class="form-control datepicker2" value="<?php echo $d['tanggal_tempo'] ?>">
                                                                    </div>


                                                                    <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                        <label>Jenis Pinjaman</label>
                                                                        <select name="jenis" style="width:100%" class="form-control" required="required">
                                                                            <option value="">- Pilih -</option>
                                                                            <option <?php if ($d['jenis_pinjam'] == "Konsumtif") {
                                                                                        echo "selected='selected'";
                                                                                    } ?> value="Konsumtif">Konsumtif</option>
                                                                            <option <?php if ($d['jenis_pinjam'] == "Produktif") {
                                                                                        echo "selected='selected'";
                                                                                    } ?> value="Produktif">Produktif</option>
                                                                            <option <?php if ($d['jenis_pinjam'] == "Investasi") {
                                                                                        echo "selected='selected'";
                                                                                    } ?> value="Produktif">Investasi</option>
                                                                            <option <?php if ($d['jenis_pinjam'] == "Mikro") {
                                                                                        echo "selected='selected'";
                                                                                    } ?> value="Produktif">Mikro</option>

                                                                        </select>
                                                                    </div>


                                                                    <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                        <label>Besar Pinjaman</label>
                                                                        <input type="text" style="width:100%" name="besar" required="required" class="form-control" placeholder="Masukkan Besar Pinjaman .." value="<?php echo $d['besar_pinjam'] ?>">
                                                                    </div>

                                                                    <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                        <label>Lama Angsuran</label>
                                                                        <input type="text" style="width:100%" name="lama" required="required" class="form-control" placeholder="Masukkan Lama Pinjam .." value="<?php echo $d['lama_angsuran'] ?>">
                                                                    </div>


                                                                    <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                        <label>Status Pinjaman</label>
                                                                        <input type="text" style="width:100%" name="status_pinjaman" required="required" class="form-control" placeholder="Masukkan Status Pinjaman .." value="<?php echo $d['status_pinjaman'] ?>">
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
                                                <div class="modal fade" id="hapus_pinjaman_<?php echo $d['pinjaman_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                <a href="pinjaman_hapus.php?id=<?php echo $d['pinjaman_id'] ?>" class="btn btn-primary">Hapus</a>
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
                        <form action="pinjaman_act.php" method="post">
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="exampleModalLabel">Tambah Pinjaman</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <div class="form-group">
                                                <label>Kode Pinjam</label>
                                                <input type="text" name="kode_pinjam" required="required" class="form-control" placeholder="Masukkan Kode Pinjam ..">
                                            </div>


                                            <div class="form-group">
                                                <label>Nama Anggota</label>
                                                <input type="text" name="nama" required="required" class="form-control" placeholder="Masukkan Nama Anggota ..">
                                            </div>

                                            <div class="form-group">
                                                <label>Tanggal Pinjam</label>
                                                <input type="text" name="tanggal_pinjam" required="required" class="form-control datepicker2">
                                            </div>


                                            <div class="form-group">
                                                <label>Tanggal Tempo</label>
                                                <input type="text" name="tanggal_tempo" required="required" class="form-control datepicker2">
                                            </div>



                                            <div class="form-group">
                                                <label>Jenis Pinjaman</label>
                                                <select name="jenis" class="form-control" required="required">
                                                    <option value="">- Pilih -</option>
                                                    <option value="Konsumtif">Konsumtif</option>
                                                    <option value="Produktif">Produktif</option>
                                                    <option value="Investasi">Investasi</option>
                                                    <option value="Mikro">Mikro</option>

                                            </div>


                                            <div class="form-group">
                                                <label>Besar Pinjam</label>
                                                <input type="text" name="besar" required="required" class="form-control" placeholder="Masukkan Besar Simpanan ..">
                                            </div>


                                            <div class="form-group">
                                                <label>Lama Angsuran</label>
                                                <input type="text" name="lama" required="required" class="form-control" placeholder="Masukkan Lama Angsuran ..">
                                            </div>



                                            <div class="form-group">
                                                <label>Status Pinjaman</label>
                                                <select name="status_pinjaman" class="form-control" required="required">
                                                    <option value="">- Pilih -</option>
                                                    <option value="Lunas">Lunas</option>
                                                    <option value="Nyicil">Nyicil</option>
                                            </div>
                                            </select>

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