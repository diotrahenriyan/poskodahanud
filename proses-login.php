<?php  
  @session_start();
  include "koneksi.php";
?>

<?php
  $user = @$_POST['user'];
  $pass = @$_POST['pass'];
  $login = @$_POST['login'];

  if($login)
  {
    if($user == "" || $pass == "" )
    {
?>

<script type="text/javascript">alert("Username atau Password masih kosong!"); window.location.href="page-login.php"</script>

<?php
  }
  else
  {
    $sql = mysql_query("select * from tb_user where username = '$user' and password = '$pass'") or die(mysql_error());
    $data = mysql_fetch_array($sql);
    $cek = mysql_num_rows($sql);

    if($cek >= 1)
    {
      if($data['usertype'] == "admin")
      {
        @$_SESSION['admin'] = $data['id_user'];
        @$_SESSION['nama_admin'] = $data['username'];
        header("location: page-menu-admin.php");
      }
      else if($data['usertype'] == "dandahanud")
      {
        @$_SESSION['dandahanud'] = $data['id_user'];
         @$_SESSION['nama_dandan'] = $data['username'];
        header("location: page-menu-admin.php");
      }
      else if($data['usertype'] == "paintel")
      {
        @$_SESSION['paintel'] = $data['id_user'];
        @$_SESSION['nama_paintel'] = $data['username'];
        header("location: page-menu-admin.php");
      }
      else if($data['usertype'] == "paops")
      {
        @$_SESSION['paops'] = $data['id_user'];
        @$_SESSION['nama_paops'] = $data['username'];
        header("location: page-menu-admin.php");
      }
      else if($data['usertype'] == "papers")
      {
        @$_SESSION['papers'] = $data['id_user'];
        @$_SESSION['nama_papers'] = $data['username'];
        header("location: page-menu-admin.php");
      }
      else if($data['usertype'] == "palog")
      {
        @$_SESSION['palog'] = $data['id_user'];
        @$_SESSION['nama_palog'] = $data['username'];
        header("location: page-menu-admin.php");
      }
      else if($data['usertype'] == "padin")
      {
        @$_SESSION['padin'] = $data['id_user'];
        @$_SESSION['nama_padin'] = $data['username'];
        header("location: page-menu-admin.php");
      }
      else if($data['usertype'] == "bahub")
      {
        @$_SESSION['bahub'] = $data['id_user'];
        @$_SESSION['nama_bahub'] = $data['username'];
        header("location: page-menu-admin.php");
      }
      else if($data['usertype'] == "batitih")
      {
        @$_SESSION['batitih'] = $data['id_user'];
        @$_SESSION['nama_batitih'] = $data['username'];
        header("location: page-menu-admin.php");
      }
      else if($data['usertype'] == "ploter")
      {
        @$_SESSION['ploter'] = $data['id_user'];
        @$_SESSION['nama_ploter'] = $data['username'];
        header("location: page-menu-admin.php");
      }
    }
    else
    {
?>

<script type="text/javascript">alert("Login Gagal!"); window.location.href="page-login.php"</script>

<?php
      }
    }
  }
?>