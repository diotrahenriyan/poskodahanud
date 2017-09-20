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
            fetch_data_damai2();
            $('#damai2').hide();
            $('#judulviewdamai2').show();

            // VIEW DATA DAMAI
            function fetch_data_damai2()
            {
                $.ajax
                ({
                    url:"query.php?page=select_bangunan",
                    method:"POST",
                    success:function(data)
                    {
                        $('#viewdamai2').html(data);
                    }
                });
            }
            // END VIEW DATA DAMAI
              
            //SAVE DATA DAMAI
            $('#savepangkalan2').click(function(){
                var jm_pang = $("#jm_pang").val();
                var nama_pang = $("#nama_pang").val();
                var top_pang = $("#top_pang").val();
                var lb_pang = $("#lb_pang").val();
                var nyata_pang = $("#nyata_pang").val();
                var kurang_pang = $("#kurang_pang").val();
                var kondisi_pang = $("#kondisi_pang").val();
                var ket_pang = $("#ket_pang").val();
                var tipe_pang = $("#tipe_pang").val();

                $.ajax({
                    type: "post",
                    url: "query.php?page=save_pangkalan2",
                    data: {
                        jm_pang : jm_pang,
                        nama_pang : nama_pang,
                        top_pang : top_pang,
                        lb_pang : lb_pang,
                        nyata_pang : nyata_pang,
                        kurang_pang : kurang_pang,
                        kondisi_pang : kondisi_pang,
                        ket_pang : ket_pang,
                        tipe_pang : tipe_pang
                    } ,
                 
                    success: function (response) {
                        console.log(response);
                        if (response == "Sukses") {
                            $('#damai2').show();
                             alert("Data Telah Disimpan");
                        $("#jm_pang").val(" ");
                        $("#nama_pang").val(" ");
                        $("#top_pang").val(" ");
                        $("#lb_pang").val(" ");
                        $("#nyata_pang").val(" ");
                        $("#kurang_pang").val(" ");
                        $("#ket_pang").val(" ");
                        }                  
                    }
                });
            });
            //END SAVE DATA DAMAI

            //DELETE DATA DAMAI
            $(document).on('click', '#btn_delete_damai2', function(){
                var id=$(this).data("id3");

                if(confirm("Are you sure you want to delete this?"))
                {
                    $.ajax({
                        url:"query.php?page=deletebangunan",
                        method:"POST",
                        data:{id:id},
                        dataType:"text",
                        success:function(data)
                        {
                            alert(data);
                            fetch_data_damai2();
                        }
                    });
                }  
            });
            //END DELETE DATA DAMAI

            // EDIT DATA DAMAI
            $(document).on('click', '#btn_edit_damai2', function(){
                var id=$(this).data("id4");

                $.ajax({  
                    url:"query.php?page=select_edit_bangunan",  
                    method:"POST",  
                    data:{
                        id:id
                    },  
                    dataType:"text",  
                    success:function(data){
                        if (data != "false") {
                            $('#damai2').show();
                            $('#editpangkalan2').show();
                            $('#savepangkalan2').hide();
                            $('#judulviewdamai2').hide();
                            $('#edit_jenis_pang').show();
                            $('#add_jenis_pang').hide();
                            $('#jm_pang').hide();
                            var bangunan = jQuery.parseJSON(data);
                            $('#id_pang').val(bangunan.id_pangkalan);
                            $('#edit_jenis_pang').val(bangunan.jenis);
                            $('#id_pang2').val(bangunan.jm_pangkalan);
                            $('#nama_pang').val(bangunan.nama);
                            $('#top_pang').val(bangunan.top);
                            $('#lb_pang').val(bangunan.luas_bangunan);
                            $('#nyata_pang').val(bangunan.nyata);
                            $('#kurang_pang').val(bangunan.kurang);
                            $('#ket_pang').val(bangunan.ket);
                        } else {
                            alert ("Gagal");
                        }
                    }  
                });
            });
            // END EDIT DATA DAMAI

            // SAVE EDIT DATA DAMAI
            $('#editpangkalan2').click(function(){
                var id= $("#id_pang").val();
                var jm_pang = $("#jm_pang").val();
                var nama_pang = $("#nama_pang").val();
                var top_pang = $("#top_pang").val();
                var lb_pang = $("#lb_pang").val();
                var nyata_pang = $("#nyata_pang").val();
                var kurang_pang = $("#kurang_pang").val();
                var kondisi_pang = $("#kondisi_pang").val();
                var ket_pang = $("#ket_pang").val();
                var id_pang2 = $("#id_pang2").val();

                $.ajax({
                    type: "post",
                    url: "query.php?page=edit_pangkalan2",
                    data: {
                        id : id,
                        jm_pang : jm_pang,
                        nama_pang : nama_pang,
                        top_pang : top_pang,
                        lb_pang : lb_pang,
                        nyata_pang : nyata_pang,
                        kurang_pang : kurang_pang,
                        kondisi_pang : kondisi_pang,
                        ket_pang : ket_pang,
                        id_pang2 : id_pang2
                    },
                    success: function (response) {
                        alert(response);

                        $("#id_pang").val("");
                        $("#jm_pang").val("");
                        $("#nama_pang").val("");
                        $("#top_pang").val("");
                        $("#lb_pang").val("");
                        $("#nyata_pang").val("");
                        $("#kurang_pang").val("");
                        $("#ket_pang").val("");
                        $("#id_pang2").val("");

                        $('#damai2').hide();
                        fetch_data_damai2();
                        $('#judulviewdamai2').show();
                    }
                });
            });
            // END SAVE EDIT DATA DAMAI

            //ADD JENIS KATEGORI
            $(document).on('click', '#add_kat_pang', function()
            {
                fetch_kat_pang();
                $('#edit_jenis_pang').hide();
                $('#jm_pang').show();
                $('#add_jenis_pang').show();
                
               var jenis_pang = $('#add_jenis_pang').val();
               if(jenis_pang == '')  
               {  
                    alert("Masukan Pangkalan & Bangunan");  
                    return false;  
               } 
               $.ajax({  
                    url:"query.php?page=save_jenis_pang",  
                    method:"POST",  
                    data:{
                        jenis_pang:jenis_pang
                    },  
                    dataType:"text",  
                    success:function(data)  
                    {  
                         alert(data);
                         $("#add_jenis_pang").val("");
                         fetch_kat_pang();
                    }  
               })  
            });
            //END ADD JENIS KATEGORI

            // FETCH DROPDOWN
            function fetch_kat_pang()
            {
                $.ajax({
                    url:"query.php?page=select_kat_pang",
                    method:"POST",
                    success:function(data)
                    {
                        $('#jm_pang').html(data);
                    }  
                });  
            }
            // END FETCH DROPDOWN

            // MENU DATA DAMAI
            $("#mndamai2").click(function()
            {
                fetch_data_damai2();
                $('#damai2').hide();
                $('#judulviewdamai2').show();
            });
            // END MENU DATA DAMAI

            // TAMBAH DATA DAMAI
            $("#tambahdamai2").click(function()
            {
                fetch_kat_pang();
                $('#savepangkalan2').show();
                $('#editpangkalan2').hide();
                $('#add_jenis_pang').hide();
                $('#edit_jenis_pang').hide();
                $('#damai2').show();
                $('#judulviewdamai2').hide();
            });
            // END TAMBAH DATA DAMAI

            // DAFTAR DATA DAMAI
            $("#daftardamai2").click(function()
            {
                fetch_data_damai2();
                $('#damai2').hide();
                $('#judulviewdamai2').show();
                $('#jm_pang').show();

                $("#id_pang").val("");
                $("#jm_pang").val("");
                $("#nama_pang").val("");
                $("#top_pang").val("");
                $("#lb_pang").val("");
                $("#nyata_pang").val("");
                $("#kurang_pang").val("");
                $("#ket_pang").val("");
                $("#id_pang2").val("");
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
                            <a href="page-alhub.php">ALHUB</a>
                        </li>
                        <li>
                            <a href="#"  id="mndamai2">PANGKALAN & BANGUNAN</a>
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
                        <h1 class="page-header">Pangkalan & Bangunan</h1>
                    </div>
                </div>
                <!--end page header -->

                <div class="row">

                    <!-- AWAL VIEW DAMAI-->
                    <div class="col-lg-12" id="judulviewdamai2">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Pangkalan dan Bangunan
                                <button id="tambahdamai2" style="float:right;">Tambah</button>
                            </div>
                            <div class="panel-body" id="viewdamai2">
                            </div>
                        </div>
                        <!--End Advanced Tables -->
                    </div>
                    <!-- AKHIR VIEW DAMAI-->

                    <!-- AWAL INSERT DAMAI-->

                    <!-- FORM DAMAI 2 -->
                    <div class="col-lg-12" id="damai2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Pangkalan dan Bangunan
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
                                            <input type="hidden" id="tipe_pang" value= <?php echo $usertype; ?> name="tipe_pang">
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" id="id_pang" name="id_pang">
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Materiil</label>
                                            <div class="dropdown">
                                                <input id="edit_jenis_pang" class="form-control" name="edit_jenis_pang" disabled>
                                                <br/>
                                                <select class="form-control input-sm" id="jm_pang" name="jm_pang">
                                                    <input type="hidden" id="id_pang2" name="id_pang2" disabled>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input id="add_jenis_pang" class="form-control" name="add_jenis_pang">
                                            <button name="add_kat_pang" id="add_kat_pang" class="btn btn-warning btn-circle">+</button>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input id="nama_pang" class="form-control" name="nama_pang">
                                        </div>
                                        <div class="form-group">
                                            <label>Top</label>
                                            <input id="top_pang" class="form-control" name="top_pang">
                                        </div>
                                        <div class="form-group">
                                            <label>Luas Bangunan</label>
                                            <input id="lb_pang" class="form-control" name="lb_pang">
                                        </div>
                                        <div class="form-group">
                                            <label>Nyata</label>
                                            <input id="nyata_pang" class="form-control" name="nyata_pang">
                                        </div>
                                        <div class="form-group">
                                            <label>Kurang</label>
                                            <input id="kurang_pang" class="form-control" name="kurang_pang">
                                        </div>
                                        <div class="form-group">
                                            <label>Kondisi</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" id="kondisi_pang" name="kondisi_pang" value="Baik">Baik
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" id="kondisi_pang" name="kondisi_pang" value="Rusak Ringan">Rusak Ringan
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" id="kondisi_pang" name="kondisi_pang" value="Rusak Berat">Rusak Berat
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <input id="ket_pang" class="form-control" name="ket_pang">
                                        </div>
                                        <button id="savepangkalan2" class="btn btn-primary">Simpan</button>
                                        <button id="editpangkalan2" class="btn btn-primary">Edit</button>
                                        <button id="daftardamai2" class="btn btn-success">Lihat Daftar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END FORM DAMAI 2 -->
                    
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