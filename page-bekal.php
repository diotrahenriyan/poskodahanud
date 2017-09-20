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
            fetch_data();
            $('#tempur1').hide();
            $('#tempur2').hide();
            $('#tempur3').hide();
            $('#tempur5').hide();
            $('#judulview1').show();
            $('#judulview2').hide();
            $('#judulview3').hide();
            $('#judulview5').hide();
            $('#damai1').hide();
            $('#judulviewdamai1').hide();

            // VIEW DATA TEMPUR
            function fetch_data()  
            {
                $.ajax
                ({
                    url:"query.php?page=select_makanan",
                    method:"POST",
                    success:function(data)
                    {
                        $('#viewtempur1').html(data);
                    }
                });
            }

            function fetch_data2()
            {
                $.ajax
                ({  
                    url:"query.php?page=select_alkapsat",
                    method:"POST",
                    success:function(data)
                    {
                        $('#viewtempur2').html(data);
                    }
                });  
            }

            function fetch_data3()  
            {
                $.ajax
                ({
                    url:"query.php?page=select_bmp",
                    method:"POST",
                    success:function(data)
                    {
                        $('#viewtempur3').html(data);
                    }  
                });
            }

            function fetch_data5()
            {
                $.ajax
                ({
                    url:"query.php?page=select_muhandak",
                    method:"POST",
                    success:function(data)
                    {
                        console.log(data);
                        $('#viewtempur5').html(data);
                    }  
                });  
            }
            // END VIEW DATA TEMPUR

            // VIEW DATA DAMAI
            function fetch_data_damai1()
            {
                $.ajax
                ({
                    url:"query.php?page=select_alsatri",
                    method:"POST",
                    success:function(data)
                    {
                        $('#viewdamai1').html(data);
                    }
                });
            }
            // END VIEW DATA DAMAI
              
            // SAVE DATA TEMPUR
            $('#savemakanan').click(function(){
                var nama = $("#nama").val();
                var jmlpersawal = $("#jmlpersawal").val();
                var digunakan = $("#digunakan").val();
                var penambahan = $("#penambahan").val();
                var jmlpersakhir = $("#jmlpersakhir").val();
                var keterangan = $("#keterangan").val();
                var tipe = $("#tipe").val();

                $.ajax({
                    type: "post",
                    url: "query.php?page=save_makanan",
                    data: {
                        nama : nama,
                        jmlpersawal : jmlpersawal,
                        digunakan : digunakan,
                        penambahan : penambahan,
                        jmlpersakhir : jmlpersakhir,
                        keterangan : keterangan,
                        tipe : tipe
                    },
                    success: function (response) {
                        if (response == "Sukses") {    
                            $('#tempur2').hide();
                            $('#tempur3').hide();
                             alert("Data Telah Disimpan");
                            $("#nama").val("");
                            $("#jmlpersawal").val("");
                            $("#digunakan").val("");
                            $("#penambahan").val("");
                            $("#jmlpersakhir").val("");
                            $("#keterangan").val("");
                        }
                    }
                });
            });

            $('#savetempurdua').click(function(){
                var nama = $("#nama2").val();
                var persediaan = $("#persediaan").val();
                var penerimaan = $("#penerimaan").val();
                var pengembalian = $("#pengembalian").val();
                var kondisi = $("#kondisi").val();
                var jumlah = $("#jumlah").val();
                var keterangan = $("#keterangan2").val();
                var tipe = $("#tipe2").val();

                $.ajax({
                    type: "post",
                    url: "query.php?page=save_tempurdua",
                    data: {
                        nama : nama,
                        persediaan : persediaan,
                        penerimaan : penerimaan,
                        pengembalian : pengembalian,
                        kondisi : kondisi,
                        jumlah : jumlah,
                        keterangan : keterangan,
                        tipe : tipe
                    },
                    success: function (response) {
                        if (response == "Sukses") {
                            $('#tempur1').hide();
                            $('#tempur3').hide();
                             alert("Data Telah Disimpan");
                            $("#nama2").val("");
                            $("#persediaan").val("");
                            $("#penerimaan").val("");
                            $("#pengembalian").val("");
                            $("#jumlah").val(" ");
                            $("#keterangan2").val("");
                        }
                    }
                });
            });

            $('#savetempurtiga').click(function(){
                var nama = $("#nama_bmp").val();
                var jmlpersawal = $("#jmlpersawal_bmp").val();
                var digunakan = $("#digunakan_bmp").val();
                var penambahan = $("#penambahan_bmp").val();
                var jmlpersakhir = $("#jmlpersakhir_bmp").val();
                var keterangan = $("#keterangan_bmp").val();
                var tipe = $("#tipe").val();

                $.ajax({
                    type: "post",
                    url: "query.php?page=save_bmp",
                    data: {
                        nama : nama,
                        jmlpersawal : jmlpersawal,
                        digunakan : digunakan,
                        penambahan : penambahan,
                        jmlpersakhir : jmlpersakhir,
                        keterangan : keterangan,
                        tipe : tipe
                    },
                    success: function (response) {
                        if (response == "Sukses") {  
                            alert("Data Telah Disimpan");
                            $("#nama_bmp").val("");
                            $("#jmlpersawal_bmp").val("");
                            $("#digunakan_bmp").val("");
                            $("#penambahan_bmp").val("");
                            $("#jmlpersakhir_bmp").val("");
                            $("#keterangan_bmp").val("");
                        }
                    }
                });
            });

            $('#savemuhandak').click(function(){
                var materil = $("#materil").val();
                var satuan5 = $("#satuan5").val();
                var nyata5 = $("#nyata5").val();
                var keadaan5 = $("#keadaan5").val();
                var ket5 = $("#ket5").val();
                var tipe5 = $("#tipe5").val();
              
                $.ajax({
                    type: "post",
                    url: "query.php?page=save_muhandak",
                    data: {
                        materil : materil,
                        satuan5 : satuan5,
                        nyata5 : nyata5,
                        keadaan5 : keadaan5,
                        ket5 : ket5,
                        tipe5 : tipe5
                    },
                    success: function (response) {
                    console.log(response);
                        if (response == "Sukses") {
                            $('#tempur1').hide();
                            $('#tempur2').hide();
                            $('#tempur3').hide();
                            $('#tempur4').hide()
                            $('#tempur8').hide();
                             alert("Data Telah Disimpan 5");
                            $("#materil").val(" ");
                            $("#satuan5").val(" ");
                            $("#nyata5").val(" ");
                            $("#ket5").val(" ");
                        }
                        if (response == "Gagal") {
                            alert('Gagal');
                        }
                    }
                });
            });
            // END SAVE DATA TEMPUR

            //SAVE DATA DAMAI
            $('#savealsatri').click(function(){
                var jm_alsatri = $("#jm_alsatri").val();
                var nama_alsatri = $("#nama_alsatri").val();
                var merk_alsatri = $("#merk_alsatri").val();
                var sat_alsatri = $("#sat_alsatri").val();
                var top_alsatri = $("#top_alsatri").val();
                var jml_nyata_alsatri = $("#jml_nyata_alsatri").val();
                var kondisi_alsatri = $("#kondisi_alsatri").val();
                var sel_alsatri = $("#sel_alsatri").val();
                var ket_alsatri = $("#ket_alsatri").val();
                var tipe_alsatri = $("#tipe_alsatri").val();

                $.ajax({
                    type: "post",
                    url: "query.php?page=save_alsatri",
                    data: {
                        jm_alsatri : jm_alsatri,
                        nama_alsatri : nama_alsatri,
                        merk_alsatri : merk_alsatri,
                        sat_alsatri : sat_alsatri,
                        top_alsatri : top_alsatri,
                        jml_nyata_alsatri : jml_nyata_alsatri,
                        kondisi_alsatri : kondisi_alsatri,
                        sel_alsatri : sel_alsatri,
                        ket_alsatri : ket_alsatri,
                        tipe_alsatri : tipe_alsatri
                    } ,
                 
                    success: function (response) {
                        console.log(response);
                        if (response == "Sukses") {
                            $('#damai1').show();
                             alert("Data Telah Disimpan");
                        $("#jm_alsatri").val("");
                        $("#nama_alsatri").val("");
                        $("#merk_alsatri").val("");
                        $("#sat_alsatri").val("");
                        $("#top_alsatri").val("");
                        $("#jml_nyata_alsatri").val("");
                        $("#sel_alsatri").val("");
                        $("#ket_alsatri").val("");
                        }                  
                    }
                });
            });
            //END SAVE DATA DAMAI

            // DELETE DATA TEMPUR
            $(document).on('click', '#btn_delete', function(){
                var id=$(this).data("id3");

                if(confirm("Are you sure you want to delete this?"))
                {
                    $.ajax({
                        url:"query.php?page=deletemakanan",
                        method:"POST",
                        data:{id:id},
                        dataType:"text",
                        success:function(data)
                        {
                            alert(data);
                            fetch_data();
                        }
                    });
                }
            });
            
            $(document).on('click', '#btn_delete2', function(){
                var id=$(this).data("id3");

                if(confirm("Are you sure you want to delete this?"))
                { 
                    $.ajax({
                        url:"query.php?page=deletealkapsat",
                        method:"POST",
                        data:{id:id},
                        dataType:"text",
                        success:function(data)
                        {
                            alert(data);
                            fetch_data2();
                        }
                    });
                }
            });

            $(document).on('click', '#btn_delete3', function(){
                var id=$(this).data("id3");

                if(confirm("Are you sure you want to delete this?"))
                {
                    $.ajax({
                        url:"query.php?page=deletebmp",
                        method:"POST",
                        data:{id:id},
                        dataType:"text",
                        success:function(data)
                        {
                            alert(data);
                            fetch_data3();
                        } 
                    });
                }
            });

            $(document).on('click', '#btn_delete5', function(){
                var id=$(this).data("id3");

                if(confirm("Are you sure you want to delete this?"))
                {
                    $.ajax({
                        url:"query.php?page=deletemuhandak",
                        method:"POST",
                        data:{id:id},
                        dataType:"text",
                        success:function(data)
                        {
                            alert(data);
                            fetch_data5();
                        }
                    });
                }
            });
            // END DELETE DATA TEMPUR

            //DELETE DATA DAMAI
            $(document).on('click', '#btn_delete_damai1', function(){  
                var id=$(this).data("id3");

                if(confirm("Are you sure you want to delete this?"))
                {
                    $.ajax({
                        url:"query.php?page=deletealsatri",
                        method:"POST",
                        data:{id:id},
                        dataType:"text",
                        success:function(data)
                        {
                            alert(data);
                            fetch_data_damai1();
                        }  
                    });  
                }  
            });
            //END DELETE DATA DAMAI

            // EDIT DATA TEMPUR
            $(document).on('click', '#btn_edit', function(){
                var id=$(this).data("id4");

                $.ajax({  
                    url:"query.php?page=select_edit_makanan",  
                    method:"POST",  
                    data:{
                        id:id
                    },  
                    dataType:"text",  
                    success:function(data){
                        if (data != "false") {
                            $('#tempur1').show();
                            $('#editmakanan').show();
                            $('#edit_jenis_makanan').show();
                            $('#savemakanan').hide();
                            $('#judulview1').hide();
                            $('#add_jenis_makanan').hide();
                            $('#nama').hide();
                            var makanan = jQuery.parseJSON(data);
                            $('#id_makanan').val(makanan.id);
                            $('#edit_jenis_makanan').val(makanan.jenis);
                            $('#id_nama').val(makanan.nama);
                            $('#jmlpersawal').val(makanan.jmlpersawal);
                            $('#digunakan').val(makanan.digunakan);
                            $('#penambahan').val(makanan.penambahan);
                            $('#jmlpersakhir').val(makanan.jmlpersakhir);
                            $('#keterangan').val(makanan.keterangan);
                        } else {
                            alert ("Gagal");
                        }
                    }  
                });
            });

            $(document).on('click', '#btn_edit2', function(){
                var id=$(this).data("id4");

                $.ajax({  
                    url:"query.php?page=select_edit_alkapsat",  
                    method:"POST",  
                    data:{
                        id:id
                    },  
                    dataType:"text",  
                    success:function(data){
                        if (data != "false") {
                            $('#tempur2').show();
                            $('#edittempurdua').show();
                            $('#savetempurdua').hide();
                            $('#judulview2').hide();
                            $('#edit_jenis_nama2').show();
                            $('#add_jenis_nama2').hide();
                            $('#nama2').hide();
                            var alkapsat = jQuery.parseJSON(data);
                            $('#id_alkapsat').val(alkapsat.id);
                            $('#edit_jenis_nama2').val(alkapsat.jenis);
                            $('#id_nama2').val(alkapsat.nama);
                            $('#persediaan').val(alkapsat.persediaan);
                            $('#penerimaan').val(alkapsat.penerimaan);
                            $('#pengembalian').val(alkapsat.pengembalian);
                            $('#jumlah').val(alkapsat.jumlah);
                            $('#keterangan2').val(alkapsat.keterangan);
                        } else {
                            alert ("Gagal");
                        }
                    }  
                });
            });

            $(document).on('click', '#btn_edit3', function(){
                var id=$(this).data("id4");

                $.ajax({  
                    url:"query.php?page=select_edit_bmp",  
                    method:"POST",  
                    data:{
                        id:id
                    },  
                    dataType:"text", 
                    success:function(data){
                        if (data != "false") {
                            $('#tempur3').show();
                            $('#edittempurtiga').show();
                            $('#savetempurtiga').hide();
                            $('#judulview3').hide();
                            $('#edit_jenis_bmp').show();
                            $('#add_jenis_bmp').hide();
                            $('#nama_bmp').hide();
                            var bmp = jQuery.parseJSON(data);
                            $('#id_bmp').val(bmp.id);
                            $('#edit_jenis_bmp').val(bmp.jenis);
                            $('#id_bmp2').val(bmp.nama);
                            $('#jmlpersawal_bmp').val(bmp.jmlpersawal);
                            $('#digunakan_bmp').val(bmp.digunakan);
                            $('#penambahan_bmp').val(bmp.penambahan);
                            $('#jmlpersakhir_bmp').val(bmp.jmlpersakhir);
                            $('#keterangan_bmp').val(bmp.keterangan);
                        } else {
                            alert ("Gagal");
                        }
                    }  
                });
            });

            $(document).on('click', '#btn_edit5', function(){
                var id=$(this).data("id4");

                $.ajax({  
                    url:"query.php?page=select_edit_muhandak",  
                    method:"POST",  
                    data:{
                        id:id
                    },  
                    dataType:"text",  
                    success:function(data){
                        if (data != "false") {
                            $('#tempur5').show();
                            $('#editmuhandak').show();
                            $('#savemuhandak').hide();
                            $('#judulview5').hide();
                            $('#edit_jenis_muhandak').show();
                            $('#add_jenis_muhandak').hide();
                            $('#materil').hide();
                            var muhandak = jQuery.parseJSON(data);
                            $('#id_muhandak').val(muhandak.id);
                            $('#edit_jenis_muhandak').val(muhandak.jenis);
                            $('#id_muhandak2').val(muhandak.nama);
                            $('#satuan5').val(muhandak.satuan);
                            $('#nyata5').val(muhandak.nyata);
                            $('#ket5').val(muhandak.keterangan);
                        } else {
                            alert ("Gagal");
                        }
                    }  
                });
            });
            // END EDIT DATA TEMPUR

            // EDIT DATA DAMAI
            $(document).on('click', '#btn_edit_damai1', function(){
                var id=$(this).data("id4");

                $.ajax({  
                    url:"query.php?page=select_edit_alsatri",  
                    method:"POST",  
                    data:{
                        id:id
                    },  
                    dataType:"text",  
                    success:function(data){
                        if (data != "false") {
                            $('#damai1').show();
                            $('#editalsatri').show();
                            $('#savealsatri').hide();
                            $('#judulviewdamai1').hide();
                            $('#edit_jenis_alsatri').show();
                            $('#add_jenis_alsatri').hide();
                            $('#jm_alsatri').hide();
                            var alsatri = jQuery.parseJSON(data);
                            $('#id_alsatri').val(alsatri.id_alsatri);
                            $('#edit_jenis_alsatri').val(alsatri.jenis);
                            $('#id_alsatri2').val(alsatri.jm_alsatri);
                            $('#nama_alsatri').val(alsatri.nama);
                            $('#merk_alsatri').val(alsatri.merk);
                            $('#sat_alsatri').val(alsatri.sat);
                            $('#top_alsatri').val(alsatri.dspp);
                            $('#jml_nyata_alsatri').val(alsatri.jml_nyata);
                            $('#sel_alsatri').val(alsatri.selisih);
                            $('#ket_alsatri').val(alsatri.ket);
                        } else {
                            alert ("Gagal");
                        }
                    }  
                });
            });
            // END EDIT DATA DAMAI

            // SAVE EDIT DATA TEMPUR
            $('#editmakanan').click(function(){
                var id= $("#id_makanan").val();
                var nama = $("#nama").val();
                var jmlpersawal = $("#jmlpersawal").val();
                var digunakan = $("#digunakan").val();
                var penambahan = $("#penambahan").val();
                var jmlpersakhir = $("#jmlpersakhir").val();
                var keterangan = $("#keterangan").val();
                var id_nama = $("#id_nama").val();

                $.ajax({
                    type: "post",
                    url: "query.php?page=edit_makanan",
                    data: {
                        id : id,
                        nama : nama,
                        jmlpersawal : jmlpersawal,
                        digunakan : digunakan,
                        penambahan : penambahan,
                        jmlpersakhir : jmlpersakhir,
                        keterangan : keterangan,
                        id_nama : id_nama
                    },
                    success: function (response) {
                        alert(response);

                        $("#id_makanan").val("");
                        $("#nama").val("");
                        $("#jmlpersawal").val("");
                        $("#digunakan").val("");
                        $("#penambahan").val("");
                        $("#jmlpersakhir").val("");
                        $("#keterangan").val("");
                        $("#id_nama").val("");

                        $('#tempur1').hide();
                        fetch_data();
                        $('#judulview1').show();
                    }
                });
            });

            $('#edittempurdua').click(function(){
                var id= $("#id_alkapsat").val();
                var nama = $("#nama2").val();
                var persediaan = $("#persediaan").val();
                var penerimaan = $("#penerimaan").val();
                var pengembalian = $("#pengembalian").val();
                var kondisi = $("#kondisi").val();
                var jumlah = $("#jumlah").val();
                var keterangan = $("#keterangan2").val();
                var id_nama2 = $("#id_nama2").val();

                $.ajax({
                    type: "post",
                    url: "query.php?page=edit_alkapsat",
                    data: {
                        id : id,
                        nama : nama,
                        persediaan : persediaan,
                        penerimaan : penerimaan,
                        pengembalian : pengembalian,
                        kondisi : kondisi,
                        jumlah : jumlah,
                        keterangan : keterangan,
                        id_nama2 : id_nama2
                    },
                    success: function (response) {
                        alert(response);

                        $("#id_alkapsat").val("");
                        $("#nama2").val("");
                        $("#persediaan").val("");
                        $("#penerimaan").val("");
                        $("#pengembalian").val("");
                        $("#jumlah").val("");
                        $("#keterangan2").val("");
                        $("#id_nama2").val();

                        $('#tempur2').hide();
                        fetch_data2();
                        $('#judulview2').show();
                    }
                });
            });     
            
            $('#edittempurtiga').click(function(){
                var id= $("#id_bmp").val();
                var nama = $("#nama_bmp").val();
                var jmlpersawal = $("#jmlpersawal_bmp").val();
                var digunakan = $("#digunakan_bmp").val();
                var penambahan = $("#penambahan_bmp").val();
                var jmlpersakhir = $("#jmlpersakhir_bmp").val();
                var keterangan = $("#keterangan_bmp").val();
                var id_bmp2 = $("#id_bmp2").val();

                $.ajax({
                    type: "post",
                    url: "query.php?page=edit_bmp",
                    data: {
                        id : id,
                        nama : nama,
                        jmlpersawal : jmlpersawal,
                        digunakan : digunakan,
                        penambahan : penambahan,
                        jmlpersakhir : jmlpersakhir,
                        keterangan : keterangan,
                        id_bmp2 : id_bmp2
                    },
                    success: function (response) {
                        alert(response);

                        $("#id_bmp").val("");
                        $("#nama_bmp").val("");
                        $("#jmlpersawal_bmp").val("");
                        $("#digunakan_bmp").val("");
                        $("#penambahan_bmp").val("");
                        $("#jmlpersakhir_bmp").val("");
                        $("#keterangan_bmp").val("");
                        $("#id_bmp2").val("");

                        $('#tempur3').hide();
                        fetch_data3();
                        $('#judulview3').show();
                    }
                });
            });

            $('#editmuhandak').click(function(){
                var id= $("#id_muhandak").val();
                var materil = $("#materil").val();
                var satuan5 = $("#satuan5").val();
                var nyata5 = $("#nyata5").val();
                var keadaan5 = $("#keadaan5").val();
                var ket5 = $("#ket5").val();
                var id_muhandak2 = $("#id_muhandak2").val();

                $.ajax({
                    type: "post",
                    url: "query.php?page=edit_muhandak",
                    data: {
                        id : id,
                        materil : materil,
                        satuan5 : satuan5,
                        nyata5 : nyata5,
                        keadaan5 : keadaan5,
                        ket5 : ket5,
                        id_muhandak2 : id_muhandak2
                    },
                    success: function (response) {
                        alert(response);

                        $("#id_muhandak").val("");
                        $("#materil").val("");
                        $("#satuan5").val("");
                        $("#nyata5").val("");
                        $("#ket5").val("");
                        $("#id_muhandak2").val("");

                        $('#tempur5').hide();
                        fetch_data5();
                        $('#judulview5').show();
                    }
                });
            });
            // END SAVE EDIT DATA TEMPUR

            // SAVE EDIT DATA DAMAI
            $('#editalsatri').click(function(){
                var id= $("#id_alsatri").val();
                var jm_alsatri = $("#jm_alsatri").val();
                var nama_alsatri = $("#nama_alsatri").val();
                var merk_alsatri = $("#merk_alsatri").val();
                var sat_alsatri = $("#sat_alsatri").val();
                var top_alsatri = $("#top_alsatri").val();
                var jml_nyata_alsatri = $("#jml_nyata_alsatri").val();
                var kondisi_alsatri = $("#kondisi_alsatri").val();
                var sel_alsatri = $("#sel_alsatri").val();
                var ket_alsatri = $("#ket_alsatri").val();
                var id_alsatri2 = $("#id_alsatri2").val();

                $.ajax({
                    type: "post",
                    url: "query.php?page=edit_alsatri",
                    data: {
                        id : id,
                        jm_alsatri : jm_alsatri,
                        nama_alsatri : nama_alsatri,
                        merk_alsatri : merk_alsatri,
                        sat_alsatri : sat_alsatri,
                        top_alsatri : top_alsatri,
                        jml_nyata_alsatri : jml_nyata_alsatri,
                        kondisi_alsatri : kondisi_alsatri,
                        sel_alsatri : sel_alsatri,
                        ket_alsatri : ket_alsatri,
                        id_alsatri2 : id_alsatri2
                    },
                    success: function (response) {
                        alert(response);

                        $("#id_alsatri").val("");
                        $("#jm_alsatri").val("");
                        $("#nama_alsatri").val("");
                        $("#merk_alsatri").val("");
                        $("#sat_alsatri").val("");
                        $("#top_alsatri").val("");
                        $("#jml_nyata_alsatri").val("");
                        $("#sel_alsatri").val("");
                        $("#ket_alsatri").val("");
                        $("#id_alsatri2").val("");

                        $('#damai1').hide();
                        fetch_data_damai1();
                        $('#judulviewdamai1').show();
                    }
                });
            });
            // END SAVE EDIT DATA DAMAI

            //ADD JENIS KATEGORI
            $(document).on('click', '#add_kat_makanan', function()
            {
                fetch_kat_makanan();
                $('#edit_jenis_makanan').hide();
                $('#nama').show();
                $('#add_jenis_makanan').show();
                
               var jenis_makanan = $('#add_jenis_makanan').val();
               if(jenis_makanan == '')  
               {  
                    alert("Masukan Makanan");  
                    return false;  
               } 
               $.ajax({  
                    url:"query.php?page=save_jenis_makanan",  
                    method:"POST",  
                    data:{
                        jenis_makanan:jenis_makanan
                    },  
                    dataType:"text",  
                    success:function(data)  
                    {  
                         alert(data);
                         $("#add_jenis_makanan").val("");
                         fetch_kat_makanan();
                    }  
               })  
            });

            $(document).on('click', '#add_kat_nama2', function()
            {
                fetch_kat_nama2();
                $('#edit_jenis_nama2').hide();
                $('#nama2').show();
                $('#add_jenis_nama2').show();
                
               var jenis_nama2 = $('#add_jenis_nama2').val();
               if(jenis_nama2 == '')  
               {  
                    alert("Masukan Kaporsatlap");  
                    return false;  
               } 
               $.ajax({  
                    url:"query.php?page=save_jenis_kaporsatlap",  
                    method:"POST",  
                    data:{
                        jenis_nama2:jenis_nama2
                    },  
                    dataType:"text",  
                    success:function(data)  
                    {  
                         alert(data);
                         $("#add_jenis_nama2").val("");
                         fetch_kat_nama2();
                    }  
               })  
            });

            $(document).on('click', '#add_kat_bmp', function()
            {
                fetch_kat_bmp();
                $('#edit_jenis_bmp').hide();
                $('#nama_bmp').show();
                $('#add_jenis_bmp').show();
                
               var jenis_bmp = $('#add_jenis_bmp').val();
               if(jenis_bmp == '')  
               {  
                    alert("Masukan BMP");  
                    return false;  
               } 
               $.ajax({  
                    url:"query.php?page=save_jenis_bmp",  
                    method:"POST",  
                    data:{
                        jenis_bmp:jenis_bmp
                    },  
                    dataType:"text",  
                    success:function(data)  
                    {  
                         alert(data);
                         $("#add_jenis_bmp").val("");
                         fetch_kat_bmp();
                    }  
               })  
            });

            $(document).on('click', '#add_kat_muhandak', function()
            {
                fetch_kat_muhandak();
                $('#edit_jenis_muhandak').hide();
                $('#materil').show();
                $('#add_jenis_muhandak').show();
                
               var jenis_muhandak = $('#add_jenis_muhandak').val();
               if(jenis_muhandak == '')  
               {  
                    alert("Masukan Muhandak");  
                    return false;  
               } 
               $.ajax({  
                    url:"query.php?page=save_jenis_muhandak",  
                    method:"POST",  
                    data:{
                        jenis_muhandak:jenis_muhandak
                    },  
                    dataType:"text",  
                    success:function(data)  
                    {  
                         alert(data);
                         $("#add_jenis_muhandak").val("");
                         fetch_kat_muhandak();
                    }  
               })  
            });

            $(document).on('click', '#add_kat_alsatri', function()
            {
                fetch_kat_alsatri();
                $('#edit_jenis_alsatri').hide();
                $('#jm_alsatri').show();
                $('#add_jenis_alsatri').show();
                
               var jenis_alsatri = $('#add_jenis_alsatri').val();
               if(jenis_alsatri == '')  
               {  
                    alert("Masukan Alsatri");  
                    return false;  
               } 
               $.ajax({  
                    url:"query.php?page=save_jenis_alsatri",  
                    method:"POST",  
                    data:{
                        jenis_alsatri:jenis_alsatri
                    },  
                    dataType:"text",  
                    success:function(data)  
                    {  
                         alert(data);
                         $("#add_jenis_alsatri").val("");
                         fetch_kat_alsatri();
                    }  
               })  
            });
            //END ADD JENIS KATEGORI

            //FETCH DROPDOWN
            function fetch_kat_makanan()
            {
                $.ajax({
                    url:"query.php?page=select_kat_makanan",
                    method:"POST",
                    success:function(data)
                    {
                        $('#nama').html(data);
                    }  
                });  
            }

            function fetch_kat_nama2()
            {
                $.ajax({
                    url:"query.php?page=select_kat_kaporsatlap",
                    method:"POST",
                    success:function(data)
                    {
                        $('#nama2').html(data);
                    }  
                });  
            }

            function fetch_kat_bmp()
            {
                $.ajax({
                    url:"query.php?page=select_kat_bmp",
                    method:"POST",
                    success:function(data)
                    {
                        $('#nama_bmp').html(data);
                    }  
                });  
            }

            function fetch_kat_muhandak()
            {
                $.ajax({
                    url:"query.php?page=select_kat_muhandak",
                    method:"POST",
                    success:function(data)
                    {
                        $('#materil').html(data);
                    }  
                });  
            }

            function fetch_kat_alsatri()
            {
                $.ajax({
                    url:"query.php?page=select_kat_alsatri",
                    method:"POST",
                    success:function(data)
                    {
                        $('#jm_alsatri').html(data);
                    }  
                });  
            }
            //END FETCH DROPDOWN

            // MENU DATA TEMPUR
            $("#mntempur1").click(function()
            {
                fetch_data();
                $('#tempur1').hide();
                $('#tempur2').hide();
                $('#tempur3').hide();
                $('#tempur5').hide();
                $('#judulview1').show();
                $('#judulview2').hide();
                $('#judulview3').hide();
                $('#judulview5').hide();
                $('#damai1').hide();
                $('#judulviewdamai1').hide();
            }); 
            $("#mntempur2").click(function()
            {
                fetch_data2();
                $('#tempur2').hide();
                $('#tempur1').hide();
                $('#tempur3').hide();
                $('#tempur5').hide();
                $('#judulview1').hide();
                $('#judulview2').show();
                $('#judulview3').hide();
                $('#judulview5').hide();
                $('#damai1').hide();
                $('#judulviewdamai1').hide();
            });   

            $("#mntempur3").click(function()
            {
                fetch_data3();
                $('#tempur3').hide();
                $('#tempur1').hide();
                $('#tempur2').hide();
                $('#tempur5').hide();
                $('#judulview1').hide();
                $('#judulview2').hide();
                $('#judulview3').show();
                $('#judulview5').hide();
                $('#damai1').hide();
                $('#judulviewdamai1').hide();
            });
            $("#mntempur5").click(function()
            {
                fetch_data5();
                $('#tempur5').hide();
                $('#tempur1').hide();
                $('#tempur2').hide();
                $('#tempur3').hide();
                $('#judulview1').hide();
                $('#judulview2').hide();
                $('#judulview3').hide();
                $('#judulview5').show();
                $('#damai1').hide();
                $('#judulviewdamai1').hide();
            });
            // END MENU DATA TEMPUR

            // MENU DATA DAMAI
            $("#mndamai1").click(function()
            {
                fetch_data_damai1();
                $('#tempur1').hide();
                $('#tempur2').hide();
                $('#tempur3').hide();
                $('#tempur5').hide();
                $('#judulview1').hide();
                $('#judulview2').hide();
                $('#judulview3').hide();
                $('#judulview5').hide();
                $('#damai1').hide();
                $('#judulviewdamai1').show();
            });
            // END MENU DATA DAMAI

            // TAMBAH DATA TEMPUR
            $("#tambah1").click(function()
            {
                fetch_kat_makanan();
                $('#savemakanan').show();
                $('#editmakanan').hide();
                $('#nama').show();
                $('#add_jenis_makanan').hide();
                $('#edit_jenis_makanan').hide();
                $('#tempur1').show();
                $('#tempur2').hide();
                $('#tempur3').hide();
                $('#tempur5').hide();
                $('#judulview1').hide();
                $('#judulview2').hide();
                $('#judulview3').hide();
                $('#judulview5').hide();
                $('#damai1').hide();
                $('#judulviewdamai1').hide();
            });

            $("#tambah2").click(function()
            {
                fetch_kat_nama2();
                $('#savetempurdua').show();
                $('#edittempurdua').hide();
                $('#add_jenis_nama2').hide();
                $('#edit_jenis_nama2').hide();
                $('#tempur1').hide();
                $('#tempur2').show();
                $('#tempur3').hide();
                $('#tempur5').hide();
                $('#judulview1').hide();
                $('#judulview2').hide();
                $('#judulview3').hide();
                $('#judulview5').hide();
                $('#damai1').hide();
                $('#judulviewdamai1').hide();
            });

            $("#tambah3").click(function()
            {
                fetch_kat_bmp();
                $('#savetempurtiga').show();
                $('#edittempurtiga').hide();
                $('#add_jenis_bmp').hide();
                $('#edit_jenis_bmp').hide();
                $('#tempur1').hide();
                $('#tempur2').hide();
                $('#tempur3').show();
                $('#tempur5').hide();
                $('#judulview1').hide();
                $('#judulview2').hide();
                $('#judulview3').hide();
                $('#judulview5').hide();
                $('#damai1').hide();
                $('#judulviewdamai1').hide();
            });

            $("#tambah5").click(function()
            {
                fetch_kat_muhandak();
                $('#savemuhandak').show();
                $('#editmuhandak').hide();
                $('#add_jenis_muhandak').hide();
                $('#edit_jenis_muhandak').hide();
                $('#tempur1').hide();
                $('#tempur2').hide();
                $('#tempur3').hide();
                $('#tempur5').show();
                $('#judulview1').hide();
                $('#judulview2').hide();
                $('#judulview3').hide();
                $('#judulview5').hide();
                $('#damai1').hide();
                $('#judulviewdamai1').hide();
            });
            // END TAMBAH DATA TEMPUR

            // TAMBAH DATA DAMAI
            $("#tambahdamai1").click(function()
            {
                fetch_kat_alsatri();
                $('#savealsatri').show();
                $('#editalsatri').hide();
                $('#add_jenis_alsatri').hide();
                $('#edit_jenis_alsatri').hide();
                $('#tempur1').hide();
                $('#tempur2').hide();
                $('#tempur3').hide();
                $('#tempur5').hide();
                $('#judulview1').hide();
                $('#judulview2').hide();
                $('#judulview3').hide();
                $('#judulview5').hide();
                $('#damai1').show();
                $('#judulviewdamai1').hide();
            });
            // END TAMBAH DATA DAMAI

            // DAFTAR DATA TEMPUR
            $("#daftar1").click(function()
            {
                fetch_data();
                $('#tempur1').hide();
                $('#tempur2').hide();
                $('#tempur3').hide();
                $('#tempur5').hide();
                $('#judulview1').show();
                $('#judulview2').hide();
                $('#judulview3').hide();
                $('#judulview5').hide();
                $('#damai1').hide();
                $('#judulviewdamai1').hide();

                $("#id_makanan").val("");
                $("#nama").val("");
                $("#jmlpersawal").val("");
                $("#digunakan").val("");
                $("#penambahan").val("");
                $("#jmlpersakhir").val("");
                $("#keterangan").val("");
                $("#id_nama").val("");
            });

            $("#daftar2").click(function()
            {
                fetch_data2();
                $('#tempur1').hide();
                $('#tempur2').hide();
                $('#tempur3').hide();
                $('#tempur5').hide();
                $('#judulview1').hide();
                $('#judulview2').show();
                $('#judulview3').hide();
                $('#judulview5').hide();
                $('#damai1').hide();
                $('#judulviewdamai1').hide();

                $("#id_alkapsat").val("");
                $("#nama2").val("");
                $("#persediaan").val("");
                $("#penerimaan").val("");
                $("#pengembalian").val("");
                $("#jumlah").val("");
                $("#keterangan2").val("");
                $("#id_nama2").val();
            });

            $("#daftar3").click(function()
            {   
                fetch_data3();
                $('#tempur1').hide();
                $('#tempur2').hide();
                $('#tempur3').hide();
                $('#tempur5').hide();
                $('#judulview1').hide();
                $('#judulview2').hide();
                $('#judulview3').show();
                $('#judulview5').hide();
                $('#damai1').hide();
                $('#judulviewdamai1').hide();

                $("#id_bmp").val("");
                $("#nama_bmp").val("");
                $("#jmlpersawal_bmp").val("");
                $("#digunakan_bmp").val("");
                $("#penambahan_bmp").val("");
                $("#jmlpersakhir_bmp").val("");
                $("#keterangan_bmp").val("");
                $("#id_bmp2").val("");
            });

            $("#daftar5").click(function()
            {
                fetch_data5();
                $('#tempur1').hide();
                $('#tempur2').hide();
                $('#tempur3').hide();
                $('#tempur5').hide();
                $('#judulview1').hide();
                $('#judulview2').hide();
                $('#judulview3').hide();
                $('#judulview5').show();
                $('#damai1').hide();
                $('#judulviewdamai1').hide();

                $("#id_muhandak").val("");
                $("#materil").val("");
                $("#satuan5").val("");
                $("#nyata5").val("");
                $("#ket5").val("");
                $("#id_muhandak2").val("");
            });
            // END DAFTAR DATA TEMPUR

            // DAFTAR DATA DAMAI
            $("#daftardamai1").click(function()
            {
                fetch_data_damai1();
                $('#tempur1').hide();
                $('#tempur2').hide();
                $('#tempur3').hide();
                $('#tempur5').hide();
                $('#judulview1').hide();
                $('#judulview2').hide();
                $('#judulview3').hide();
                $('#judulview5').hide();
                $('#damai1').hide();
                $('#judulviewdamai1').show();
                $('#jm_alsatri').show();

                $("#id_alsatri").val("");
                $("#jm_alsatri").val("");
                $("#nama_alsatri").val("");
                $("#merk_alsatri").val("");
                $("#sat_alsatri").val("");
                $("#top_alsatri").val("");
                $("#jml_nyata_alsatri").val("");
                $("#sel_alsatri").val("");
                $("#ket_alsatri").val("");
                $("#id_alsatri2").val("");
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
                        <li class="active open">
                            <a href="#">BEKAL</a>
                            <ul class="nav nav-second-level">
                                <li>
                                  <a href="#"  id="mntempur1">MAKANAN</a>
                                </li>
                                <li>
                                  <a href="#" id="mntempur2">KAPORSATLAP</a>
                                </li>
                                 <li>
                                    <a href="#" id="mntempur3">BMP</a>
                                </li>
                                <li>
                                    <a href="#"  id="mndamai1">ALSATRI/ATK-G</a>
                                </li>
                                 <li>
                                     <a href="#" id="mntempur5">MUHANDAK</a>
                                </li>
                            </ul>
                            <!-- second-level-items -->
                        </li>
                        <li>
                            <a href="page-materiil.php">MATERIIL</a>
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
                        <h1 class="page-header">Bekal</h1>
                    </div>
                </div>
                <!--end page header -->

                <div class="row">

                    <!-- AWAL VIEW TEMPUR -->
                    <div class="col-lg-12" id="judulview1">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Bekal Kelas 1 (Makanan)
                                <button id="tambah1" style="float:right;">Tambah</button>
                            </div>
                            <div class="panel-body" id="viewtempur1">
                            </div>
                        </div>
                        <!--End Advanced Tables -->
                    </div>

                    <div class="col-lg-12" id="judulview2">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Bekal Kelas 2 (Alkapsat/Kaporlap)
                                <button id="tambah2" style="float:right;">Tambah</button>
                            </div>
                            <div class="panel-body" id="viewtempur2">
                            </div>
                        </div>
                        <!--End Advanced Tables -->
                    </div>

                    <div class="col-lg-12" id="judulview3" >
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Bekal Kelas 3 (BMP)
                                <button id="tambah3" style="float:right;">Tambah</button>
                            </div>
                            <div class="panel-body" id="viewtempur3">
                            </div>
                        </div>
                        <!--End Advanced Tables -->
                    </div>

                    <div class="col-lg-12" id="judulview5">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Bekal Kelas 5 (Muhandak)
                                <button id="tambah5" style="float:right;">Tambah</button>
                            </div>
                            <div class="panel-body" id="viewtempur5">
                            </div>
                        </div>
                        <!--End Advanced Tables -->
                    </div>
                    <!-- AKHIR VIEW TEMPUR -->

                    <!-- AWAL VIEW DAMAI-->
                    <div class="col-lg-12" id="judulviewdamai1">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Alsatri
                                <button id="tambahdamai1" style="float:right;">Tambah</button>
                            </div>
                            <div class="panel-body" id="viewdamai1">
                            </div>
                        </div>
                    <!--End Advanced Tables -->
                    </div>
                    <!-- AKHIR VIEW DAMAI-->

                    <!-- AWAL INSERT TEMPUR-->

                    <!-- FORM TEMPUR 1 -->
                    <div class="col-lg-12" id="tempur1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Makanan
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
                                            <input type="hidden" id="tipe" value=<?php echo $usertype; ?> name="tipe">
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" id="id_makanan" name="id_makanan">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama/Jenis</label>
                                            <div class="dropdown">
                                                <input id="edit_jenis_makanan" class="form-control" name="edit_jenis_makanan" disabled>
                                                <br/>
                                                <select class="form-control input-sm" id="nama" name="nama">
                                                    <input type="hidden" id="id_nama" name="id_nama" disabled>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input id="add_jenis_makanan" class="form-control" name="add_jenis_makanan">
                                            <button name="add_kat_makanan" id="add_kat_makanan" class="btn btn-warning btn-circle">+</button>
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah Persediaan Awal</label>
                                            <input id="jmlpersawal" class="form-control" name="jmlpersawal">
                                        </div>
                                        <div class="form-group">
                                            <label>Digunakan</label>
                                            <input id="digunakan" class="form-control" name="digunakan">
                                        </div>
                                        <div class="form-group">
                                            <label>Penambahan</label>
                                            <input id="penambahan" class="form-control" name="penambahan">
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah Persediaan Akhir</label>
                                            <input id="jmlpersakhir" class="form-control" name="jmlpersakhir">
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <input id="keterangan" class="form-control" name="keterangan">
                                        </div>
                                        <button id="savemakanan" class="btn btn-primary">Simpan</button>
                                        <button id="editmakanan" class="btn btn-primary">Edit</button>
                                        <button id="daftar1" class="btn btn-success">Lihat Daftar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END FORM TEMPUR 1 -->

                    <!-- FORM TEMPUR 2 -->
                    <div class="col-lg-12" id="tempur2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kaporsatlap 
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
                                            <input type="hidden" id="tipe2" value=<?php echo $usertype; ?> name="tipe">
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" id="id_alkapsat" name="id_alkapsat">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Kapsat/Kaporlap</label>
                                            <div class="dropdown">
                                                <input id="edit_jenis_nama2" class="form-control" name="edit_jenis_nama2" disabled>
                                                <br/>
                                                <select class="form-control input-sm" id="nama2" name="nama2">
                                                    <input type="hidden" id="id_nama2" name="id_nama2" disabled>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input id="add_jenis_nama2" class="form-control" name="add_jenis_nama2">
                                            <button name="add_kat_nama2" id="add_kat_nama2" class="btn btn-warning btn-circle">+</button>
                                        </div>
                                        <div class="form-group">
                                            <label>Persediaan Lama</label>
                                            <input id="persediaan" class="form-control" name="jml">
                                        </div>
                                        <div class="form-group">
                                            <label>Penerimaan Baru</label>
                                            <input id="penerimaan" class="form-control" name="nyata">
                                        </div>
                                        <div class="form-group">
                                            <label>Pengembalian</label>
                                            <input id="pengembalian" class="form-control" name="nyata">
                                        </div>
                                        <div class="form-group">
                                            <label>Kondisi</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" id="kondisi" name="keadaan" value="Baik">Baik
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" id="kondisi" name="keadaan" value="rusakringan">Rusak Ringan
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" id="kondisi" name="keadaan" value="rusakberat">Rusak Berat
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah</label>
                                            <input id="jumlah" class="form-control" name="ket">
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <input id="keterangan2" class="form-control" name="ket">
                                        </div>
                                        <button id="savetempurdua" class="btn btn-primary">Simpan</button>
                                        <button id="edittempurdua" class="btn btn-primary">Edit</button>
                                        <button id="daftar2" class="btn btn-success">Lihat Daftar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END FORM TEMPUR 2 -->

                    <!-- FORM TEMPUR 3 -->
                    <div class="col-lg-12" id="tempur3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                BMP 
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
                                            <input type="hidden" id="tipe3" value=<?php echo $usertype; ?> name="tipe">
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" id="id_bmp" name="id_bmp">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama BMP</label>
                                            <div class="dropdown">
                                                <input id="edit_jenis_bmp" class="form-control" name="edit_jenis_bmp" disabled>
                                                <br/>
                                                <select class="form-control input-sm" id="nama_bmp" name="nama_bmp">
                                                    <input type="hidden" id="id_bmp2" name="id_bmp2" disabled>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input id="add_jenis_bmp" class="form-control" name="add_jenis_bmp">
                                            <button name="add_kat_bmp" id="add_kat_bmp" class="btn btn-warning btn-circle">+</button>
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah Persediaan Awal</label>
                                            <input id="jmlpersawal_bmp" class="form-control" name="jmlpersawal_bmp">
                                        </div>
                                        <div class="form-group">
                                            <label>Digunakan</label>
                                            <input id="digunakan_bmp" class="form-control" name="digunakan_bmp">
                                        </div>
                                        <div class="form-group">
                                            <label>Penambahan</label>
                                            <input id="penambahan_bmp" class="form-control" name="penambahan_bmp">
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah Persediaan Akhir</label>
                                            <input id="jmlpersakhir_bmp" class="form-control" name="jmlpersakhir_bmp">
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <input id="keterangan_bmp" class="form-control" name="keterangan_bmp">
                                        </div>
                                        <button id="savetempurtiga" class="btn btn-primary">Simpan</button>
                                        <button id="edittempurtiga" class="btn btn-primary">Edit</button>
                                        <button id="daftar3" class="btn btn-success">Lihat Daftar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END FORM TEMPUR 3 -->

                    <!-- FORM TEMPUR 5 -->
                    <div class="col-lg-12" id="tempur5">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Muhandak
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
                                            <input type="hidden" id="tipe5" value=<?php echo $usertype; ?> name="tipe">
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" id="id_muhandak" name="id_muhandak">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Materil</label>
                                            <div class="dropdown">
                                                <input id="edit_jenis_muhandak" class="form-control" name="edit_jenis_muhandak" disabled>
                                                <br/>
                                                <select class="form-control input-sm" id="materil" name="materil">
                                                    <input type="hidden" id="id_muhandak2" name="id_muhandak2" disabled>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input id="add_jenis_muhandak" class="form-control" name="add_jenis_muhandak">
                                            <button name="add_kat_muhandak" id="add_kat_muhandak" class="btn btn-warning btn-circle">+</button>
                                        </div>
                                        <div class="form-group">
                                            <label>Satuan</label>
                                            <input id="satuan5" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Nyata</label>
                                            <input id="nyata5" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Keadaan</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" id="keadaan5" name="keadaan5" value="Baik">Baik
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" id="keadaan5" name="keadaan5" value="Rusak Ringan">Rusak Ringan
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" id="keadaan5" name="keadaan5" value="Rusak Berat">Rusak Berat
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <input id="ket5" class="form-control">
                                        </div>
                                        <button id="savemuhandak" class="btn btn-primary">Simpan</button>
                                        <button id="editmuhandak" class="btn btn-primary">Edit</button>
                                        <button id="daftar5" class="btn btn-success">Lihat Daftar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END FORM TEMPUR 5 -->

                    <!-- AKHIR INSERT TEMPUR-->

                    <!-- AWAL INSERT DAMAI-->

                    <!-- FORM DAMAI 1 -->
                    <div class="col-lg-12" id="damai1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Alsatri/ATK-G
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
                                            <input type="hidden" id="tipe_alsatri" value= <?php echo $usertype; ?> name="tipe_alsatri">
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" id="id_alsatri" name="id_alsatri">
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Materiil</label>
                                            <div class="dropdown">
                                                <input id="edit_jenis_alsatri" class="form-control" name="edit_jenis_alsatri" disabled>
                                                <br/>
                                                <select class="form-control input-sm" id="jm_alsatri" name="jm_alsatri">
                                                    <input type="hidden" id="id_alsatri2" name="id_alsatri2" disabled>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input id="add_jenis_alsatri" class="form-control" name="add_jenis_alsatri">
                                            <button name="add_kat_alsatri" id="add_kat_alsatri" class="btn btn-warning btn-circle">+</button>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input id="nama_alsatri" class="form-control" name="nama_alsatri">
                                        </div>
                                        <div class="form-group">
                                            <label>Merk/Type</label>
                                            <input id="merk_alsatri" class="form-control" name="merk_alsatri">
                                        </div>
                                        <div class="form-group">
                                            <label>Satuan</label>
                                            <input id="sat_alsatri" class="form-control" name="sat_alsatri">
                                        </div>
                                        <div class="form-group">
                                            <label>Top/DSPP</label>
                                            <input id="top_alsatri" class="form-control" name="top_alsatri">
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah Nyata</label>
                                            <input id="jml_nyata_alsatri" class="form-control" name="jml_nyata_alsatri">
                                        </div>
                                        <div class="form-group">
                                            <label>Kondisi</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" id="kondisi_alsatri" name="kondisi_alsatri" value="Baik">Baik
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" id="kondisi_alsatri" name="kondisi_alsatri" value="Rusak Ringan">Rusak Ringan
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" id="kondisi_alsatri" name="kondisi_alsatri" value="Rusak Berat">Rusak Berat
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Selisih</label>
                                            <input id="sel_alsatri" class="form-control" name="sel_alsatri">
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <input id="ket_alsatri" class="form-control" name="ket_alsatri">
                                        </div>
                                        <button id="savealsatri" class="btn btn-primary">Simpan</button>
                                        <button id="editalsatri" class="btn btn-primary">Edit</button>
                                        <button id="daftardamai1" class="btn btn-success">Lihat Daftar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END FORM DAMAI 1 -->

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