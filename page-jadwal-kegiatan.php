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
        <title>JADWAL KEGIATAN MINGGUAN</title>
        <!-- Core CSS - Include with every page -->
        <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
        <link href="assets/css/style.css" rel="stylesheet" />
        <link href="assets/css/main-style.css" rel="stylesheet" />
        <script src="libs/jquery-2.2.4.min.js"></script>
        <script src="libs/jquery-2.2.4.js"></script>
        <script src="libs/jquery-ui_1.12.1.js"></script>
        <script src="codebase/spreadsheet.php?load=js"></script>
        <link rel="stylesheet" href="codebase/dhtmlx_core.css" />
        <link rel="stylesheet" href="codebase/dhtmlxspreadsheet.css" />
    </head>

    <script type="text/javascript">
        $(document).ready(function(e)
        {
            $('#2017').hide();
            $('#2018').hide();
            $('#2019').hide();
            $('#2020').hide();
            $('#2021').hide();

            $("#mn2017").click(function()
                {
                    $('#2017').show();
                    $('#2018').hide();
                    $('#2019').hide();
                    $('#2020').hide();
                    $('#2021').hide();
            });

            $("#mn2018").click(function()
                {
                    $('#2018').show();
                    $('#2017').hide();
                    $('#2019').hide();
                    $('#2020').hide();
                    $('#2021').hide();
            });

            $("#mn2019").click(function()
                {
                    $('#2019').show();
                    $('#2017').hide();
                    $('#2018').hide();
                    $('#2020').hide();
                    $('#2021').hide();
            });

            $("#mn2020").click(function()
                {
                    $('#2020').show();
                    $('#2017').hide();
                    $('#2018').hide();
                    $('#2019').hide();
                    $('#2021').hide();
            });

            $("#mn2021").click(function()
                {
                    $('#2021').show();
                    $('#2017').hide();
                    $('#2018').hide();
                    $('#2019').hide();
                    $('#2020').hide();
            });
        });

        window.onload = function() {

            var dhx_sh1 = new dhtmlxSpreadSheet({
                load: "codebase/php/data.php",
                save: "codebase/php/data.php",
                parent: "gridobj1",
                icons_path: "codebase/imgs/icons/",
                autowidth: false,
                autoheight: false
            }); 
            dhx_sh1.load("1");

            var dhx_sh2 = new dhtmlxSpreadSheet({
                load: "codebase/php/data.php",
                save: "codebase/php/data.php",
                parent: "gridobj2",
                icons_path: "codebase/imgs/icons/",
                autowidth: false,
                autoheight: false
            }); 
            dhx_sh2.load("2");

            var dhx_sh3 = new dhtmlxSpreadSheet({
                load: "codebase/php/data.php",
                save: "codebase/php/data.php",
                parent: "gridobj3",
                icons_path: "codebase/imgs/icons/",
                autowidth: false,
                autoheight: false
            }); 
            dhx_sh3.load("3");

            var dhx_sh4 = new dhtmlxSpreadSheet({
                load: "codebase/php/data.php",
                save: "codebase/php/data.php",
                parent: "gridobj4",
                icons_path: "codebase/imgs/icons/",
                autowidth: false,
                autoheight: false
            }); 
            dhx_sh4.load("4");

            var dhx_sh5 = new dhtmlxSpreadSheet({
                load: "codebase/php/data.php",
                save: "codebase/php/data.php",
                parent: "gridobj5",
                icons_path: "codebase/imgs/icons/",
                autowidth: false,
                autoheight: false
            }); 
            dhx_sh5.load("5");
        };
    </script>

    <style>
        .ssheet_cont {
            width: 1042px;
            height: 600px;
            float: left;
        }
    </style>

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
                            <a href="#" id="mn2017">2017</a>
                        </li>
                        <li>
                            <a href="#" id="mn2018">2018</a>
                        </li>
                        <li>
                            <a href="#" id="mn2019">2019</a>
                        </li>
                        <li>
                            <a href="#" id="mn2020">2020</a>
                        </li>
                        <li>
                            <a href="#" id="mn2021">2021</a>
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
                        <h1 class="page-header">JADWAL KEGIATAN MINGGUAN</h1>
                    </div>
                </div>
                <!--end page header -->

                <div class="row">

                    <!-- 2017 -->
                    <div class="col-lg-12" id="2017">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                2017
                            </div>
                            <div class="panel-body" style="padding-left:0px; padding-top:0px;">
                                <div class="ssheet_cont" id="gridobj1">
                                </div>
                            </div>
                        </div>
                        <!--End Advanced Tables -->
                    </div>
                    <!-- END 2017 -->

                    <!-- 2018 -->
                    <div class="col-lg-12" id="2018">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                2018
                            </div>
                            <div class="panel-body" style="padding-left:0px; padding-top:0px;">
                                <div class="ssheet_cont" id="gridobj2">
                                </div>
                            </div>
                        </div>
                        <!--End Advanced Tables -->
                    </div>
                    <!-- END 2018 -->

                    <!-- 2019 -->
                    <div class="col-lg-12" id="2019">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                2019
                            </div>
                            <div class="panel-body" style="padding-left:0px; padding-top:0px;">
                                <div class="ssheet_cont" id="gridobj3">
                        </div>
                            </div>
                        </div>
                        <!--End Advanced Tables -->
                    </div>
                    <!-- END 2019 -->

                    <!-- 2020 -->
                    <div class="col-lg-12" id="2020">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                2020
                            </div>
                            <div class="panel-body" style="padding-left:0px; padding-top:0px;">
                                <div class="ssheet_cont" id="gridobj4">
                        </div>
                            </div>
                        </div>
                        <!--End Advanced Tables -->
                    </div>
                    <!-- END 2020 -->

                    <!-- 2021 -->
                    <div class="col-lg-12" id="2021">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                2021
                            </div>
                            <div class="panel-body" style="padding-left:0px; padding-top:0px;">
                                <div class="ssheet_cont" id="gridobj5">
                        </div>
                            </div>
                        </div>
                        <!--End Advanced Tables -->
                    </div>
                    <!-- END 2021 -->

                </div>
                <!-- END row -->
            </div>
            <!-- END page wrapper -->
        </div>
        <!-- END wrapper -->
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