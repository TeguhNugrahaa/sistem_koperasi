<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Pensiun-Excel.xls");
?>


<table class="table table-bordered table-striped">
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


                                        <div class="form-group" style="width:100%;margin-bottom:10px">
                                            <label>Umur Saat Ini</label>
                                            <input type="text" style="width:100%" name="sekarang" required="required" class="form-control" placeholder="Masukkan Umur Saat ini .." value="<?php echo $d['umur_sekarang'] ?>">
                                        </div>


                                        <div class="form-group" style="width:100%;margin-bottom:10px">
                                            <label>Umur Pensiun</label>
                                            <input type="text" style="width:100%" name="pensiun" required="required" class="form-control" placeholder="Masukkan Umur Pensiun .." value="<?php echo $d['umur_pensiun'] ?>">
                                        </div>

                                        <div class="form-group" style="width:100%;margin-bottom:10px">
                                            <label>Jumlah waktu sisa</label>
                                            <input type="text" style="width:100%" name="sisa" required="required" class="form-control" placeholder="Masukkan Jumlah waktu sisa .." value="<?php echo $d['jumlah_sisa'] ?>">
                                        </div>


                                        <div class="form-group" style="width:100%;margin-bottom:10px">
                                            <label>Biaya Berdua Saat Ini</label>
                                            <input type="text" style="width:100%" name="berdua" required="required" class="form-control" placeholder="Masukkan biaya berdua saat ini .." value="<?php echo $d['biaya_berdua'] ?>">
                                        </div>

                                        <div class="form-group" style="width:100%;margin-bottom:10px">
                                            <label>Asumsi Inflasi (%)</label>
                                            <input type="text" style="width:100%" name="asumsi" required="required" class="form-control" placeholder="Masukkan asumsi inflasi .." value="<?php echo $d['asumsi_inflasi'] ?>">
                                        </div>


                                        <div class="form-group" style="width:100%;margin-bottom:10px">
                                            <label>Biaya Saat Pensiun </label>
                                            <input type="text" style="width:100%" name="biaya" required="required" class="form-control" placeholder="Masukkan biaya saat pensiun .." value="<?php echo $d['biaya_pensiun'] ?>">
                                        </div>


                                        <div class="form-group" style="width:100%;margin-bottom:10px">
                                            <label>Bunga deposito waktu pensiun (%)</label>
                                            <input type="text" style="width:100%" name="bunga" required="required" class="form-control" placeholder="Masukkan bunga deposito waktu pensiun .." value="<?php echo $d['bunga_deposito'] ?>">
                                        </div>

                                        <div class="form-group" style="width:100%;margin-bottom:10px">
                                            <label>Total dana persiapan pensiun</label>
                                            <input type="text" style="width:100%" name="total" required="required" class="form-control" placeholder="Masukkan total dana persiapan pensiun .." value="<?php echo $d['total_dana'] ?>">
                                        </div>


                                        <div class="form-group" style="width:100%;margin-bottom:10px">
                                            <label>Return Investasi periode kerja (%)</label>
                                            <input type="text" style="width:100%" name="return" required="required" class="form-control" placeholder="Masukkan return investasi periode kerja .." value="<?php echo $d['return_investasi'] ?>">
                                        </div>

                                        <div class="form-group" style="width:100%;margin-bottom:10px">
                                            <label>Simpanan per bulan</label>
                                            <input type="text" style="width:100%" name="simpan" required="required" class="form-control" placeholder="Masukkan return investasi periode kerja .." value="<?php echo $d['simpanan'] ?>">
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