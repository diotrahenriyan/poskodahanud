<?php
    @session_start();
    if (@$_SESSION['admin'] || @$_SESSION['papers']  || @$_SESSION['padin'] || @$_SESSION['dandahanud'] || @$_SESSION['paintel'] || @$_SESSION['paops'] || @$_SESSION['palog'] || @$_SESSION['bahub'] || @$_SESSION['batitih'])
    {
         include 'koneksi.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA DINAS</title>
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
<script type="text/javascript">

</script>
<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
      <?php 
            include ('header.php');
       ?>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                          
                           
                        </div>
                        <!--end user image section-->
                    </li>
            
                    <li><a href="page-dinas-apel.php">KEKUATAN APEL</a></li>
                    <li><a href="page-dinas-pengumuman.php">PENGUMUMAN</a></li>
                    <li class='aktif'><a href="page-dinas-resume.php">RESUME KEGITAN HARIAN</a></li>
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">
            <div class="row">
                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">RESUME KEGITAN HARIAN</h1>
                </div>
                <!--end page header -->
            </div>
            <div class="row">
                <div class="col-lg-12" id="view_personel">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-7">

                                 <?php

                                    $tid=isset($_GET['id']) ? $_GET['id'] : '';
                                    if ($tid != '') 
                                      
                                    {
                                        ?>
                                     <form role="form" enctype="multipart/form-data" method="post" action="query.php?page=edit_resume">
                                        <?php
                                            $id = $_GET['id'];
                                            $data = mysql_query("SELECT * FROM dinas_resume WHERE id_resume=$id");
                                        
                                            while($d = mysql_fetch_array($data))
                                            {
                                                echo " 
                                                        <div class='form-group'>
                                                            <label>Tanggal</label>
                                                            <input type='hidden' id='e_id_resume' name='e_id_resume' value=".$d['id_resume'].">
                                                            <input type='date' id='e_tgl_resume' class='form-control' name='e_tgl_resume' value=".$d['tgl_resume'].">

                                                        </div>
                                                         <div class='form-group'>
                                                            <label>Kegiatan</label>
                                                            <textarea id='e_resume' class='form-control' name='e_resume' rows='9'>".$d['kegiatan']."</textarea>
                                                          
                                                        </div>
                                                         <div class='form-group'>
                                                            <label>Keterangan</label>
                                                            <textarea id='e_ket_resume' class='form-control' name='e_ket_resume' rows='6'>".$d['ket_resume']."</textarea>
                                                            
                                                        </div>
                                                        <button id='editresume' class='btn btn-success'>Update</button>";
                                            }?>
                                        </form>
                                        <?php } 
                                        else { ?>
                              
                                    <form role="form" enctype="multipart/form-data" method="post" action="query.php?page=save_resume">
                                        
                                         <div class="form-group">
                                            <label>Tanggal</label>
                                            <input type="date" id="tgl_resume" class="form-control" name="tgl_resume">
                                        </div>
                                         <div class="form-group">
                                            <label>Kegiatan</label>
                                            <textarea id="resume" class="form-control" name="resume" rows="9"></textarea>
                                          
                                        </div>
                                         <div class="form-group">
                                            <label>Keterangan</label>
                                            <textarea id="ket_resume" class="form-control" name="ket_resume" rows="6"></textarea>
                                            
                                        </div>
                                        <button id="saveresume class="btn btn-primary">Simpan</button>
                                       <!--  <button id="daftarpengumuman" class="btn btn-success">Lihat Pengumuman</button> -->
                                    </form>
                                   <?php } ?>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
        </div>
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
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>

</body>

</html>
<?php 
    }
    else if (@$_SESSION['ploter'])
    {
        header("location: page-menu-admin.php");
    }
    else
    {
        header("location: page-login.php");
    } 
?>
