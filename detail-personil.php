<?php
    @session_start();
    if (@$_SESSION['admin'] || @$_SESSION['papers'])
    {
         include 'koneksi.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA PERSONIL</title>
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
        $('#dikbanginput').hide();
        $('#add_dikbang').hide();

         function fetch_datapokok()  
          {  
             var id=$('#getnrp').val();
               $.ajax({  
                    url:"query.php?page=select_datapokok",  
                    method:"POST",
                    data:{id:id},  
                    dataType:"text",  
                    success:function(data){  
                         $('#tab_datapokok').html(data); 

                    }  
               });  
          }

        function fetch_pddk()  
          {  
             var nrp=$('#getnrp').val();
               $.ajax({  
                    url:"query.php?page=select_pddk",  
                    method:"POST",
                    data:{nrp:nrp},  
                    dataType:"text",  
                    success:function(data){  
                         $('#tab_pddk').html(data); 

                    }  
               });  
          } 
          function fetch_bahasa()  
          {  
             var nrp=$('#getnrp').val();
               $.ajax({  
                    url:"query.php?page=select_bahasa",  
                    method:"POST",
                    data:{nrp:nrp},  
                    dataType:"text",  
                    success:function(data){  
                         $('#tab_bahasa').html(data); 

                    }  
               });  
          } 

          function fetch_jasa()  
          {  
             var nrp=$('#getnrp').val();
               $.ajax({  
                    url:"query.php?page=select_tandajasa",  
                    method:"POST",
                    data:{nrp:nrp},  
                    dataType:"text",  
                    success:function(data){  
                         $('#tab_tandajasa').html(data); 

                    }  
               });  
          }

          function fetch_operasi()  
          {  
             var nrp=$('#getnrp').val();
               $.ajax({  
                    url:"query.php?page=select_operasi",  
                    method:"POST",
                    data:{nrp:nrp},  
                    dataType:"text",  
                    success:function(data){  
                         $('#tab_operasi').html(data); 

                    }  
               });  
          }

          function fetch_ln()  
          {  
             var nrp=$('#getnrp').val();
               $.ajax({  
                    url:"query.php?page=select_tgs_ln",  
                    method:"POST",
                    data:{nrp:nrp},  
                    dataType:"text",  
                    success:function(data){  
                         $('#tab_ln').html(data); 

                    }  
               });  
          }

          function fetch_pangkat()  
          {  
             var nrp=$('#getnrp').val();
               $.ajax({  
                    url:"query.php?page=select_pangkat",  
                    method:"POST",
                    data:{nrp:nrp},  
                    dataType:"text",  
                    success:function(data){  
                         $('#tab_pangkat').html(data); 

                    }  
               });  
          }

          function fetch_jabatan()  
          {  
             var nrp=$('#getnrp').val();
               $.ajax({  
                    url:"query.php?page=select_jabatan",  
                    method:"POST",
                    data:{nrp:nrp},  
                    dataType:"text",  
                    success:function(data){  
                         $('#tab_jabatan').html(data); 

                    }  
               });  
          }

          function fetch_pres()  
          {  
             var nrp=$('#getnrp').val();
               $.ajax({  
                    url:"query.php?page=select_prestasi",  
                    method:"POST",
                    data:{nrp:nrp},  
                    dataType:"text",  
                    success:function(data){  
                         $('#tab_prestasi').html(data); 

                    }  
               });  
          }
          function fetch_cuti()  
          {  
             var nrp=$('#getnrp').val();
               $.ajax({  
                    url:"query.php?page=select_cuti",  
                    method:"POST",
                    data:{nrp:nrp},  
                    dataType:"text",  
                    success:function(data){  
                         $('#tab_cuti').html(data); 

                    }  
               });  
          }

          function fetch_kes()  
          {  
             var nrp=$('#getnrp').val();
               $.ajax({  
                    url:"query.php?page=select_kes",  
                    method:"POST",
                    data:{nrp:nrp},  
                    dataType:"text",  
                    success:function(data){  
                         $('#tab_kes').html(data); 

                    }  
               });  
          }

          function fetch_pelanggran()  
          {  
             var nrp=$('#getnrp').val();
               $.ajax({  
                    url:"query.php?page=select_pelanggaran",  
                    method:"POST",
                    data:{nrp:nrp},  
                    dataType:"text",  
                    success:function(data){  
                         $('#tab_pelanggaran').html(data); 

                    }  
               });  
          }

          function fetch_obat()  
          {  
             var nrp=$('#getnrp').val();
               $.ajax({  
                    url:"query.php?page=select_obat",  
                    method:"POST",
                    data:{nrp:nrp},  
                    dataType:"text",  
                    success:function(data){  
                         $('#tab_obat').html(data); 

                    }  
               });  
          }

          function fetch_rikes()  
          {  
             var nrp=$('#getnrp').val();
               $.ajax({  
                    url:"query.php?page=select_rikes",  
                    method:"POST",
                    data:{nrp:nrp},  
                    dataType:"text",  
                    success:function(data){  
                         $('#tab_rikes').html(data); 

                    }  
               });  
          }

          function fetch_alkes()  
          {  
             var nrp=$('#getnrp').val();
               $.ajax({  
                    url:"query.php?page=select_alkes",  
                    method:"POST",
                    data:{nrp:nrp},  
                    dataType:"text",  
                    success:function(data){  
                         $('#tab_alkes').html(data); 

                    }  
               });  
          }

          function fetch_jas()  
          {  
             var nrp=$('#getnrp').val();
               $.ajax({  
                    url:"query.php?page=select_jasmani",  
                    method:"POST",
                    data:{nrp:nrp},  
                    dataType:"text",  
                    success:function(data){  
                         $('#tab_jasmani').html(data); 

                    }  
               });  
          }

          function fetch_global()  
          {  
             var nrp=$('#getnrp').val();
               $.ajax({  
                    url:"query.php?page=select_global",  
                    method:"POST",
                    data:{nrp:nrp},  
                    dataType:"text",  
                    success:function(data){  
                         $('#tab_global').html(data); 

                    }  
               });  
          }
          function fetch_ahli()  
          {  
             var nrp=$('#getnrp').val();
               $.ajax({  
                    url:"query.php?page=select_ahli",  
                    method:"POST",
                    data:{nrp:nrp},  
                    dataType:"text",  
                    success:function(data){  
                         $('#tab_ahli').html(data); 

                    }  
               });  
          }

          function fetch_sedang()  
          {  
             var nrp=$('#getnrp').val();
               $.ajax({  
                    url:"query.php?page=select_sedang",  
                    method:"POST",
                    data:{nrp:nrp},  
                    dataType:"text",  
                    success:function(data){  
                         $('#tab_sedang').html(data); 

                    }  
               });  
          }

          function fetch_statuscuti()  
          {  
             var id=$('#getnrp').val();
               $.ajax({  
                    url:"query.php?page=select_statuscuti",  
                    method:"POST",
                    data:{id:id},  
                    dataType:"text",  
                    success:function(data){  
                         $('#statuscuti').html(data); 

                    }  
               });  
          }

          fetch_statuscuti();
          fetch_datapokok(); 
          fetch_pddk();
          fetch_bahasa();
          fetch_jasa();
          fetch_operasi();
          fetch_ln();
          fetch_pangkat();
          fetch_jabatan();
          fetch_pres();
          fetch_cuti();
          fetch_kes();
          fetch_obat();
          fetch_rikes();
          fetch_alkes();
          fetch_jas();
          fetch_global();
          fetch_ahli();
          fetch_sedang();
          fetch_pelanggran();

          $(document).on('click', '#add_pddk', function(){ 
           var nama_pddk = $('#add_nama_pddk').val();  
           var thn_pddk = $('#add_thn_pddk').text(); 
           var nrp=$('#getnrp').val(); 
           if(nama_pddk == '')  
           {  
                alert("Masukan Pendidikan");  
                return false;  
           }  
           if(thn_pddk == '')  
           {  
                alert("Masukan Tahun");  
                return false;  
           }  
           $.ajax({  
                url:"query.php?page=save_pddk_umum",  
                method:"POST",  
                data:{
                    nama_pddk:nama_pddk, 
                    thn_pddk:thn_pddk,
                    nrp:nrp
                },  
                dataType:"text",  
                success:function(data)  
                {  
                     alert(data);  
                     fetch_pddk(); 
                }  
           })  
      });

          $(document).on('click', '#add_pddk_bangum', function(){ 
           var nama_pddk = $('#b_nama_pddk').val();  
           var thn_pddk = $('#b_thn_pddk').text(); 
           var nrp=$('#getnrp').val(); 
           if(nama_pddk == '')  
           {  
                alert("Masukan Pendidikan");  
                return false;  
           }  
           if(thn_pddk == '')  
           {  
                alert("Masukan Tahun");  
                return false;  
           }  
           $.ajax({  
                url:"query.php?page=save_pddk_bangum",  
                method:"POST",  
                data:{
                    nama_pddk:nama_pddk, 
                    thn_pddk:thn_pddk,
                    nrp:nrp
                },  
                dataType:"text",  
                success:function(data)  
                {  
                     alert(data);  
                     fetch_pddk(); 
                }  
           })  
      });

       $(document).on('click', '#add_pddk_bang', function(){ 
           var nama_pddk = $('#bang_nama_pddk').val();  
           var thn_pddk = $('#bang_thn_pddk').text(); 
           var nrp=$('#getnrp').val(); 
           if(nama_pddk == '')  
           {  
                alert("Masukan Pendidikan");  
                return false;  
           }  
           if(thn_pddk == '')  
           {  
                alert("Masukan Tahun");  
                return false;  
           }  
           $.ajax({  
                url:"query.php?page=save_pddk_bangspes",  
                method:"POST",  
                data:{
                    nama_pddk:nama_pddk, 
                    thn_pddk:thn_pddk,
                    nrp:nrp
                },  
                dataType:"text",  
                success:function(data)  
                {  
                     alert(data);  
                     fetch_pddk(); 
                }  
           })  
      });

      function edit_pddk(id, text, column_name)  
      {  
           $.ajax({  
                url:"query.php?page=edit_pddk",  
                method:"POST",  
                data:{id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                     alert(data);  
                }  
           });  
      }

      $(document).on('change', '.nama_pddk', function(){  
           var id = $(this).data("id1");  
           var nama_pddk = $(this).val();  
           edit_pddk(id, nama_pddk, "nama");  
      });

      $(document).on('blur', '.thn_pddk', function(){  
           var id = $(this).data("id2");  
           var thn_pddk = $(this).text();  
           edit_pddk(id, thn_pddk, "tahun");  
      });

        $(document).on('click', '.del_pddk', function(){  
                   var id=$(this).data("id8");  
                  
                   if(confirm("Are you sure you want to delete this?"))  
                   {  
                        $.ajax({  
                             url:"query.php?page=hapus_pddk",  
                             method:"POST",  
                             data:{id:id},  
                             dataType:"text",  
                             success:function(data){  
                                  alert(data);  
                                  fetch_pddk();  
                             }  
                        });  
                   }  
              });


         $(document).on('click', '#add_daerah', function(){ 
           var d_nm_bhs = $('#d_nm_bhs').text();  
           var d_ket_bhs = $('#d_ket_bhs').text(); 
           var nrp=$('#getnrp').val(); 
           if(d_nm_bhs == '')  
           {  
                alert("Masukan Pendidikan");  
                return false;  
           }  
           if(d_ket_bhs == '')  
           {  
                alert("Masukan Tahun");  
                return false;  
           }  
           $.ajax({  
                url:"query.php?page=save_bhs_daerah",  
                method:"POST",  
                data:{
                    d_nm_bhs:d_nm_bhs, 
                    d_ket_bhs:d_ket_bhs,
                    nrp:nrp
                },  
                dataType:"text",  
                success:function(data)  
                {  
                     alert(data);  
                     fetch_bahasa();

                }  
           })  
      });

         $(document).on('click', '#add_asing', function(){ 
           var a_nm_bhs = $('#a_nm_bhs').text();  
           var a_ket_bhs = $('#a_ket_bhs').text(); 
           var nrp=$('#getnrp').val(); 
           if(a_nm_bhs == '')  
           {  
                alert("Masukan Pendidikan");  
                return false;  
           }  
           if(a_ket_bhs == '')  
           {  
                alert("Masukan Tahun");  
                return false;  
           }  
           $.ajax({  
                url:"query.php?page=save_bhs_asing",  
                method:"POST",  
                data:{
                    a_nm_bhs:a_nm_bhs, 
                    a_ket_bhs:a_ket_bhs,
                    nrp:nrp
                },  
                dataType:"text",  
                success:function(data)  
                {  
                     alert(data);  
                     fetch_bahasa();

                }  
           })  
      });

      function edit_bahasa(id, text, column_name)  
      {  
           $.ajax({  
                url:"query.php?page=edit_bahasa",  
                method:"POST",  
                data:{id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                     alert(data);  
                }  
           });  
      }

      $(document).on('blur', '.nm_bahasa', function(){  
           var id = $(this).data("id1");  
           var nm_bahasa = $(this).text();  
           edit_bahasa(id, nm_bahasa, "bahasa");  
      });

      $(document).on('blur', '.ket_bahasa', function(){  
           var id = $(this).data("id2");  
           var ket_bahasa = $(this).text();  
           edit_bahasa(id, ket_bahasa, "keterangan");  
      });

    $(document).on('click', '.del_bhs', function(){  
                   var id=$(this).data("id7");  
                  
                   if(confirm("Are you sure you want to delete this?"))  
                   {  
                        $.ajax({  
                             url:"query.php?page=hapus_bahasa",  
                             method:"POST",  
                             data:{id:id},  
                             dataType:"text",  
                             success:function(data){  
                                  alert(data);  
                                  fetch_bahasa();  
                             }  
                        });  
                   }  
              });

      $(document).on('click', '#add_jasa', function(){ 
           var tanda_jasa = $('#tanda_jasa').text();  
           var nrp=$('#getnrp').val(); 
           if(tanda_jasa == '')  
           {  
                alert("Masukan Tanda Jasa");  
                return false;  
           }  
           
           $.ajax({  
                url:"query.php?page=save_jasa",  
                method:"POST",  
                data:{
                    tanda_jasa:tanda_jasa, 
                    nrp:nrp
                },  
                dataType:"text",  
                success:function(data)  
                {  
                     alert(data);  
                     fetch_jasa(); 
                }  
           })  
      });

      function edit_jasa(id, text, column_name)  
      {  
           $.ajax({  
                url:"query.php?page=edit_jasa",  
                method:"POST",  
                data:{id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                     alert(data);  
                }  
           });  
      }

      $(document).on('blur', '.td_jasa', function(){  
           var id = $(this).data("id1");  
           var td_jasa = $(this).text();  
           edit_jasa(id, td_jasa, "tanda_jasa");  
      });

      $(document).on('click', '.del_jasa', function(){  
                   var id=$(this).data("id6");  
                  
                   if(confirm("Are you sure you want to delete this?"))  
                   {  
                        $.ajax({  
                             url:"query.php?page=hapus_jasa",  
                             method:"POST",  
                             data:{id:id},  
                             dataType:"text",  
                             success:function(data){  
                                  alert(data);  
                                  fetch_jasa();  
                             }  
                        });  
                   }  
              });

      $(document).on('click', '#add_operasi', function(){ 
           var nm_operasi = $('#nm_operasi').text();  
           var thn_operasi = $('#thn_operasi').text(); 
           var nrp=$('#getnrp').val(); 
           if(nm_operasi == '')  
           {  
                alert("Masukan Operasi");  
                return false;  
           }  
           if(thn_operasi == '')  
           {  
                alert("Masukan Tahun");  
                return false;  
           }  
           $.ajax({  
                url:"query.php?page=save_operasi",  
                method:"POST",  
                data:{
                    nm_operasi:nm_operasi, 
                    thn_operasi:thn_operasi,
                    nrp:nrp
                },  
                dataType:"text",  
                success:function(data)  
                {  
                     alert(data);  
                     fetch_operasi();

                }  
           })  
      });

      function edit_operasi(id, text, column_name)  
      {  
           $.ajax({  
                url:"query.php?page=edit_operasi",  
                method:"POST",  
                data:{id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                     alert(data);  
                }  
           });  
      }

      $(document).on('blur', '.nm_operasi', function(){  
           var id = $(this).data("id1");  
           var nm_operasi = $(this).text();  
           edit_operasi(id, nm_operasi, "ops");  
      });

      $(document).on('blur', '.thn_operasi', function(){  
           var id = $(this).data("id2");  
           var thn_operasi = $(this).text();  
           edit_operasi(id, thn_operasi, "tahun");  
      });

       $(document).on('click', '.del_operasi', function(){  
                   var id=$(this).data("id6");  
                  
                   if(confirm("Are you sure you want to delete this?"))  
                   {  
                        $.ajax({  
                             url:"query.php?page=hapus_operasi",  
                             method:"POST",  
                             data:{id:id},  
                             dataType:"text",  
                             success:function(data){  
                                  alert(data);  
                                  fetch_operasi();  
                             }  
                        });  
                   }  
              });

       $(document).on('click', '#add_ln', function(){ 
           var tgs_ln = $('#tgs_ln').text();  
           var thn_ln = $('#thn_ln').text(); 
           var ngr_ln = $('#ngr_ln').text(); 
           var nrp=$('#getnrp').val(); 
           if(tgs_ln == '')  
           {  
                alert("Masukan Tugas");  
                return false;  
           }  
           if(thn_ln == '')  
           {  
                alert("Masukan Tahun");  
                return false;  
           }
           if(ngr_ln == '')  
           {  
                alert("Masukan Negara Tujuan");  
                return false;  
           }  
           $.ajax({  
                url:"query.php?page=save_ln",  
                method:"POST",  
                data:{
                    tgs_ln:tgs_ln,
                    thn_ln:thn_ln, 
                    ngr_ln:ngr_ln,
                    nrp:nrp
                },  
                dataType:"text",  
                success:function(data)  
                {  
                     alert(data);  
                     fetch_ln(); 
                }  
           })  
      });

      function edit_ln(id, text, column_name)  
      {  
           $.ajax({  
                url:"query.php?page=edit_ln",  
                method:"POST",  
                data:{id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                     alert(data);  
                }  
           });  
      }

      $(document).on('blur', '.tgs_ln', function(){  
           var id = $(this).data("id1");  
           var tgs_ln = $(this).text();  
           edit_ln(id,tgs_ln, "tugas");  
      });

      $(document).on('blur', '.thn_ln', function(){  
           var id = $(this).data("id2");  
           var thn_ln = $(this).text();  
           edit_ln(id,thn_ln, "tahun");  
      });
      $(document).on('blur', '.ngr_ln', function(){  
           var id = $(this).data("id3");  
           var ngr_ln = $(this).text();  
           edit_ln(id,ngr_ln, "negara_tujuan");  
      });

       $(document).on('click', '.del_ln', function(){  
          var id=$(this).data("id6");  

          if(confirm("Are you sure you want to delete this?"))  
          {  
              $.ajax({  
                   url:"query.php?page=hapus_ln",  
                   method:"POST",  
                   data:{id:id},  
                   dataType:"text",  
                   success:function(data){  
                        alert(data);  
                        fetch_ln();  
                   }  
              });  
          }  
          });

      $(document).on('click', '#add_pangkat', function(){ 
         var pangkat_pkt = $('#pangkat_pkt').text();  
         var tmt_pkt = $('#tmt_pkt').text(); 
         var skep_pkt = $('#skep_pkt').text(); 
         var nrp=$('#getnrp').val(); 
         if(pangkat_pkt == '')  
         {  
              alert("Masukan Pangkat");  
              return false;  
         }  
         if(tmt_pkt == '')  
         {  
              alert("Masukan TMT Pangkat");  
              return false;  
         }
         if(skep_pkt == '')  
         {  
              alert("Masukan No Skep");  
              return false;  
         }  
         $.ajax({  
              url:"query.php?page=save_pangkat",  
              method:"POST",  
              data:{
                  pangkat_pkt:pangkat_pkt,
                  tmt_pkt:tmt_pkt, 
                  skep_pkt:skep_pkt,
                  nrp:nrp
              },  
              dataType:"text",  
              success:function(data)  
              {  
                   alert(data);  
                   fetch_pangkat(); 
              }  
         })  
      });

      function edit_pangkat(id, text, column_name)  
      {  
           $.ajax({  
                url:"query.php?page=edit_pangkat",  
                method:"POST",  
                data:{id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                     alert(data);  
                }  
           });  
      }

      $(document).on('blur', '.pangkat_pkt', function(){  
           var id = $(this).data("id1");  
           var pangkat_pkt = $(this).text();  
           edit_pangkat(id,pangkat_pkt, "pangkat");  
      });

      $(document).on('blur', '.tmt_pkt', function(){  
           var id = $(this).data("id2");  
           var tmt_pkt = $(this).text();  
           edit_pangkat(id,tmt_pkt, "tmt");  
      });
      $(document).on('blur', '.skep_pkt', function(){  
           var id = $(this).data("id3");  
           var skep_pkt = $(this).text();  
           edit_pangkat(id,skep_pkt, "no_skep");  
      });

      $(document).on('click', '.del_pangkat', function(){  
          var id=$(this).data("id6");  

          if(confirm("Are you sure you want to delete this?"))  
          {  
              $.ajax({  
                   url:"query.php?page=hapus_pangkat",  
                   method:"POST",  
                   data:{id:id},  
                   dataType:"text",  
                   success:function(data){  
                        alert(data);  
                        fetch_pangkat();  
                   }  
              });  
          }  
          });

       $(document).on('click', '#add_jab', function(){ 
         var nama_jab = $('#nama_jab').text();  
         var tmt_jab = $('#tmt_jab').text(); 
         var skep_jab = $('#skep_jab').text(); 
         var nrp=$('#getnrp').val(); 
         if(nama_jab == '')  
         {  
              alert("Masukan Jabatan");  
              return false;  
         }  
         if(tmt_jab == '')  
         {  
              alert("Masukan TMT Jabatan");  
              return false;  
         }
         if(skep_jab == '')  
         {  
              alert("Masukan No Skep");  
              return false;  
         }  
         $.ajax({  
              url:"query.php?page=save_jab",  
              method:"POST",  
              data:{
                  nama_jab:nama_jab,
                  tmt_jab:tmt_jab, 
                  skep_jab:skep_jab,
                  nrp:nrp
              },  
              dataType:"text",  
              success:function(data)  
              {  
                   alert(data);  
                   fetch_jabatan(); 
              }  
         })  
      });

      function edit_jabatan(id, text, column_name)  
      {  
           $.ajax({  
                url:"query.php?page=edit_jab",  
                method:"POST",  
                data:{id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                     alert(data);  
                }  
           });  
      }

      $(document).on('blur', '.nama_jab', function(){  
           var id = $(this).data("id1");  
           var nama_jab = $(this).text();  
           edit_jabatan(id,nama_jab, "jabatan");  
      });

      $(document).on('blur', '.tmt_jab', function(){  
           var id = $(this).data("id2");  
           var tmt_jab = $(this).text();  
           edit_jabatan(id,tmt_jab, "tmt");  
      });
      $(document).on('blur', '.skep_jab', function(){  
           var id = $(this).data("id3");  
           var skep_jab = $(this).text();  
           edit_jabatan(id,skep_jab, "no_skep");  
      });

      $(document).on('click', '.del_jabatan', function(){  
          var id=$(this).data("id6");  

          if(confirm("Are you sure you want to delete this?"))  
          {  
              $.ajax({  
                   url:"query.php?page=hapus_jab",  
                   method:"POST",  
                   data:{id:id},  
                   dataType:"text",  
                   success:function(data){  
                        alert(data);  
                        fetch_jabatan();  
                   }  
              });  
          }  
          });

      // prestasi 
      $(document).on('click', '#add_pres', function(){ 
         var pres = $('#pres').text();  
         var nm_pres = $('#nm_pres').text(); 
         var thn_pres = $('#thn_pres').text(); 
         var tgk_pres = $('#tgk_pres').val(); 
         var nrp=$('#getnrp').val(); 
         if(pres == '')  
         {  
              alert("Masukan Prestasi");  
              return false;  
         }  
         if(nm_pres == '')  
         {  
              alert("Masukan Nama Prestasi");  
              return false;  
         }
         if(thn_pres == '')  
         {  
              alert("Masukan Tahun");  
              return false;  
         }
         if(tgk_pres == '')  
         {  
              alert("Masukan Tingkat");  
              return false;  
         }  
         $.ajax({  
              url:"query.php?page=save_pres",  
              method:"POST",  
              data:{
                  pres:pres,
                  nm_pres:nm_pres, 
                  thn_pres:thn_pres,
                  tgk_pres:tgk_pres,
                  nrp:nrp
              },  
              dataType:"text",  
              success:function(data)  
              {  
                   alert(data);  
                   fetch_pres(); 
              }  
         })  
      });

      function edit_prestasi(id, text, column_name)  
      {  
           $.ajax({  
                url:"query.php?page=edit_pres",  
                method:"POST",  
                data:{id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                     alert(data);  
                }  
           });  
      }

      $(document).on('blur', '.pres', function(){  
           var id = $(this).data("id1");  
           var pres = $(this).text();  
           edit_prestasi(id,pres, "prestasi");  
      });

      $(document).on('blur', '.nm_pres', function(){  
           var id = $(this).data("id2");  
           var nm_pres = $(this).text();  
           edit_prestasi(id,nm_pres, "nama_prestasi");  
      });
      $(document).on('blur', '.thn_pres', function(){  
           var id = $(this).data("id3");  
           var thn_pres = $(this).text();  
           edit_prestasi(id,thn_pres, "tahun");  
      });

      $(document).on('change', '.tgk_pres', function(){  
           var id = $(this).data("id4");  
           var tgk_pres = $(this).val();  
           edit_prestasi(id,tgk_pres, "tingkat");  
      });

       $(document).on('click', '.del_pres', function(){  
          var id=$(this).data("id6");  

          if(confirm("Are you sure you want to delete this?"))  
          {  
              $.ajax({  
                   url:"query.php?page=hapus_pres",  
                   method:"POST",  
                   data:{id:id},  
                   dataType:"text",  
                   success:function(data){  
                        alert(data);  
                        fetch_pres();  
                   }  
              });  
          }  
          });

       // cuti

       $(document).on('click', '#add_cuti', function(){ 
         var lak_cuti = $('#lak_cuti').text();  
         var tujuan_cuti = $('#tujuan_cuti').text(); 
         var tmt_cuti = $('#tmt_cuti').val(); 
         var ket_cuti = $('#ket_cuti').val(); 
         var nrp=$('#getnrp').val(); 
         if(lak_cuti == '')  
         {  
              alert("Masukan Pelaksanaan cuti");  
              return false;  
         }  
         if(tujuan_cuti == '')  
         {  
              alert("Masukan Tujuan");  
              return false;  
         }
       
         $.ajax({  
              url:"query.php?page=save_cuti",  
              method:"POST",  
              data:{
                  lak_cuti:lak_cuti,
                  tujuan_cuti:tujuan_cuti, 
                  tmt_cuti:tmt_cuti,
                  ket_cuti:ket_cuti,
                  nrp:nrp
              },  
              dataType:"text",  
              success:function(data)  
              {  
                   alert(data);  
                   fetch_cuti(); 
              }  
         })  
      });

      function edit_cuti(id, text, column_name)  
      {  
           $.ajax({  
                url:"query.php?page=edit_cuti",  
                method:"POST",  
                data:{id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                     alert(data);  
                }  
           });  
      }

      $(document).on('blur', '.lak_cuti', function(){  
           var id = $(this).data("id1");  
           var lak_cuti = $(this).text();  
           edit_cuti(id,lak_cuti,"lak_cuti");  
      });

      $(document).on('blur', '.tujuan_cuti', function(){  
           var id = $(this).data("id2");  
           var tujuan_cuti = $(this).text();  
           edit_cuti(id,tujuan_cuti,"tujuan");  
      });
      $(document).on('blur', '.tmt_cuti', function(){  
           var id = $(this).data("id3");  
           var tmt_cuti = $(this).text();  
           edit_cuti(id,tmt_cuti,"tmt_cuti");  
      });

      $(document).on('blur', '.ket_cuti', function(){  
           var id = $(this).data("id4");  
           var ket_cuti = $(this).text();  
           edit_cuti(id,ket_cuti,"ket");  
      });

      

      $(document).on('click', '.stat_cuti', function(){  
           var id = $(this).data("id5");  
           var stat_cuti = '0';  
           edit_cuti(id,stat_cuti,"status_cuti"); 
           console.log('sedang cuti');
           location.reload(); 
      });

       $(document).on('click', '.stat_selesai', function(){  
           var id = $(this).data("id6");  
           var stat_selesai = '1';  
           edit_cuti(id,stat_selesai,"status_cuti"); 
           console.log('Sudah selesai');
           location.reload();  
      });

     

      $(document).on('click', '.del_cuti', function(){  
          var id=$(this).data("id6");  

          if(confirm("Are you sure you want to delete this?"))  
          {  
              $.ajax({  
                   url:"query.php?page=hapus_cuti",  
                   method:"POST",  
                   data:{id:id},  
                   dataType:"text",  
                   success:function(data){  
                        alert(data);  
                        fetch_cuti();  
                   }  
              });  
          }  
          });

      // data kesehatan

       $(document).on('click', '#add_kes', function(){ 
         var macam_kes = $('#macam_kes').text();  
         var rwt_kes = $('#rwt_kes').text(); 
         var rs_kes = $('#rs_kes').text(); 
         var almt_kes = $('#almt_kes').text(); 
         var ket_kes = $('#ket_kes').text(); 
         var nrp=$('#getnrp').val(); 
         if(macam_kes == '')  
         {  
              alert("Masukan jenis Penyakit");  
              return false;  
         }  
         if(rwt_kes == '')  
         {  
              alert("Masukan tindakan");  
              return false;  
         }
         if(ket_kes == '')  
         {  
              alert("Masukan Keterangan");  
              return false;  
         }  
         $.ajax({  
              url:"query.php?page=save_kes",  
              method:"POST",  
              data:{
                  macam_kes:macam_kes,
                  rwt_kes:rwt_kes, 
                  rs_kes:rs_kes,
                  almt_kes:almt_kes,
                  ket_kes:ket_kes,
                  nrp:nrp
              },  
              dataType:"text",  
              success:function(data)  
              {  
                   alert(data);  
                   fetch_kes(); 
              }  
         })  
      });
      
      function edit_kes(id, text, column_name)  
      {  
           $.ajax({  
                url:"query.php?page=edit_kes",  
                method:"POST",  
                data:{id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                     alert(data);  
                }  
           });  
      }

      $(document).on('blur', '.macam_kes', function(){  
           var id = $(this).data("id1");  
           var macam_kes = $(this).text();  
           edit_kes(id,macam_kes,"macam_sakit");  
      });

      $(document).on('blur', '.rwt_kes', function(){  
           var id = $(this).data("id2");  
           var rwt_kes = $(this).text();  
           edit_kes(id,rwt_kes,"rawat");  
      });
      $(document).on('blur', '.rs_kes', function(){  
           var id = $(this).data("id3");  
           var rs_kes = $(this).text();  
           edit_kes(id,rs_kes,"rumkit");  
      });

      $(document).on('blur', '.almt_kes', function(){  
           var id = $(this).data("id4");  
           var almt_kes = $(this).text();  
           edit_kes(id,almt_kes,"alamat");  
      });
      $(document).on('blur', '.ket_kes', function(){  
           var id = $(this).data("id5");  
           var ket_kes = $(this).text();  
           edit_kes(id,ket_kes,"ket");  
      });

      $(document).on('click', '.del_kes', function(){  
          var id=$(this).data("id6");  

          if(confirm("Are you sure you want to delete this?"))  
          {  
              $.ajax({  
                   url:"query.php?page=hapus_kes",  
                   method:"POST",  
                   data:{id:id},  
                   dataType:"text",  
                   success:function(data){  
                        alert(data);  
                        fetch_kes();  
                   }  
              });  
          }  
          });
      // data pelanggaran
       $(document).on('click', '#add_pel', function(){ 
         var jenis_pel = $('#jenis_pel').text();  
         var waktu_pel = $('#waktu_pel').val(); 
         var ket_pel = $('#ket_pel').text();
         var nrp=$('#getnrp').val(); 
         if(jenis_pel == '')  
         {  
              alert("Masukan jenis pelanggaran");  
              return false;  
         }  
         if(waktu_pel == '')  
         {  
              alert("Masukan tanggal");  
              return false;  
         }
         if(ket_pel == '')  
         {  
              alert("Masukan Keterangan");  
              return false;  
         }  
         $.ajax({  
              url:"query.php?page=save_pelanggaran",  
              method:"POST",  
              data:{
                  jenis_pel:jenis_pel,
                  waktu_pel:waktu_pel, 
                  ket_pel:ket_pel,
                  nrp:nrp
              },  
              dataType:"text",  
              success:function(data)  
              {  
                   alert(data);  
                   fetch_pelanggran(); 
              }  
         })  
      });

      $(document).on('click', '.del_pel', function(){  
          var id=$(this).data("id4");  

          if(confirm("Are you sure you want to delete this?"))  
          {  
              $.ajax({  
                   url:"query.php?page=hapus_pelanggaran",  
                   method:"POST",  
                   data:{id:id},  
                   dataType:"text",  
                   success:function(data){  
                        alert(data);  
                        fetch_pelanggran();  
                   }  
              });  
          }  
          });

      function edit_pelanggaran(id, text, column_name)  
      {  
           $.ajax({  
                url:"query.php?page=edit_pelanggaran",  
                method:"POST",  
                data:{id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                     alert(data);  
                }  
           });  
      }

      $(document).on('blur', '.jenis_pel', function(){  
           var id = $(this).data("id1");  
           var jenis_pel = $(this).text();  
           edit_pelanggaran(id,jenis_pel,"jenis");  
      });
      $(document).on('blur', '.waktu_pel', function(){  
           var id = $(this).data("id2");  
           var waktu_pel = $(this).text();  
           edit_pelanggaran(id,waktu_pel,"waktu");  
      });
      $(document).on('blur', '.ket_pel', function(){  
           var id = $(this).data("id3");  
           var ket_pel = $(this).text();  
           edit_pelanggaran(id,ket_pel,"ket_pelanggaran");  
      });
      
      //  data obat
       $(document).on('click', '#add_obat', function(){ 
         var nama_obat = $('#nama_obat').text();  
         var kds_obat = $('#kds_obat').text(); 
         var jml_obat = $('#jml_obat').text(); 
         var trm_obat = $('#trm_obat').text(); 
         var klr_obat = $('#klr_obat').text();
         var wkt_obat = $('#wkt_obat').text();
         var ket_obat = $('#ket_obat').text(); 
         var nrp=$('#getnrp').val(); 
         if(nama_obat == '')  
         {  
              alert("Masukan jenis Penyakit");  
              return false;  
         }  
         if(kds_obat == '')  
         {  
              alert("Masukan tindakan");  
              return false;  
         }
         if(jml_obat == '')  
         {  
              alert("Masukan Keterangan");  
              return false;  
         }  
         $.ajax({  
              url:"query.php?page=save_obat",  
              method:"POST",  
              data:{
                  nama_obat:nama_obat,
                  kds_obat:kds_obat, 
                  jml_obat:jml_obat,
                  trm_obat:trm_obat,
                  klr_obat:klr_obat,
                  wkt_obat:wkt_obat,
                  ket_obat:ket_obat,
                  nrp:nrp
              },  
              dataType:"text",  
              success:function(data)  
              {  
                   alert(data);  
                   fetch_obat(); 
              }  
         })  
      });

      function edit_obat(id, text, column_name)  
      {  
           $.ajax({  
                url:"query.php?page=edit_obat",  
                method:"POST",  
                data:{id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                     alert(data);  
                }  
           });  
      }

      $(document).on('blur', '.nama_obat', function(){  
           var id = $(this).data("id1");  
           var nama_obat = $(this).text();  
           edit_obat(id,nama_obat,"nama_obat");  
      });

      $(document).on('blur', '.kds_obat', function(){  
           var id = $(this).data("id2");  
           var kds_obat = $(this).text();  
           edit_obat(id,kds_obat,"kondisi");  
      });
      $(document).on('blur', '.jml_obat', function(){  
           var id = $(this).data("id3");  
           var jml_obat = $(this).text();  
           edit_obat(id,jml_obat,"jumlah");  
      });

      $(document).on('blur', '.trm_obat', function(){  
           var id = $(this).data("id4");  
           var trm_obat = $(this).text();  
           edit_obat(id,trm_obat,"terima");  
      });
      $(document).on('blur', '.klr_obat', function(){  
           var id = $(this).data("id5");  
           var klr_obat = $(this).text();  
           edit_obat(id,klr_obat,"keluar");  
      });
      $(document).on('blur', '.wkt_obat', function(){  
           var id = $(this).data("id6");  
           var wkt_obat = $(this).text();  
           edit_obat(id,wkt_obat,"waktu");  
      });
      $(document).on('blur', '.ket_obat', function(){  
           var id = $(this).data("id7");  
           var ket_obat = $(this).text();  
           edit_obat(id,ket_obat,"ket");  
      });
      $(document).on('click', '.del_obat', function(){  
          var id=$(this).data("id8");  

          if(confirm("Are you sure you want to delete this?"))  
          {  
              $.ajax({  
                   url:"query.php?page=hapus_obat",  
                   method:"POST",  
                   data:{id:id},  
                   dataType:"text",  
                   success:function(data){  
                        alert(data);  
                        fetch_obat();  
                   }  
              });  
          }  
          });

        $(document).on('click', '#add_rikes', function(){ 
         var wkt_rikes = $('#wkt_rikes').text();  
         var tmp_rikes = $('#tmp_rikes').text(); 
         var hasil_rikes = $('#hasil_rikes').text(); 
         var ket_rikes = $('#ket_rikes').text(); 
         var nrp=$('#getnrp').val(); 
         if(wkt_rikes == '')  
         {  
              alert("Masukan Waktu");  
              return false;  
         }  
         if(tmp_rikes == '')  
         {  
              alert("Masukan Tempat");  
              return false;  
         }
         if(hasil_rikes == '')  
         {  
              alert("Masukan Hasil");  
              return false;  
         }
         if(ket_rikes == '')  
         {  
              alert("Masukan Keterangan");  
              return false;  
         }  
         $.ajax({  
              url:"query.php?page=save_rikes",  
              method:"POST",  
              data:{
                  wkt_rikes:wkt_rikes,
                  tmp_rikes:tmp_rikes, 
                  hasil_rikes:hasil_rikes,
                  ket_rikes:ket_rikes,
                  nrp:nrp
              },  
              dataType:"text",  
              success:function(data)  
              {  
                   alert(data);  
                   fetch_rikes(); 
              }  
         })  
      });

    function edit_rikes(id, text, column_name)  
      {  
           $.ajax({  
                url:"query.php?page=edit_rikes",  
                method:"POST",  
                data:{id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                     alert(data);  
                }  
           });  
      }

      $(document).on('blur', '.wkt_rikes', function(){  
           var id = $(this).data("id1");  
           var wkt_rikes = $(this).text();  
           edit_rikes(id,wkt_rikes,"waktu");  
      });

      $(document).on('blur', '.tmp_rikes', function(){  
           var id = $(this).data("id2");  
           var tmp_rikes = $(this).text();  
           edit_rikes(id,tmp_rikes,"tempat");  
      });
      $(document).on('blur', '.hasil_rikes', function(){  
           var id = $(this).data("id3");  
           var hasil_rikes = $(this).text();  
           edit_rikes(id,hasil_rikes,"hasil");  
      });

      $(document).on('blur', '.ket_rikes', function(){  
           var id = $(this).data("id4");  
           var ket_rikes = $(this).text();  
           edit_rikes(id,ket_rikes,"ket");  
      });
      $(document).on('click', '.del_rikes', function(){  
          var id=$(this).data("id8");  

          if(confirm("Are you sure you want to delete this?"))  
          {  
              $.ajax({  
                   url:"query.php?page=hapus_rikes",  
                   method:"POST",  
                   data:{id:id},  
                   dataType:"text",  
                   success:function(data){  
                        alert(data);  
                        fetch_rikes();  
                   }  
              });  
          }  
          });

      // alkes

       $(document).on('click', '#add_alkes', function(){ 
         var nama_alkes = $('#nama_alkes').text();  
         var kds_alkes = $('#kds_alkes').text(); 
         var jml_alkes = $('#jml_alkes').text(); 
         var ket_alkes = $('#ket_alkes').text(); 
         var nrp=$('#getnrp').val(); 
         if(nama_alkes == '')  
         {  
              alert("Masukan nama");  
              return false;  
         }  
         if(kds_alkes == '')  
         {  
              alert("Masukan kondisi");  
              return false;  
         }
         if(jml_alkes == '')  
         {  
              alert("Masukan jumlah");  
              return false;  
         }
         if(ket_alkes == '')  
         {  
              alert("Masukan Keterangan");  
              return false;  
         }  
         $.ajax({  
              url:"query.php?page=save_alkes",  
              method:"POST",  
              data:{
                  nama_alkes:nama_alkes,
                  kds_alkes:kds_alkes, 
                  jml_alkes:jml_alkes,
                  ket_alkes:ket_alkes,
                  nrp:nrp
              },  
              dataType:"text",  
              success:function(data)  
              {  
                   alert(data);  
                   fetch_alkes(); 
              }  
         })  
      });

       function edit_alkes(id, text, column_name)  
      {  
           $.ajax({  
                url:"query.php?page=edit_alkes",  
                method:"POST",  
                data:{id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                     alert(data);  
                }  
           });  
      }

      $(document).on('blur', '.nama_alkes', function(){  
           var id = $(this).data("id1");  
           var nama_alkes = $(this).text();  
           edit_alkes(id,nama_alkes,"nama_alkes");  
      });

      $(document).on('blur', '.kds_alkes', function(){  
           var id = $(this).data("id2");  
           var kds_alkes = $(this).text();  
           edit_alkes(id,kds_alkes,"kondisi");  
      });
      $(document).on('blur', '.jml_alkes', function(){  
           var id = $(this).data("id3");  
           var jml_alkes = $(this).text();  
           edit_alkes(id,jml_alkes,"jumlah");  
      });

      $(document).on('blur', '.ket_alkes', function(){  
           var id = $(this).data("id4");  
           var ket_alkes = $(this).text();  
           edit_alkes(id,ket_alkes,"ket");  
      });

       $(document).on('click', '.del_alkes', function(){  
          var id=$(this).data("id8");  

          if(confirm("Are you sure you want to delete this?"))  
          {  
              $.ajax({  
                   url:"query.php?page=hapus_alkes",  
                   method:"POST",  
                   data:{id:id},  
                   dataType:"text",  
                   success:function(data){  
                        alert(data);  
                        fetch_alkes();  
                   }  
              });  
          }  
          });

         $(document).on('click', '#edit_pokok', function(){
                var id=$(this).data("id2");
                var nama_pokok= $("#nama_pokok").text();
                var pangkat_pokok = $("#pangkat_pokok").text();
                var nrp_pokok = $("#nrp_pokok").text();
                var jab_pokok = $("#jab_pokok").text();
                var tmtjab_pokok = $("#tmtjab_pokok").text();
                var tgl_pokok = $("#tgl_pokok").text();
                var tmp_pokok = $("#tmp_pokok").text();
                var ktg_pokok = $("#ktg_pokok").text();
                var tmtkat_pokok = $("#tmtkat_pokok").text();
                var sumber_pokok = $("#sumber_pokok").text();
                var gol_pokok = $("#gol_pokok").text();
                var tmttni_pokok = $("#tmttni_pokok").text();
                var suku_pokok = $("#suku_pokok").text();
                var agama_pokok = $("#agama_pokok").text();
                var kual_pokok = $("#kual_pokok").text();
                var klas_pokok = $("#klas_pokok").text();
                var status_pokok = $("#status_pokok").text();


                 $.ajax({  
                             url:"query.php?page=editdatapokok",  
                             method:"POST",  
                             data:{
                                id:id, 
                                nama_pokok : nama_pokok,
                                pangkat_pokok : pangkat_pokok,
                                nrp_pokok : nrp_pokok,
                                jab_pokok : jab_pokok,
                                tmtjab_pokok : tmtjab_pokok,
                                tgl_pokok : tgl_pokok,
                                tmp_pokok : tmp_pokok,
                                ktg_pokok : ktg_pokok,
                                tmtkat_pokok : tmtkat_pokok,
                                sumber_pokok : sumber_pokok,
                                gol_pokok : gol_pokok,
                                tmttni_pokok : tmttni_pokok,
                                suku_pokok : suku_pokok,
                                agama_pokok : agama_pokok,
                                kual_pokok : kual_pokok,
                                klas_pokok : klas_pokok,
                                status_pokok : status_pokok
                            },  
                             dataType:"text",  
                             success:function(data){  
                                  alert(data);  
                                  fetch_datapokok();
                             }  
                        });
            });

        $(document).on('click', '#edit_jas', function(){
                var id=$(this).data("id2");
                var umur_jas= $("#umur_jas").text();
                var tb_jas = $("#tb_jas").text();
                var bb_jas = $("#bb_jas").text();
                var klasi_jas = $("#klasi_jas").text();
                var wktlari_jas = $("#wktlari_jas").text();
                var nilailari_jas = $("#nilailari_jas").text();
                var jmlpull_jas = $("#jmlpull_jas").text();
                var nilaipull_jas = $("#nilaipull_jas").text();
                var jmlsit_jas = $("#jmlsit_jas").text();
                var nilaisit_jas = $("#nilaisit_jas").text();
                var jmlpush_jas = $("#jmlpush_jas").text();
                var nilaipush_jas = $("#nilaipush_jas").text();
                var jmlrun_jas = $("#jmlrun_jas").text();
                var nilairun_jas = $("#nilairun_jas").text();
                var ratab_jas = $("#ratab_jas").text();
                var rataplusb_jas = $("#rataplusb_jas").text();
                var wktrng_jas = $("#wktrng_jas").text();
                var nilairng_jas = $("#nilairng_jas").text();
                var ket_jas = $("#ket_jas").val();

                 $.ajax({  
                             url:"query.php?page=editjasmani",  
                             method:"POST",  
                             data:{
                                id:id,
                                umur_jas : umur_jas,
                                tb_jas : tb_jas,
                                bb_jas : bb_jas,
                                klasi_jas : klasi_jas,
                                wktlari_jas : wktlari_jas,
                                nilailari_jas : nilailari_jas,
                                jmlpull_jas : jmlpull_jas,
                                nilaipull_jas : nilaipull_jas,
                                jmlsit_jas : jmlsit_jas,
                                nilaisit_jas : nilaisit_jas,
                                jmlpush_jas : jmlpush_jas,
                                nilaipush_jas : nilaipush_jas,
                                jmlrun_jas : jmlrun_jas,
                                nilairun_jas : nilairun_jas,
                                ratab_jas : ratab_jas,
                                rataplusb_jas : rataplusb_jas,
                                wktrng_jas : wktrng_jas,
                                nilairng_jas : nilairng_jas,
                                ket_jas : ket_jas
                            },  
                             dataType:"text",  
                             success:function(data){  
                                  alert(data);  
                                  fetch_jas();
                             }  
                        });
            });

        $(document).on('click', '#add_jas', function(){ 

          var umur_jas= $(".umur_jas").text();
          var tb_jas = $(".tb_jas").text();
          var bb_jas = $(".bb_jas").text();
          var klasi_jas = $(".klasi_jas").text();
          var wktlari_jas = $(".wktlari_jas").text();
          var nilailari_jas = $(".nilailari_jas").text();
          var jmlpull_jas = $(".jmlpull_jas").text();
          var nilaipull_jas = $(".nilaipull_jas").text();
          var jmlsit_jas = $(".jmlsit_jas").text();
          var nilaisit_jas = $(".nilaisit_jas").text();
          var jmlpush_jas = $(".jmlpush_jas").text();
          var nilaipush_jas = $(".nilaipush_jas").text();
          var jmlrun_jas = $(".jmlrun_jas").text();
          var nilairun_jas = $(".nilairun_jas").text();
          var ratab_jas = $(".ratab_jas").text();
          var rataplusb_jas = $(".rataplusb_jas").text();
          var wktrng_jas = $(".wktrng_jas").text();
          var nilairng_jas = $(".nilairng_jas").text();
          var ket_jas = $(".ket_jas").val();
          var nrp=$('#getnrp').val();  
         $.ajax({  
              url:"query.php?page=save_jas",  
              method:"POST",  
              data:{ 
                  umur_jas : umur_jas,
                  tb_jas : tb_jas,
                  bb_jas : bb_jas,
                  klasi_jas : klasi_jas,
                  wktlari_jas : wktlari_jas,
                  nilailari_jas : nilailari_jas,
                  jmlpull_jas : jmlpull_jas,
                  nilaipull_jas : nilaipull_jas,
                  jmlsit_jas : jmlsit_jas,
                  nilaisit_jas : nilaisit_jas,
                  jmlpush_jas : jmlpush_jas,
                  nilaipush_jas : nilaipush_jas,
                  jmlrun_jas : jmlrun_jas,
                  nilairun_jas : nilairun_jas,
                  ratab_jas : ratab_jas,
                  rataplusb_jas : rataplusb_jas,
                  wktrng_jas : wktrng_jas,
                  nilairng_jas : nilairng_jas,
                  ket_jas : ket_jas,
                  nrp:nrp
              },  
              dataType:"text",  
              success:function(data)  
              {  
                console.log(data);
                   alert(data);  
                   fetch_jas(); 
              }  
         })  
      });

      $(document).on('click', '#add_global', function(){ 
         var pe_global = $('#pe_global').text();  
         var lls_global = $('#lls_global').text(); 
         var sen_global = $('#sen_global').text(); 
         var nrp=$('#getnrp').val(); 
         if(pe_global == '')  
         {  
              alert("Masukan Periode");  
              return false;  
         }  
         if(lls_global == '')  
         {  
              alert("Masukan Hasil");  
              return false;  
         }
         if(sen_global == '')  
         {  
              alert("Masukan Persentase");  
              return false;  
         }  
         $.ajax({  
              url:"query.php?page=save_global",  
              method:"POST",  
              data:{
                  pe_global:pe_global,
                  lls_global:lls_global, 
                  sen_global:sen_global,
                  nrp:nrp
              },  
              dataType:"text",  
              success:function(data)  
              {  
                   alert(data);  
                   fetch_global(); 
              }  
         })  
      });

      function edit_global(id, text, column_name)  
      {  
           $.ajax({  
                url:"query.php?page=edit_global",  
                method:"POST",  
                data:{id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                     alert(data);  
                }  
           });  
      }

      $(document).on('blur', '.pe_global', function(){  
           var id = $(this).data("id1");  
           var pe_global = $(this).text();  
           edit_global(id,pe_global, "periode");  
      });

      $(document).on('blur', '.lls_global', function(){  
           var id = $(this).data("id2");  
           var lls_global = $(this).text();  
           edit_global(id,lls_global, "lulus");  
      });
      $(document).on('blur', '.sen_global', function(){  
           var id = $(this).data("id3");  
           var sen_global = $(this).text();  
           edit_global(id,sen_global, "persen");  
      });

      $(document).on('click', '.del_global', function(){  
          var id=$(this).data("id6");  

          if(confirm("Are you sure you want to delete this?"))  
          {  
              $.ajax({  
                   url:"query.php?page=hapus_global",  
                   method:"POST",  
                   data:{id:id},  
                   dataType:"text",  
                   success:function(data){  
                        alert(data);  
                        fetch_global();  
                   }  
              });  
          }  
          });

      // keahlian
      $(document).on('click', '#add_ahli', function(){ 
         var nm_ahli = $('#nm_ahli').text();   
         var nrp=$('#getnrp').val(); 
         if(nm_ahli == '')  
         {  
              alert("Masukan Keahlian / Spesialisasi");  
              return false;  
         }   
         $.ajax({  
              url:"query.php?page=save_ahli",  
              method:"POST",  
              data:{
                  nm_ahli:nm_ahli,
                  nrp:nrp
              },  
              dataType:"text",  
              success:function(data)  
              {  
                   alert(data);  
                   fetch_ahli(); 
              }  
         })  
      });

      function edit_ahli(id, text, column_name)  
      {  
           $.ajax({  
                url:"query.php?page=edit_ahli",  
                method:"POST",  
                data:{id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                     alert(data);  
                }  
           });  
      }

      $(document).on('blur', '.nm_ahli', function(){  
           var id = $(this).data("id1");  
           var nm_ahli = $(this).text();  
           edit_ahli(id,nm_ahli, "spesialisasi");  
      });

       $(document).on('click', '.del_ahli', function(){  
          var id=$(this).data("id6");  

          if(confirm("Are you sure you want to delete this?"))  
          {  
              $.ajax({  
                   url:"query.php?page=hapus_ahli",  
                   method:"POST",  
                   data:{id:id},  
                   dataType:"text",  
                   success:function(data){  
                        alert(data);  
                        fetch_ahli();  
                   }  
              });  
          }  
          });

       $(document).on('click', '#add_sedang', function(){ 
         var macam_dik = $('#macam_dik').text(); 
         var waktu_dik = $('#waktu_dik').text();   
         var nrp=$('#getnrp').val(); 
         if(macam_dik == '')  
         {  
              alert("Masukan Pendidikan");  
              return false;  
         }   
         $.ajax({  
              url:"query.php?page=save_sedang",  
              method:"POST",  
              data:{
                  macam_dik:macam_dik,
                  waktu_dik:waktu_dik,
                  nrp:nrp
              },  
              dataType:"text",  
              success:function(data)  
              {  
                   alert(data);  
                   fetch_sedang(); 
              }  
         })  
      });

      function edit_sedang(id, text, column_name)  
      {  
           $.ajax({  
                url:"query.php?page=edit_sedang",  
                method:"POST",  
                data:{id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                     alert(data);  
                }  
           });  
      }

      $(document).on('blur', '.macam_dik', function(){  
           var id = $(this).data("id1");  
           var macam_dik = $(this).text();  
           edit_sedang(id,macam_dik, "macam_dik");  
      });
      $(document).on('blur', '.waktu_dik', function(){  
           var id = $(this).data("id2");  
           var waktu_dik = $(this).text();  
           edit_sedang(id,waktu_dik, "waktu_dik");  
      });

       $(document).on('click', '.del_sedang', function(){  
          var id=$(this).data("id6");  

          if(confirm("Are you sure you want to delete this?"))  
          {  
              $.ajax({  
                   url:"query.php?page=hapus_sedang",  
                   method:"POST",  
                   data:{id:id},  
                   dataType:"text",  
                   success:function(data){  
                        alert(data);  
                        fetch_sedang();  
                   }  
              });  
          }  
          });

       function fetch_kat_dikbangspers()
            {
                $.ajax({
                    url:"query.php?page=select_kat_dikbang",
                    method:"POST",
                    success:function(data)
                    {
                     // document.getElementById("dikbang").innerHTML="data";
                      $('#bang_nama_pddk').html(data);
                    }  
                });  
            }

        fetch_kat_dikbangspers();

      $(document).on('click', '#add_dikbang', function()
            {             
                var dikbanginput = $('#dikbanginput').val(); 
              
               $.ajax({  
                    url:"query.php?page=save_dikbanginput",  
                    method:"POST",  
                    data:{
                        dikbanginput:dikbanginput
                    },  
                    dataType:"text",  
                    success:function(data)  
                    {  
                        $('#dikbanginput').val("");
                        // $('#tingkat4').hide();
                        // $('#add_tingkat4').hide();
                        // $('#tambah_kolom1').show();
                         fetch_kat_dikbangspers();
                    }  
               })  
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
        <nav class="navbar-default navbar-static-side"  role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li><div class="user-section"></div></li>
                    <li><a href="page-personil.php">DATA PERSONEL</a></li>
                    <li><a class="page-scroll" href="#mn_datapokok">REKAPITULASI PERSONEL</a></li>
                    <li><a class="page-scroll" href="#mn_jabatan">RIWAYAT JABATAN</a></li>
                    <li><a class="page-scroll" href="#mn_pangkat">RIWATAT PANGKAT</a></li>
                    <li><a class="page-scroll" href="#mn_cuti">CUTI</a></li>
                    <li><a class="page-scroll" href="#mn_prestasi">PRESTASI</a></li>
                    <li><a class="page-scroll" href="#mn_kes">DATA KESEHATAN</a></li>
                    <li><a class="page-scroll" href="#mn_jas">KESEGARAN JASMANI</a></li>
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">
            <div class="row aa">
                 <!-- page header -->
                <div class="col-lg-12 bb" style="padding-top: 45px; padding-bottom: 17px;">
                
                    <?php 
                         $nrp = $_GET['nrp'];
                         // $sql = "SELECT * FROM pers_data_personil INNER JOIN pers_data_cuti ON pers_data_personil.nrp=pers_data_cuti.nrp WHERE pers_data_personil.nrp ='".$nrp."'";
                         $sql = "SELECT * FROM pers_data_personil where nrp ='".$nrp."'";
                         $result = mysql_query($sql)or die(mysql_error());  
                         while($data = mysql_fetch_array($result)){
                            echo "<div style='float:left;'> 
                                    <img src='assets/img/".$data['foto']."' alt='' style='width: 76px;height: 79px;border-radius: 50px;-ms-transform: rotate(90deg);webkit-transform: rotate(90deg);transform: rotate(90deg);' >
                                 </div>

                                 <div class='col-white century' style='border-bottom: 5px solid #ffffff; color: #566573;width: 91.9%; float:left;font-size: 30px; margin-left : 10px'> 
                                        <b>".$data['nama_lengkap']."</b>";

                                        // if ($data['status_cuti'] == 1) {
                                        //     echo "<b style='font-size: 17px;background: red;border-radius: 8px;margin-left: 20px;border: 4px solid red;'>Status : Cuti</b>";
                                        //   }
                            echo " <a href='page-personil.php'><img src='assets/img/kembali.png' alt='' style='width: 110px;height: auto;float:right' ></a>
                                 </div>

                                 <div class='col-white century' style=' color: #566573; width: 91.9%; float:left;font-size: 18px; margin-left : 10px'>".$data['pangkat']." NRP ".$data['nrp'].",<b>".$data['jabatan']."</b> 
                                 
                            ";
                         }
 

                    ?>
                     <b id='statuscuti' style='font-size: 13px;background: red;border-radius: 5px;margin-left: 20px;border: 3px solid red;'></b>
                    </div>
                   
                   
                    <?php
                
                    echo "<input type='hidden' id='getnrp' value='".$nrp."'>";
                    ?>
                </div>

                <!--end page header -->
            </div>
            <div class="row cc">
                 <div class="col-lg-4" id="mn_datapokok">
                     <!--   Basic Table  -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                           <b>DATA POKOK</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive"  id="tab_datapokok">
                                
                            </div>
                        </div>
                    </div>
                      <!-- End  Basic Table  -->
                </div>

                <div class="col-lg-4">
                     <!--   Basic Table  -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <b>RIWAYAT PENDIDIKAN</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive" id="tab_pddk">
                              
                            </div>
                        </div>
                    </div>
                      <!-- End  Basic Table  -->
                </div>
                <div class="col-lg-4">
                     <!--   Basic Table  -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                           <b>KEMAMPUAN BAHASA</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive" id="tab_bahasa">
                                
                            </div>
                        </div>
                    </div>
                      <!-- End  Basic Table  -->
                </div>
                <div class="col-lg-4">
                     <!--   Basic Table  -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <b>RIWAYAT TANDA JASA</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive" id="tab_tandajasa">
                                
                            </div>
                        </div>
                    </div>
                      <!-- End  Basic Table  -->
                </div>

                

            </div>
             <div class="row">
                <div class="col-lg-12" id="mn_pangkat">
                     <!--   Basic Table  -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <b>RIWAYAT KEPANGKATAN</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive" id="tab_pangkat">
                                
                            </div>
                        </div>
                    </div>
                      <!-- End  Basic Table  -->
                </div>

                <div class="col-lg-12" id="mn_jabatan">
                     <!--   Basic Table  -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <b>RIWAYAT JABATAN</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive" id="tab_jabatan">
                                
                            </div>
                        </div>
                    </div>
                      <!-- End  Basic Table  -->
                </div>
                <div class="col-lg-6">
                     <!--   Basic Table  -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <b>RIWAYAT PENUGASAN OPERASI</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive" id="tab_operasi">
                                
                            </div>
                        </div>
                    </div>
                      <!-- End  Basic Table  -->
                </div>

                
                <div class="col-lg-6">
                     <!--   Basic Table  -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <b>RIWAYAT PENUGASAN LUAR NEGRI</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive" id="tab_ln">
                                
                            </div>
                        </div>
                    </div>
                      <!-- End  Basic Table  -->
                </div>

               
             </div>
             <div class="row">
              <div class="col-lg-12" id="mn_prestasi">
                     <!--   Basic Table  -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <b>DATA PRESTASI</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive" id="tab_prestasi">
                                
                            </div>
                        </div>
                    </div>
                      <!-- End  Basic Table  -->
                </div>

               
             </div>
            <div class="row">
                  <div class="col-lg-12" id="mn_cuti">
                     <!--   Basic Table  -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <b>DATA CUTI/IJIN</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive" id="tab_cuti">
                                
                            </div>
                        </div>
                    </div>
                      <!-- End  Basic Table  -->
                </div>
            </div>
             <div class="row">
                <div class="col-lg-6" id="mn_jas">
                     <!--   Basic Table  -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <b>KEMAMPUAN KESEGARAN JASMANI</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive" id="tab_jasmani">
                                
                            </div>
                        </div>
                    </div>
                      <!-- End  Basic Table  -->
                </div>
                <div class="col-lg-6" id="mn_kes">
                     <!--   Basic Table  -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <b>DATA KESEHATAN</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive" id="tab_kes">
                                
                            </div>
                        </div>
                    </div>
                      <!-- End  Basic Table  -->
                </div>
                <div class="col-lg-6" id="mn_pelanggaran">
                     <!--   Basic Table  -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <b>DATA PELANGGARAN</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive" id="tab_pelanggaran">
                                
                            </div>
                        </div>
                    </div>
                      <!-- End  Basic Table  -->
                </div>
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
    <!-- Scrolling Nav JavaScript -->
    <script src="libs/jquery.easing.min.js"></script>
    <script src="libs/scrolling-nav.js"></script>

</body>

</html>

<?php 
    }
    else if (@$_SESSION['dandahanud'] || @$_SESSION['paintel'] || @$_SESSION['paops'] || @$_SESSION['palog'] || @$_SESSION['padin'] || @$_SESSION['bahub'] || @$_SESSION['batitih'] || @$_SESSION['ploter'])
    {
        header("location: page-menu-admin.php");
    }
    else
    {
        header("location: page-login.php");
    } 
?>