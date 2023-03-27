<?php include 'header.php'; ?>

<div class="content-wrapper">

    <section class="content-header">
        <h1>
            Sistem
            <small>Data Anak</small>

            <div class="card border-top border-0 border-4 border-info">
                <div class="card-body">
                    <div class="border p-4 rounded">
                        <div class="card-title d-flex align-items-center">
                            <div><i class="bx bxs-user me-1 font-22 text-info"></i>
                            </div>
                        </div>
                        <hr />
                        <form name="AnakModelForm" id="AnakModelForm" action="" method="post" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <br>
                                <label for="UmurAnakvalue" class="col-sm-5 col-form-label">Umur Anak
                                    saat ini</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="UmurAnakvalue" id="UmurAnakvalue" placeholder="Umur Anak saat ini..." onFocus="startCalc();" onBlur="stopCalc();">
                                    </br>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <br>
                                <label for="Tingkatvalue" class="col-sm-5 col-form-label"> Tingkatan
                                    sekolah</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="Tingkatvalue" id="Tingkatvalue" placeholder="Tingkatan sekolah..." onFocus="startCalc();" onBlur="stopCalc();">
                                    </br>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <br>
                                <label for="Sisavalue" class="col-sm-5 col-form-label">Sisa sekolah ke
                                    PT</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="SisaSekolahvalue" id="Sisavalue" placeholder="" readonly onFocus="startCalc();" onBlur="stopCalc();">
                                    </br>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <br>
                                <label for="AsumsiInflasivalue" class="col-sm-5 col-form-label">Asumsi
                                    Inflasi saat ini sampai anak mau Kuliah (%)</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="AsumsiInflasivalue" id="AsumsiInflasivalue" placeholder="Asumsi Inflasi saat ini sampai anak mau kuliah..." onFocus="startCalc();" onBlur="stopCalc();">
                                    </br>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <br>
                                <label for="InflasiAnakvalue" class="col-sm-5 col-form-label">Asumsi
                                    Inflasi pada saat Anak Kuliah (%)</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="InflasiAnakvalue" id="InflasiAnakvalue" placeholder="Asumsi Inflasi pada saat anak kuliah..." onFocus="startCalc();" onBlur="stopCalc();">
                                    </br>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <br>
                                <label for="BiayaSemestervalue" class="col-sm-5 col-form-label">Biaya
                                    uang Kuliah / Semester Saat ini</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="BiayaSemestervalue" id="BiayaSemestervalue" placeholder="Biaya Uang Kuliah atau semester saat ini..." onFocus="startCalc();" onBlur="stopCalc();">
                                    </br>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <br>
                                <label for="Biayavalue" class="col-sm-5 col-form-label">Biaya kuliah
                                    pada saat kuliah</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="Biayavalue" id="Biayavalue" placeholder="" readonly onFocus="startCalc();" onBlur="stopCalc();">
                                    </br>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <br>
                                <label for="Hidupvalue" class="col-sm-5 col-form-label">Biaya Hidup Per
                                    Bulan Saat ini</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="Hidupvalue" id="Hidupvalue" placeholder="Biaya Hidup Per Bulan Saat ini..." onFocus="startCalc();" onBlur="stopCalc();">
                                    </br>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <br>
                                <label for="Kuliahvalue" class="col-sm-5 col-form-label">Biaya Hidup
                                    pada saat Kuliah</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="Kuliahvalue" id="Kuliahvalue" placeholder="" readonly onFocus="startCalc();" onBlur="stopCalc();">
                                    </br>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <br>
                                <label for="BukuSemestervalue" class="col-sm-5 col-form-label">Biaya
                                    Buku Per Semester</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="BukuSemestervalue" id="BukuSemestervalue" placeholder="Biaya Buku Per Semester..." onFocus="startCalc();" onBlur="stopCalc();">
                                    </br>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <br>
                                <label for="BiayaPTvalue" class="col-sm-5 col-form-label">Biaya Masuk
                                    PT</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="BiayaPTvalue" id="BiayaPTvalue" placeholder="Biaya Masuk PT.." onFocus="startCalc();" onBlur="stopCalc();">
                                    </br>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <br>
                                <label for="Uangkuliahvalue" class="col-sm-5 col-form-label">Biaya Uang
                                    Kuliah Seluruhnya</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="UangKuliahvalue" id="Uangkuliahvalue" placeholder="" readonly onFocus="startCalc();" onBlur="stopCalc();">
                                    </br>
                                </div>
                            </div>



                            <div class="row mb-3">
                                <br>
                                <label for="Hidupkuliahvalue" class="col-sm-5 col-form-label">Biaya
                                    Hidup selama Kuliah</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="Hidupkuliahvalue" id="Hidupkuliahvalue" placeholder="" readonly onFocus="startCalc();" onBlur="stopCalc();">
                                    </br>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <br>
                                <label for="Bukuvalue" class="col-sm-5 col-form-label">Biaya
                                    Buku</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="Bukuvalue" id="Bukuvalue" placeholder="" readonly onFocus="startCalc();" onBlur="stopCalc();">
                                    </br>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <br>
                                <label for="BiayaPenelitianvalue" class="col-sm-5 col-form-label">Biaya
                                    Penelitian</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="BiayaPenelitianvalue" id="BiayaPenelitianvalue" placeholder="Biaya Penelitian..." onFocus="startCalc();" onBlur="stopCalc();">
                                    </br>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <br>
                                <label for="Totalvalue" class="col-sm-5 col-form-label">Total Biaya
                                    Dipersiapkan</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="Totalvalue" id="Totalvalue" placeholder="" readonly onFocus="startCalc();" onBlur="stopCalc();">
                                    </br>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <br>
                                <label for="Returnvalue" class="col-sm-5 col-form-label">Return
                                    Investasi direncanakan (%)</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="Returnvalue" id="Returnvalue" placeholder="Return Investasi direncanakan..." onFocus="startCalc();" onBlur="stopCalc();">
                                    </br>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <br>
                                <label for="Danavalue" class="col-sm-5 col-form-label">Dana
                                    diinvestasikan / bulannya</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="Danavalue" id="Danavalue" placeholder="" readonly onFocus="startCalc();" onBlur="stopCalc();">
                                    </br>
                                </div>
                            </div>


                    </div>
                </div>
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
        valueX1 = document.AnakModelForm.UmurAnakvalue.value;
        valueX2 = document.AnakModelForm.Tingkatvalue.value;
        valueX3 = document.AnakModelForm.Sisavalue.value;
        //			document.AnakModelForm.Sisavalue.value = (12 - valueX1);
        if (valueX2 < 1) {
            document.AnakModelForm.Sisavalue.value = (18 - valueX1);
        } else {
            document.AnakModelForm.Sisavalue.value = (12 - valueX2);
        }
        //			document.AnakModelForm.Sisavalue.value = 12 + (6 - valueX1 - 1);
        valueX4 = document.AnakModelForm.AsumsiInflasivalue.value;
        valueX5 = document.AnakModelForm.InflasiAnakvalue.value;
        valueX6 = document.AnakModelForm.BiayaSemestervalue.value;
        valueX7 = document.AnakModelForm.Biayavalue.value;
        document.AnakModelForm.Biayavalue.value = (valueX6) * (1 + valueX4 / 100) ** (valueX3);


        valueX8 = document.AnakModelForm.Hidupvalue.value;
        valueX9 = document.AnakModelForm.Kuliahvalue.value;
        document.AnakModelForm.Kuliahvalue.value = (valueX8) * (1 + valueX4 / 100) ** (valueX3);

        valueX10 = document.AnakModelForm.BukuSemestervalue.value;
        valueX11 = document.AnakModelForm.BiayaPTvalue.value;

        valueX12 = document.AnakModelForm.Uangkuliahvalue.value;
        document.AnakModelForm.Uangkuliahvalue.value = (valueX7 * 10);
        valueX13 = document.AnakModelForm.Hidupkuliahvalue.value;
        document.AnakModelForm.Hidupkuliahvalue.value = (valueX9 * 5 * 12);
        valueX14 = document.AnakModelForm.Bukuvalue.value;
        document.AnakModelForm.Bukuvalue.value = (valueX10) * (12);

        valueX15 = document.AnakModelForm.BiayaPenelitianvalue.value;
        valueX16 = document.AnakModelForm.Totalvalue.value;
        document.AnakModelForm.Totalvalue.value = (valueX11 * 1) + (valueX12 * 1) + (valueX13 * 1) + (valueX14 * 1) + (valueX15 * 1);

        valueX17 = document.AnakModelForm.Returnvalue.value;
        valueX18 = document.AnakModelForm.Danavalue.value;
        document.AnakModelForm.Danavalue.value = (valueX16) / (((1 + (valueX17 / 100 / 12)) ** (valueX3 * 12) - 1) / (valueX17 / 100 / 12));



        document.AnakModelForm.Zvalue.value = (valueX1 * 33 / 1000) + (valueX2 * 12 / 1000) + (valueX3 * 999 / 1000) + (valueX4 * 6 / 1000) + (valueX5 * 14 / 1000);
        if (valueX6 < 2.67) {
            document.AnakForm.keteranganhasil.value = "Tidak Baik";
        } else {
            document.AnakForm.keteranganhasil.value = "Baik";
        }

    }

    function stopCalc() {
        clearInterval(interval);
    }
</script> <!-- Menghitung otomatis -->
</body>


<!-- Modal -->
<form action="anak_act.php" method="post">
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Tambah anak</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <?php include 'footer.php'; ?>