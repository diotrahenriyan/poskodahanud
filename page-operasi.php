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

    <script type="text/javascript">
        $(document).ready(function(e)
        {
            $('#judulorgatop').hide();
            $('#judulorgadspp').hide();
            $('#judulpenakbujuk').hide();
            $('#judulpenaknaskah').hide();
            $('#judulpenakprotap').hide();
           
            // $('#judulview1').hide();
            // VIEW DATA TEMPUR
         function fetch_orgatop()  
          {  
               $.ajax({  
                    url:"query.php?page=select_orgatop",  
                    method:"POST",
                    success:function(data){  
                         $('#orga_top').html(data); 

                    }  
               });  
          }
          function fetch_orgadspp()  
          {  
               $.ajax({  
                    url:"query.php?page=select_orgadspp",  
                    method:"POST", 
                    success:function(data){  
                         $('#orga_dspp').html(data); 

                    }  
               });  
          }
          function fetch_penakbujuk()  
          {  
               $.ajax({  
                    url:"query.php?page=select_penakbujuk",  
                    method:"POST", 
                    success:function(data){  
                         $('#penak_bujuk').html(data); 

                    }  
               });  
          }

          function fetch_penaknaskah()  
          {  
               $.ajax({  
                    url:"query.php?page=select_penaknaskah",  
                    method:"POST", 
                    success:function(data){  
                         $('#penak_naskah').html(data); 

                    }  
               });  
          }

          function fetch_penakprotap()  
          {  
               $.ajax({  
                    url:"query.php?page=select_penakprotap",  
                    method:"POST", 
                    success:function(data){  
                         $('#penak_protap').html(data); 

                    }  
               });  
          }

          // fetch_orgatop();
          // fetch_orgadspp();
          // fetch_penakbujuk();
          // fetch_penaknaskah();
          // fetch_penakprotap();
              
            // SAVE DATA TEMPUR
           $(document).on('click', '#add_top', function(){ 
           var top_unit = $('#top_unit').text();  
           var top_kode = $('#top_kode').text();
           var top_urai = $('#top_urai').text();
           var top_pangkat = $('#top_pangkat').text();
           var top_kor = $('#top_kor').text();
           var top_mil = $('#top_mil').text();
           var top_jml = $('#top_jml').text();
           if(top_unit == '')  
           {  
                alert("Masukan unit");  
                return false;  
           }  
           if(top_kode == '')  
           {  
                alert("Masukan kode");  
                return false;  
           }  
           $.ajax({  
                url:"query.php?page=save_orgatop",  
                method:"POST",  
                data:{
                    top_unit:top_unit, 
                    top_kode:top_kode,
                    top_urai:top_urai,
                    top_pangkat:top_pangkat,
                    top_kor:top_kor,
                    top_mil:top_mil,
                    top_jml:top_jml
                },  
                dataType:"text",  
                success:function(data)  
                {  
                     alert(data);  
                     fetch_orgatop(); 
                }  
           })  
        });

        function edit_top(id, text, column_name)  
          {  
               $.ajax({  
                    url:"query.php?page=edit_top",  
                    method:"POST",  
                    data:{id:id, text:text, column_name:column_name},  
                    dataType:"text",  
                    success:function(data){  
                         alert(data);  
                    }  
               });  
          }

          $(document).on('blur', '.top_unit', function(){  
               var id = $(this).data("id1");  
               var top_unit = $(this).text();  
               edit_top(id, top_unit, "unit");  
          });

          $(document).on('blur', '.top_kode', function(){  
               var id = $(this).data("id2");  
               var top_kode = $(this).text();  
               edit_top(id, top_kode, "kode_jab");  
          });

          $(document).on('blur', '.top_urai', function(){  
               var id = $(this).data("id3");  
               var top_urai = $(this).text();  
               edit_top(id, top_urai, "urai_jab");  
          });

          $(document).on('blur', '.top_pangkat', function(){  
               var id = $(this).data("id4");  
               var top_pangkat = $(this).text();  
               edit_top(id, top_pangkat, "pangkat");  
          });

          $(document).on('blur', '.top_kor', function(){  
               var id = $(this).data("id5");  
               var top_kor = $(this).text();  
               edit_top(id, top_kor, "korps");  
          });

          $(document).on('blur', '.top_mil', function(){  
               var id = $(this).data("id6");  
               var top_mil = $(this).text();  
               edit_top(id, top_mil, "militer");  
          });

          $(document).on('blur', '.top_jml', function(){  
               var id = $(this).data("id7");  
               var top_jml = $(this).text();  
               edit_top(id, top_jml, "jumlah");  
          });
            // DELETE DATA 
            $(document).on('click', '.del_top', function(){
                var id=$(this).data("id8");
                // alert('dian');
                if(confirm("Are you sure you want to delete this?"))
                {
                    $.ajax({
                        url:"query.php?page=deletetop",
                        method:"POST",
                        data:{id:id},
                        dataType:"text",
                        success:function(data)
                        {
                            alert(data);
                            fetch_orgatop ();
                        }
                    });
                }
            });
            //END DELETE DATA
           $(document).on('click', '#add_dspp', function(){ 
           var dspp_unit = $('#dspp_unit').text();  
           var dspp_kode = $('#dspp_kode').text();
           var dspp_urai = $('#dspp_urai').text();
           var dspp_senjata = $('#dspp_senjata').text();
           var dspp_kendaraan = $('#dspp_kendaraan').text();
           var dspp_lengkap = $('#dspp_lengkap').text();
           if(dspp_unit == '')  
           {  
                alert("Masukan unit");  
                return false;  
           }  
           if(dspp_kode == '')  
           {  
                alert("Masukan kode");  
                return false;  
           }  
           $.ajax({  
                url:"query.php?page=save_orgadspp",  
                method:"POST",  
                data:{
                    dspp_unit:dspp_unit, 
                    dspp_kode:dspp_kode,
                    dspp_urai:dspp_urai,
                    dspp_senjata:dspp_senjata,
                    dspp_kendaraan:dspp_kendaraan,
                    dspp_lengkap:dspp_lengkap
                },  
                dataType:"text",  
                success:function(data)  
                {  
                     alert(data);  
                     fetch_orgadspp(); 
                }  
           })  
        });

        function edit_dspp(id, text, column_name)  
          {  
               $.ajax({  
                    url:"query.php?page=edit_dspp",  
                    method:"POST",  
                    data:{id:id, text:text, column_name:column_name},  
                    dataType:"text",  
                    success:function(data){  
                         alert(data);  
                    }  
               });  
          }

          $(document).on('blur', '.dspp_unit', function(){  
               var id = $(this).data("id1");  
               var dspp_unit = $(this).text();  
               edit_dspp(id, dspp_unit, "unit");  
          });

          $(document).on('blur', '.dspp_kode', function(){  
               var id = $(this).data("id2");  
               var dspp_kode = $(this).text();  
               edit_dspp(id, dspp_kode, "kode_jab");  
          });

          $(document).on('blur', '.dspp_urai', function(){  
               var id = $(this).data("id3");  
               var dspp_urai = $(this).text();  
               edit_dspp(id, dspp_urai, "urai_jab");  
          });

          $(document).on('blur', '.dspp_senjata', function(){  
               var id = $(this).data("id4");  
               var dspp_senjata = $(this).text();  
               edit_dspp(id, dspp_senjata, "senjata");  
          });

          $(document).on('blur', '.dspp_kendaraan', function(){  
               var id = $(this).data("id5");  
               var dspp_kendaraan = $(this).text();  
               edit_dspp(id, dspp_kendaraan, "kendaraan");  
          });

          $(document).on('blur', '.dspp_lengkap', function(){  
               var id = $(this).data("id6");  
               var dspp_lengkap = $(this).text();  
               edit_dspp(id, dspp_lengkap, "perlengkapan");  
          });

          $(document).on('click', '.del_dspp', function(){
                var id=$(this).data("id8");
                // alert('dian');
                if(confirm("Are you sure you want to delete this?"))
                {
                    $.ajax({
                        url:"query.php?page=deletedspp",
                        method:"POST",
                        data:{id:id},
                        dataType:"text",
                        success:function(data)
                        {
                            alert(data);
                            fetch_orgadspp();
                        }
                    });
                }
            });


           $(document).on('click', '#add_bujuk', function(){ 
           var bujuk = $('#bujuk').text();  
           var bujuk_ket = $('#bujuk_ket').text();
           if(bujuk == '')  
           {  
                alert("Masukan bujuk");  
                return false;  
           }  
           if(bujuk_ket == '')  
           {  
                alert("Masukan keterangan");  
                return false;  
           }  
           $.ajax({  
                url:"query.php?page=save_penakbujuk",  
                method:"POST",  
                data:{
                    bujuk:bujuk, 
                    bujuk_ket:bujuk_ket
                },  
                dataType:"text",  
                success:function(data)  
                {  
                     alert(data);  
                     fetch_penakbujuk(); 
                }  
           })  
        });

        function edit_bujuk(id, text, column_name)  
          {  
               $.ajax({  
                    url:"query.php?page=edit_penakbujuk",  
                    method:"POST",  
                    data:{id:id, text:text, column_name:column_name},  
                    dataType:"text",  
                    success:function(data){  
                         alert(data);  
                    }  
               });  
          }

          $(document).on('blur', '.bujuk', function(){  
               var id = $(this).data("id1");  
               var bujuk = $(this).text();  
               edit_bujuk(id, bujuk, "bujuk");  
          });

          $(document).on('blur', '.bujuk_ket', function(){  
               var id = $(this).data("id2");  
               var bujuk_ket = $(this).text();  
               edit_bujuk(id, bujuk_ket, "ket");  
          });

          $(document).on('click', '.del_bujuk', function(){
                var id=$(this).data("id8");
                // alert('dian');
                if(confirm("Are you sure you want to delete this?"))
                {
                    $.ajax({
                        url:"query.php?page=deletebujuk",
                        method:"POST",
                        data:{id:id},
                        dataType:"text",
                        success:function(data)
                        {
                            alert(data);
                            fetch_penakbujuk();
                        }
                    });
                }
            });

          // naskah akademik

          $(document).on('click', '#add_naskah', function(){ 
           var naskah = $('#naskah').text();  
           var naskah_ket = $('#naskah_ket').text();
           if(naskah == '')  
           {  
                alert("Masukan naskah");  
                return false;  
           }  
           if(naskah_ket == '')  
           {  
                alert("Masukan keterangan");  
                return false;  
           }  
           $.ajax({  
                url:"query.php?page=save_penaknaskah",  
                method:"POST",  
                data:{
                    naskah:naskah, 
                    naskah_ket:naskah_ket
                },  
                dataType:"text",  
                success:function(data)  
                {  
                     alert(data);  
                     fetch_penaknaskah(); 
                }  
           })  
        });

          function edit_naskah(id, text, column_name)  
          {  
               $.ajax({  
                    url:"query.php?page=edit_penaknaskah",  
                    method:"POST",  
                    data:{id:id, text:text, column_name:column_name},  
                    dataType:"text",  
                    success:function(data){  
                         alert(data);  
                    }  
               });  
          }

          $(document).on('blur', '.naskah', function(){  
               var id = $(this).data("id1");  
               var naskah = $(this).text();  
               edit_naskah(id, naskah, "naskah");  
          });

          $(document).on('blur', '.naskah_ket', function(){  
               var id = $(this).data("id2");  
               var naskah_ket = $(this).text();  
               edit_naskah(id, naskah_ket, "ket");  
          });

          $(document).on('click', '.del_naskah', function(){
                var id=$(this).data("id8");
                // alert('dian');
                if(confirm("Are you sure you want to delete this?"))
                {
                    $.ajax({
                        url:"query.php?page=deletenaskah",
                        method:"POST",
                        data:{id:id},
                        dataType:"text",
                        success:function(data)
                        {
                            alert(data);
                            fetch_penaknaskah();
                        }
                    });
                }
            });

           $(document).on('click', '#add_protap', function(){ 
           var protap = $('#protap').text();  
           var protap_ket = $('#protap_ket').text();
           if(protap == '')  
           {  
                alert("Masukan protap");  
                return false;  
           }  
           if(protap_ket == '')  
           {  
                alert("Masukan keterangan");  
                return false;  
           }  
           $.ajax({  
                url:"query.php?page=save_penakprotap",  
                method:"POST",  
                data:{
                    protap:protap, 
                    protap_ket:protap_ket
                },  
                dataType:"text",  
                success:function(data)  
                {  
                     alert(data);  
                     fetch_penakprotap(); 
                }  
           })  
          });

          function edit_protap(id, text, column_name)  
          {  
               $.ajax({  
                    url:"query.php?page=edit_penakprotap",  
                    method:"POST",  
                    data:{id:id, text:text, column_name:column_name},  
                    dataType:"text",  
                    success:function(data){  
                         alert(data);  
                    }  
               });  
          }

          $(document).on('blur', '.protap', function(){  
               var id = $(this).data("id1");  
               var protap = $(this).text();  
               edit_protap(id, protap, "protap");  
          });

          $(document).on('blur', '.protap_ket', function(){  
               var id = $(this).data("id2");  
               var protap_ket = $(this).text();  
               edit_protap(id, protap_ket, "ket");  
          });

          $(document).on('click', '.del_protap', function(){
                var id=$(this).data("id8");
                // alert('dian');
                if(confirm("Are you sure you want to delete this?"))
                {
                    $.ajax({
                        url:"query.php?page=deleteprotap",
                        method:"POST",
                        data:{id:id},
                        dataType:"text",
                        success:function(data)
                        {
                            alert(data);
                            fetch_penakprotap();
                        }
                    });
                }
            });

          
            // MENU DATA 
            $("#mnorganisasi1").click(function()
            {
                fetch_orgatop();
                $('#judulorgatop').show();
                $('#judulorgadspp').hide();
                $('#judulpenakbujuk').hide();
                $('#judulpenaknaskah').hide();
                $('#judulpenakprotap').hide();
                
            }); 

            $("#mnorganisasi2").click(function()
            {
                fetch_orgadspp();
                $('#judulorgatop').hide();
                $('#judulorgadspp').show();
                $('#judulpenakbujuk').hide();
                $('#judulpenaknaskah').hide();
                $('#judulpenakprotap').hide();
                
            }); 

            $("#mnpenak1").click(function()
            {
                fetch_penakbujuk();
                $('#judulorgatop').hide();
                $('#judulorgadspp').hide();
                $('#judulpenakbujuk').show();
                $('#judulpenaknaskah').hide();
                $('#judulpenakprotap').hide();
                
            }); 
            $("#mnpenak2").click(function()
            {
                fetch_penaknaskah();
                $('#judulorgatop').hide();
                $('#judulorgadspp').hide();
                $('#judulpenakbujuk').hide();
                $('#judulpenaknaskah').show();
                $('#judulpenakprotap').hide();
                
            }); 
            $("#mnpenak3").click(function()
            {
                fetch_penakprotap();
                $('#judulorgatop').hide();
                $('#judulorgadspp').hide();
                $('#judulpenakbujuk').hide();
                $('#judulpenaknaskah').hide();
                $('#judulpenakprotap').show();
                
            }); 
            // END MENU DATA
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
                            <a href="#">ORGANISASI</a>
                            <ul class="nav nav-second-level">
                                <li>
                                  <a href="#"  id="mnorganisasi1">TOP</a>
                                </li>
                                <li>
                                  <a href="#" id="mnorganisasi2">DSPP</a>
                                </li>
                            </ul>
                            <!-- second-level-items -->
                        </li>
                        <li>
                            <a href="page-jadwal-kegiatan.php">LATIHAN</a>
                            <!-- second-level-items -->
                        </li>
                        <li>
                            <a href="#">OPERASI</a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"  id="mnoperasi1">OMP</a>
                                </li>
                                <li>
                                    <a href="#"  id="mnoperasi2">OMSP</a>
                                </li>
                            </ul>
                            <!-- end second-level-items -->

                        </li>
                        <li>
                            <a href="#">PENAK</a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"  id="mnpenak1">BUJUK</a>
                                </li>
                                <li>
                                    <a href="#"  id="mnpenak2">NASKAH AKADEMIK</a>
                                </li>
                                <li>
                                    <a href="#"  id="mnpenak3">PROTAP</a>
                                </li>
                                <li>
                                    <a href="#"  id="mnpenak4">LAINNYA</a>
                                </li>
                            </ul>
                            <!-- end second-level-items -->

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
                        <h1 class="page-header">DATA OPERASI</h1>
                    </div>
                </div>
                <!--end page header -->

                <div class="row">
                    <!-- AWAL VIEW TEMPUR -->
                    <div class="col-lg-12" id="judulorgatop">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                TOP
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive"  id="orga_top">
                                    
                                </div>
                            </div>
                        </div>
                        <!--End Advanced Tables -->
                    </div>

                    <div class="col-lg-12" id="judulorgadspp">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                DSPP
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive"  id="orga_dspp">
                                    
                                </div>
                            </div>
                        </div>
                        <!--End Advanced Tables -->
                    </div>

                    <div class="col-lg-12" id="judulpenakbujuk">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                BUJUK (PUSSENARHANUD)
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive"  id="penak_bujuk">
                                    
                                </div>
                            </div>
                        </div>
                        <!--End Advanced Tables -->
                    </div>

                    <div class="col-lg-12" id="judulpenaknaskah">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                NASKAH AKADEMIK (PUSSENARHANUD)
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive"  id="penak_naskah">
                                    
                                </div>
                            </div>
                        </div>
                        <!--End Advanced Tables -->
                    </div>

                    <div class="col-lg-12" id="judulpenakprotap">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                               PROTAP (SATUAN)
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive"  id="penak_protap">
                                    
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