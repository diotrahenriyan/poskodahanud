<?php
    @session_start();

    if (@$_SESSION['admin'] || @$_SESSION['paops'] || @$_SESSION['batitih'])
    {
?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OPERASI</title>
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
	            
	                    <li><a href="#">PETA OPERASI</a></li>
	                    <li><a href="#">PASUKAN KAWAN</a></li>
	                    <li class='aktif'><a href="page-operasi-pasukan-sendiri.php">PASUKAN SENDIRI</a></li>
	                    <li><a href="#">PENGERAHAN PASUKAN</a></li>
	                    <li><a href="page-jadwal-kegiatan.php">JADWAL KEGIATAN MINGGUAN</a></li>
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
	                    <h1 class="page-header">Data Pasukan Sendiri</h1>
	                </div>
	                <!--end page header -->
	            </div>
	            <div class="row">
	                <div class="col-lg-12" id="view_personel">
	                    <!-- Advanced Tables -->
	                    <div class="panel panel-default">
	                       
	                        <div class="panel-body">
	                            <div class="table-responsive">
	                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
	                                    <thead>
	                                        <tr class="blue-head">
	                                            <th>No</th>
	                                            <th>Bagian</th>
	                                            <th>Disposisi</th>
	                                            <th>Komposisi</th>
	                                            <th>Keterangan</th>
	                                            <th>Aksi</th>
	                                        </tr>
	                                    </thead>
	                                    <tbody>
	                                       <?php
	                                            
	                                            include 'koneksi2.php';

	                                            $sql = "SELECT * FROM operasi_datasendiri ORDER BY id_ods asc";
	                                        
	                                        $result = mysql_query($sql)or die(mysql_error());  
	                                        $no=1;
	                                        while($data = mysql_fetch_array($result)){
	                                            echo "<tr class='odd gradeX'>
	                                                <td>".$no."</td>
	                                                <td data-id1='".$data['bagian']."' >".$data['bagian']."</td>
	                                                <td data-id2='".$data['disposisi']."' >".$data['disposisi']."</td>
	                                                <td data-id3='".$data['komposisi']."'>".$data['komposisi']."</td>
	                                                <td data-id4='".$data['keterangan']."' >".$data['keterangan']."</td>
	                                                <td class='center'> 
	                                                    <button name='del_dps' id='del_dps' data-id3='".$data['id_ods']."'><img src='assets/img/Delete.png' alt='' width='25px' heigh='25px'/></button>
	                                                </td>
	                                                </tr>";

	                                                include 'koneksi.php';

	                                                $sql1 = "SELECT id_dps FROM operasi_pasukansendiri ORDER BY id_dps asc";
	                                                $result1 = mysql_query($sql1)or die(mysql_error());
	                                                while($data1 = mysql_fetch_array($result1)){

		                                                if ($data['id_ods'] != $data1['id_dps'])
		                                                {
		                                                	$sql2 = "INSERT INTO operasi_pasukansendiri (bagian,disposisi,komposisi,keterangan) VALUES ('".$data['bagian']."','".$data['disposisi']."','".$data['komposisi']."','".$data['keterangan']."')";
		                                                	$result2 = mysql_query($sql2)or die(mysql_error());
		                                                }
		                                                else
		                                                {

		                                                }
		                                            }

	                                              	$no++;
	                                                }
	                                       ?>
	                                    </tbody>
	                                </table>
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
    else if (@$_SESSION['dandahanud'] || @$_SESSION['paintel'] || @$_SESSION['papers'] || @$_SESSION['palog'] || @$_SESSION['padin'] || @$_SESSION['bahub'] || @$_SESSION['ploter'])
    {
        header("location: page-menu-admin.php");
    }
    else
    {
        header("location: page-login.php");
    } 
?>