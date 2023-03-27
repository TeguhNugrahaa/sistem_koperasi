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

                                <div class="form-group">
                                    <label>Kode Anggota</label>
                                    <input type="text" class="form-control" name="kode" required="required" placeholder="Kode Anggota ..">
                                </div>

                                <div class="form-group">
                                    <label>Nama Anggota</label>
                                    <input type="text" class="form-control" name="nama" required="required" placeholder="Masukkan Nama Anggota ..">
                                </div>


                                <div class="form-group">
                                    <label>Pekerjaan</label>
                                    <input type="text" class="form-control" name="pekerjaan" required="required" placeholder="Masukkan Pekerjaan ..">
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="level" required="required">
                                        <option value=""> - Pilih Status - </option>
                                        <option value="aktif"> Aktif </option>
                                        <option value="mati"> Nonaktif </option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Foto</label>
                                    <input type="file" name="foto">


                                    <div class="form-group">
                                        <input type="submit" class="btn btn-sm btn-primary" value="Simpan">
                                    </div>
                        </form>
                    </div>

                </div>
            </section>
        </div>
    </section>

</div>
<?php include 'footer.php'; ?>