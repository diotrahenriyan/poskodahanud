<?php
    @session_start();
    if (@$_SESSION['admin'] || @$_SESSION['papers']  || @$_SESSION['padin'] || @$_SESSION['dandahanud'] || @$_SESSION['paintel'] || @$_SESSION['paops'] || @$_SESSION['palog'] || @$_SESSION['bahub'] || @$_SESSION['batitih'] || @$_SESSION['ploter'])
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
 $(document).ready(function(e)
    {
          $(document).on('click', '#del_pengumuman', function(){  
               var id=$(this).data("id3");  
              
               if(confirm("Are you sure you want to delete this?"))  
               {  
                    $.ajax({  
                         url:"query.php?page=hapus_pengumuman",  
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
            
                    <li><a href="page-dinas-apel.php">KEKUATAN APEL</a></li>
                    <li class='aktif'><a href="page-dinas-pengumuman.php">PENGUMUMAN</a></li>
                    <li><a href="page-dinas-resume.php">RESUME KEGITAN HARIAN</a></li>
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
                    <h1 class="page-header">PENGUMUMAN</h1>
                </div>
                <!--end page header -->
            </div>
            <div class="row">
                <div class="col-lg-12" id="view_personel">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                       <div class="panel-heading">
                       Daftar Pengumuman
                            <a href="page-dinas-pengumuman-insert.php"> <button id="tambah" style="float:right;"><img src="assets/img/tambah.png" alt="" width="20px" height="auto" /> Tambah</button> </a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr class="blue-head">
                                            <th>NO</th>
                                            <th>TANGGAL</th>
                                            <th>PENGUMUMAN</th>
                                            <th>KETERANGAN</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                                            if(@$_SESSION['admin'])
                                            {
                                             $sql = "SELECT * FROM dinas_pengumuman ORDER BY id_pengumuman asc";
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
                                                $sql = "SELECT * FROM dinas_pengumuman WHERE user_type ='".$usertype."' ORDER BY   id_pengumuman asc";   
                                            }
                                        
                                        $result = mysql_query($sql)or die(mysql_error());  
                                        $no=1;
                                        while($data = mysql_fetch_array($result)){
                                            $date = date_create($data['tanggal']);
                                            echo "<tr class='odd gradeX'>
                                                <td>".$no."</td>
                                                <td id='pengumuman_tgl' data-id1='".$data['id_pengumuman']."' >".date_format($date, 'd F Y')."</td>
                                                <td id='pengumuman' data-id12='".$data['pengumuman']."' >".$data['pengumuman']."</td>
                                                <td id='nyata-makanan' data-id13='".$data['ket_pengumuman']."'>".$data['ket_pengumuman']."</td>
                                                <td class='center'> 
                                                    <button name='del_pengumuman' id='del_pengumuman' data-id3='".$data['id_pengumuman']."'><img src='assets/img/Delete.png' alt='' width='25px' heigh='25px'/></button>
                                                    <a href=page-dinas-pengumuman-insert.php?id=".$data['id_pengumuman']."><button><img src='assets/img/edit.png' alt='' width='25px' heigh='25px'/></button></a>
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
    else
    {
        header("location: page-login.php");
    } 
?>
