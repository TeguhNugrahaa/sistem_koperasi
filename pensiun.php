<?php include 'header.php'; ?>

<div class="content-wrapper">

    <section class="content-header">
        <h1>
            Sistem
            <small>Data Pensiun</small>

            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Pensiun</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                        </ol>
                    </nav>
                </div>


                <!--end breadcrumb-->
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <h6 class="mb-0 text-uppercase">Pensiun</h6>
                        <hr />
                        <div class="card border-top border-0 border-4 border-info">
                            <div class="card-body">
                                <div class="border p-4 rounded">
                                    <div class="card-title d-flex align-items-center">
                                        <div><i class="bx bxs-user me-1 font-22 text-info"></i>
                                        </div>
                                        <h5 class="mb-0 text-info">Drop down pensiun</h5>
                                    </div>
                                    <hr />
                                    <form name="DiscriminantAnalysisForm" id="DiscriminantAnalysisForm" action="" method="post" enctype="multipart/form-data">
                                        <div class="row mb-4">
                                            <label for="X1value" class="col-sm-3 col-form-label">Usia Anak Saat Ini</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="X1value" id="X1value" placeholder="Usia Anak Saat Ini..." onFocus="startCalc();" onBlur="stopCalc();">
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <br>
                                            <label for="X2value" class="col-sm-3 col-form-label">Umur Pensiun</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="X2value" id="X2value" placeholder="Umur Pensiun..." onFocus="startCalc();" onBlur="stopCalc();">
                                            </div>
                                        </div>


                                        <div class="row mb-4">
                                            <br>
                                            <label for="sisa" class="col-sm-3 col-form-label">Jumlah Waktu Sisa</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="sisa" id="sisa" placeholder="" readonly>
                                            </div>
                                        </div>


                                        <div class="row mb-4">
                                            <br>
                                            <label for="X4value" class="col-sm-3 col-form-label">Biaya Berdua Saat Ini</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="X4value" id="X4value" placeholder="Biaya Berdua Saat Ini..." onFocus="startCalc();" onBlur="stopCalc();">
                                            </div>
                                        </div>




                                        <div class="row mb-4">
                                            <br>
                                            <label for="inflasi" class="col-sm-3 col-form-label">Asumsi Inflasi</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="inflasi" id="inflasi" placeholder="Asumsi Inflasi..." onFocus="startCalc();" onBlur="stopCalc();">
                                            </div>
                                            <div class="col-sm-3">
                                                <p>% (dalam persen)</p>
                                                </br>
                                            </div>
                                        </div>


                                        <div class="row mb-4">
                                            <br>
                                            <label for="sql" class="col-sm-3 col-form-label">Data yang masuk ke sql</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="sql" id="sql" placeholder="" readonly>
                                                </br>
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <br>
                                            <label for="pensiun" class="col-sm-3 col-form-label">Biaya saat pensiun</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="pensiun" id="pensiun" placeholder="" readonly>
                                                </br>
                                            </div>
                                        </div>


                                        <div class="row mb-4">
                                            <br>
                                            <label for="deposito" class="col-sm-3 col-form-label">Bunga deposito waktu pensiun</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="deposito" id="deposito" placeholder="Bunga deposito..." onFocus="startCalc();" onBlur="stopCalc();">
                                            </div>
                                            <div class="col-sm-3">
                                                <p>% (dalam persen)</p>
                                                </br>
                                            </div>
                                        </div>


                                        <div class="row mb-4">
                                            <br>
                                            <label for="dana" class="col-sm-3 col-form-label">Total Dana Persiapan Pensiun</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="dana" id="dana" placeholder="" readonly>
                                                </br>
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <br>
                                            <label for="return" class="col-sm-3 col-form-label">Return Investasi periode Kerja</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="return" id="return" placeholder="return..." onFocus="startCalc();" onBlur="stopCalc();">
                                            </div>
                                            <div class="col-sm-3">
                                                <p>% (dalam persen)</p>
                                                </br>
                                            </div>
                                        </div>


                                        <div class="row mb-4">
                                            <br>
                                            <label for="zsimpan" class="col-sm-3 col-form-label">Simpanan Per Bulan</label>
                                            <div class="col-sm-3">
                                                <input type="simpan" class="form-control" name="zsimpan" id="zsimpan" placeholder="" readonly>
                                                </br>
                                            </div>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
</div>
<!--end page wrapper -->
<!--start overlay-->
<div class="overlay toggle-icon"></div>
<!--end overlay-->
<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
<!--End Back To Top Button-->
<footer class="page-footer">
    <p class="mb-0">Copyright © 2022. All right reserved.</p>
</footer>
</div>



<!--end switcher-->
<!-- Bootstrap JS -->
<script src="assets909/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="assets909/js/jquery.min.js"></script>
<script src="assets909/plugins/simplebar/js/simplebar.min.js"></script>
<script src="assets909/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="assets909/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<!--app JS-->
<script src="assets909/js/app.js"></script>

<script>
    function startCalc() {
        interval = setInterval("calc()", 1);
    }

    function calc() {
        vai = document.DiscriminantAnalysisForm.inflasi.value;
        valueX6 = document.DiscriminantAnalysisForm.zsimpan.value;
        document.DiscriminantAnalysisForm.sql.value = vai / 100;
        document.DiscriminantAnalysisForm.sisa.value = X2value.value - X1value.value;
        document.DiscriminantAnalysisForm.pensiun.value = X4value.value * (1 + inflasi.value + pow(X3value.value));
        document.DiscriminantAnalysisForm.dana.value = X5value * 12 / deposito.value;


        document.DiscriminantAnalysisForm.Zvalue.value = (valueX1 * 33 / 1000) + (valueX2 * 12 / 1000) + (valueX3 * 999 / 1000) + (valueX4 * 6 / 1000) + (valueX5 * 14 / 1000);
        if (valueX6 < 2.67) {
            document.DiscriminantAnalysisForm.keteranganhasil.value = "Tidak Baik";
        } else {
            document.DiscriminantAnalysisForm.keteranganhasil.value = "Baik";
        }

    }

    function stopCalc() {
        clearInterval(interval);
    }
</script> <!-- Menghitung otomatis -->
</body>


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

                <?php include 'footer.php'; ?>