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

       $('#form_personel').hide();
       $('#tingkat4').hide();
       $('#tingkat3').hide();
       $('#tingkat2').hide();
       $('#add_tingkat4').hide();
       $('#add_tingkat3').hide();
       $('#add_tingkat2').hide();

       

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

        $("#tambah_kolom1").click(function()
        {
            $('#tingkat4').show();
            $('#add_tingkat4').show();
            $('#tambah_kolom1').hide();
        });
        $("#tambah_kolom2").click(function()
        {
            $('#tingkat3').show();
            $('#add_tingkat3').show();
            $('#tambah_kolom2').hide();
        });
        $("#tambah_kolom3").click(function()
        {
            $('#tingkat2').show();
            $('#add_tingkat2').show();
            $('#tambah_kolom3').hide();
        });
        
        $("#daftarpersonel").click(function()
        {
            location.reload();
        });

        function fetch_kat_jabtingkat4()
            {
                $.ajax({
                    url:"query.php?page=select_kat_jabtingkat4",
                    method:"POST",
                    success:function(data)
                    {
                        $('#jabtingkat4').html(data);
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
                    $('#jabtingkat3').html(data);
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
                    $('#jabtingkat2').html(data);
                }  
            });  
        }

        fetch_kat_jabtingkat4();
        fetch_kat_jabtingkat3();
        fetch_kat_jabtingkat2();

        $(document).on('click', '#add_tingkat4', function()
            {             
                var tingkat4 = $('#tingkat4').val(); 
              
               $.ajax({  
                    url:"query.php?page=save_tingkat4",  
                    method:"POST",  
                    data:{
                        tingkat4:tingkat4
                    },  
                    dataType:"text",  
                    success:function(data)  
                    {  
                        $('#tingkat4').val("");
                        $('#tingkat4').hide();
                        $('#add_tingkat4').hide();
                        $('#tambah_kolom1').show();
                         fetch_kat_jabtingkat4();
                    }  
               })  
        });

        $(document).on('click', '#add_tingkat3', function()
            {             
                var tingkat3 = $('#tingkat3').val(); 
              
               $.ajax({  
                    url:"query.php?page=save_tingkat3",  
                    method:"POST",  
                    data:{
                        tingkat3:tingkat3
                    },  
                    dataType:"text",  
                    success:function(data)  
                    {  
                        $('#tingkat3').val("");
                        $('#tingkat3').hide();
                        $('#add_tingkat3').hide();
                        $('#tambah_kolom2').show();
                         fetch_kat_jabtingkat3();
                    }  
               })  
        });

        $(document).on('click', '#add_tingkat2', function()
            {             
                var tingkat2 = $('#tingkat2').val(); 
              
               $.ajax({  
                    url:"query.php?page=save_tingkat2",  
                    method:"POST",  
                    data:{
                        tingkat2:tingkat2
                    },  
                    dataType:"text",  
                    success:function(data)  
                    {  
                        $('#tingkat2').val("");
                        $('#tingkat2').hide();
                        $('#add_tingkat2').hide();
                        $('#tambah_kolom3').show();
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
                <div class="col-lg-12" id="view_personel">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        List Data Personel
                             <button id="tambah" style="float:right;"><img src="assets/img/tambah.png" alt="" width="20px" height="auto" /> Tambah</button>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr class="blue-head">
                                            <th>No</th>
                                            <th>Nrp</th>
                                            <th>Nama</th>
                                            <th>Jabatan</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Sumber Pa/Ba</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                                            
                                        $sql = "SELECT * FROM pers_data_personil ORDER BY id_data_personil asc";
                                        $result = mysql_query($sql)or die(mysql_error());  
                                        $no=1;
                                        while($data = mysql_fetch_array($result)){
                                            echo "<tr class='odd gradeX'>
                                                <td>".$no."</td>
                                                <td id='nama-makanan' data-id1='".$data['nrp']."' ><a href=detail-personil.php?nrp=".$data['nrp'].">".$data['nrp']."</a></td>
                                                <td id='jumlah-makanan' data-id12='".$data['nama_lengkap']."' >".$data['nama_lengkap']."</td>
                                                <td id='nyata-makanan' data-id13='".$data['jabatan']."'>".$data['jabatan']."</td>
                                                <td id='keadaan-makanan' data-id14='".$data['tgl_lahir']."' >".$data['tgl_lahir']."</td>
                                                <td id='ket-makanan' data-id15='".$data['sumber_pa_ba']."' >".$data['sumber_pa_ba']."</td>
                                                <td class='center'> 
                                                    <button name='del_pesonel' id='del_pesonel' data-id3='".$data['id_data_personil']."'><img src='assets/img/Delete.png' alt='' width='25px' heigh='25px'/></button>
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
                                    <form role="form" enctype="multipart/form-data" method="post" action="query.php?page=save_personel">
                                        
                                         <div class="form-group">
                                            <label>Nama(lengkap)</label>
                                            <input id="nama" class="form-control" name="nama">
                                        </div>
                                         <div class="form-group">
                                            <label>Pangkat/Korps</label>
                                            <input id="pangkat" class="form-control" name="pangkat">
                                        </div>
                                         <div class="form-group">
                                            <label>Nrp</label>
                                            <input id="nrp" class="form-control" name="nrp">
                                        </div>
                                        <div class="form-group">
                                            <label>Jabatan</label><br>
                                            <input id="jabatan"  name="jabatan" style="width: 100px;height: 20px;">
                                            <select id="jabtingkat4" name="jabtingkat4" style="width: 100px;height: 20px;">
                                                    <!-- <input type="hidden" id="id_nama2" name="id_nama2" disabled> -->
                                            </select>
                                             <!-- <button name="tambah_kolom1" id="tambah_kolom1">+</button> -->
                                             <img src="image/add-icon.png" id="tambah_kolom1">
                                            <select id="jabtingkat3" name="jabtingkat3" style="width: 100px;height: 20px;">
                                                    <!-- <input type="hidden" id="id_nama2" name="id_nama2" disabled> -->
                                            </select>
                                             <!-- <button name="tambah_kolom2" id="tambah_kolom2">+</button> -->
                                            
                                             <img src="image/add-icon.png" id="tambah_kolom2">
                                            <select id="jabtingkat2" name="jabtingkat2" style="width: 100px;height: 20px;">
                                                    <!-- <input type="hidden" id="id_nama2" name="id_nama2" disabled> -->
                                            </select>
                                             <!-- <button name="tambah_kolom3" id="tambah_kolom3">+</button> -->
                                             <img src="image/add-icon.png" id="tambah_kolom3">
                                            <input id="jabtingkat1" name="jabtingkat1" style="width: 70px;height: 20px;">

                                        </div>
                                        <div class="form-group">
                                          
                                            <input id="tingkat4"  name="tingkat4" style="width: 100px;height: 20px;margin-left: 105px;" placeholder="tingkat 4">
                                             <!-- <button name="add_tingkat4" id="add_tingkat4">+</button> -->
                                             <img src="image/add-icon.png" id="add_tingkat4">
                                            <input id="tingkat3"  name="tingkat3" style="width: 100px;height: 20px;" placeholder="tingkat 3">
                                            <!--  <button name="add_tingkat3" id="add_tingkat3">+</button> -->
                                             <img src="image/add-icon.png" id="add_tingkat3">
                                            <input id="tingkat2"  name="tingkat2" style="width: 100px;height: 20px;" placeholder="tingkat 2">
                                             <!-- <button name="add_tingkat2" id="add_tingkat2">+</button> -->
                                             <img src="image/add-icon.png" id="add_tingkat2">
                                        </div>
                                        <div class="form-group">
                                            <label>TMT Jabatan</label>
                                            <input type="date" id="tmtjab" class="form-control" name="tmtjab">
                                        </div>
                                        <div class="form-group">
                                            <label>Golongan</label>
                                            <!-- <input id="gol" class="form-control" name="gol"> -->
                                            <select id="golongan" class="form-control" name="golongan">
                                                <option value=""></option>
                                                <option value="Perwira">Perwira</option>
                                                <option value="Bintara">Bintara</option>
                                                <option value="Tamtama">Tamtama</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input id="alamat" class="form-control" name="alamat">
                                        </div>
                                        <div class="form-group">
                                            <label>Telepon/HP</label>
                                            <input id="tlp" class="form-control" name="tlp">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input id="email" class="form-control" name="email">
                                        </div>
                                       <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input type="date" id="tgl" class="form-control" name="tgl">
                                        </div>
                                         <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input id="tmp" class="form-control" name="tmp">
                                        </div>
                                         
                                         
                                         
                                         
                                       <!--  <button id="savedatapersonel" class="btn btn-primary">Simpan</button>
                                         <button id="daftarpersonel" class="btn btn-success">Lihat Daftar</button> -->
                                 <!--    </form> -->
                                </div>
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Kategori</label>
                                            <!-- <input id="kategori" class="form-control" name="kategori"> -->
                                            <select id="kategori" class="form-control" name="kategori">
                                                <option value=""></option>
                                                <option value="Aktif">Aktif</option>
                                                <option value="Tidak Aktif">Tidak Aktif</option>
                                            </select>
                                        </div>
                                          <div class="form-group">
                                            <label>TMT kategori</label>
                                            <input type="date" id="tmtktg" class="form-control" name="tmtktg">
                                        </div>
                                      
                                        <div class="form-group">
                                            <label>Sumber Pa/Ba</label>
                                            <!-- <input id="sumber" class="form-control" name="sumber"> -->
                                            <select id="sumber" class="form-control" name="sumber">
                                                <option value=""></option>
                                                <option value="Akmil">Akmil</option>
                                                <option value="Semapa PK">Semapa PK</option>
                                                <option value="Diktukpa">Diktukpa</option>
                                                <option value="Diktukba">Diktukba</option>
                                                <option value="Dikmaba">Dikmaba</option>
                                                <option value="Dikmata">Dikmata</option>
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Golongan Darah</label>
                                            <!-- <input id="gol" class="form-control" name="gol"> -->
                                            <select id="gol" class="form-control" name="gol">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="AB">AB</option>
                                                <option value="B">B</option>
                                                <option value="O">O</option>
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>TMT TNI</label>
                                            <input type="date" id="tmttni" class="form-control" name="tmttni">
                                        </div>
                                        <div class="form-group">
                                            <label>Suku Bangsa</label>
                                            <input id="suku" class="form-control" name="suku">
                                        </div>
                                        <div class="form-group">
                                            <label>Agama</label>
                                            <!-- <input id="agama" class="form-control" name="agama"> -->
                                            <select id="agama" class="form-control" name="agama">
                                                <option value=""></option>
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen Protestan">Kristen Protestan</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Buddha">Buddha</option>
                                                <option value="Kong Hu Cu">Kong Hu Cu</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Kual PSI</label>
                                            <input id="kualpsi" class="form-control" name="kualpsi">
                                        </div>
                                        <div class="form-group">
                                            <label>Klas PSI</label>
                                            <input id="klaspsi" class="form-control" name="klaspsi">
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <input id="status" class="form-control" name="status">
                                        </div>
                                        <div class="form-group">
                                            <label>File input</label>
                                            <input type="file" id="file" name="file">
                                        </div>
                                        <?php
                                            if(@$_SESSION['admin'])
                                            {
                                                $usertype = 1;
                                                }
                                                else if(@$_SESSION['pussen'])
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
                                        ?>
                                        <div class="form-group">
                                         <input type="hidden" id="tipe_per" value= <?php echo $usertype; ?> name="tipe_per">
                                        </div>
                                     <!-- <button id="savedatapersonel" class="btn btn-primary">Simpan</button> -->
                                       <input type="submit" name="savedatapersonel" id="savedatapersonel" value="simpan" class="btn btn-primary"> 
                                    </form>
                                     <button id="daftarpersonel" class="btn btn-success">Lihat Daftar</button>
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
