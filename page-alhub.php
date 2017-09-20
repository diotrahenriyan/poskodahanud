<?php
    @session_start();
    include 'koneksi.php';

    if (@$_SESSION['admin'] || @$_SESSION['palog'])
    {
?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LOGISTIK</title>
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
            fetch_data_damai3();
            $('#damai3').hide();
            $('#judulviewdamai3').show();

            // VIEW DATA DAMAI
            function fetch_data_damai3()
            {
                $.ajax
                ({
                    url:"query.php?page=select_alhub",
                    method:"POST",
                    success:function(data)
                    {
                        $('#viewdamai3').html(data);
                    }
                });
            }
            // END VIEW DATA DAMAI
              
            //SAVE DATA DAMAI
            $('#savealhub').click(function(){
                var kat_alhub = $("#kat_alhub").val();
                var nm_alhub = $("#nm_alhub").val();
                var nama_alhub = $("#nama_alhub").val();
                var merk_alhub = $("#merk_alhub").val();
                var sat_alhub = $("#sat_alhub").val();
                var senja_alhub = $("#senja_alhub").val();
                var kondisi_alhub = $("#kondisi_alhub").val();
                var ket_alhub = $("#ket_alhub").val();
                var tipe_alhub = $("#tipe_alhub").val();

                $.ajax({
                    type: "post",
                    url: "query.php?page=save_alhub",
                    data: {
                        kat_alhub : kat_alhub,
                        nm_alhub : nm_alhub,
                        nama_alhub : nama_alhub,
                        merk_alhub : merk_alhub,
                        sat_alhub : sat_alhub,
                        senja_alhub : senja_alhub,
                        kondisi_alhub : kondisi_alhub,
                        ket_alhub : ket_alhub,
                        tipe_alhub : tipe_alhub
                    } ,
                 
                    success: function (response) {
                        console.log(response);
                        if (response == "Sukses") {
                            $('#damai3').show();
                             alert("Data Telah Disimpan");
                        $("#kat_alhub").val(" ");
                        $("#nm_alhub").val(" ");
                        $("#nama_alhub").val(" ");
                        $("#merk_alhub").val(" ");
                        $("#sat_alhub").val(" ");
                        $("#senja_alhub").val(" ");
                        $("#ket_alhub").val(" ");
                        }                  
                    }
                });
            });
            //END SAVE DATA DAMAI

            //DELETE DATA DAMAI
            $(document).on('click', '#btn_delete_damai3', function(){
                var id=$(this).data("id3");

                if(confirm("Are you sure you want to delete this?"))
                {
                    $.ajax({
                        url:"query.php?page=deletealhub",
                        method:"POST",
                        data:{id:id},
                        dataType:"text",
                        success:function(data)
                        {
                            alert(data);
                            fetch_data_damai3();
                        }
                    });
                }  
            });
            //END DELETE DATA DAMAI

            // EDIT DATA DAMAI
            $(document).on('click', '#btn_edit_damai3', function(){
                var id=$(this).data("id4");

                $.ajax({  
                    url:"query.php?page=select_edit_alhub",  
                    method:"POST",  
                    data:{
                        id:id
                    },  
                    dataType:"text",  
                    success:function(data){
                        if (data != "false") {
                            $('#damai3').show();
                            $('#editalhub').show();
                            $('#savealhub').hide();
                            $('#judulviewdamai3').hide();
                            $('#edit_jenis_alhub').show();
                            $('#add_jenis_alhub').hide();
                            $('#nm_alhub').hide();
                            var alhub = jQuery.parseJSON(data);
                            $('#id_alhub').val(alhub.id_alhub);
                            $('#kat_alhub').val(alhub.kat_alhub);
                            $('#edit_jenis_alhub').val(alhub.jenis);
                            $('#id_alhub2').val(alhub.nm_alhub);
                            $('#nama_alhub').val(alhub.nama_alhub);
                            $('#merk_alhub').val(alhub.merk);
                            $('#sat_alhub').val(alhub.satuan);
                            $('#senja_alhub').val(alhub.senjata_alhub);
                            $('#ket_alhub').val(alhub.ket);
                        } else {
                            alert ("Gagal");
                        }
                    }  
                });
            });
            // END EDIT DATA DAMAI

            // SAVE EDIT DATA DAMAI
            $('#editalhub').click(function(){
                var id= $("#id_alhub").val();
                var kat_alhub = $("#kat_alhub").val();
                var nm_alhub = $("#nm_alhub").val();
                var nama_alhub = $("#nama_alhub").val();
                var merk_alhub = $("#merk_alhub").val();
                var sat_alhub = $("#sat_alhub").val();
                var senja_alhub = $("#senja_alhub").val();
                var kondisi_alhub = $("#kondisi_alhub").val();
                var ket_alhub = $("#ket_alhub").val();
                var id_alhub2 = $("#id_alhub2").val();

                $.ajax({
                    type: "post",
                    url: "query.php?page=edit_alhub",
                    data: {
                        id : id,
                        kat_alhub : kat_alhub,
                        nm_alhub : nm_alhub,
                        nama_alhub : nama_alhub,
                        merk_alhub : merk_alhub,
                        sat_alhub : sat_alhub,
                        senja_alhub : senja_alhub,
                        kondisi_alhub : kondisi_alhub,
                        ket_alhub : ket_alhub,
                        id_alhub2 : id_alhub2
                    },
                    success: function (response) {
                        alert(response);

                        $("#id_alhub").val("");
                        $("#kat_alhub").val("");
                        $("#nm_alhub").val("");
                        $("#nama_alhub").val("");
                        $("#merk_alhub").val("");
                        $("#sat_alhub").val("");
                        $("#senja_alhub").val("");
                        $("#kondisi_alhub").val("");
                        $("#ket_alhub").val("");
                        $("#id_alhub2").val("");

                        $('#damai3').hide();
                        fetch_data_damai3();
                        $('#judulviewdamai3').show();
                    }
                });
            });
            // END SAVE EDIT DATA DAMAI

            //ADD JENIS KATEGORI
            $(document).on('click', '#add_kat_alhub', function()
            {
                fetch_kat_alhub();
                $('#edit_jenis_alhub').hide();
                $('#nm_alhub').show();
                $('#add_jenis_alhub').show();
                
               var jenis_alhub = $('#add_jenis_alhub').val();
               if(jenis_alhub == '')  
               {  
                    alert("Masukan Alhub");  
                    return false;  
               } 
               $.ajax({  
                    url:"query.php?page=save_jenis_alhub",  
                    method:"POST",  
                    data:{
                        jenis_alhub:jenis_alhub
                    },  
                    dataType:"text",  
                    success:function(data)  
                    {  
                         alert(data);
                         $("#add_jenis_alhub").val("");
                         fetch_kat_alhub();
                    }  
               })  
            });
            //END ADD JENIS KATEGORI

            // FETCH DROPDOWN
            function fetch_kat_alhub()
            {
                $.ajax({
                    url:"query.php?page=select_kat_alhub",
                    method:"POST",
                    success:function(data)
                    {
                        $('#nm_alhub').html(data);
                    }  
                });  
            }
            // END FETCH DROPDOWN

            // MENU DATA DAMAI
            $("#mndamai3").click(function()
            {
                fetch_data_damai3();
                $('#damai3').hide();
                $('#judulviewdamai3').show();
            });
            // END MENU DATA DAMAI

            // TAMBAH DATA DAMAI
            $("#tambahdamai3").click(function()
            {
                fetch_kat_alhub();
                $('#savealhub').show();
                $('#editalhub').hide();
                $('#add_jenis_alhub').hide();
                $('#edit_jenis_alhub').hide();
                $('#damai3').show();
                $('#judulviewdamai3').hide();
            });
            // END TAMBAH DATA DAMAI

            // DAFTAR DATA DAMAI
            $("#daftardamai3").click(function()
            {
                fetch_data_damai3();
                $('#damai3').hide();
                $('#judulviewdamai3').show();
                $('#nm_alhub').show();

                $("#id_alhub").val("");
                $("#kat_alhub").val("");
                $("#nm_alhub").val("");
                $("#nama_alhub").val("");
                $("#merk_alhub").val("");
                $("#sat_alhub").val("");
                $("#senja_alhub").val("");
                $("#kondisi_alhub").val("");
                $("#ket_alhub").val("");
                $("#id_alhub2").val("");
            });
            // END DAFTAR DATA DAMAI
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
                <div class="sidebar">

                    <!-- side-menu -->
                    <ul class="nav" id="side-menu">            
                        <li>
                            <a href="page-bekal.php">BEKAL</a>
                        </li>
                        <li>
                            <a href="page-materiil.php">MATERIIL</a>
                        </li>
                        <li>
                            <a href="#"  id="mndamai3">ALHUB</a>
                        </li>
                        <li>
                            <a href="page-pangkalan.php">PANGKALAN & BANGUNAN</a>
                        </li>
                    </ul>
                    <!-- end side-menu -->

                </div>
                <!-- end sidebar-collapse -->

            </nav>
            <!-- end navbar side -->

            <!--  page-wrapper -->
            <div id="page-wrapper">

                <!-- page header -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Alhub</h1>
                    </div>
                </div>
                <!--end page header -->

                <div class="row">
                    <!-- AWAL VIEW DAMAI-->
                    <div class="col-lg-12" id="judulviewdamai3">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Alhub
                                <button id="tambahdamai3" style="float:right;">Tambah</button>
                            </div>
                            <div class="panel-body" id="viewdamai3">
                            </div>
                        </div>
                        <!--End Advanced Tables -->
                    </div>
                    <!-- AKHIR VIEW DAMAI-->

                    <!-- AWAL INSERT DAMAI-->

                    <!-- FORM DAMAI 3 -->
                    <div class="col-lg-12" id="damai3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Alhub
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <?php
                                            if(@$_SESSION['admin'])
                                            {
                                                $usertype = 1;
                                            }
                                            else if(@$_SESSION['dandahanud'])
                                            {
                                                $usertype = 2;
                                            }
                                            else if(@$_SESSION['paintel'])
                                            {
                                                $usertype = 3;
                                            }
                                            else if(@$_SESSION['paops'])
                                            {
                                                $usertype = 4;
                                            }
                                            else if(@$_SESSION['papers'])
                                            {
                                                $usertype = 5;
                                            }
                                            else if(@$_SESSION['palog'])
                                            {
                                                $usertype = 6;
                                            }
                                            else if(@$_SESSION['padin'])
                                            {
                                                $usertype = 7;
                                            }
                                            else if(@$_SESSION['bahub'])
                                            {
                                                $usertype = 8;
                                            }
                                            else if(@$_SESSION['batitih'])
                                            {
                                                $usertype = 9;
                                            }
                                            else if(@$_SESSION['ploter'])
                                            {
                                                $usertype = 10;
                                            }
                                            else
                                            {
                                                $usertype = 11;
                                            }
                                        ?>
                                        <div class="form-group">
                                            <input type="hidden" id="tipe_alhub" value= <?php echo $usertype; ?> name="tipe_alhub">
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" id="id_alhub" name="id_alhub">
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Kat/Kode</label>
                                            <input id="kat_alhub" class="form-control" name="kat_alhub">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Materiil</label>
                                            <div class="dropdown">
                                                <input id="edit_jenis_alhub" class="form-control" name="edit_jenis_alhub" disabled>
                                                <br/>
                                                <select class="form-control input-sm" id="nm_alhub" name="nm_alhub">
                                                    <input type="hidden" id="id_alhub2" name="id_alhub2" disabled>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input id="add_jenis_alhub" class="form-control" name="add_jenis_alhub">
                                            <button name="add_kat_alhub" id="add_kat_alhub" class="btn btn-warning btn-circle">+</button>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input id="nama_alhub" class="form-control" name="nama_alhub">
                                        </div>
                                        <div class="form-group">
                                            <label>Merk/Type</label>
                                            <input id="merk_alhub" class="form-control" name="merk_alhub">
                                        </div>
                                        <div class="form-group">
                                            <label>Satuan</label>
                                            <input id="sat_alhub" class="form-control" name="sat_alhub">
                                        </div>
                                        <div class="form-group">
                                            <label>No. Senjata</label>
                                            <input id="senja_alhub" class="form-control" name="senja_alhub">
                                        </div>
                                        <div class="form-group">
                                            <label>Kondisi</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" id="kondisi_alhub" name="kondisi_alhub" value="Baik">Baik
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" id="kondisi_alhub" name="kondisi_alhub" value="Rusak Ringan">Rusak Ringan
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" id="kondisi_alhub" name="kondisi_alhub" value="Rusak Berat">Rusak Berat
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <input id="ket_alhub" class="form-control" name="ket_alhub">
                                        </div>
                                        <button id="savealhub" class="btn btn-primary">Simpan</button>
                                        <button id="editalhub" class="btn btn-primary">Edit</button>
                                        <button id="daftardamai3" class="btn btn-success">Lihat Daftar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END FORM DAMAI 3 -->
                    
                    <!-- AKHIR INSERT VIEW-->

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
    else if (@$_SESSION['dandahanud'] || @$_SESSION['paintel'] || @$_SESSION['paops'] || @$_SESSION['papers'] || @$_SESSION['padin'] || @$_SESSION['bahub'] || @$_SESSION['batitih'] || @$_SESSION['ploter'])
    {
        header("location: page-menu-admin.php");
    }
    else
    {
        header("location: page-login.php");
    } 
?>