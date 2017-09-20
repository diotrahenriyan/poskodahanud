<?php
    @session_start();
?>
<!-- baru start -->
<nav class='navbar navbar-default navbar-fixed-top'  role="navigation" id="navbar">
  <div class='container-fluid'>
    <div class='navbar-header'>
      <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1' aria-expanded='false'>
        <span class='sr-only'>Toggle navigation</span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
      </button>
      <a class="navbar-brand" href="index.php" style="color:white !important; font-size:25px;">
        <img src="assets/img/arhanud.png" alt="" />
        <lo><b>POSKO DAHANUD <t>APP 1.0</t></b></lo>
      </a>
      <a class="navbar-brand" href="page-user.php" style="color:white !important; font-size:25px; padding-top: 30px;">
        <lo><b style="margin-left: 179px;">
        <?php
            if (@$_SESSION['admin'])
            {
               echo $_SESSION['nama_admin'];
            }
            else if (@$_SESSION['dandahanud'])
            {
               echo $_SESSION['nama_dandan'];
            }
            else if (@$_SESSION['paintel'])
            {
               echo $_SESSION['nama_paintel'];
            }
            else if (@$_SESSION['paops'])
            {
                echo $_SESSION['nama_paops'];
            }
            else if (@$_SESSION['papers'])
            {
               echo $_SESSION['nama_papers'];
            }
            else if (@$_SESSION['palog'])
            {
               echo $_SESSION['nama_palog'];
            }
            else if (@$_SESSION['padin'])
            {
                echo $_SESSION['nama_padin'];
            }
            else if (@$_SESSION['bahub'])
            {
               echo $_SESSION['nama_bahub'];
            }
            else if (@$_SESSION['batitih'])
            {
               echo $_SESSION['nama_batitih'];
            }
            else if (@$_SESSION['ploter'])
            {
                echo $_SESSION['nama_ploter'];
            }
        ?>
        </b></lo>
      </a>
    </div>

    <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
      <ul class='nav navbar-nav navbar-right'>

        <li class="dropdown"><a href='page-menu-admin.php'>HOME</a></li>
        <li class="dropdown"><a href='page-intelijen.php'>INTELIJEN</a></li>
        <li class="dropdown"><a href='page-operasi-pasukan-sendiri.php'>OPERASI</a></li>
        <li class="dropdown"><a href='page-personil.php'>DATA PERSONIL</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LOGISTIK</a>
          <ul class="dropdown-menu">
            <li><a href="page-bekal.php">BEKAL</a></li>
            <li><a href="page-materiil.php">MATERIIL</a></li>
            <li><a href="page-alhub.php">ALHUB</a></li>
            <li><a href="page-pangkalan.php">PANGKALAN & BANGUNAN</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href='page-dinas-apel.php'>DINAS</a></li>
        <li class="dropdown"><a href='page-logout.php'>LOGOUT</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- baru end -->

// edit diotra
//edit fahmi
