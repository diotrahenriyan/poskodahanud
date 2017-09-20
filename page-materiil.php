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
            fetch_data_damai4();
            $('#damai4').hide();
            $('#damai6').hide();
            $('#damai8').hide();
            $('#damai9').hide();
            $('#judulviewdamai4').show();
            $('#judulviewdamai6').hide();
            $('#judulviewdamai8').hide();
            $('#judulviewdamai9').hide();

            // VIEW DATA DAMAI
            function fetch_data_damai4()
            {
                $.ajax
                ({
                    url:"query.php?page=select_optik",
                    method:"POST",
                    success:function(data)
                    {
                        $('#viewdamai4').html(data);
                    }
                });
            }

            function fetch_data_damai6()
            {
                $.ajax
                ({
                    url:"query.php?page=select_kendinas",
                    method:"POST",
                    success:function(data)
                    {
                        $('#viewdamai6').html(data);
                    }
                });
            }

            function fetch_data_damai8()
            {
                $.ajax
                ({
                    url:"query.php?page=select_matsus",
                    method:"POST",
                    success:function(data)
                    {
                        $('#viewdamai8').html(data);
                    }
                });
            }

            function fetch_data_damai9()
            {
                $.ajax
                ({
                    url:"query.php?page=select_teknisi",
                    method:"POST",
                    success:function(data)
                    {
                        $('#viewdamai9').html(data);
                    }
                });
            }
            // END VIEW DATA DAMAI
              
            //SAVE DATA DAMAI
            $('#saveoptik').click(function(){
                var kat_optik = $("#kat_optik").val();
                var nm_optik = $("#nm_optik").val();
                var nama_optik = $("#nama_optik").val();
                var merk_optik = $("#merk_optik").val();
                var sat_optik = $("#sat_optik").val();
                var senja_optik = $("#senja_optik").val();
                var kondisi_optik = $("#kondisi_optik").val();
                var ket_optik = $("#ket_optik").val();
                var tipe_optik = $("#tipe_optik").val();

                $.ajax({
                    type: "post",
                    url: "query.php?page=save_optik",
                    data: {
                        kat_optik : kat_optik,
                        nm_optik : nm_optik,
                        nama_optik : nama_optik,
                        merk_optik : merk_optik,
                        sat_optik : sat_optik,
                        senja_optik : senja_optik,
                        kondisi_optik : kondisi_optik,
                        ket_optik : ket_optik,
                        tipe_optik : tipe_optik
                    } ,
                 
                    success: function (response) {
                        console.log(response);
                        if (response == "Sukses") {
                            $('#damai4').show();
                             alert("Data Telah Disimpan");
                        $("#kat_optik").val("");
                        $("#nm_optik").val("");
                        $("#nama_optik").val("");
                        $("#merk_optik").val("");
                        $("#sat_optik").val("");
                        $("#senja_optik").val("");
                        $("#ket_optik").val("");
                        }                  
                    }
                });
            });

            $('#savekendinas').click(function(){
                var kat_kendinas = $("#kat_kendinas").val();
                var nm_kendinas = $("#nm_kendinas").val();
                var nama_kendinas = $("#nama_kendinas").val();
                var merk_kendinas = $("#merk_kendinas").val();
                var sat_kendinas = $("#sat_kendinas").val();
                var rek_kendinas = $("#rek_kendinas").val();
                var nomesin_kendinas = $("#nomesin_kendinas").val();
                var nochasis_kendinas = $("#nochasis_kendinas").val();
                var kondisi_kendinas = $("#kondisi_kendinas").val();
                var ket_kendinas = $("#ket_kendinas").val();
                var tipe_kendinas = $("#tipe_kendinas").val();

                $.ajax({
                    type: "post",
                    url: "query.php?page=save_kendinas",
                    data: {
                        kat_kendinas : kat_kendinas,
                        nm_kendinas : nm_kendinas,
                        nama_kendinas : nama_kendinas,
                        merk_kendinas : merk_kendinas,
                        sat_kendinas : sat_kendinas,
                        rek_kendinas : rek_kendinas,
                        nomesin_kendinas : nomesin_kendinas,
                        nochasis_kendinas : nochasis_kendinas,
                        kondisi_kendinas : kondisi_kendinas,
                        ket_kendinas : ket_kendinas,
                        tipe_kendinas : tipe_kendinas
                    } ,
                 
                    success: function (response) {
                        console.log(response);
                        if (response == "Sukses") {
                            $('#damai6').show();
                             alert("Data Telah Disimpan");
                        $("#kat_kendinas").val("");
                        $("#nm_kendinas").val("");
                        $("#nama_kendinas").val("");
                        $("#merk_kendinas").val("");
                        $("#sat_kendinas").val("");
                        $("#rek_kendinas").val("");
                        $("#nomesin_kendinas").val("");
                        $("#nochasis_kendinas").val("");
                        $("#ket_kendinas").val("");
                        }                  
                    }
                });
            });

            $('#savematsus').click(function(){
                var jm_matsus = $("#jm_matsus").val();
                var nama_matsus = $("#nama_matsus").val();
                var merk_matsus = $("#merk_matsus").val();
                var sat_matsus = $("#sat_matsus").val();
                var top_matsus = $("#top_matsus").val();
                var jmlnyata_matsus = $("#jmlnyata_matsus").val();
                var kondisi_matsus = $("#kondisi_matsus").val();
                var selisih_matsus = $("#selisih_matsus").val();
                var ket_matsus = $("#ket_matsus").val();
                var tipe_matsus = $("#tipe_matsus").val();

                $.ajax({
                    type: "post",
                    url: "query.php?page=save_matsus",
                    data: {
                        jm_matsus : jm_matsus,
                        nama_matsus : nama_matsus,
                        merk_matsus : merk_matsus,
                        sat_matsus : sat_matsus,
                        top_matsus : top_matsus,
                        jmlnyata_matsus : jmlnyata_matsus,
                        kondisi_matsus : kondisi_matsus,
                        selisih_matsus : selisih_matsus,
                        ket_matsus : ket_matsus,
                        tipe_matsus : tipe_matsus
                    } ,
                 
                    success: function (response) {
                        console.log(response);
                        if (response == "Sukses") {
                            $('#damai8').show();
                             alert("Data Telah Disimpan");
                        $("#jm_matsus").val("");
                        $("#nama_matsus").val("");
                        $("#merk_matsus").val("");
                        $("#sat_matsus").val("");
                        $("#top_matsus").val("");
                        $("#jmlnyata_matsus").val("");
                        $("#selisih_matsus").val("");
                        $("#ket_matsus").val("");
                        }                  
                    }
                });
            });


            $('#saveteknisi').click(function(){
                var kat_teknisi = $("#kat_teknisi").val();
                var nm_teknisi = $("#nm_teknisi").val();
                var nama_teknisi = $("#nama_teknisi").val();
                var jml_teknisi = $("#jml_teknisi").val();
                var sat_teknisi = $("#sat_teknisi").val();
                var nomat_teknisi = $("#nomat_teknisi").val();
                var kondisi_teknisi = $("#kondisi_teknisi").val();
                var ket_teknisi = $("#ket_teknisi").val();
                var tipe_teknisi = $("#tipe_teknisi").val();

                $.ajax({
                    type: "post",
                    url: "query.php?page=save_teknisi",
                    data: {
                        kat_teknisi : kat_teknisi,
                        nm_teknisi : nm_teknisi,
                        nama_teknisi : nama_teknisi,
                        jml_teknisi : jml_teknisi,
                        sat_teknisi : sat_teknisi,
                        nomat_teknisi : nomat_teknisi,
                        kondisi_teknisi : kondisi_teknisi,
                        ket_teknisi : ket_teknisi,
                        tipe_teknisi : tipe_teknisi
                    } ,
                 
                    success: function (response) {
                        console.log(response);
                        if (response == "Sukses") {
                            $('#damai9').show();
                             alert("Data Telah Disimpan");
                        $("#kat_teknisi").val("");
                        $("#nm_teknisi").val("");
                        $("#nama_teknisi").val("");
                        $("#jml_teknisi").val("");
                        $("#sat_teknisi").val("");
                        $("#nomat_teknisi").val("");
                        $("#ket_teknisi").val("");
                        }                  
                    }
                });
            });
            //END SAVE DATA DAMAI

            //DELETE DATA DAMAI
            $(document).on('click', '#btn_delete_damai4', function(){
                var id=$(this).data("id3");

                if(confirm("Are you sure you want to delete this?"))
                {
                    $.ajax({
                        url:"query.php?page=deleteoptik",
                        method:"POST",
                        data:{id:id},
                        dataType:"text",
                        success:function(data)
                        {
                            alert(data);
                            fetch_data_damai4();
                        }
                    });
                }  
            });

            $(document).on('click', '#btn_delete_damai6', function(){
                var id=$(this).data("id3");

                if(confirm("Are you sure you want to delete this?"))
                {
                    $.ajax({
                        url:"query.php?page=deletekendinas",
                        method:"POST",
                        data:{id:id},
                        dataType:"text",
                        success:function(data)
                        {
                            alert(data);
                            fetch_data_damai6();
                        }
                    });
                }  
            });

            $(document).on('click', '#btn_delete_damai8', function(){
                var id=$(this).data("id3");

                if(confirm("Are you sure you want to delete this?"))
                {
                    $.ajax({
                        url:"query.php?page=deletematsus",
                        method:"POST",
                        data:{id:id},
                        dataType:"text",
                        success:function(data)
                        {
                            alert(data);
                            fetch_data_damai8();
                        }
                    });
                }  
            });

            $(document).on('click', '#btn_delete_damai9', function(){
                var id=$(this).data("id3");

                if(confirm("Are you sure you want to delete this?"))
                {
                    $.ajax({
                        url:"query.php?page=deleteteknisi",
                        method:"POST",
                        data:{id:id},
                        dataType:"text",
                        success:function(data)
                        {
                            alert(data);
                            fetch_data_damai9();
                        }
                    });
                }  
            });
            //END DELETE DATA DAMAI

            // EDIT DATA DAMAI
            $(document).on('click', '#btn_edit_damai4', function(){
                var id=$(this).data("id4");

                $.ajax({  
                    url:"query.php?page=select_edit_optik",  
                    method:"POST",  
                    data:{
                        id:id
                    },  
                    dataType:"text",  
                    success:function(data){
                        if (data != "false") {
                            $('#damai4').show();
                            $('#editoptik').show();
                            $('#saveoptik').hide();
                            $('#judulviewdamai4').hide();
                            $('#edit_jenis_optik').show();
                            $('#add_jenis_optik').hide();
                            $('#nm_optik').hide();
                            var optik = jQuery.parseJSON(data);
                            $('#id_optik').val(optik.id_optik);
                            $('#kat_optik').val(optik.kat_optik);
                            $('#edit_jenis_optik').val(optik.jenis);
                            $('#id_optik2').val(optik.nm_optik);
                            $('#nama_optik').val(optik.nama_optik);
                            $('#merk_optik').val(optik.merk);
                            $('#sat_optik').val(optik.satuan);
                            $('#senja_optik').val(optik.senjata_optik);
                            $('#ket_optik').val(optik.ket);
                        } else {
                            alert ("Gagal");
                        }
                    }  
                });
            });

            $(document).on('click', '#btn_edit_damai6', function(){
                var id=$(this).data("id4");

                $.ajax({  
                    url:"query.php?page=select_edit_kendinas",  
                    method:"POST",  
                    data:{
                        id:id
                    },  
                    dataType:"text",  
                    success:function(data){
                        if (data != "false") {
                            $('#damai6').show();
                            $('#editkendinas').show();
                            $('#savekendinas').hide();
                            $('#judulviewdamai6').hide();
                            $('#edit_jenis_kendinas').show();
                            $('#add_jenis_kendinas').hide();
                            $('#nm_kendinas').hide();
                            var kendinas = jQuery.parseJSON(data);
                            $('#id_kendinas').val(kendinas.id_kendinas);
                            $('#kat_kendinas').val(kendinas.kat_kendinas);
                            $('#edit_jenis_kendinas').val(kendinas.jenis);
                            $('#id_kendinas2').val(kendinas.nm_kendinas);
                            $('#nama_kendinas').val(kendinas.nama_kendinas);
                            $('#merk_kendinas').val(kendinas.merk);
                            $('#sat_kendinas').val(kendinas.satuan);
                            $('#rek_kendinas').val(kendinas.no_rek);
                            $('#nomesin_kendinas').val(kendinas.no_mesin);
                            $('#nochasis_kendinas').val(kendinas.no_chasis);
                            $('#ket_kendinas').val(kendinas.ket);
                        } else {
                            alert ("Gagal");
                        }
                    }  
                });
            });

            $(document).on('click', '#btn_edit_damai8', function(){
                var id=$(this).data("id4");

                $.ajax({  
                    url:"query.php?page=select_edit_matsus",  
                    method:"POST",  
                    data:{
                        id:id
                    },  
                    dataType:"text",  
                    success:function(data){
                        if (data != "false") {
                            $('#damai8').show();
                            $('#editmatsus').show();
                            $('#savematsus').hide();
                            $('#judulviewdamai8').hide();
                            $('#edit_jenis_matsus').show();
                            $('#add_jenis_matsus').hide();
                            $('#jm_matsus').hide();
                            var matsus = jQuery.parseJSON(data);
                            $('#id_matsus').val(matsus.id_matsus);
                            $('#edit_jenis_matsus').val(matsus.jenis);
                            $('#id_matsus2').val(matsus.jm_matsus);
                            $('#nama_matsus').val(matsus.nama_matsus);
                            $('#merk_matsus').val(matsus.merk);
                            $('#sat_matsus').val(matsus.satuan);
                            $('#top_matsus').val(matsus.top);
                            $('#jmlnyata_matsus').val(matsus.jml_nyata);
                            $('#selisih_matsus').val(matsus.selisih);
                            $('#ket_matsus').val(matsus.ket);
                        } else {
                            alert ("Gagal");
                        }
                    }  
                });
            });

            $(document).on('click', '#btn_edit_damai9', function(){
                var id=$(this).data("id4");

                $.ajax({  
                    url:"query.php?page=select_edit_teknisi",  
                    method:"POST",  
                    data:{
                        id:id
                    },  
                    dataType:"text",  
                    success:function(data){
                        if (data != "false") {
                            $('#damai9').show();
                            $('#editteknisi').show();
                            $('#saveteknisi').hide();
                            $('#judulviewdamai9').hide();
                            $('#edit_jenis_teknisi').show();
                            $('#add_jenis_teknisi').hide();
                            $('#nm_teknisi').hide();
                            var teknisi = jQuery.parseJSON(data);
                            $('#id_teknisi').val(teknisi.id_teknisi);
                            $('#kat_teknisi').val(teknisi.kat_teknisi);
                            $('#edit_jenis_teknisi').val(teknisi.jenis);
                            $('#id_teknisi2').val(teknisi.nm_teknisi);
                            $('#nama_teknisi').val(teknisi.nama_teknisi);
                            $('#jml_teknisi').val(teknisi.jumlah);
                            $('#sat_teknisi').val(teknisi.satuan);
                            $('#nomat_teknisi').val(teknisi.no_materiil);
                            $('#ket_teknisi').val(teknisi.ket);
                        } else {
                            alert ("Gagal");
                        }
                    }  
                });
            });
            // END EDIT DATA DAMAI

            // SAVE EDIT DATA DAMAI
            $('#editoptik').click(function(){
                var id= $("#id_optik").val();
                var kat_optik = $("#kat_optik").val();
                var nm_optik = $("#nm_optik").val();
                var nama_optik = $("#nama_optik").val();
                var merk_optik = $("#merk_optik").val();
                var sat_optik = $("#sat_optik").val();
                var senja_optik = $("#senja_optik").val();
                var kondisi_optik = $("#kondisi_optik").val();
                var ket_optik = $("#ket_optik").val
                var id_optik2 = $("#id_optik2").val();

                $.ajax({
                    type: "post",
                    url: "query.php?page=edit_optik",
                    data: {
                        id : id,
                        kat_optik : kat_optik,
                        nm_optik : nm_optik,
                        nama_optik : nama_optik,
                        merk_optik : merk_optik,
                        sat_optik : sat_optik,
                        senja_optik : senja_optik,
                        kondisi_optik : kondisi_optik,
                        ket_optik : ket_optik,
                        id_optik2 : id_optik2
                    },
                    success: function (response) {
                        alert(response);

                        $("#id_optik").val("");
                        $("#kat_optik").val("");
                        $("#nm_optik").val("");
                        $("#nama_optik").val("");
                        $("#merk_optik").val("");
                        $("#sat_optik").val("");
                        $("#senja_optik").val("");
                        $("#ket_optik").val("");
                        $("#id_optik2").val("");

                        $('#damai4').hide();
                        fetch_data_damai4();
                        $('#judulviewdamai4').show();
                    }
                });
            });

            $('#editkendinas').click(function(){
                var id= $("#id_kendinas").val();
                var kat_kendinas = $("#kat_kendinas").val();
                var nm_kendinas = $("#nm_kendinas").val();
                var nama_kendinas = $("#nama_kendinas").val();
                var merk_kendinas = $("#merk_kendinas").val();
                var sat_kendinas = $("#sat_kendinas").val();
                var rek_kendinas = $("#rek_kendinas").val();
                var nomesin_kendinas = $("#nomesin_kendinas").val();
                var nochasis_kendinas = $("#nochasis_kendinas").val();
                var kondisi_kendinas = $("#kondisi_kendinas").val();
                var ket_kendinas = $("#ket_kendinas").val();
                var id_kendinas2 = $("#id_kendinas2").val();

                $.ajax({
                    type: "post",
                    url: "query.php?page=edit_kendinas",
                    data: {
                        id : id,
                        kat_kendinas : kat_kendinas,
                        nm_kendinas : nm_kendinas,
                        nama_kendinas : nama_kendinas,
                        merk_kendinas : merk_kendinas,
                        sat_kendinas : sat_kendinas,
                        rek_kendinas : rek_kendinas,
                        nomesin_kendinas : nomesin_kendinas,
                        nochasis_kendinas : nochasis_kendinas,
                        kondisi_kendinas : kondisi_kendinas,
                        ket_kendinas : ket_kendinas,
                        id_kendinas2 : id_kendinas2
                    },
                    success: function (response) {
                        alert(response);

                        $("#id_kendinas").val("");
                        $("#nm_kendinas").val("");
                        $("#nama_kendinas").val("");
                        $("#merk_kendinas").val("");
                        $("#sat_kendinas").val("");
                        $("#rek_kendinas").val("");
                        $("#nomesin_kendinas").val("");
                        $("#nochasis_kendinas").val("");
                        $("#ket_kendinas").val("");
                        $("#id_kendinas2").val("");

                        $('#damai6').hide();
                        fetch_data_damai6();
                        $('#judulviewdamai6').show();
                    }
                });
            });

            $('#editmatsus').click(function(){
                var id= $("#id_matsus").val();
                var jm_matsus = $("#jm_matsus").val();
                var nama_matsus = $("#nama_matsus").val();
                var merk_matsus = $("#merk_matsus").val();
                var sat_matsus = $("#sat_matsus").val();
                var top_matsus = $("#top_matsus").val();
                var jmlnyata_matsus = $("#jmlnyata_matsus").val();
                var kondisi_matsus = $("#kondisi_matsus").val();
                var selisih_matsus = $("#selisih_matsus").val();
                var ket_matsus = $("#ket_matsus").val();
                var id_matsus2 = $("#id_matsus2").val();

                $.ajax({
                    type: "post",
                    url: "query.php?page=edit_matsus",
                    data: {
                        id : id,
                        jm_matsus : jm_matsus,
                        nama_matsus : nama_matsus,
                        merk_matsus : merk_matsus,
                        sat_matsus : sat_matsus,
                        top_matsus : top_matsus,
                        jmlnyata_matsus : jmlnyata_matsus,
                        kondisi_matsus : kondisi_matsus,
                        selisih_matsus : selisih_matsus,
                        ket_matsus : ket_matsus,
                        id_matsus2 : id_matsus2
                    },
                    success: function (response) {
                        alert(response);

                        $("#id_matsus").val("");
                        $("#jm_matsus").val("");
                        $("#nama_matsus").val("");
                        $("#merk_matsus").val("");
                        $("#sat_matsus").val("");
                        $("#top_matsus").val("");
                        $("#jmlnyata_matsus").val("");
                        $("#selisih_matsus").val("");
                        $("#ket_matsus").val("");
                        $("#id_matsus2").val("");

                        $('#damai8').hide();
                        fetch_data_damai8();
                        $('#judulviewdamai8').show();
                    }
                });
            });

            $('#editteknisi').click(function(){
                var id= $("#id_teknisi").val();
                var kat_teknisi = $("#kat_teknisi").val();
                var nm_teknisi = $("#nm_teknisi").val();
                var nama_teknisi = $("#nama_teknisi").val();
                var jml_teknisi = $("#jml_teknisi").val();
                var sat_teknisi = $("#sat_teknisi").val();
                var nomat_teknisi = $("#nomat_teknisi").val();
                var kondisi_teknisi = $("#kondisi_teknisi").val();
                var ket_teknisi = $("#ket_teknisi").val();
                var id_teknisi2 = $("#id_teknisi2").val();

                $.ajax({
                    type: "post",
                    url: "query.php?page=edit_teknisi",
                    data: {
                        id : id,
                        kat_teknisi : kat_teknisi,
                        nm_teknisi : nm_teknisi,
                        nama_teknisi : nama_teknisi,
                        jml_teknisi : jml_teknisi,
                        sat_teknisi : sat_teknisi,
                        nomat_teknisi : nomat_teknisi,
                        kondisi_teknisi : kondisi_teknisi,
                        ket_teknisi : ket_teknisi,
                        id_teknisi2 : id_teknisi2
                    },
                    success: function (response) {
                        alert(response);

                        $("#id_teknisi").val("");
                        $("#kat_teknisi").val("");
                        $("#nm_teknisi").val("");
                        $("#nama_teknisi").val("");
                        $("#jml_teknisi").val("");
                        $("#sat_teknisi").val("");
                        $("#nomat_teknisi").val("");
                        $("#ket_teknisi").val("");
                        $("#id_teknisi2").val("");

                        $('#damai9').hide();
                        fetch_data_damai9();
                        $('#judulviewdamai9').show();
                    }
                });
            });
            // END SAVE EDIT DATA DAMAI

            //ADD JENIS KATEGORI
            $(document).on('click', '#add_kat_optik', function()
            {
                fetch_kat_optik();
                $('#edit_jenis_optik').hide();
                $('#nm_optik').show();
                $('#add_jenis_optik').show();
                
               var jenis_optik = $('#add_jenis_optik').val();
               if(jenis_optik == '')  
               {  
                    alert("Masukan Optik");  
                    return false;  
               } 
               $.ajax({  
                    url:"query.php?page=save_jenis_optik",  
                    method:"POST",  
                    data:{
                        jenis_optik:jenis_optik
                    },  
                    dataType:"text",  
                    success:function(data)  
                    {  
                         alert(data);
                         $("#add_jenis_optik").val("");
                         fetch_kat_optik();
                    }  
               })  
            });

            $(document).on('click', '#add_kat_kendinas', function()
            {
                fetch_kat_kendinas();
                $('#edit_jenis_kendinas').hide();
                $('#nm_kendinas').show();
                $('#add_jenis_kendinas').show();
                
               var jenis_kendinas = $('#add_jenis_kendinas').val();
               if(jenis_kendinas == '')  
               {  
                    alert("Masukan Kendaraan Dinas");  
                    return false;  
               } 
               $.ajax({  
                    url:"query.php?page=save_jenis_kendinas",  
                    method:"POST",  
                    data:{
                        jenis_kendinas:jenis_kendinas
                    },  
                    dataType:"text",  
                    success:function(data)  
                    {  
                         alert(data);
                         $("#add_jenis_kendinas").val("");
                         fetch_kat_kendinas();
                    }  
               })  
            });

            $(document).on('click', '#add_kat_matsus', function()
            {
                fetch_kat_matsus();
                $('#edit_jenis_matsus').hide();
                $('#jm_matsus').show();
                $('#add_jenis_matsus').show();
                
               var jenis_matsus = $('#add_jenis_matsus').val();
               if(jenis_matsus == '')  
               {  
                    alert("Masukan Matsus");  
                    return false;  
               } 
               $.ajax({  
                    url:"query.php?page=save_jenis_matsus",  
                    method:"POST",  
                    data:{
                        jenis_matsus:jenis_matsus
                    },  
                    dataType:"text",  
                    success:function(data)  
                    {  
                         alert(data);
                         $("#add_jenis_matsus").val("");
                         fetch_kat_matsus();
                    }  
               })  
            });

            $(document).on('click', '#add_kat_teknisi', function()
            {
                fetch_kat_teknisi();
                $('#edit_jenis_teknisi').hide();
                $('#nm_teknisi').show();
                $('#add_jenis_teknisi').show();
                
               var jenis_teknisi = $('#add_jenis_teknisi').val();
               if(jenis_teknisi == '')  
               {  
                    alert("Masukan Teknisi");  
                    return false;  
               } 
               $.ajax({  
                    url:"query.php?page=save_jenis_teknisi",  
                    method:"POST",  
                    data:{
                        jenis_teknisi:jenis_teknisi
                    },  
                    dataType:"text",  
                    success:function(data)  
                    {  
                         alert(data);
                         $("#add_jenis_teknisi").val("");
                         fetch_kat_teknisi();
                    }  
               })  
            });
            // END ADD JENIS KATEGORI

            // FETCH DROPDOWN
            function fetch_kat_optik()
            {
                $.ajax({
                    url:"query.php?page=select_kat_optik",
                    method:"POST",
                    success:function(data)
                    {
                        $('#nm_optik').html(data);
                    }  
                });  
            }

            function fetch_kat_kendinas()
            {
                $.ajax({
                    url:"query.php?page=select_kat_kendinas",
                    method:"POST",
                    success:function(data)
                    {
                        $('#nm_kendinas').html(data);
                    }  
                });  
            }

            function fetch_kat_matsus()
            {
                $.ajax({
                    url:"query.php?page=select_kat_matsus",
                    method:"POST",
                    success:function(data)
                    {
                        $('#jm_matsus').html(data);
                    }  
                });  
            }

            function fetch_kat_teknisi()
            {
                $.ajax({
                    url:"query.php?page=select_kat_teknisi",
                    method:"POST",
                    success:function(data)
                    {
                        $('#nm_teknisi').html(data);
                    }  
                });  
            }
            // END FETCH DROPDOWN

            // MENU DATA DAMAI
            $("#mndamai4").click(function()
            {
                fetch_data_damai4();
                $('#damai4').hide();
                $('#damai6').hide();
                $('#damai8').hide();
                $('#damai9').hide();
                $('#judulviewdamai4').show();
                $('#judulviewdamai6').hide();
                $('#judulviewdamai8').hide();
                $('#judulviewdamai9').hide();
            });
            $("#mndamai6").click(function()
            {
                fetch_data_damai6();
                $('#damai6').hide();
                $('#damai4').hide();
                $('#damai8').hide();
                $('#damai9').hide();
                $('#judulviewdamai4').hide();
                $('#judulviewdamai6').show();
                $('#judulviewdamai8').hide();
                $('#judulviewdamai9').hide();
            });
            $("#mndamai8").click(function()
            {
                fetch_data_damai8();
                $('#damai8').hide();
                $('#damai4').hide();
                $('#damai6').hide();
                $('#damai9').hide();
                $('#judulviewdamai4').hide();
                $('#judulviewdamai6').hide();
                $('#judulviewdamai8').show();
                $('#judulviewdamai9').hide();
            });
            $("#mndamai9").click(function()
            {
                fetch_data_damai9();
                $('#damai9').hide();
                $('#damai4').hide();
                $('#damai6').hide();
                $('#damai8').hide();
                $('#judulviewdamai4').hide();
                $('#judulviewdamai6').hide();
                $('#judulviewdamai8').hide();
                $('#judulviewdamai9').show();
            });
            // END MENU DATA DAMAI

            // TAMBAH DATA DAMAI
            $("#tambahdamai4").click(function()
            {
                fetch_kat_optik();
                $('#saveoptik').show();
                $('#editoptik').hide();
                $('#add_jenis_optik').hide();
                $('#edit_jenis_optik').hide();
                $('#damai4').show();
                $('#damai6').hide();
                $('#damai8').hide();
                $('#damai9').hide();
                $('#judulviewdamai4').hide();
                $('#judulviewdamai6').hide();
                $('#judulviewdamai8').hide();
                $('#judulviewdamai9').hide();
            });

            $("#tambahdamai6").click(function()
            {
                fetch_kat_kendinas();
                $('#savekendinas').show();
                $('#editkendinas').hide();
                $('#add_jenis_kendinas').hide();
                $('#edit_jenis_kendinas').hide();
                $('#damai4').hide();
                $('#damai6').show();
                $('#damai8').hide();
                $('#damai9').hide();
                $('#judulviewdamai4').hide();
                $('#judulviewdamai6').hide();
                $('#judulviewdamai8').hide();
                $('#judulviewdamai9').hide();
            });

            $("#tambahdamai8").click(function()
            {
                fetch_kat_matsus();
                $('#savematsus').show();
                $('#editmatsus').hide();
                $('#add_jenis_matsus').hide();
                $('#edit_jenis_matsus').hide();
                $('#damai4').hide();
                $('#damai6').hide();
                $('#damai8').show();
                $('#damai9').hide();
                $('#judulviewdamai4').hide();
                $('#judulviewdamai6').hide();
                $('#judulviewdamai8').hide();
                $('#judulviewdamai9').hide();
            });

            $("#tambahdamai9").click(function()
            {
                fetch_kat_teknisi();
                $('#saveteknisi').show();
                $('#editteknisi').hide();
                $('#add_jenis_teknisi').hide();
                $('#edit_jenis_teknisi').hide();
                $('#damai4').hide();
                $('#damai6').hide();
                $('#damai8').hide();
                $('#damai9').show();
                $('#judulviewdamai4').hide();
                $('#judulviewdamai6').hide();
                $('#judulviewdamai8').hide();
                $('#judulviewdamai9').hide();
            });
            // END TAMBAH DATA DAMAI

            // DAFTAR DATA DAMAI
            $("#daftardamai4").click(function()
            {
                fetch_data_damai4();
                $('#damai4').hide();
                $('#damai6').hide();
                $('#damai8').hide();
                $('#damai9').hide();
                $('#judulviewdamai4').show();
                $('#judulviewdamai6').hide();
                $('#judulviewdamai8').hide();
                $('#judulviewdamai9').hide();
                $('#nm_optik').show();

                $("#id_optik").val("");
                $("#kat_optik").val("");
                $("#nm_optik").val("");
                $("#nama_optik").val("");
                $("#merk_optik").val("");
                $("#sat_optik").val("");
                $("#senja_optik").val("");
                $("#ket_optik").val("");
                $("#id_optik2").val("");
            });

            $("#daftardamai6").click(function()
            {
                fetch_data_damai6();
                $('#damai4').hide();
                $('#damai6').hide();
                $('#damai8').hide();
                $('#damai9').hide();
                $('#judulviewdamai4').hide();
                $('#judulviewdamai6').show();
                $('#judulviewdamai8').hide();
                $('#judulviewdamai9').hide();
                $('#nm_kendinas').show();

                $("#id_kendinas").val("");
                $("#nm_kendinas").val("");
                $("#nama_kendinas").val("");
                $("#merk_kendinas").val("");
                $("#sat_kendinas").val("");
                $("#rek_kendinas").val("");
                $("#nomesin_kendinas").val("");
                $("#nochasis_kendinas").val("");
                $("#ket_kendinas").val("");
                $("#id_kendinas2").val("");
            });

            $("#daftardamai8").click(function()
            {
                fetch_data_damai8();
                $('#damai4').hide();
                $('#damai6').hide();
                $('#damai8').hide();
                $('#damai9').hide();
                $('#judulviewdamai4').hide();
                $('#judulviewdamai6').hide();
                $('#judulviewdamai8').show();
                $('#judulviewdamai9').hide();
                $('#jm_matsus').show();

                $("#id_matsus").val("");
                $("#jm_matsus").val("");
                $("#nama_matsus").val("");
                $("#merk_matsus").val("");
                $("#sat_matsus").val("");
                $("#top_matsus").val("");
                $("#jmlnyata_matsus").val("");
                $("#selisih_matsus").val("");
                $("#ket_matsus").val("");
                $("#id_matsus2").val("");
            });

            $("#daftardamai9").click(function()
            {
                fetch_data_damai9();
                $('#damai4').hide();
                $('#damai6').hide();
                $('#damai8').hide();
                $('#damai9').hide();
                $('#judulviewdamai4').hide();
                $('#judulviewdamai6').hide();
                $('#judulviewdamai8').hide();
                $('#judulviewdamai9').show();
                $('#nm_teknisi').show();

                $("#id_teknisi").val("");
                $("#kat_teknisi").val("");
                $("#nm_teknisi").val("");
                $("#nama_teknisi").val("");
                $("#jml_teknisi").val("");
                $("#sat_teknisi").val("");
                $("#nomat_teknisi").val("");
                $("#ket_teknisi").val("");
                $("#id_teknisi2").val("");
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
                        <li class="active open">
                            <a href="#">MATERIIL</a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"  id="mndamai4">SENJATA & OPTIK</a>
                                </li>
                                <li>
                                    <a href="#"  id="mndamai6">KENDARAAN DINAS</a>
                                </li>
                                <li>
                                    <a href="#"  id="mndamai8">MATSUS</a>
                                </li>
                                <li>
                                    <a href="#"  id="mndamai9">TEKNISI & MEKANIK</a>
                                </li>
                            </ul>
                            <!-- end second-level-items -->
                        </li>
                        <li>
                            <a href="page-alhub.php">ALHUB</a>
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
                        <h1 class="page-header">Materiil</h1>
                    </div>
                </div>
                <!--end page header -->

                <div class="row">
                    <!-- AWAL VIEW DAMAI-->
                    <div class="col-lg-12" id="judulviewdamai4">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Senjata & Optik
                                <button id="tambahdamai4" style="float:right;">Tambah</button>
                            </div>
                            <div class="panel-body" id="viewdamai4">
                            </div>
                        </div>
                        <!--End Advanced Tables -->
                    </div>

                    <div class="col-lg-12" id="judulviewdamai6">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kendaraan Dinas
                                <button id="tambahdamai6" style="float:right;">Tambah</button>
                            </div>
                            <div class="panel-body" id="viewdamai6">
                            </div>
                        </div>
                        <!--End Advanced Tables -->
                    </div>

                    <div class="col-lg-12" id="judulviewdamai8">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Matsus
                                <button id="tambahdamai8" style="float:right;">Tambah</button>
                            </div>
                            <div class="panel-body" id="viewdamai8">
                            </div>
                        </div>
                        <!--End Advanced Tables -->
                    </div>

                    <div class="col-lg-12" id="judulviewdamai9">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Teknisi dan Mekanik (Pusdikarhanud)
                                <button id="tambahdamai9" style="float:right;">Tambah</button>
                            </div>
                            <div class="panel-body" id="viewdamai9">
                            </div>
                        </div>
                        <!--End Advanced Tables -->
                    </div>
                    <!-- AKHIR VIEW DAMAI-->

                    <!-- AWAL INSERT DAMAI-->

                    <!-- FORM DAMAI 1 -->

                    <!-- FORM DAMAI 4 -->
                    <div class="col-lg-12" id="damai4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Senjata dan Optik
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
                                            <input type="hidden" id="tipe_optik" value= <?php echo $usertype; ?> name="tipe_optik">
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" id="id_optik" name="id_optik">
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Kat/Kode</label>
                                            <input id="kat_optik" class="form-control" name="kat_optik">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Materiil</label>
                                            <div class="dropdown">
                                                <input id="edit_jenis_optik" class="form-control" name="edit_jenis_optik" disabled>
                                                <br/>
                                                <select class="form-control input-sm" id="nm_optik" name="nm_optik">
                                                    <input type="hidden" id="id_optik2" name="id_optik2" disabled>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input id="add_jenis_optik" class="form-control" name="add_jenis_optik">
                                            <button name="add_kat_optik" id="add_kat_optik" class="btn btn-warning btn-circle">+</button>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input id="nama_optik" class="form-control" name="nama_optik">
                                        </div>
                                        <div class="form-group">
                                            <label>Merk/Type</label>
                                            <input id="merk_optik" class="form-control" name="merk_optik">
                                        </div>
                                        <div class="form-group">
                                            <label>Satuan</label>
                                            <input id="sat_optik" class="form-control" name="sat_optik">
                                        </div>
                                        <div class="form-group">
                                            <label>No. Senjata</label>
                                            <input id="senja_optik" class="form-control" name="senja_optik">
                                        </div>
                                        <div class="form-group">
                                            <label>Kondisi</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" id="kondisi_optik" name="kondisi_optik" value="Baik">Baik
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" id="kondisi_optik" name="kondisi_optik" value="Rusak Ringan">Rusak Ringan
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" id="kondisi_optik" name="kondisi_optik" value="Rusak Berat">Rusak Berat
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <input id="ket_optik" class="form-control" name="ket_optik">
                                        </div>
                                        <button id="saveoptik" class="btn btn-primary">Simpan</button>
                                        <button id="editoptik" class="btn btn-primary">Edit</button>
                                        <button id="daftardamai4" class="btn btn-success">Lihat Daftar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END FORM DAMAI 4 -->

                    <!-- FORM DAMAI 6 -->
                    <div class="col-lg-12" id="damai6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kendaraan Dinas
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
                                            <input type="hidden" id="tipe_kendinas" value= <?php echo $usertype; ?> name="tipe_kendinas">
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" id="id_kendinas" name="id_kendinas">
                                        </div>
                                        <div class="form-group">
                                            <label>No Kat/Kode</label>
                                            <input id="kat_kendinas" class="form-control" name="kat_kendinas">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Materiil</label>
                                            <div class="dropdown">
                                                <input id="edit_jenis_kendinas" class="form-control" name="edit_jenis_kendinas" disabled>
                                                <br/>
                                                <select class="form-control input-sm" id="nm_kendinas" name="nm_kendinas">
                                                    <input type="hidden" id="id_kendinas2" name="id_kendinas2" disabled>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input id="add_jenis_kendinas" class="form-control" name="add_jenis_kendinas">
                                            <button name="add_kat_kendinas" id="add_kat_kendinas" class="btn btn-warning btn-circle">+</button>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input id="nama_kendinas" class="form-control" name="nama_kendinas">
                                        </div>
                                        <div class="form-group">
                                            <label>Merk/Type</label>
                                            <input id="merk_kendinas" class="form-control" name="merk_kendinas">
                                        </div>
                                        <div class="form-group">
                                            <label>Satuan</label>
                                            <input id="sat_kendinas" class="form-control" name="sat_kendinas">
                                        </div>
                                        <div class="form-group">
                                            <label>No Rek</label>
                                            <input id="rek_kendinas" class="form-control" name="rek_kendinas">
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Mesin</label>
                                            <input id="nomesin_kendinas" class="form-control" name="nomesin_kendinas">
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Chasis</label>
                                            <input id="nochasis_kendinas" class="form-control" name="nochasis_kendinas">
                                        </div>
                                        <div class="form-group">
                                            <label>Kondisi</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" id="kondisi_kendinas" name="kondisi_kendinas" value="Baik">Baik
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" id="kondisi_kendinas" name="kondisi_kendinas" value="Rusak Ringan">Rusak Ringan
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" id="kondisi_kendinas" name="kondisi_kendinas" value="Rusak Berat">Rusak Berat
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <input id="ket_kendinas" class="form-control" name="ket_kendinas">
                                        </div>
                                        <button id="savekendinas" class="btn btn-primary">Simpan</button>
                                        <button id="editkendinas" class="btn btn-primary">Edit</button>
                                        <button id="daftardamai6" class="btn btn-success">Lihat Daftar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END FORM DAMAI 6 -->

                    <!-- FORM DAMAI 8 -->
                    <div class="col-lg-12" id="damai8">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Matsus
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
                                            <input type="hidden" id="tipe_matsus" value= <?php echo $usertype; ?> name="tipe_matsus">
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" id="id_matsus" name="id_matsus">
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Material</label>
                                            <div class="dropdown">
                                                <input id="edit_jenis_matsus" class="form-control" name="edit_jenis_matsus" disabled>
                                                <br/>
                                                <select class="form-control input-sm" id="jm_matsus" name="jm_matsus">
                                                    <input type="hidden" id="id_matsus2" name="id_matsus2" disabled>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input id="add_jenis_matsus" class="form-control" name="add_jenis_matsus">
                                            <button name="add_kat_matsus" id="add_kat_matsus" class="btn btn-warning btn-circle">+</button>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input id="nama_matsus" class="form-control" name="nama_matsus">
                                        </div>
                                        <div class="form-group">
                                            <label>Merk/Type</label>
                                            <input id="merk_matsus" class="form-control" name="merk_matsus">
                                        </div>
                                        <div class="form-group">
                                            <label>Satuan</label>
                                            <input id="sat_matsus" class="form-control" name="sat_matsus">
                                        </div>
                                        <div class="form-group">
                                            <label>TOP/DSPP</label>
                                            <input id="top_matsus" class="form-control" name="top_matsus">
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah Nyata</label>
                                            <input id="jmlnyata_matsus" class="form-control" name="jmlnyata_matsus">
                                        </div>
                                        <div class="form-group">
                                            <label>Kondisi</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" id="kondisi_matsus" name="kondisi_matsus" value="Baik">Baik
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" id="kondisi_matsus" name="kondisi_matsus" value="Rusak Ringan">Rusak Ringan
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" id="kondisi_matsus" name="kondisi_matsus" value="Rusak Berat">Rusak Berat
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Selisih</label>
                                            <input id="selisih_matsus" class="form-control" name="selisih_matsus">
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <input id="ket_matsus" class="form-control" name="ket_matsus">
                                        </div>
                                        <button id="savematsus" class="btn btn-primary">Simpan</button>
                                        <button id="editmatsus" class="btn btn-primary">Edit</button>
                                        <button id="daftardamai8" class="btn btn-success">Lihat Daftar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END FORM DAMAI 8 -->

                    <!-- FORM DAMAI 9 -->
                    <div class="col-lg-12" id="damai9">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Teknisi dan Mekanik (Pusdikarhanud)
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
                                            <input type="hidden" id="tipe_teknisi" value= <?php echo $usertype; ?> name="tipe_teknisi">
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" id="id_teknisi" name="id_teknisi">
                                        </div>
                                        <div class="form-group">
                                            <label>No. Kat/Kode</label>
                                            <input id="kat_teknisi" class="form-control" name="kat_teknisi">
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Material</label>
                                            <div class="dropdown">
                                                <input id="edit_jenis_teknisi" class="form-control" name="edit_jenis_teknisi" disabled>
                                                <br/>
                                                <select class="form-control input-sm" id="nm_teknisi" name="nm_teknisi">
                                                    <input type="hidden" id="id_teknisi2" name="id_teknisi2" disabled>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input id="add_jenis_teknisi" class="form-control" name="add_jenis_teknisi">
                                            <button name="add_kat_teknisi" id="add_kat_teknisi" class="btn btn-warning btn-circle">+</button>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input id="nama_teknisi" class="form-control" name="nama_teknisi">
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah</label>
                                            <input id="jml_teknisi" class="form-control" name="jml_teknisi">
                                        </div>
                                        <div class="form-group">
                                            <label>Satuan</label>
                                            <input id="sat_teknisi" class="form-control" name="sat_teknisi">
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Materiil</label>
                                            <input id="nomat_teknisi" class="form-control" name="nomat_teknisi">
                                        </div>
                                        <div class="form-group">
                                            <label>Kondisi</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" id="kondisi_teknisi" name="kondisi_teknisi" value="Baik">Baik
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" id="kondisi_teknisi" name="kondisi_teknisi" value="Rusak Ringan">Rusak Ringan
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" id="kondisi_teknisi" name="kondisi_teknisi" value="Rusak Berat">Rusak Berat
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <input id="ket_teknisi" class="form-control" name="ket_teknisi">
                                        </div>
                                        <button id="saveteknisi" class="btn btn-primary">Simpan</button>
                                        <button id="editteknisi" class="btn btn-primary">Edit</button>
                                        <button id="daftardamai9" class="btn btn-success">Lihat Daftar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END FORM DAMAI 9 -->
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