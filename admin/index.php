<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>


  <section class="content">

    <div class="row">

      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-green">
          <div class="inner">
            <?php
            $tanggal = date('Y-m-d');
            $pemasukan = mysqli_query($koneksi, "SELECT sum(transaksi_nominal) as total_pemasukan FROM transaksi WHERE transaksi_jenis='Pemasukan' and transaksi_tanggal='$tanggal'");
            $p = mysqli_fetch_assoc($pemasukan);
            ?>
            <h4 style="font-weight: bolder"><?php echo "Rp. " . number_format($p['total_pemasukan']) . " ,-" ?></h4>
            <p>Anggota</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>



      <!-- Simpanan Anggota -->
      <section class="content">

        <div class="row">

          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
              <div class="inner">
                <?php
                $tanggal = date('Y-m-d');
                $simpanan = mysqli_query($koneksi, "SELECT sum(besar_simpanan) as kode_simpanan FROM simpanan WHERE jenis_simpanan='Pokok' , 'Wajib', 'Sukarela'  and tanggal_masuk='$tanggal'");
                $s = mysqli_fetch_assoc($simpanan);
                ?>
                <h4 style="font-weight: bolder"><?php echo "Rp. " . number_format($s['besar_simpanan']) . " ,-" ?></h4>
                <p>Anggota</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>









          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-blue">
              <div class="inner">
                <?php


                $bulan = date('m');
                $pinjaman = mysqli_query($koneksi, "SELECT sum(besar_pinjaman) as lama_angsuran FROM pinjaman WHERE jenis_pinjam='Konsumtif', 'Produktif', 'Investasi', 'Mikro' and month(tanggal_pinjam)='$bulan'");
                $p = mysqli_fetch_assoc($pinjaman);
                ?>
                <h4 style="font-weight: bolder"><?php echo "Rp. " . number_format($p['besar_pinjaman']) . " ,-" ?></h4>
                <p>Pinjaman</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-orange">
              <div class="inner">
                <?php
                $tahun = date('Y');
                $pemasukan = mysqli_query($koneksi, "SELECT sum(transaksi_nominal) as total_pemasukan FROM transaksi WHERE transaksi_jenis='Pemasukan' and year(transaksi_tanggal)='$tahun'");
                $p = mysqli_fetch_assoc($pemasukan);
                ?>
                <h4 style="font-weight: bolder"><?php echo "Rp. " . number_format($p['total_pemasukan']) . " ,-" ?></h4>
                <p>Angsuran</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-black">
              <div class="inner">
                <?php
                $pemasukan = mysqli_query($koneksi, "SELECT sum(transaksi_nominal) as total_pemasukan FROM transaksi WHERE transaksi_jenis='Pemasukan'");
                $p = mysqli_fetch_assoc($pemasukan);
                ?>
                <h4 style="font-weight: bolder"><?php echo "Rp. " . number_format($p['total_pemasukan']) . " ,-" ?></h4>
                <p>Tabungan</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>



          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-red">
              <div class="inner">
                <?php
                $tanggal = date('Y-m-d');
                $pengeluaran = mysqli_query($koneksi, "SELECT sum(transaksi_nominal) as total_pengeluaran FROM transaksi WHERE transaksi_jenis='pengeluaran' and transaksi_tanggal='$tanggal'");
                $p = mysqli_fetch_assoc($pengeluaran);
                ?>

                <h4 style="font-weight: bolder"><?php echo "Rp. " . number_format($p['total_pengeluaran']) . " ,-" ?></h4>
                <p>Denda</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>


        </div>




        <!-- /.row -->
        <!-- Main row -->
        <div class="row">

          <!-- Left col -->
          <section class="col-lg-8">

            <div class="nav-tabs-custom">

              <ul class="nav nav-tabs pull-right">
                <!-- <li><a href="#tab2" data-toggle="tab">Pemasukan</a></li> -->
                <li class="active"><a href="#tab1" data-toggle="tab">Pemasukan & Pengeluaran</a></li>
                <li class="pull-left header">Grafik</li>
              </ul>

              <div class="tab-content" style="padding: 20px">

                <div class="chart tab-pane active" id="tab1">


                  <h4 class="text-center">Grafik Data Pemasukan & Pengeluaran <b>Bulan</b></h4>
                  <canvas id="grafik1" style="position: relative; height: 300px;"></canvas>

                  <br />
                  <br />
                  <br />

                  <h4 class="text-center">Grafik Data Pemasukan & Pengeluaran<b>Tahun</b></h4>
                  <canvas id="grafik2" style="position: relative; height: 300px;"></canvas>

                </div>
                <div class="chart tab-pane" id="tab2" style="position: relative; height: 300px;">
                </div>
              </div>

            </div>

          </section>
          <!-- /.Left col -->


          <section class="col-lg-4">


            <!-- Calendar -->
            <div class="box box-solid bg-green-gradient">
              <div class="box-header">
                <i class="fa fa-calendar"></i>
                <h3 class="box-title">Kalender</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body no-padding">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>

              <!-- kelas date picker -->
              <!--div id="datepicker"></div>-->
            </div>
        </div>
    </div>




    <!-- /.box-body -->
</div>


</section>
<!-- right col -->
</div>
<!-- /.row (main row) -->











</section>

</div>

















<?php include 'footer.php'; ?>