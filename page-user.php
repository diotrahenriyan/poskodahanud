<?php
    @session_start();
    if (@$_SESSION['admin'])
    {
         include 'koneksi.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA USER</title>
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
       $('#form_user').hide();

       $('#savedatauser').click(function(){
            var username = $("#username").val();
            var password = $("#password").val();
            var usertype = $("#usertype").val();


            $.ajax({
                type: "post",
                url: "query.php?page=save_user",
                data: {
                    username : username,
                    password : password,
                    usertype : usertype
                },
             
                success: function (response) {
                    if (response == "Sukses") {
                    alert("Data User Telah Disimpan");
                    $("#username").val("");
                    $("#password").val("");
                    $("#usertype").val("");
                    }
                }
            });
        });

        $(document).on('click', '#del_user', function(){  
                   var id_user=$(this).data("id3");  
                  
                   if(confirm("Are you sure you want to delete this?"))  
                   {  
                        $.ajax({  
                             url:"query.php?page=hapus_user",  
                             method:"POST",  
                             data:{id_user:id_user},  
                             dataType:"text",  
                             success:function(data){  
                                  alert(data);  
                                  location.reload();  
                             }  
                        });  
                   }  
        });

        $(document).on('click', '#btn_edit_user', function(){
            var id=$(this).data("id4");

            $.ajax({
            	url:"query.php?page=select_edit_user",
            	method:"POST",
            	data:{
            		id_user:id
            	},
            	dataType:"text",
            	success:function(data){
            		if (data != "false") {
            			$('#form_user').show();
            			$('#savedatauser').hide();
            			$('#edituser').show();
            			$('#view_user').hide();
            			var useruser = jQuery.parseJSON(data);
            			$('#id_user').val(useruser.id_user);
            			$('#username').val(useruser.username);
            			$('#password').val(useruser.password);
            			$('#usertype').val(useruser.usertype);
            		} else {
            			alert ("Gagal");
            		}
            	}
            });
        });

        $('#edituser').click(function(){
                var id_user = $("#id_user").val();
                var username = $("#username").val();
                var password = $("#password").val();
                var usertype = $("#usertype").val();

                $.ajax({
                    type: "post",
                    url: "query.php?page=edit_user",
                    data: {
                        id_user : id_user,
                        username : username,
                        password : password,
                        usertype : usertype
                    },
                    success: function (response) {
                        alert(response);

                        $("#id_user").val("");
                        $("#username").val("");
                        $("#password").val("");
                        $("#usertype").val("");

                        location.reload();
                    }
                });
            });


        $("#tambah").click(function()
        {
            $('#form_user').show();
            $('#savedatauser').show();
            $('#edituser').hide();
            $('#view_user').hide();
        });
        
        $("#daftaruser").click(function()
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

        <!--  page-wrapper -->
        <div id="page-wrapper">
            <div class="row">
                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Data User</h1>
                </div>
                <!--end page header -->
            </div>
            <div class="row">
                <div class="col-lg-12" id="view_user">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        List Data User
                             <button id="tambah" style="float:right;"><img src="assets/img/tambah.png" alt="" width="20px" height="auto" /> Tambah</button>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr class="blue-head">
                                            <th>No</th>
                                            <th>Username</th>
                                            <th>Usertype</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php

                                       	$sql = "SELECT * FROM tb_user ORDER BY id_user asc";   
                                        
                                        $result = mysql_query($sql)or die(mysql_error());  
                                        $no=1;
                                        while($data = mysql_fetch_array($result)){
                                            echo "<tr class='odd gradeX'>
                                                <td>".$no."</td>
                                                <td>".$data['username']."</td>
                                                <td>".$data['usertype']."</td>
                                                <td class='center'> 
                                                    <button name='del_user' id='del_user' data-id3='".$data['id_user']."'><img src='assets/img/Delete.png' alt='' width='25px' heigh='25px'/></button>
                                                    <button name='btn_edit_user' id='btn_edit_user' data-id4='".$data['id_user']."'><img src='assets/img/edit.png' alt='' width='25px' heigh='25px'/></button>
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
                 <div class="col-lg-12" id="form_user">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data User 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <input id="id_user" class="form-control" name="id_user" type="hidden">
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input id="username" class="form-control" name="username">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input id="password" class="form-control" name="password">
                                        </div>
                                        <div class="form-group">
                                            <label>Usertype</label>
                                            <select id="usertype" class="form-control" name="usertype">
                                                <option value=""></option>
                                                <option value="dandahanud">Dandahanud</option>
                                                <option value="paintel">Paintel</option>
                                                <option value="paops">Paops</option>
                                                <option value="papers">Papers</option>
                                                <option value="palog">Palog</option>
                                                <option value="padin">Padin</option>
                                                <option value="bahub">Bahub</option>
                                                <option value="batitih">Batitih</option>
                                                <option value="ploter">Ploter</option>
                                                <option value="admin">Admin</option>
                                            </select>
                                        </div>
                                     	<button id="savedatauser" class="btn btn-primary">Simpan</button>
                                        <button id="edituser" class="btn btn-primary">Edit</button>
                                        <button id="daftaruser" class="btn btn-success">Lihat Daftar</button>
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
    else if (@$_SESSION['dandahanud'] || @$_SESSION['paintel'] || @$_SESSION['paops'] || @$_SESSION['papers'] || @$_SESSION['palog'] || @$_SESSION['padin'] || @$_SESSION['bahub'] || @$_SESSION['batitih'] || @$_SESSION['ploter']) {
        header("location: page-menu-admin.php");
    }
    else
    {
        header("location: page-login.php");
    } 
?>