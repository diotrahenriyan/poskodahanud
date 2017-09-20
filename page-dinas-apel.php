<?php
    @session_start();
    if (@$_SESSION['admin'] || @$_SESSION['papers']  || @$_SESSION['padin'])
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
        function fetch_apel()  
          {  
               $.ajax({  
                    url:"query.php?page=select_apel",  
                    method:"POST", 
                    dataType:"text",  
                    success:function(data){  
                         $('#tab_apel').html(data); 

                    }  
               });  
          }

          fetch_apel();

        $(document).on('click', '#add_apel', function(){ 
             var apel_satuan = $('#apel_satuan').text();  
             var apel_jml = $('#apel_jml').text(); 
             var apel_krg = $('#apel_krg').text(); 
             var apel_hdr = $('#apel_hdr').text(); 
             var apel_ket = $("[name='apel_ket']:checked").val();

             if(apel_satuan == '')  
             {  
                  alert("Masukan Satuan");  
                  return false;  
             }  
             if(apel_jml == '')  
             {  
                  alert("Masukan Jumlah");  
                  return false;  
             }
             if(apel_krg == '')  
             {  
                  alert("Masukan krg");  
                  return false;  
             } 
             if(apel_hdr == '')  
             {  
                  alert("Masukan hdr");  
                  return false;  
             }  
             $.ajax({  
                  url:"query.php?page=save_apel",  
                  method:"POST",  
                  data:{
                      apel_satuan:apel_satuan,
                      apel_jml:apel_jml, 
                      apel_krg:apel_krg,
                      apel_hdr:apel_hdr,
                      apel_ket:apel_ket
                  },  
                  dataType:"text",  
                  success:function(data)  
                  {  
                       fetch_apel(); 
                  }  
             })  
        });


        $(document).on('click', '.del_apel', function(){  
          var id=$(this).data("id11");  

          if(confirm("Are you sure you want to delete this?"))  
          {  
              $.ajax({  
                   url:"query.php?page=hapus_apel",  
                   method:"POST",  
                   data:{id:id},  
                   dataType:"text",  
                   success:function(data){   
                        fetch_apel();  
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
            
                    <li class='aktif'><a href="page-dinas-apel.php">KEKUATAN APEL</a></li>
                    <li><a href="page-dinas-pengumuman.php">PENGUMUMAN</a></li>
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
                    <h1 class="page-header">KEKUATAN APEL</h1>
                </div>
                <!--end page header -->
            </div>
            <div class="row">
                <div class="col-lg-12" >
                    <div class="panel panel-primary">
                        <div class="panel-body">
                            <div class="table-responsive" id="tab_apel">
                                
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
        // $(document).ready(function () {
        //     $('#dataTables-example').dataTable();
        // });
    </script>

</body>

</html>
<?php 
    }
    else if (@$_SESSION['dandahanud'] || @$_SESSION['paintel'] || @$_SESSION['paops'] || @$_SESSION['palog'] || @$_SESSION['bahub'] || @$_SESSION['batitih'] || @$_SESSION['ploter'])
    {
        header("location: page-menu-admin.php");
    }
    else
    {
        header("location: page-login.php");
    } 
?>