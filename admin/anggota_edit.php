<?php
include 'header.php';
include '../koneksi.php';
$id = $_GET['id'];
?>

<div class="content-wrapper">

    <section class="content-header">
        <h1>
            Anggota
            <small>Edit Anggota</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <section class="col-lg-6 col-lg-offset-3">
                <div class="box box-info">

                    <div class="box-header">
                        <h3 class="box-title">Edit Anggota</h3>
                        <a href="anggota.php" class="btn btn-info btn-sm pull-right"><i class="fa fa-reply"></i> &nbsp; Kembali</a>
                    </div>
                    <div class="box-body">
                        <form action="anggota_update.php?id=<?= $id ?>" method="post" enctype="multipart/form-data">
                            <?php
                            $data = mysqli_query($koneksi, "select * from anggota where anggota_id='$id'");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>

                                <input type="hidden" class="form-control" name="id" value="<?php echo $d['anggota_id'] ?>">
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
                                    <input type="text" style="width:100%" name="foto_ktp" required="required" class="form-control" placeholder="Masukkan Foto KTP .." value="<?php echo $d['anggota_ktp'] ?>">
                                </div>

                                <div class="form-group" style="width:100%;margin-bottom:20px">
                                    <label>Foto NPWP</label>
                                    <input type="text" style="width:100%" name="foto_npwp" required="required" class="form-control" placeholder="Masukkan Foto NPWP .." value="<?php echo $d['anggota_npwp'] ?>">
                                </div>

                                <div class="form-group" style="width:100%;margin-bottom:20px">
                                    <label>Upload bukti pembayaran</label>
                                    <input type="text" style="width:100%" name="bukti_pembayaran" required="required" class="form-control" placeholder="Masukkan Bukti Pembayaran .." value="<?php echo $d['anggota_bukti'] ?>">
                                </div>


                                <div class="form-group">
                                    <input type="submit" class="btn btn-sm btn-primary" value="Simpan">
                                </div>

                            <?php
                            }

                            ?>

                        </form>
                    </div>

                </div>
            </section>
        </div>
    </section>

</div>
<?php include 'footer.php'; ?>