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
    <title>DATA PERSONIL</title>
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
        $('#tingkat4_e').hide();
        $('#tingkat3_e').hide();
        $('#tingkat2_e').hide();
        $('#add_tingkat4_e').hide();
        $('#add_tingkat3_e').hide();
        $('#add_tingkat2_e').hide();

    
        $("#tambah_kolom1_e").click(function()
        {
            $('#tingkat4_e').show();
            $('#add_tingkat4_e').show();
            $('#tambah_kolom1_e').hide();
        });
        $("#tambah_kolom2_e").click(function()
        {
            $('#tingkat3_e').show();
            $('#add_tingkat3_e').show();
            $('#tambah_kolom2_e').hide();
        });
        $("#tambah_kolom3_e").click(function()
        {
            $('#tingkat2_e').show();
            $('#add_tingkat2_e').show();
            $('#tambah_kolom3_e').hide();
        });
         function fetch_kat_jabtingkat4()
            {
                $.ajax({
                    url:"query.php?page=select_kat_jabtingkat4",
                    method:"POST",
                    success:function(data)
                    {
                        $('#jabtingkat4_e').html(data);
                    }  
                });  
            }
        function fetch_kat_jabtingkat3()
        {
            $.ajax({
                url:"query.php?page=select_kat_jabtingkat3",
                method:"POST",
                success:function(data)
                {
                    $('#jabtingkat3_e').html(data);
                }  
            });  
        }

        function fetch_kat_jabtingkat2()
        {
            $.ajax({
                url:"query.php?page=select_kat_jabtingkat2",
                method:"POST",
                success:function(data)
                {
                    $('#jabtingkat2_e').html(data);
                }  
            });  
        }

        fetch_kat_jabtingkat4();
        fetch_kat_jabtingkat3();
        fetch_kat_jabtingkat2();

        $(document).on('click', '#add_tingkat4_e', function()
            {             
                var tingkat4 = $('#tingkat4_e').val(); 
              
               $.ajax({  
                    url:"query.php?page=save_tingkat4",  
                    method:"POST",  
                    data:{
                        tingkat4:tingkat4
                    },  
                    dataType:"text",  
                    success:function(data)  
                    {  
                        $('#tingkat4_e').val("");
                        $('#tingkat4_e').hide();
                        $('#add_tingkat4_e').hide();
                        $('#tambah_kolom1_e').show();
                         fetch_kat_jabtingkat4();
                    }  
               })  
        });

        $(document).on('click', '#add_tingkat3_e', function()
            {             
                var tingkat3 = $('#tingkat3_e').val(); 
              
               $.ajax({  
                    url:"query.php?page=save_tingkat3",  
                    method:"POST",  
                    data:{
                        tingkat3:tingkat3
                    },  
                    dataType:"text",  
                    success:function(data)  
                    {  
                        $('#tingkat3_e').val("");
                        $('#tingkat3_e').hide();
                        $('#add_tingkat3_e').hide();
                        $('#tambah_kolom2_e').show();
                         fetch_kat_jabtingkat3();
                    }  
               })  
        });

        $(document).on('click', '#add_tingkat2_e', function()
            {             
                var tingkat2 = $('#tingkat2_e').val(); 
              
               $.ajax({  
                    url:"query.php?page=save_tingkat2",  
                    method:"POST",  
                    data:{
                        tingkat2:tingkat2
                    },  
                    dataType:"text",  
                    success:function(data)  
                    {  
                        $('#tingkat2_e').val("");
                        $('#tingkat2_e').hide();
                        $('#add_tingkat2_e').hide();
                        $('#tambah_kolom3_e').show();
                         fetch_kat_jabtingkat2();
                    }  
               })  
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
            
                    <li class='aktif'><a href="#">DATA PERSONIL</a></li>
                    <li><a href="#">REKAPITULASI PERSONIL</a></li>
                    <li><a href="page-cuti.php">CUTI/IJIN</a></li>
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
                    <h1 class="page-header">Data Personel</h1>
                </div>
                <!--end page header -->
            </div>
            <div class="row">
               
            </div>
            <div class="row">

                <!-- End Form KEDUA -->
                 <div class="col-lg-12" id="form_personel">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Personel 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

                                <form role="form" enctype="multipart/form-data" method="post" action="query.php?page=editdatapokok">
                                  <?php
                                   $tid=$_GET['no'];
                                    $data = mysql_query("SELECT * FROM pers_data_personil WHERE id_data_personil='$tid'");
                                
                                   while($d = mysql_fetch_array($data))
                                     {
                                        $tmp_jabatan =$d['jabatan'];
                                        $psh_jabatan = explode(" ", $tmp_jabatan);
                                    echo "
                                        <div class='form-group'>
                                            <label>Nama(lengkap)</label>
                                            <input type='hidden' id='id_per' class='form-control' name='id_per' value=".$d['id_data_personil'].">
                                            <input id='nama_e' class='form-control' name='nama_e' value='".$d['nama_lengkap']."'>
                                        </div>
                                         <div class='form-group'>
                                            <label>Pangkat/Korps</label>
                                            <input id='pangkat_e' class='form-control' name='pangkat_e' value='".$d['pangkat']."'>
                                        </div>
                                         <div class='form-group'>
                                            <label>Nrp</label>
                                            <input id='nrp_e' class='form-control' name='nrp_e' value='".$d['nrp']."'>
                                        </div>
                                        <div class='form-group'>
                                            <label>Jabatan</label><br>

                                          <input id='jabatan_e'  name='jabatan_e' style='width: 100px;height: 20px;' value='".$psh_jabatan[0]."'>
                                            <select id='jabtingkat4_e' name='jabtingkat4_e' style='width: 100px;height: 20px;'>

                                            </select>
                                            <img src='image/add-icon.png' id='tambah_kolom1_e'>
                                            <select id='jabtingkat3_e' name='jabtingkat3_e' style='width: 100px;height: 20px;'></select>
                                            <img src='image/add-icon.png' id='tambah_kolom2_e'>
                                            <select id='jabtingkat2_e' name='jabtingkat2_e' style='width: 100px;height: 20px;'></select>
                                            <img src='image/add-icon.png' id='tambah_kolom3_e'>
                                            <input id='jabtingkat1_e' name='jabtingkat1_e' style='width: 70px;height: 20px;'>

                                        </div>
                                        <div class='form-group'>
                                            <input id='tingkat4_e'  name='tingkat4_e' style='width: 100px;height: 20px;margin-left: 105px;' placeholder='tingkat 4'>
                                            <img src='image/add-icon.png' id='add_tingkat4_e'>
                                            <input id='tingkat3_e'  name='tingkat3_e' style='width: 100px;height: 20px;' placeholder='tingkat 3'>
                                            <img src='image/add-icon.png' id='add_tingkat3_e'>
                                            <input id='tingkat2_e'  name='tingkat2_e' style='width: 100px;height: 20px;' placeholder='tingkat 2'>
                                            <img src='image/add-icon.png' id='add_tingkat2_e'>
                                        </div>
                                        <div class='form-group'>
                                            <label>TMT Jabatan</label>
                                             <input type='date' id='tmtjab_e' class='form-control' name='tmtjab_e' value='".$d['tmt_jabatan']."'>
                                        </div>
                                        <div class='form-group'>
                                            <label>Golongan</label>
                                            <select id='golongan_e' class='form-control' name='golongan_e'>
                                                <option value='".$d['golongan']."'>'".$d['golongan']."'</option>
                                                <option value='Perwira'>Perwira</option>
                                                <option value='Bintara'>Bintara</option>
                                                <option value='Tamtama'>Tamtama</option>
                                            </select>
                                        </div>
                                        <div class='form-group'>
                                            <label>Alamat</label>
                                            <input id='alamat_e' class='form-control' name='alamat_e' value='".$d['alamat']."'>
                                        </div>
                                        <div class='form-group'>
                                            <label>Telepon/HP</label>
                                            <input id='tlp_e' class='form-control' name='tlp_e' value='".$d['tlp']."'>
                                        </div>
                                        <div class='form-group'>
                                            <label>Email</label>
                                            <input id='email_e' class='form-control' name='email_e' value='".$d['email']."'>
                                        </div>
                                       <div class='form-group'>
                                            <label>Tanggal Lahir</label>
                                            <input type='date' id='tgl_e' class='form-control' name='tgl_e' value='".$d['tgl_lahir']."'>
                                        </div>
                                         <div class='form-group'>
                                            <label>Tempat Lahir</label>
                                            <input id='tmp_e' class='form-control' name='tmp_e' value='".$d['tpt_lahir']."'>
                                        </div>
                                         
                                </div>
                                <div class='col-lg-6'>
                                        <div class='form-group'>
                                            <label>Kategori</label>
                                            <select id='kategori_e' class='form-control' name='kategori_e'>
                                                <option value='".$d['kategori']."'>'".$d['kategori']."'</option>
                                                <option value='Aktif'>Aktif</option>
                                                <option value='Tidak Aktif'>Tidak Aktif</option>
                                            </select>
                                        </div>
                                          <div class='form-group'>
                                            <label>TMT kategori</label>
                                            <input type='date' id='tmtktg_e' class='form-control' name='tmtktg_e' value='".$d['tmt_kategori']."'>
                                        </div>
                                      
                                        <div class='form-group'>
                                            <label>Sumber Pa/Ba</label>
                                            <select id='sumber_e' class='form-control' name='sumber_e'>
                                                <option value='".$d['sumber_pa_ba']."'>".$d['sumber_pa_ba']."</option>
                                                <option value='Akmil'>Akmil</option>
                                                <option value='Semapa PK'>Semapa PK</option>
                                                <option value='Diktukpa'>Diktukpa</option>
                                                <option value='Diktukba'>Diktukba</option>
                                                <option value='Dikmaba'>Dikmaba</option>
                                                <option value='Dikmata'>Dikmata</option>
                                            </select>
                                        </div>
                                         <div class='form-group'>
                                            <label>Golongan Darah</label>
                                            <select id='gol_e' class='form-control' name='gol_e'>
                                                <option value='".$d['goldar']."'>".$d['goldar']."</option>
                                                <option value='A'>A</option>
                                                <option value='AB'>AB</option>
                                                <option value='B'>B</option>
                                                <option value='O'>O</option>
                                            </select>
                                        </div>
                                         <div class='form-group'>
                                            <label>TMT TNI</label>
                                            <input type='date' id='tmttni_e' class='form-control' name='tmttni_e' value='".$d['tmt_tni']."'>
                                        </div>
                                        <div class='form-group'>
                                            <label>Suku Bangsa</label>
                                            <input id='suku_e' class='form-control' name='suku_e' value='".$d['suku_bangsa']."'>
                                        </div>
                                    
                                        <div class='form-group'>
                                            <label>Agama</label>
                                            <select id=''agama_e' class='form-control' name='agama_e'>
                                                <option value='".$d['agama']."'>'".$d['agama']."'</option>
                                                <option value='Islam'>Islam</option>
                                                <option value='Kristen Protestan'>Kristen Protestan</option>
                                                <option value='Katolik'>Katolik</option>
                                                <option value='Hindu'>Hindu</option>
                                                <option value='Buddha'>Buddha</option>
                                                <option value='Kong Hu Cu'>Kong Hu Cu</option>
                                            </select>
                                        </div>
                                        <div class='form-group'>
                                            <label>Kual PSI</label>
                                            <input id='kualpsi_e' class='form-control' name='kualpsi_e' value='".$d['kual_psi']."'>
                                        </div>
                                        <div class='form-group'>
                                            <label>Klas PSI</label>
                                            <input id='klaspsi_e' class='form-control' name='klaspsi_e'  value='".$d['klas_psi']."'>
                                        </div>
                                        <div class='form-group'>
                                            <label>Status</label>
                                            <input id='status_e' class='form-control' name='status_e' value='".$d['status']."'>
                                        </div>
                                        <div class='form-group'>
                                            <label>File input</label>
                                            <input type='file' id='file_e' name='file_e' value='".$d['foto']."'>
                                        </div>
                                        
                                       <input type='submit' name='updatepersonel' id='updatepersonel' value='Update' class='btn btn-primary'> 
                                    </form>
                                     <button id='daftarpersonel' class='btn btn-success'>Lihat Daftar</button>
                                                ";

                                            }
                                     ?>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
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