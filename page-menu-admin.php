<?php
    @session_start();

    if (@$_SESSION['admin'])
    {
?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    <script src="libs/jquery-2.2.4.min.js"></script>
    <script src="libs/jquery-2.2.4.js"></script>
    <script src="libs/jquery-ui_1.12.1.js"></script>
  </head>

  <body class="body-biru">
    <!--  wrapper -->
    <div id="wrapper">

      <!-- navbar top -->
      <?php 
        include ('header.php');
      ?>
      <!-- end navbar top -->

      <!--  page-wrapper -->
      <!-- Menu 1 -->
        <div class="col-lg-4" style="padding-top:50px !important">
            <div class="panel panel-default" style="background-color:#ff0000; color:white !important">
                <div class="panel-heading" style="color:#ff0000 !important">
                    <b>INTELIJEN</b>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">PETA SITUASI</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">DISPOSISI & KOMPOSISI MUSUH</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">KEGIATAN YANG LALU DAN BARU LALU</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">KEKUATAN UDARA REGIONAL</a>
                </div>
                 <div class="panel-body" style="height:97px !important; padding:5px !important; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                </div>
            </div>
        </div>
        <!--End Menu 1 -->

        <!-- Menu 2 -->
        <div class="col-lg-4" style="padding-top:50px !important">
            <div class="panel panel-default" style="background-color:#548235; color:white !important">
                <div class="panel-heading" style="color:#548235 !important">
                    <b>OPERASI</b>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">PETA OPERASI</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">PASUKAN KAWAN</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="page-operasi-pasukan-sendiri.php" style="text-decoration:none; color:white !important">PASUKAN SENDIRI</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">PENGERAHAN PASUKAN</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="page-jadwal-kegiatan.php" style="text-decoration:none; color:white !important">JADWAL KEGIATAN MINGGUAN</a>
                </div>
                <div class="panel-body" style="height:65px !important; padding:5px !important; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                </div>
            </div>
        </div>
        <!--End Menu 2 -->

        <!-- Menu 3 -->
        <div class="col-lg-4" style="padding-top:50px !important">
            <div class="panel panel-default" style="background-color:#ffc000; color:white !important">
                <div class="panel-heading" style="color:#ffc000 !important">
                    <b>PERSONEL</b>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="page-personil.php" style="text-decoration:none; color:white !important">DATA PERSONEL</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="page-personil.php" style="text-decoration:none; color:white !important">REKAPITULASI PERSONEL</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="page-personil.php" style="text-decoration:none; color:white !important">CUTI / IJIN</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="page-personil.php" style="text-decoration:none; color:white !important">KESEHATAN</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="page-personil.php" style="text-decoration:none; color:white !important">PRESTASI</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="page-personil.php" style="text-decoration:none; color:white !important">KESEGARAN JASMANI</a>
                </div>
                <div class="panel-body" style="padding:5px !important; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="page-personil.php" style="text-decoration:none; color:white !important">PELANGGARAN</a>
                </div>
            </div>
        </div>
        <!--End Menu 3 -->

        <!-- Menu 4 -->
        <div class="col-lg-4" style="padding-top:5px !important">
            <div class="panel panel-default" style="background-color:#0070c0">
                <div class="panel-heading" style="color:#0070c0 !important">
                    <b>LOGISTIK</b>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="page-bekal.php" style="text-decoration:none; color:white !important">BEKAL</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="page-materiil.php" style="text-decoration:none; color:white !important">MATERIIL</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="page-alhub.php" style="text-decoration:none; color:white !important">ALHUB</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="page-pangkalan.php" style="text-decoration:none; color:white !important">PANGKALAN & BANGUNAN</a>
                </div>
                <div class="panel-body" style="height:90px !important; padding:5px !important; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    
                </div>
            </div>
        </div>
        <!--End Menu 4 -->

        <!-- Menu 5 -->
        <div class="col-lg-4" style="padding-top:5px !important">
            <div class="panel panel-default" style="background-color:#c55a11; color:white !important">
                <div class="panel-heading" style="color:#c55a11 !important">
                    <b>DINAS</b>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">KEKUATAN APEL</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">PENGUMUMAN</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">RESUME KEGIATAN HARIAN</a>
                </div>
                <div class="panel-body" style="height:124px !important; padding:5px !important; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                </div>
            </div>
        </div>
        <!--End Menu 5 -->

        <!-- Menu 6 -->
        <div class="col-lg-4" style="padding-top:5px !important">
            <div class="panel panel-default" style="background-color:#33ccff; color:white !important">
                <div class="panel-heading" style="color:#33ccff !important">
                    <b>OPERATOR</b>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">BERITA SASARAN</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">KOMUNIKASI</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">RADAR</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">METEO</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">TEMBAK HALANG</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">GIS</a>
                </div>
                <div class="panel-body" style="height:25px !important; padding:5px !important; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                     
                </div>
                
            </div>
        </div>
        <!--End Menu 6 -->
      <!-- end page-wrapper -->
    </div>
    <!-- end wrapper -->

      <!-- Core Scripts - Include with every page -->
      <script src="assets/plugins/jquery-1.10.2.js"></script>
      <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
      <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
      <script src="assets/plugins/pace/pace.js"></script>
      <script src="assets/scripts/siminta.js"></script>
      <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
      <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
  </body>

</html>

<?php 
    }
    else if (@$_SESSION['dandahanud'])
    {
?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    <script src="libs/jquery-2.2.4.min.js"></script>
    <script src="libs/jquery-2.2.4.js"></script>
    <script src="libs/jquery-ui_1.12.1.js"></script>
  </head>

  <body class="body-biru">
    <!--  wrapper -->
    <div id="wrapper">

      <!-- navbar top -->
      <?php 
        include ('header.php');
      ?>
      <!-- end navbar top -->

      <!--  page-wrapper -->
        <!-- Menu 5 -->
        <div class="col-lg-4" style="padding-top:50px !important">
            <div class="panel panel-default" style="background-color:#c55a11; color:white !important">
                <div class="panel-heading" style="color:#c55a11 !important">
                    <b>DINAS</b>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">PENGUMUMAN</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">RESUME KEGIATAN HARIAN</a>
                </div>
                <div class="panel-body" style="height:125px !important; padding:5px !important; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                </div>
            </div>
        </div>
        <!--End Menu 5 -->

        <!-- Menu 6 -->
        <div class="col-lg-4" style="padding-top:50px !important">
            <div class="panel panel-default" style="background-color:#33ccff; color:white !important">
                <div class="panel-heading" style="color:#33ccff !important">
                    <b>OPERATOR</b>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">GIS</a>
                </div>
                <div class="panel-body" style="height:157px !important; padding:5px !important; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                     
                </div>
                
            </div>
        </div>
        <!--End Menu 6 -->
      <!-- end page-wrapper -->
    </div>
    <!-- end wrapper -->

      <!-- Core Scripts - Include with every page -->
      <script src="assets/plugins/jquery-1.10.2.js"></script>
      <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
      <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
      <script src="assets/plugins/pace/pace.js"></script>
      <script src="assets/scripts/siminta.js"></script>
      <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
      <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
  </body>

</html>

<?php 
    }
    else if (@$_SESSION['paintel'])
    {
?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    <script src="libs/jquery-2.2.4.min.js"></script>
    <script src="libs/jquery-2.2.4.js"></script>
    <script src="libs/jquery-ui_1.12.1.js"></script>
  </head>

  <body class="body-biru">
    <!--  wrapper -->
    <div id="wrapper">

      <!-- navbar top -->
      <?php 
        include ('header.php');
      ?>
      <!-- end navbar top -->

      <!--  page-wrapper -->
      <!-- Menu 1 -->
        <div class="col-lg-4" style="padding-top:50px !important">
            <div class="panel panel-default" style="background-color:#ff0000; color:white !important">
                <div class="panel-heading" style="color:#ff0000 !important">
                    <b>INTELIJEN</b>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">PETA SITUASI</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">DISPOSISI & KOMPOSISI MUSUH</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">KEGIATAN YANG LALU DAN BARU LALU</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">KEKUATAN UDARA REGIONAL</a>
                </div>
                 <div class="panel-body" style="height:95px !important; padding:5px !important; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                </div>
            </div>
        </div>
        <!--End Menu 1 -->
        <!-- Menu 5 -->
        <div class="col-lg-4" style="padding-top:50px !important">
            <div class="panel panel-default" style="background-color:#c55a11; color:white !important">
                <div class="panel-heading" style="color:#c55a11 !important">
                    <b>DINAS</b>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">PENGUMUMAN</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">RESUME KEGIATAN HARIAN</a>
                </div>
                <div class="panel-body" style="height:160px !important; padding:5px !important; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                </div>
            </div>
        </div>
        <!--End Menu 5 -->

        <!-- Menu 6 -->
        <div class="col-lg-4" style="padding-top:50px !important">
            <div class="panel panel-default" style="background-color:#33ccff; color:white !important">
                <div class="panel-heading" style="color:#33ccff !important">
                    <b>OPERATOR</b>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">GIS</a>
                </div>
                <div class="panel-body" style="height:195px !important; padding:5px !important; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                     
                </div>
                
            </div>
        </div>
        <!--End Menu 6 -->
      <!-- end page-wrapper -->
    </div>
    <!-- end wrapper -->

      <!-- Core Scripts - Include with every page -->
      <script src="assets/plugins/jquery-1.10.2.js"></script>
      <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
      <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
      <script src="assets/plugins/pace/pace.js"></script>
      <script src="assets/scripts/siminta.js"></script>
      <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
      <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
  </body>

</html>

<?php 
    }
    else if (@$_SESSION['paops'])
    {
?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    <script src="libs/jquery-2.2.4.min.js"></script>
    <script src="libs/jquery-2.2.4.js"></script>
    <script src="libs/jquery-ui_1.12.1.js"></script>
  </head>

  <body class="body-biru">
    <!--  wrapper -->
    <div id="wrapper">

      <!-- navbar top -->
      <?php 
        include ('header.php');
      ?>
      <!-- end navbar top -->

      <!--  page-wrapper -->
        <!-- Menu 2 -->
        <div class="col-lg-4" style="padding-top:50px !important">
            <div class="panel panel-default" style="background-color:#548235; color:white !important">
                <div class="panel-heading" style="color:#548235 !important">
                    <b>OPERASI</b>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">PETA OPERASI</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">PASUKAN KAWAN</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">PASUKAN SENDIRI</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">PENGERAHAN PASUKAN</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="page-jadwal-kegiatan.php" style="text-decoration:none; color:white !important">JADWAL KEGIATAN MINGGUAN</a>
                </div>
                <div class="panel-body" style="height:60px !important; padding:5px !important; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                </div>
            </div>
        </div>
        <!--End Menu 2 -->

        <!-- Menu 5 -->
        <div class="col-lg-4" style="padding-top:50px !important">
            <div class="panel panel-default" style="background-color:#c55a11; color:white !important">
                <div class="panel-heading" style="color:#c55a11 !important">
                    <b>DINAS</b>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">PENGUMUMAN</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">RESUME KEGIATAN HARIAN</a>
                </div>
                <div class="panel-body" style="height:160px !important; padding:5px !important; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                </div>
            </div>
        </div>
        <!--End Menu 5 -->

        <!-- Menu 6 -->
        <div class="col-lg-4" style="padding-top:50px !important">
            <div class="panel panel-default" style="background-color:#33ccff; color:white !important">
                <div class="panel-heading" style="color:#33ccff !important">
                    <b>OPERATOR</b>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">GIS</a>
                </div>
                <div class="panel-body" style="height:195px !important; padding:5px !important; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                     
                </div>
                
            </div>
        </div>
        <!--End Menu 6 -->
      <!-- end page-wrapper -->
    </div>
    <!-- end wrapper -->

      <!-- Core Scripts - Include with every page -->
      <script src="assets/plugins/jquery-1.10.2.js"></script>
      <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
      <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
      <script src="assets/plugins/pace/pace.js"></script>
      <script src="assets/scripts/siminta.js"></script>
      <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
      <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
  </body>

</html>

<?php 
    }
    else if (@$_SESSION['papers'])
    {
?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    <script src="libs/jquery-2.2.4.min.js"></script>
    <script src="libs/jquery-2.2.4.js"></script>
    <script src="libs/jquery-ui_1.12.1.js"></script>
  </head>

  <body class="body-biru">
    <!--  wrapper -->
    <div id="wrapper">

      <!-- navbar top -->
      <?php 
        include ('header.php');
      ?>
      <!-- end navbar top -->

      <!--  page-wrapper -->
      
        <!-- Menu 3 -->
        <div class="col-lg-4" style="padding-top:50px !important">
            <div class="panel panel-default" style="background-color:#ffc000; color:white !important">
                <div class="panel-heading" style="color:#ffc000 !important">
                    <b>PERSONEL</b>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="page-personil.php" style="text-decoration:none; color:white !important">DATA PERSONEL</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="page-personil.php" style="text-decoration:none; color:white !important">REKAPITULASI PERSONEL</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="page-personil.php" style="text-decoration:none; color:white !important">CUTI / IJIN</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="page-personil.php" style="text-decoration:none; color:white !important">KESEHATAN</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="page-personil.php" style="text-decoration:none; color:white !important">PRESTASI</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="page-personil.php" style="text-decoration:none; color:white !important">KESEGARAN JASMANI</a>
                </div>
                <div class="panel-body" style="padding:5px !important; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="page-personil.php" style="text-decoration:none; color:white !important">PELANGGARAN</a>
                </div>
            </div>
        </div>
        <!--End Menu 3 -->

        <!-- Menu 5 -->
        <div class="col-lg-4" style="padding-top:50px !important">
            <div class="panel panel-default" style="background-color:#c55a11; color:white !important">
                <div class="panel-heading" style="color:#c55a11 !important">
                    <b>DINAS</b>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">KEKUATAN APEL</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">PENGUMUMAN</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">RESUME KEGIATAN HARIAN</a>
                </div>
                <div class="panel-body" style="height:133px !important; padding:5px !important; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                </div>
            </div>
        </div>
        <!--End Menu 5 -->

      <!-- end page-wrapper -->
    </div>
    <!-- end wrapper -->

      <!-- Core Scripts - Include with every page -->
      <script src="assets/plugins/jquery-1.10.2.js"></script>
      <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
      <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
      <script src="assets/plugins/pace/pace.js"></script>
      <script src="assets/scripts/siminta.js"></script>
      <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
      <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
  </body>

</html>

<?php 
    }
    else if (@$_SESSION['palog'])
    {
?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    <script src="libs/jquery-2.2.4.min.js"></script>
    <script src="libs/jquery-2.2.4.js"></script>
    <script src="libs/jquery-ui_1.12.1.js"></script>
  </head>

  <body class="body-biru">
    <!--  wrapper -->
    <div id="wrapper">

      <!-- navbar top -->
      <?php 
        include ('header.php');
      ?>
      <!-- end navbar top -->

      <!--  page-wrapper -->

        <!-- Menu 4 -->
        <div class="col-lg-4" style="padding-top:50px !important">
            <div class="panel panel-default" style="background-color:#0070c0">
                <div class="panel-heading" style="color:#0070c0 !important">
                    <b>LOGISTIK</b>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="page-bekal.php" style="text-decoration:none; color:white !important">BEKAL</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="page-materiil.php" style="text-decoration:none; color:white !important">MATERIIL</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="page-alhub.php" style="text-decoration:none; color:white !important">ALHUB</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="page-pangkalan.php" style="text-decoration:none; color:white !important">PANGKALAN & BANGUNAN</a>
                </div>
                <div class="panel-body" style="height:94px !important; padding:5px !important; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    
                </div>
            </div>
        </div>
        <!--End Menu 4 -->

        <!-- Menu 5 -->
        <div class="col-lg-4" style="padding-top:50px !important">
            <div class="panel panel-default" style="background-color:#c55a11; color:white !important">
                <div class="panel-heading" style="color:#c55a11 !important">
                    <b>DINAS</b>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">PENGUMUMAN</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">RESUME KEGIATAN HARIAN</a>
                </div>
                <div class="panel-body" style="height:160px !important; padding:5px !important; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                </div>
            </div>
        </div>
        <!--End Menu 5 -->

      <!-- end page-wrapper -->
    </div>
    <!-- end wrapper -->

      <!-- Core Scripts - Include with every page -->
      <script src="assets/plugins/jquery-1.10.2.js"></script>
      <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
      <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
      <script src="assets/plugins/pace/pace.js"></script>
      <script src="assets/scripts/siminta.js"></script>
      <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
      <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
  </body>

</html>

<?php 
    }
    else if (@$_SESSION['padin'])
    {
?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    <script src="libs/jquery-2.2.4.min.js"></script>
    <script src="libs/jquery-2.2.4.js"></script>
    <script src="libs/jquery-ui_1.12.1.js"></script>
  </head>

  <body class="body-biru">
    <!--  wrapper -->
    <div id="wrapper">

      <!-- navbar top -->
      <?php 
        include ('header.php');
      ?>
      <!-- end navbar top -->

      <!--  page-wrapper -->

        <!-- Menu 5 -->
        <div class="col-lg-4" style="padding-top:50px !important">
            <div class="panel panel-default" style="background-color:#c55a11; color:white !important">
                <div class="panel-heading" style="color:#c55a11 !important">
                    <b>DINAS</b>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">KEKUATAN APEL</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">PENGUMUMAN</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">RESUME KEGIATAN HARIAN</a>
                </div>
                <div class="panel-body" style="height:133px !important; padding:5px !important; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                </div>
            </div>
        </div>
        <!--End Menu 5 -->

      <!-- end page-wrapper -->
    </div>
    <!-- end wrapper -->

      <!-- Core Scripts - Include with every page -->
      <script src="assets/plugins/jquery-1.10.2.js"></script>
      <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
      <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
      <script src="assets/plugins/pace/pace.js"></script>
      <script src="assets/scripts/siminta.js"></script>
      <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
      <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
  </body>

</html>

<?php 
    }
    else if (@$_SESSION['bahub'])
    {
?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    <script src="libs/jquery-2.2.4.min.js"></script>
    <script src="libs/jquery-2.2.4.js"></script>
    <script src="libs/jquery-ui_1.12.1.js"></script>
  </head>

  <body class="body-biru">
    <!--  wrapper -->
    <div id="wrapper">

      <!-- navbar top -->
      <?php 
        include ('header.php');
      ?>
      <!-- end navbar top -->

      <!--  page-wrapper -->
        <!-- Menu 5 -->
        <div class="col-lg-4" style="padding-top:50px !important">
            <div class="panel panel-default" style="background-color:#c55a11; color:white !important">
                <div class="panel-heading" style="color:#c55a11 !important">
                    <b>DINAS</b>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">PENGUMUMAN</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">RESUME KEGIATAN HARIAN</a>
                </div>
                <div class="panel-body" style="height:125px !important; padding:5px !important; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                </div>
            </div>
        </div>
        <!--End Menu 5 -->

        <!-- Menu 6 -->
        <div class="col-lg-4" style="padding-top:50px !important">
            <div class="panel panel-default" style="background-color:#33ccff; color:white !important">
                <div class="panel-heading" style="color:#33ccff !important">
                    <b>OPERATOR</b>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">KOMUNIKASI</a>
                </div>
                <div class="panel-body" style="height:158px !important; padding:5px !important; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                     
                </div>
                
            </div>
        </div>
        <!--End Menu 6 -->
      <!-- end page-wrapper -->
    </div>
    <!-- end wrapper -->

      <!-- Core Scripts - Include with every page -->
      <script src="assets/plugins/jquery-1.10.2.js"></script>
      <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
      <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
      <script src="assets/plugins/pace/pace.js"></script>
      <script src="assets/scripts/siminta.js"></script>
      <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
      <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
  </body>

</html>

<?php 
    }
    else if (@$_SESSION['batitih'])
    {
?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    <script src="libs/jquery-2.2.4.min.js"></script>
    <script src="libs/jquery-2.2.4.js"></script>
    <script src="libs/jquery-ui_1.12.1.js"></script>
  </head>

  <body class="body-biru">
    <!--  wrapper -->
    <div id="wrapper">

      <!-- navbar top -->
      <?php 
        include ('header.php');
      ?>
      <!-- end navbar top -->

      <!--  page-wrapper -->

        <!-- Menu 2 -->
        <div class="col-lg-4" style="padding-top:50px !important">
            <div class="panel panel-default" style="background-color:#548235; color:white !important">
                <div class="panel-heading" style="color:#548235 !important">
                    <b>OPERASI</b>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">PETA OPERASI</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">PASUKAN KAWAN</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">PASUKAN SENDIRI</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">PENGERAHAN PASUKAN</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="page-jadwal-kegiatan.php" style="text-decoration:none; color:white !important">JADWAL KEGIATAN MINGGUAN</a>
                </div>
                <div class="panel-body" style="height:60px !important; padding:5px !important; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                </div>
            </div>
        </div>
        <!--End Menu 2 -->

        <!-- Menu 5 -->
        <div class="col-lg-4" style="padding-top:50px !important">
            <div class="panel panel-default" style="background-color:#c55a11; color:white !important">
                <div class="panel-heading" style="color:#c55a11 !important">
                    <b>DINAS</b>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">PENGUMUMAN</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">RESUME KEGIATAN HARIAN</a>
                </div>
                <div class="panel-body" style="height:159px !important; padding:5px !important; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                </div>
            </div>
        </div>
        <!--End Menu 5 -->

        <!-- Menu 6 -->
        <div class="col-lg-4" style="padding-top:50px !important">
            <div class="panel panel-default" style="background-color:#33ccff; color:white !important">
                <div class="panel-heading" style="color:#33ccff !important">
                    <b>OPERATOR</b>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">BERITA SASARAN</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">RADAR</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">METEO</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">TEMBAK HALANG</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">GIS</a>
                </div>
                <div class="panel-body" style="height:60px !important; padding:5px !important; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                     
                </div>
                
            </div>
        </div>
        <!--End Menu 6 -->
      <!-- end page-wrapper -->
    </div>
    <!-- end wrapper -->

      <!-- Core Scripts - Include with every page -->
      <script src="assets/plugins/jquery-1.10.2.js"></script>
      <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
      <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
      <script src="assets/plugins/pace/pace.js"></script>
      <script src="assets/scripts/siminta.js"></script>
      <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
      <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
  </body>

</html>

<?php 
    }
    else if (@$_SESSION['ploter'])
    {
?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    <script src="libs/jquery-2.2.4.min.js"></script>
    <script src="libs/jquery-2.2.4.js"></script>
    <script src="libs/jquery-ui_1.12.1.js"></script>
  </head>

  <body class="body-biru">
    <!--  wrapper -->
    <div id="wrapper">

      <!-- navbar top -->
      <?php 
        include ('header.php');
      ?>
      <!-- end navbar top -->

      <!--  page-wrapper -->

        <!-- Menu 2 -->
        <div class="col-lg-4" style="padding-top:50px !important">
            <div class="panel panel-default" style="background-color:#548235; color:white !important">
                <div class="panel-heading" style="color:#548235 !important">
                    <b>OPERASI</b>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">PETA OPERASI</a>
                </div>
                <div class="panel-body" style="height:158px !important; padding:5px !important; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                </div>
            </div>
        </div>
        <!--End Menu 2 -->

        <!-- Menu 5 -->
        <div class="col-lg-4" style="padding-top:50px !important">
            <div class="panel panel-default" style="background-color:#c55a11; color:white !important">
                <div class="panel-heading" style="color:#c55a11 !important">
                    <b>DINAS</b>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">PENGUMUMAN</a>
                </div>
                <div class="panel-body" style="height:159px !important; padding:5px !important; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                </div>
            </div>
        </div>
        <!--End Menu 5 -->

        <!-- Menu 6 -->
        <div class="col-lg-4" style="padding-top:50px !important">
            <div class="panel panel-default" style="background-color:#33ccff; color:white !important">
                <div class="panel-heading" style="color:#33ccff !important">
                    <b>OPERATOR</b>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">BERITA SASARAN</a>
                </div>
                <div class="panel-body" style="padding:5px !important; border-bottom:1px solid white; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                    <a href="#" style="text-decoration:none; color:white !important">GIS</a>
                </div>
                <div class="panel-body" style="height:125px !important; padding:5px !important; margin-left:10px; margin-right:10px; text-align:left; padding-left:2px !important">
                     
                </div>
                
            </div>
        </div>
        <!--End Menu 6 -->
      <!-- end page-wrapper -->
    </div>
    <!-- end wrapper -->

      <!-- Core Scripts - Include with every page -->
      <script src="assets/plugins/jquery-1.10.2.js"></script>
      <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
      <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
      <script src="assets/plugins/pace/pace.js"></script>
      <script src="assets/scripts/siminta.js"></script>
      <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
      <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
  </body>

</html>

<?php
    }
    else
    {
        header("location: page-login.php");
    } 
?>