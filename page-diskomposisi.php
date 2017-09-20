<?php
    @session_start();
    if (@$_SESSION['admin'] || @$_SESSION['paintel'])
    {
         include 'koneksi.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA INTELIJEN</title>
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
            
                    <li><a href="page-intelijen.php">PETA SITUASI</a></li>
                    <li class='aktif'><a href="page-diskomposisi.php">DISPOSISI & KOMPOSISI MUSUH</a></li>
                    <li><a href="page-intelijen-kegiatan.php">KEGIATAN YANG LALU DAN BARU LALU</a></li>
                    <li><a href="page-intelijen-kekuatan.php">kEKUATAN UDARA REGIONAL</a></li>
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
                    <h1 class="page-header">Disposisi Dan Komposisi Musuh</h1>
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
                                            <th>Satuan Musuh</th>
                                            <th>Disposisi</th>
                                            <th>Komposisi (Jumlah)</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                                            if(@$_SESSION['admin'])
                                            {
                                             $sql = "SELECT * FROM intelijen_diskomposisi";
                                            }
                                            else{
                                                if(@$_SESSION['pussen'])
                                                {
                                                    $usertype = 2;
                                                }
                                                else if(@$_SESSION['yon1'])
                                                {
                                                    $usertype = 3;
                                                }
                                                else if(@$_SESSION['yon2'])
                                                {
                                                       $usertype = 4;
                                                }
                                                else
                                                {
                                                    $usertype = 5;
                                                } 
                                                $sql = "SELECT * FROM intelijen_diskomposisi WHERE user_type ='".$usertype."' ORDER BY id_diskomposisi asc";   
                                            }
                                        
                                        $result = mysql_query($sql)or die(mysql_error());  
                                        $no=1;
                                        while($data = mysql_fetch_array($result)){
                                            echo "<tr class='odd gradeX'>
                                                <td>".$no."</td>
                                                <td id='jumlah-makanan' data-id12='".$data['satuan_musuh']."' >".$data['satuan_musuh']."</td>
                                                <td id='jumlah-makanan' data-id12='".$data['disposisi']."' >".$data['disposisi']."</td>
                                                <td id='nyata-makanan' data-id13='".$data['komposisi']."'>".$data['komposisi']."</td>
                                                <td id='keadaan-makanan' data-id14='".$data['ket_diskomposisi']."' >".$data['ket_diskomposisi']."</td>
                                                <td class='center'> 
                                                    <button name='del_pesonel' id='del_pesonel' data-id3='".$data[' id_diskomposisi']."'><img src='assets/img/Delete.png' alt='' width='25px' heigh='25px'/></button>
                                                </td>
                                                </tr>";
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
    else if (@$_SESSION['dandahanud'] || @$_SESSION['papers'] || @$_SESSION['paops'] || @$_SESSION['palog'] || @$_SESSION['padin'] || @$_SESSION['bahub'] || @$_SESSION['batitih'] || @$_SESSION['ploter'])
    {
        header("location: page-menu-admin.php");
    }
    else
    {
        header("location: page-login.php");
    } 
?>
