<?php
    @session_start();
    if (@$_SESSION['admin'] || @$_SESSION['papers'])
    {
         include 'koneksi.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA CUTI/IJIN</title>
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
    $(document).ready(function(e)
    {

      // $('#form_personel').hide();

         $(document).on('click', '#del_pesonel', function(){  
                   var id=$(this).data("id3");  
                  
                   if(confirm("Are you sure you want to delete this?"))  
                   {  
                        $.ajax({  
                             url:"query.php?page=hapuspersonel",  
                             method:"POST",  
                             data:{id:id},  
                             dataType:"text",  
                             success:function(data){  
                                  alert(data);  
                                  location.reload();  
                             }  
                        });  
                   }  
              });


        $("#tambah").click(function()
        {
            $('#form_personel').show();
            $('#view_personel').hide();
        });
        
        $("#daftarpersonel").click(function()
        {
            location.reload();
        });

       
    });
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
            
                    <li><a href="page-personil.php">DATA PERSONIL</a></li>
                    <li><a href="#">REKAPITULASI PERSONIL</a></li>
                    <li class='aktif'><a href="page-cuti.php">CUTI/IJIN</a></li>
                    <li><a href="page-kesehatan.php">KESEHATAN</a></li>
                    <li><a href="page-prestasi.php">PRESTASI</a></li>
                    <li><a href="page-kesegaran.php">KESEGARAN JASMANI</a></li>
                    <li><a href="page-pelanggaran.php">PELANGGARAN</a></li>
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
                    <h1 class="page-header">Data Cuti/Ijin</h1>
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
                                            <th>Nrp</th>
                                            <th>Nama</th>
                                            <th>Pangkat</th>
                                            <th>Keperluan</th>
                                            <th>Tanggal Berangkat</th>
                                            <th>Tanggal Kembali</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                                            if(@$_SESSION['admin'])
                                            {
                                             $sql = "SELECT * FROM pers_data_personil INNER JOIN pers_data_cuti ON pers_data_personil.nrp=pers_data_cuti.nrp order BY tgl_berangkat ASC";
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
                                                $sql = "SELECT * FROM pers_data_personil INNER JOIN pers_data_cuti ON pers_data_personil.nrp=pers_data_cuti.nrp order BY tgl_berangkat ASC";   
                                            }
                                        
                                        $result = mysql_query($sql)or die(mysql_error());  
                                      
                                        while($data = mysql_fetch_array($result)){
                                            echo "<tr class='odd gradeX'>
                                                <td id='nama-makanan' data-id1='".$data['nrp']."' ><a href=detail-personil.php?nrp=".$data['nrp'].">".$data['nrp']."</a></td>
                                                <td id='jumlah-makanan' data-id12='".$data['nama_lengkap']."' >".$data['nama_lengkap']."</td>
                                                <td id='nyata-makanan' data-id13='".$data['pangkat']."'>".$data['pangkat']."</td>
                                                <td id='keadaan-makanan' data-id14='".$data['keperluan']."' >".$data['keperluan']."</td>
                                                <td id='ket-makanan' data-id15='".$data['tgl_berangkat']."' >".$data['tgl_berangkat']."</td>
                                                <td id='ket-makanan' data-id15='".$data['tgl_kembali']."' >".$data['tgl_kembali']."</td>
                                                <td id='ket-makanan' data-id15='".$data['status_cuti']."' >";
                                                 if ($data['status_cuti'] == 1) {
                                                        echo "Cuti";
                                                    }
                                                    if ($data['status_cuti'] == 0) {
                                                        echo "Selesai";
                                                    }

                                               echo " </tr>";
                                          
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
    else if (@$_SESSION['dandahanud'] || @$_SESSION['paintel'] || @$_SESSION['paops'] || @$_SESSION['palog'] || @$_SESSION['padin'] || @$_SESSION['bahub'] || @$_SESSION['batitih'] || @$_SESSION['ploter'])
    {
        header("location: page-menu-admin.php");
    }
    else
    {
        header("location: page-login.php");
    } 
?>