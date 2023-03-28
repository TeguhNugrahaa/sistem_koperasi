<?php include 'header.php'; ?>

<div class="content-wrapper">

    <section class="content-header">
        <h1>
            Anggota
            <small>Tambah Anggota Baru</small>
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
                        <h3 class="box-title">Tambah Anggota</h3>
                        <a href="anggota.php" class="btn btn-info btn-sm pull-right"><i class="fa fa-reply"></i> &nbsp Kembali</a>
                    </div>
                    <div class="box-body">
                        <form action="anggota_act.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">

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