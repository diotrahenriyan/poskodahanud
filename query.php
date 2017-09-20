<?php
    @session_start();
?>
<?php
	include 'koneksi.php';
	$page = $_GET['page'];
	
	switch ($page) 
	{

	//AWAL TEMPUR

		// SAVE DATA TEMPUR
		case 'save_makanan' :
			$nama = $_POST['nama'];
			$jmlpersawal = $_POST['jmlpersawal'];
			$digunakan = $_POST['digunakan'];
			$penambahan = $_POST['penambahan'];
			$jmlpersakhir = $_POST['jmlpersakhir'];
			$keterangan = $_POST['keterangan'];
			$tipe = $_POST['tipe'];
			$data1 = mysql_query(
				"INSERT INTO log_makanan (nama,jmlpersawal,digunakan,penambahan,jmlpersakhir,keterangan,tipe)VALUES(
				'$nama',
				'$jmlpersawal',
				'$digunakan',
				'$penambahan',
				'$jmlpersakhir',
				'$keterangan',
				'$tipe')"
			)or die(mysql_error());

			if ($data1) {
				echo "Sukses";
			} else {
				echo "Gagal";
			}

			break;

		case 'save_alkapsus' :
			$nama = $_POST['nama4'];
			$lama = $_POST['lama'];
			$baru = $_POST['baru'];
			$kembali = $_POST['kembali'];
			$kondisi = $_POST['kondisi4'];
			$jml = $_POST['jml4'];
			$ket = $_POST['keterangan4'];
			$tipe = $_POST['tipe4'];
			$data4 = mysql_query(
				"INSERT INTO log_alkapsus(nama,persediaan,penerimaan,pengembalian,kondisi,jumlah,keterangan,tipe)VALUES(
				'$nama',
				'$lama',
				'$baru',
				'$kembali',
				'$kondisi',
				'$jml',
				'$ket',
				'$tipe')"
			)or die(mysql_error());

			if ($data4) {
				echo "Sukses";
			} else {
				echo "Gagal";
			}

			break;

		case 'save_tempurdua' :
			$nama = $_POST['nama'];
            $persediaan = $_POST['persediaan'];
            $penerimaan = $_POST['penerimaan'];
            $pengembalian = $_POST['pengembalian'];
            $kondisi = $_POST['kondisi'];
            $jumlah = $_POST['jumlah'];
            $keterangan = $_POST['keterangan'];
            $tipe = $_POST['tipe'];

			$data2 = mysql_query(
				"INSERT INTO log_alkapsat (nama,persediaan,penerimaan,pengembalian,kondisi,jumlah,keterangan,tipe)VALUES(
				'$nama',
				'$persediaan',
				'$penerimaan',
				'$pengembalian',
				'$kondisi',
				'$jumlah',
				'$keterangan',
				'$tipe')"
			)or die(mysql_error());

			if ($data2) {
				echo "Sukses";
			} else {
				echo "Gagal";
			}

			break;

		case 'save_bmp' :
			$nama = $_POST['nama'];
			$jmlpersawal = $_POST['jmlpersawal'];
			$digunakan = $_POST['digunakan'];
			$penambahan = $_POST['penambahan'];
			$jmlpersakhir = $_POST['jmlpersakhir'];
			$keterangan = $_POST['keterangan'];
			$tipe = $_POST['tipe'];
			$data1 = mysql_query(
				"INSERT INTO log_bmp (nama,jmlpersawal,digunakan,penambahan,jmlpersakhir,keterangan,tipe)VALUES(
				'$nama',
				'$jmlpersawal',
				'$digunakan',
				'$penambahan',
				'$jmlpersakhir',
				'$keterangan',
				'$tipe')"
			)or die(mysql_error());

			if ($data1) {
				echo "Sukses";
			} else {
				echo "Gagal";
			}

			break;

		case 'save_muhandak' :

            $materil = $_POST['materil'];
            $satuan5 = $_POST['satuan5'];
            $nyata5 = $_POST['nyata5'];
            $keadaan5  =$_POST['keadaan5'];
            $ket5 = $_POST['ket5'];
            $tipe5 = $_POST['tipe5'];

			$data3 = mysql_query(
				"INSERT INTO log_muhandak(nama,satuan,nyata,keadaan,keterangan,tipe)VALUES(
				'$materil',
				'$satuan5',
				'$nyata5',
				'$keadaan5',
				'$ket5',
				'$tipe5')"
			)or die(mysql_error());

			if ($data3) {
				echo "Sukses";
			} else {
				echo "Gagal";
			}

			break;

		case 'save_pangkalan' :

            $lokasi = $_POST['lokasi'];
            $tanah = $_POST['tanah'];
            $bangunan = $_POST['bangunan'];
            $tahun  =$_POST['tahun'];
            $awal = $_POST['awal'];
            $penambahan6 = $_POST['penambahan6'];
            $pengurangan6 = $_POST['pengurangan6'];
            $akhir = $_POST['akhir'];
            $kondisi6 = $_POST['kondisi6'];
            $ket6 = $_POST['ket6'];
            $tipe6 = $_POST['tipe6'];

			$data3 = mysql_query(
				"INSERT INTO log_pangkalan(lokasi,luas_tanah,luas_bangunan,tahun,jml_awal,penambahan,pengurangan,jml_akhir,kondisi,keterangan,tipe)VALUES(
				'$lokasi',
				'$tanah',
				'$bangunan',
				'$tahun',
				'$awal',
				'$penambahan6',
				'$pengurangan6',
				'$akhir',
				'$kondisi6',
				'$ket6',
				'$tipe6')"
			)or die(mysql_error());

			if ($data3) {
				echo "Sukses";
			} else {
				echo "Gagal";
			}

			break;

		case 'save_kendaraan' :

            $materil7 = $_POST['materil7'];
            $top = $_POST['top'];
            $nyata7 = $_POST['nyata7'];
            $kondisi7  =$_POST['kondisi7'];
            $ket7 = $_POST['ket7'];
            $tipe7 = $_POST['tipe7'];

			$data3 = mysql_query(
				"INSERT INTO log_kendaraan(materil,top,nyata,kondisi,keterang,tipe)VALUES(
				'$materil7',
				'$top',
				'$nyata7',
				'$kondisi7',
				'$ket7',
				'$tipe7')"
			)or die(mysql_error());

			if ($data3) {
				echo "Sukses";
			} else {
				echo "Gagal";
			}

			break;

		case 'save_alutsista' :

            $materil8 = $_POST['materil8'];
            $top8 = $_POST['top8'];
            $nyata8 = $_POST['nyata8'];
            $kondisi8  =$_POST['kondisi8'];
            $ket8 = $_POST['ket8'];
            $tipe8 = $_POST['tipe8'];

			$data3 = mysql_query(
				"INSERT INTO log_alutsista(materil,top,nyata,kondisi,ket,tipe)VALUES(
				'$materil8',
				'$top8',
				'$nyata8',
				'$kondisi8',
				'$ket8',
				'$tipe8')"
			)or die(mysql_error());

			if ($data3) {
				echo "Sukses";
			} else {
				echo "Gagal";
			}

			break;
		// END SAVE DATA TEMPUR

		// DELETE DATA TEMPUR
		case 'deletemakanan' :
			$id =$_POST['id'];
			$sql = mysql_query("DELETE FROM log_makanan WHERE id ='".$id."'")or die(mysql_error());  
			 if($sql)  
			 {  
			      echo 'Data Deleted';  
			 }else{
			 	echo "gagal";
			 }
			break;

		case 'deletealkapsat' :
			$id =$_POST['id'];
			$sql = mysql_query("DELETE FROM log_alkapsat WHERE id ='".$id."'")or die(mysql_error());  
			 if($sql)  
			 {  
			      echo 'Data Deleted';  
			 }else{
			 	echo "gagal";
			 }
			break;

		case 'deletebmp' :
			$id =$_POST['id'];
			$sql = mysql_query("DELETE FROM log_bmp WHERE id ='".$id."'")or die(mysql_error());  
			 if($sql)  
			 {  
			      echo 'Data Deleted';  
			 }else{
			 	echo "gagal";
			 }
			break;

		case 'deletealkapsus' :
			$id =$_POST['id'];
			$sql = mysql_query("DELETE FROM log_alkapsus WHERE id ='".$id."'")or die(mysql_error());  
			 if($sql)  
			 {  
			      echo 'Data Deleted';  
			 }else{
			 	echo "gagal";
			 }
			break;

		case 'deletemuhandak' :
			$id =$_POST['id'];
			$sql = mysql_query("DELETE FROM log_muhandak WHERE id ='".$id."'")or die(mysql_error());  
			 if($sql)  
			 {  
			      echo 'Data Deleted';  
			 }else{
			 	echo "gagal";
			 }
			break;

		case 'deletepangkalan' :
			$id =$_POST['id'];
			$sql = mysql_query("DELETE FROM log_pangkalan WHERE id ='".$id."'")or die(mysql_error());  
			 if($sql)  
			 {  
			      echo 'Data Deleted';  
			 }else{
			 	echo "gagal";
			 }
			break;

		case 'deletekendaraan' :
			$id =$_POST['id'];
			$sql = mysql_query("DELETE FROM log_kendaraan WHERE id ='".$id."'")or die(mysql_error());  
			 if($sql)  
			 {  
			      echo 'Data Deleted';  
			 }else{
			 	echo "gagal";
			 }
			break;

		case 'deletealutsista' :
			$id =$_POST['id'];
			$sql = mysql_query("DELETE FROM log_alutsista WHERE id ='".$id."'")or die(mysql_error());  
			 if($sql)  
			 {  
			      echo 'Data Deleted';  
			 }else{
			 	echo "gagal";
			 }
		break;
		// END DELETE DATA TEMPUR

		// VIEW DATA TEMPUR
		case 'select_makanan' :

			$sql = "SELECT * FROM log_makanan INNER JOIN kat_makanan on log_makanan.nama = kat_makanan.id_kat ORDER BY id asc";
 			$result = mysql_query($sql)or die(mysql_error());  
 			echo "
                           <div class='table-responsive'>
                                <table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                    <thead>
                                        <tr class='blue-head'>
                                            <th>No</th>
                                            <th>Nama / Jenis</th>
                                            <th>Jumlah Persediaan Awal</th>
                                            <th>Digunakan</th>
                                            <th>Penambahan</th>
                                            <th>Jumlah Persediaan Akhir</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>";
                              	$no=1;
                              	while($data = mysql_fetch_array($result)){
                              		echo "<tr class='odd gradeX'>
                                            <td>".$no."</td>
                                            <td>".$data['jenis']."</td>
                                            <td class='center'>".$data['jmlpersawal']."</td>
                                            <td class='center'>".$data['digunakan']."</td>
                                            <td class='center'>".$data['penambahan']."</td>
                                            <td class='center'>".$data['jmlpersakhir']."</td>
                                            <td class='center'>".$data['keterangan']."</td>
                                            <td class='center'> <button name='btn_delete' id='btn_delete' data-id3='".$data['id']."'><img src='assets/img/Delete.png' alt='' width='25px' heigh='25px'/></button>
                                           	<button name='btn_edit' id='btn_edit' data-id4='".$data['id']."'><img src='assets/img/edit.png' alt='' width='25px' heigh='25px'/></button>
                                            </td>
                                        </tr>";
                                         $no++;

                              	}
                             
                           echo "</tbody>
                                	</table>
                            		</div>";
   
 			

			break;

			case 'select_alkapsat' :

			$sql = "SELECT * FROM log_alkapsat INNER JOIN kat_alkapsat on log_alkapsat.nama = kat_alkapsat.id_kat ORDER BY id asc";
 			$result = mysql_query($sql)or die(mysql_error());  
 			echo " <div class='table-responsive'>
                                <table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                    <thead>
                                        <tr class='blue-head'>
                                            <th>No</th>
                                            <th>Nama Kapsat/Kaporlap</th>
                                            <th>Persediaan Lama </th>
                                            <th>Penerimaan Baru</th>
                                            <th>Pengembalian</th>
                                            <th>Kondisi</th>
                                            <th>Jumlah</th>
                                            <th>Keterangan </th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>";
                              	$no=1;
                              	while($data = mysql_fetch_array($result)){
                              		echo "<tr class='odd gradeX'>
                                            <td>".$no."</td>
                                            <td class='center'>".$data['jenis']."</td>
                                            <td class='center'>".$data['persediaan']."</td>
                                            <td class='center'>".$data['penerimaan']."</td>
                                            <td class='center'>".$data['pengembalian']."</td>
                                            <td class='center'>".$data['kondisi']."</td>
                                            <td class='center'>".$data['jumlah']."</td>
                                            <td class='center'>".$data['keterangan']."</td>
                                            <td class='center'> <button name='btn_delete2' id='btn_delete2' data-id3='".$data['id']."'><img src='assets/img/Delete.png' alt='' width='25px' heigh='25px'/></button>
                                            <button name='btn_edit2' id='btn_edit2' data-id4='".$data['id']."'><img src='assets/img/edit.png' alt='' width='25px' heigh='25px'/></button>
                                            </td>
                                        </tr>";
                                         $no++;

                              	}
                             
                            echo "</tbody>
                                	</table>
                            		</div>";
   
 			

			break;

			case 'select_bmp' :
			
			$sql = "SELECT * FROM log_bmp INNER JOIN kat_bmp on log_bmp.nama = kat_bmp.id_kat ORDER BY id asc";
 			$result = mysql_query($sql)or die(mysql_error());  
 			echo " <div class='table-responsive'>
                                <table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                    <thead>
                                        <tr class='blue-head'>
                                            <th>No</th>
                                            <th>Nama / Jenis</th>
                                            <th>Jumlah Persediaan Awal</th>
                                            <th>Digunakan</th>
                                            <th>Penambahan</th>
                                            <th>Jumlah Persediaan Akhir</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>";
                              	$no=1;
                              	while($data = mysql_fetch_array($result)){
                              		echo "<tr class='odd gradeX'>
                                            <td>".$no."</td>
                                            <td class='center'>".$data['jenis']."</td>
                                            <td class='center'>".$data['jmlpersawal']."</td>
                                            <td class='center'>".$data['digunakan']."</td>
                                            <td class='center'>".$data['penambahan']."</td>
                                            <td class='center'>".$data['jmlpersakhir']."</td>
                                            <td class='center'>".$data['keterangan']."</td>
                                            <td class='center'> <button name='btn_delete3' id='btn_delete3' data-id3='".$data['id']."'><img src='assets/img/Delete.png' alt='' width='25px' heigh='25px'/></button>
                                            <button name='btn_edit3' id='btn_edit3' data-id4='".$data['id']."'><img src='assets/img/edit.png' alt='' width='25px' heigh='25px'/></button>
                                            </td>
                                        </tr>";
                                         $no++;

                              	}
                             
                            echo "</tbody>
                                	</table>
                            		</div>";
   

			break;

			case 'select_alkapsus' :

			$sql = "SELECT * FROM log_alkapsus ORDER BY id asc";
 			$result = mysql_query($sql)or die(mysql_error());  
 			echo "  <div class='table-responsive'>
                                <table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                    <thead>
                                        <tr class='blue-head'>
                                            <th>No</th>
                                            <th>Nama Kapsus</th>
                                            <th>Persediaan lama</th>
                                            <th>Penerimaan baru</th>
                                            <th>Pengembalian</th>
                                            <th>Kondisi </th>
                                            <th>Jumlah </th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>";
                              	$no=1;
                              	while($data = mysql_fetch_array($result)){
                              		echo "<tr class='odd gradeX'>
                                            <td>".$no."</td>
                                            <td class='center'>".$data['nama']."</td>
                                            <td class='center'>".$data['persediaan']."</td>
                                            <td class='center'>".$data['penerimaan']."</td>
                                            <td class='center'>".$data['pengembalian']."</td>
                                            <td class='center'>".$data['kondisi']."</td>
                                            <td class='center'>".$data['jumlah']."</td>
                                            <td class='center'>".$data['keterangan']."</td>
                                            <td class='center'> <button name='btn_delete4' id='btn_delete4' data-id3='".$data['id']."'><img src='assets/img/Delete.png' alt='' width='25px' heigh='25px'/></button>
                                            <button name='btn_edit4' id='btn_edit4' data-id4='".$data['id']."'><img src='assets/img/edit.png' alt='' width='25px' heigh='25px'/></button>
                                            </td>
                                        </tr>";
                                         $no++;

                              	}
                             
                           echo "</tbody>
                                	</table>
                            		</div>";
   
	 			// echo $keluar;  

				break;

		case 'select_muhandak' :

			$sql = "SELECT * FROM log_muhandak INNER JOIN kat_muhandak on log_muhandak.nama = kat_muhandak.id_kat ORDER BY id asc";
 			$result = mysql_query($sql)or die(mysql_error());  
 			echo "  <div class='table-responsive'>
                                <table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                    <thead>
                                        <tr class='blue-head'>
                                            <th>No</th>
                                            <th>Nama Materil</th>
                                            <th>Satuan</th>
                                            <th>Nyata</th>
                                            <th>Keadaan</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>";
                              	$no=1;
                              	while($data = mysql_fetch_array($result)){
                              		echo "<tr class='odd gradeX'>
                                            <td>".$no."</td>
                                            <td class='center'>".$data['jenis']."</td>
                                            <td class='center'>".$data['satuan']."</td>
                                            <td class='center'>".$data['nyata']."</td>
                                            <td class='center'>".$data['keadaan']."</td>
                                            <td class='center'>".$data['keterangan']."</td>
                                            <td class='center'> <button name='btn_delete5' id='btn_delete5' data-id3='".$data['id']."'><img src='assets/img/Delete.png' alt='' width='25px' heigh='25px'/></button>
                                            <button name='btn_edit5' id='btn_edit5' data-id4='".$data['id']."'><img src='assets/img/edit.png' alt='' width='25px' heigh='25px'/></button>
                                            </td>
                                        </tr>";
                                         $no++;

                              	}
                             
                           echo "</tbody>
                                	</table>
                            		</div>";
   
	 			// echo $keluar;  

				break;

			case 'select_pangkalan' :
			
			$sql = "SELECT * FROM log_pangkalan ORDER BY id asc";
 			$result = mysql_query($sql)or die(mysql_error());  
 			echo "  <div class='table-responsive'>
                                <table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                    <thead>
                                        <tr class='blue-head'>
                                            <th>No</th>
                                            <th>Lokasi/Satker</th>
                                            <th>Luas Tanah</th>
                                            <th>Luas Bangunan</th>
                                            <th>Tahun Pembuatan</th>
                                            <th>Jumlah Awal</th>
                                            <th>Penambahan</th>
                                            <th>Pengurangan</th>
                                            <th>Jumlah Akhir</th>
                                            <th>Kondisi</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>";
                              	$no=1;
                              	while($data = mysql_fetch_array($result)){
                              		echo "<tr class='odd gradeX'>
                                            <td>".$no."</td>
                                            <td class='center'>".$data['lokasi']."</td>
                                            <td class='center'>".$data['luas_tanah']."</td>
                                            <td class='center'>".$data['luas_bangunan']."</td>
                                            <td class='center'>".$data['tahun']."</td>
                                            <td class='center'>".$data['jml_awal']."</td>
                                            <td class='center'>".$data['penambahan']."</td>
                                            <td class='center'>".$data['pengurangan']."</td>
                                            <td class='center'>".$data['jml_akhir']."</td>
                                            <td class='center'>".$data['kondisi']."</td>
                                            <td class='center'>".$data['keterangan']."</td>
                                            <td class='center'> <button name='btn_delete6' id='btn_delete6' data-id3='".$data['id']."'><img src='assets/img/Delete.png' alt='' width='25px' heigh='25px'/></button>
                                            <button name='btn_edit6' id='btn_edit6' data-id4='".$data['id']."'><img src='assets/img/edit.png' alt='' width='25px' heigh='25px'/></button>
                                            </td>
                                        </tr>";
                                         $no++;

                              	}
                             
                           echo "</tbody>
                                	</table>
                            		</div>";
   
	 			// echo $keluar;  

				break;

			case 'select_kendaraan' :
			
			$sql = "SELECT * FROM log_kendaraan ORDER BY id asc";  
 			$result = mysql_query($sql)or die(mysql_error());  
 			echo "  <div class='table-responsive'>
                                <table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                    <thead>
                                        <tr class='blue-head'>
                                            <th>No</th>
                                            <th>Materiil</th>
                                            <th>TOP/DSPP</th>
                                            <th>Nyata</th>
                                            <th>Kondisi</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>";
                              	$no=1;
                              	while($data = mysql_fetch_array($result)){
                              		echo "<tr class='odd gradeX'>
                                            <td>".$no."</td>
                                            <td class='center'>".$data['materil']."</td>
                                            <td class='center'>".$data['top']."</td>
                                            <td class='center'>".$data['nyata']."</td>
                                            <td class='center'>".$data['kondisi']."</td>
                                            <td class='center'>".$data['keterang']."</td>
                                            <td class='center'> <button name='btn_delete7' id='btn_delete7' data-id3='".$data['id']."'><img src='assets/img/Delete.png' alt='' width='25px' heigh='25px'/></button>
                                            <button name='btn_edit7' id='btn_edit7' data-id4='".$data['id']."'><img src='assets/img/edit.png' alt='' width='25px' heigh='25px'/></button>
                                            </td>
                                        </tr>";
                                         $no++;

                              	}
                             
                           echo "</tbody>
                                	</table>
                            		</div>";
   
	 			// echo $keluar;  

				break;

				case 'select_alutsista' :
				
					$sql = "SELECT * FROM log_alutsista ORDER BY id asc";
					$result = mysql_query($sql)or die(mysql_error());  
					echo "  <div class='table-responsive'>
		                            <table class='table table-striped table-bordered table-hover' id='dataTables-example'>
		                                <thead>
		                                    <tr class='blue-head'>
		                                        <th>No</th>
		                                        <th>Materiil</th>
		                                        <th>TOP/DSPP</th>
		                                        <th>Nyata</th>
		                                        <th>Kondisi</th>
		                                        <th>Keterangan</th>
		                                        <th>Aksi</th>
		                                    </tr>
		                                </thead>
		                                <tbody>";
		                          	$no=1;
		                          	while($data = mysql_fetch_array($result)){
		                          		echo "<tr class='odd gradeX'>
		                                        <td>".$no."</td>
		                                        <td class='center'>".$data['materil']."</td>
		                                        <td class='center'>".$data['top']."</td>
		                                        <td class='center'>".$data['nyata']."</td>
		                                        <td class='center'>".$data['kondisi']."</td>
		                                        <td class='center'>".$data['ket']."</td>
		                                        <td class='center'> <button name='btn_delete8' id='btn_delete8' data-id3='".$data['id']."'><img src='assets/img/Delete.png' alt='' width='25px' heigh='25px'/></button>
		                                        <button name='btn_edit8' id='btn_edit8' data-id4='".$data['id']."'><img src='assets/img/edit.png' alt='' width='25px' heigh='25px'/></button>
		                                        </td>
		                                    </tr>";
		                                     $no++;

		                          	}
		                         
		                       echo "</tbody>
		                            	</table>
		                        		</div>";

		 			// echo $keluar;  

					break;
			// END VIEW DATA TEMPUR

			// SELECT EDIT DATA TEMPUR
				case 'select_edit_makanan' :
					$id = $_POST["id"];
				    $sql = "SELECT * FROM log_makanan INNER JOIN kat_makanan on log_makanan.nama = kat_makanan.id_kat WHERE id='".$id."'"; 
		 			$result = mysql_query($sql)or die(mysql_error()); 
		 			$rows = array();
					$rows = mysql_fetch_assoc($result);
					echo json_encode($rows, JSON_FORCE_OBJECT);
		 		break;

		 		case 'select_edit_alkapsat' :
					$id = $_POST["id"];
				    $sql = "SELECT * FROM log_alkapsat INNER JOIN kat_alkapsat on log_alkapsat.nama = kat_alkapsat.id_kat WHERE id='".$id."'"; 
		 			$result = mysql_query($sql)or die(mysql_error()); 
		 			$rows = array();
					$rows = mysql_fetch_assoc($result);
					echo json_encode($rows, JSON_FORCE_OBJECT);
		 		break;

		 		case 'select_edit_bmp' :
					$id = $_POST["id"];
				    $sql = "SELECT * FROM log_bmp INNER JOIN kat_bmp on log_bmp.nama = kat_bmp.id_kat WHERE id='".$id."'"; 
		 			$result = mysql_query($sql)or die(mysql_error()); 
		 			$rows = array();
					$rows = mysql_fetch_assoc($result);
					echo json_encode($rows, JSON_FORCE_OBJECT);
		 		break;

		 		case 'select_edit_alkapsus' :
					$id = $_POST["id"];
				    $sql = "SELECT * FROM log_alkapsus WHERE id='".$id."'"; 
		 			$result = mysql_query($sql)or die(mysql_error()); 
		 			$rows = array();
					$rows = mysql_fetch_assoc($result);
					echo json_encode($rows, JSON_FORCE_OBJECT);
		 		break;

		 		case 'select_edit_muhandak' :
					$id = $_POST["id"];
				    $sql = "SELECT * FROM log_muhandak INNER JOIN kat_muhandak on log_muhandak.nama = kat_muhandak.id_kat WHERE id='".$id."'"; 
		 			$result = mysql_query($sql)or die(mysql_error()); 
		 			$rows = array();
					$rows = mysql_fetch_assoc($result);
					echo json_encode($rows, JSON_FORCE_OBJECT);
		 		break;

		 		case 'select_edit_pangkalan' :
					$id = $_POST["id"];
				    $sql = "SELECT * FROM log_pangkalan WHERE id='".$id."'"; 
		 			$result = mysql_query($sql)or die(mysql_error()); 
		 			$rows = array();
					$rows = mysql_fetch_assoc($result);
					echo json_encode($rows, JSON_FORCE_OBJECT);
		 		break;

		 		case 'select_edit_kendaraan' :
					$id = $_POST["id"];
				    $sql = "SELECT * FROM log_kendaraan WHERE id='".$id."'"; 
		 			$result = mysql_query($sql)or die(mysql_error()); 
		 			$rows = array();
					$rows = mysql_fetch_assoc($result);
					echo json_encode($rows, JSON_FORCE_OBJECT);
		 		break;
		 		case 'select_edit_alutsista' :
					$id = $_POST["id"];
				    $sql = "SELECT * FROM log_alutsista WHERE id='".$id."'"; 
		 			$result = mysql_query($sql)or die(mysql_error()); 
		 			$rows = array();
					$rows = mysql_fetch_assoc($result);
					echo json_encode($rows, JSON_FORCE_OBJECT);
		 		break;
			// END SELECT EDIT DATA TEMPUR

			//  SAVE EDIT DATA TEMPUR
				case 'edit_makanan' :
					$id = $_POST["id"];
					$nama = $_POST["nama"];
					$jmlpersawal = $_POST["jmlpersawal"];
					$digunakan = $_POST["digunakan"];
					$penambahan = $_POST["penambahan"];
					$jmlpersakhir = $_POST["jmlpersakhir"];
					$keterangan = $_POST["keterangan"];
					$id_nama = $_POST["id_nama"];

					if ($nama == "")
					{
						$sql = mysql_query("UPDATE log_makanan SET nama ='".$id_nama."', jmlpersawal='".$jmlpersawal."', digunakan ='".$digunakan."', penambahan ='".$penambahan."', jmlpersakhir='".$jmlpersakhir."', keterangan = '".$keterangan."' WHERE id='".$id."'");
						 if($sql) 
						 {  
						      echo 'Data Updated';  
						 }
						 else
						 {
						 	echo 'Gagal';
						 }
					}

					else
					{
						$sql = mysql_query("UPDATE log_makanan SET nama ='".$nama."', jmlpersawal='".$jmlpersawal."', digunakan ='".$digunakan."', penambahan ='".$penambahan."', jmlpersakhir='".$jmlpersakhir."', keterangan = '".$keterangan."' WHERE id='".$id."'");
						 if($sql) 
						 {  
						      echo 'Data Updated';  
						 }
						 else
						 {
						 	echo 'Gagal';
						 }
					}
					
				break;

				case 'edit_alkapsat' :
					$id = $_POST["id"];
					$nama = $_POST["nama"];
					$persediaan = $_POST["persediaan"];
					$penerimaan = $_POST["penerimaan"];
					$pengembalian = $_POST["pengembalian"];
					$kondisi = $_POST["kondisi"];
					$jumlah = $_POST["jumlah"];
					$ket = $_POST["keterangan"];
					$id_nama2 = $_POST["id_nama2"];

					if ($nama == "")
					{
						$sql = mysql_query("UPDATE log_alkapsat SET nama='".$id_nama2."',persediaan='".$persediaan."',penerimaan='".$penerimaan."',pengembalian='".$pengembalian."',kondisi='".$kondisi."',jumlah='".$jumlah."',keterangan='".$ket."' WHERE id='".$id."'");
						 if($sql) 
						 {  
						      echo 'Data Updated';  
						 }
						 else
						 {
						 	echo 'Gagal';
						 }
					}

					else
					{
						$sql = mysql_query("UPDATE log_alkapsat SET nama='".$nama."',persediaan='".$persediaan."',penerimaan='".$penerimaan."',pengembalian='".$pengembalian."',kondisi='".$kondisi."',jumlah='".$jumlah."',keterangan='".$ket."' WHERE id='".$id."'");
						 if($sql) 
						 {  
						      echo 'Data Updated';  
						 }
						 else
						 {
						 	echo 'Gagal';
						 }
					}

				break;

				case 'edit_bmp' :
					$id = $_POST["id"];
					$nama = $_POST["nama"];
					$jmlpersawal = $_POST["jmlpersawal"];
					$digunakan = $_POST["digunakan"];
					$penambahan = $_POST["penambahan"];
					$jmlpersakhir = $_POST["jmlpersakhir"];
					$keterangan = $_POST["keterangan"];
					$id_bmp2 = $_POST["id_bmp2"];

					if ($nama == "")
					{
						$sql = mysql_query("UPDATE log_bmp SET nama='".$id_bmp2."', jmlpersawal ='".$jmlpersawal."', digunakan='".$digunakan."', penambahan='".$penambahan."', jmlpersakhir='".$jmlpersakhir."', keterangan='".$keterangan."' WHERE id='".$id."'");
						 if($sql) 
						 {  
						      echo 'Data Updated';  
						 }
						 else
						 {
						 	echo 'Gagal';
						 }
					}

					else
					{
						$sql = mysql_query("UPDATE log_bmp SET nama='".$nama."', jmlpersawal ='".$jmlpersawal."', digunakan='".$digunakan."', penambahan='".$penambahan."', jmlpersakhir='".$jmlpersakhir."', keterangan='".$keterangan."' WHERE id='".$id."'");
						 if($sql) 
						 {  
						      echo 'Data Updated';  
						 }
						 else
						 {
						 	echo 'Gagal';
						 }
					}

				break;

				case 'edit_alkapsus' :
					$id = $_POST["id"];
					$nama = $_POST["nama4"];
					$persediaan = $_POST["lama"];
					$penerimaan = $_POST["baru"];
					$pengembalian = $_POST["kembali"];
					$kondisi = $_POST["kondisi4"];
					$jumlah = $_POST["jml4"];
					$keterangan = $_POST["keterangan4"];
					$sql = mysql_query("UPDATE log_alkapsus SET nama='".$nama."', persediaan ='".$persediaan."', penerimaan='".$penerimaan."', pengembalian='".$pengembalian."', kondisi='".$kondisi."', jumlah = '".$jumlah."', keterangan = '".$keterangan."' WHERE id='".$id."'");
					 if($sql) 
					 {  
					      echo 'Data Updated';  
					 }  
				break;

				case 'edit_muhandak' :
					$id = $_POST["id"];
					$nama = $_POST["materil"];
					$satuan = $_POST["satuan5"];
					$nyata = $_POST["nyata5"];
					$keadaan = $_POST["keadaan5"];
					$keterangan = $_POST["ket5"];
					$id_muhandak2 = $_POST["id_muhandak2"];

					if ($nama == "")
					{
						$sql = mysql_query("UPDATE log_muhandak SET nama='".$id_muhandak2."', satuan ='".$satuan."', nyata='".$nyata."', keadaan='".$keadaan."', keterangan='".$keterangan."' WHERE id='".$id."'");
						 if($sql) 
						 {  
						      echo 'Data Updated';  
						 }
						 else
						 {
						 	echo 'Gagal';
						 }
					}

					else
					{
						$sql = mysql_query("UPDATE log_muhandak SET nama='".$nama."', satuan ='".$satuan."', nyata='".$nyata."', keadaan='".$keadaan."', keterangan='".$keterangan."' WHERE id='".$id."'");
						 if($sql) 
						 {  
						      echo 'Data Updated';  
						 }
						 else
						 {
						 	echo 'Gagal';
						 }
					}

				break;

				case 'edit_pangkalan' :
					$id = $_POST["id"];
					$lokasi = $_POST["lokasi"];
					$luas_tanah = $_POST["tanah"];
					$luas_bangunan = $_POST["bangunan"];
					$tahun = $_POST["tahun"];
					$jml_awal = $_POST["awal"];
					$penambahan = $_POST["penambahan6"];
					$pengurangan = $_POST["pengurangan6"];
					$jml_akhir = $_POST["akhir"];
					$kondisi = $_POST["kondisi6"];
					$keterangan = $_POST["ket6"];
					$sql = mysql_query("UPDATE log_pangkalan SET lokasi='".$lokasi."', luas_tanah ='".$luas_tanah."', luas_bangunan='".$luas_bangunan."', tahun='".$tahun."', jml_awal='".$jml_awal."', penambahan='".$penambahan."', pengurangan='".$pengurangan."', jml_akhir='".$jml_akhir."', kondisi='".$kondisi."', keterangan='".$keterangan."' WHERE id='".$id."'");
					 if($sql) 
					 {  
					      echo 'Data Updated';  
					 }  
				break;

				case 'edit_kendaraan' :
					$id = $_POST["id"];
					$materil = $_POST["materil7"];
					$top = $_POST["top"];
					$nyata = $_POST["nyata7"];
					$kondisi = $_POST["kondisi7"];
					$keterangan = $_POST["ket7"];
					$sql = mysql_query("UPDATE log_kendaraan SET materil='".$materil."', top ='".$top."', nyata='".$nyata."', kondisi='".$kondisi."', keterang='".$keterangan."' WHERE id='".$id."'");
					 if($sql) 
					 {  
					      echo 'Data Updated';  
					 }  
				break;

				case 'edit_alutsista' :
					$id = $_POST["id"];
					$materil8 = $_POST["materil8"];
					$top8 = $_POST["top8"];
					$nyata8 = $_POST["nyata8"];
					$kondisi8 = $_POST["kondisi8"];
					$keterangan8 = $_POST["ket8"];
					$sql = mysql_query("UPDATE log_alutsista SET materil='".$materil8."', top ='".$top8."', nyata='".$nyata8."', kondisi='".$kondisi8."', ket='".$keterangan8."' WHERE id='".$id."'");
					 if($sql) 
					 {  
					      echo 'Data Updated';  
					 }  
				break;
			// END EDIT DATA TEMPUR

	//END TEMPUR

	//AWAL DAMAI

		// SAVE DATA DAMAI
		case 'save_alsatri' :
			$jm_alsatri = $_POST['jm_alsatri'];
			$nama_alsatri = $_POST['nama_alsatri'];
			$merk_alsatri = $_POST['merk_alsatri'];
			$sat_alsatri = $_POST['sat_alsatri'];
			$top_alsatri = $_POST['top_alsatri'];
			$jml_nyata_alsatri = $_POST['jml_nyata_alsatri'];
			$kondisi_alsatri = $_POST['kondisi_alsatri'];
			$sel_alsatri = $_POST['sel_alsatri'];
			$ket_alsatri = $_POST['ket_alsatri'];
			$tipe_alsatri = $_POST['tipe_alsatri'];

			$data = mysql_query(
				"INSERT INTO log_alsatri (jm_alsatri,nama,merk,sat,dspp,jml_nyata,kondisi,selisih,ket,tipe_sat)VALUES(
				'$jm_alsatri',
				'$nama_alsatri',
				'$merk_alsatri',
				'$sat_alsatri',
				'$top_alsatri',
				'$jml_nyata_alsatri',
				'$kondisi_alsatri',
				'$sel_alsatri',
				'$ket_alsatri',
				'$tipe_alsatri')"
			)or die(mysql_error());

			if ($data) {
				echo "Sukses";
			} else {
				echo "Gagal";
			}

			break;

		default:
			# code...
			break;

		case 'save_pangkalan2' :
			$jm_pang = $_POST['jm_pang'];
			$nama_pang = $_POST['nama_pang'];
			$top_pang = $_POST['top_pang'];
			$lb_pang = $_POST['lb_pang'];
			$nyata_pang = $_POST['nyata_pang'];
			$kurang_pang = $_POST['kurang_pang'];
			$kondisi_pang = $_POST['kondisi_pang'];
			$ket_pang = $_POST['ket_pang'];
			$tipe_pang = $_POST['tipe_pang'];

			$data = mysql_query(
				"INSERT INTO log_pangkalan2 (jm_pangkalan,nama,top,luas_bangunan,nyata,kurang,kondisi,ket,tipe_sat)VALUES(
				'$jm_pang',
				'$nama_pang',
				'$top_pang',
				'$lb_pang',
				'$nyata_pang',
				'$kurang_pang',
				'$kondisi_pang',
				'$ket_pang',
				'$tipe_pang')"
			)or die(mysql_error());

			if ($data) {
				echo "Sukses";
			} else {
				echo "Gagal";
			}

			break;

		default:
			# code...
			break;

		case 'save_alhub' :
			$kat_alhub = $_POST['kat_alhub'];
			$nm_alhub = $_POST['nm_alhub'];
			$nama_alhub = $_POST['nama_alhub'];
			$merk_alhub = $_POST['merk_alhub'];
			$sat_alhub = $_POST['sat_alhub'];
			$senja_alhub = $_POST['senja_alhub'];
			$kondisi_alhub = $_POST['kondisi_alhub'];
			$ket_alhub = $_POST['ket_alhub'];
			$tipe_alhub = $_POST['tipe_alhub'];

			$data = mysql_query(
				"INSERT INTO log_alhub (kat_alhub,nm_alhub,nama_alhub,merk,satuan,senjata_alhub,kondisi,ket,tipe_sat)VALUES(
				'$kat_alhub',
				'$nm_alhub',
				'$nama_alhub',
				'$merk_alhub',
				'$sat_alhub',
				'$senja_alhub',
				'$kondisi_alhub',
				'$ket_alhub',
				'$tipe_alhub')"
			)or die(mysql_error());

			if ($data) {
				echo "Sukses";
			} else {
				echo "Gagal";
			}

			break;

		default:
			# code...
			break;

		case 'save_optik' :
			$kat_optik = $_POST['kat_optik'];
			$nm_optik = $_POST['nm_optik'];
			$nama_optik = $_POST['nama_optik'];
			$merk_optik = $_POST['merk_optik'];
			$sat_optik = $_POST['sat_optik'];
			$senja_optik = $_POST['senja_optik'];
			$kondisi_optik = $_POST['kondisi_optik'];
			$ket_optik = $_POST['ket_optik'];
			$tipe_optik = $_POST['tipe_optik'];

			$data = mysql_query(
				"INSERT INTO log_optik (kat_optik,nm_optik,nama_optik,merk,satuan,senjata_optik,kondisi,ket,tipe_sat)VALUES(
				'$kat_optik',
				'$nm_optik',
				'$nama_optik',
				'$merk_optik',
				'$sat_optik',
				'$senja_optik',
				'$kondisi_optik',
				'$ket_optik',
				'$tipe_optik')"
			)or die(mysql_error());

			if ($data) {
				echo "Sukses";
			} else {
				echo "Gagal";
			}

			break;

		default:
			# code...
			break;

		case 'save_munisi' :
			$jm_munisi = $_POST['jm_munisi'];
			$nama_munisi = $_POST['nama_munisi'];
			$sat_munisi = $_POST['sat_munisi'];
			$jmltop_munisi = $_POST['jmltop_munisi'];
			$jmlperslalu_munisi = $_POST['jmlperslalu_munisi'];
			$jmltbh_munisi = $_POST['jmltbh_munisi'];
			$jmlkrg_munisi = $_POST['jmlkrg_munisi'];
			$jmlpersskr_munisi = $_POST['jmlpersskr_munisi'];
			$kondisi_munisi = $_POST['kondisi_munisi'];
			$ket_munisi = $_POST['ket_munisi'];
			$tipe_munisi = $_POST['tipe_munisi'];

			$data = mysql_query(
				"INSERT INTO log_munisi (jm_munisi,nama_munisi,satuan,jumlah_top,jumlah_pers_lalu,jumlah_tambah,jumlah_kurang,jumlah_pers_skr,kondisi,ket,tipe_sat)VALUES(
				'$jm_munisi',
				'$nama_munisi',
				'$sat_munisi',
				'$jmltop_munisi',
				'$jmlperslalu_munisi',
				'$jmltbh_munisi',
				'$jmlkrg_munisi',
				'$jmlpersskr_munisi',
				'$kondisi_munisi',
				'$ket_munisi',
				'$tipe_munisi')"
			)or die(mysql_error());

			if ($data) {
				echo "Sukses";
			} else {
				echo "Gagal";
			}

			break;

		default:
			# code...
			break;

		case 'save_kendinas' :
			$kat_kendinas = $_POST['kat_kendinas'];
			$nm_kendinas = $_POST['nm_kendinas'];
			$nama_kendinas = $_POST['nama_kendinas'];
			$merk_kendinas = $_POST['merk_kendinas'];
			$sat_kendinas = $_POST['sat_kendinas'];
			$rek_kendinas = $_POST['rek_kendinas'];
			$nomesin_kendinas = $_POST['nomesin_kendinas'];
			$nochasis_kendinas = $_POST['nochasis_kendinas'];
			$kondisi_kendinas = $_POST['kondisi_kendinas'];
			$ket_kendinas = $_POST['ket_kendinas'];
			$tipe_kendinas = $_POST['tipe_kendinas'];

			$data = mysql_query(
				"INSERT INTO log_kendinas (kat_kendinas,nm_kendinas,nama_kendinas,merk,satuan,no_rek,no_mesin,no_chasis,kondisi,ket,tipe_sat)VALUES(
				'$kat_kendinas',
				'$nm_kendinas',
				'$nama_kendinas',
				'$merk_kendinas',
				'$sat_kendinas',
				'$rek_kendinas',
				'$nomesin_kendinas',
				'$nochasis_kendinas',
				'$kondisi_kendinas',
				'$ket_kendinas',
				'$tipe_kendinas')"
			)or die(mysql_error());

			if ($data) {
				echo "Sukses";
			} else {
				echo "Gagal";
			}

			break;

		default:
			# code...
			break;

		case 'save_kaporlap' :
			$jm_kaporlap = $_POST['jm_kaporlap'];
			$nama_kaporlap = $_POST['nama_kaporlap'];
			$merk_kaporlap = $_POST['merk_kaporlap'];
			$sat_kaporlap = $_POST['sat_kaporlap'];
			$top_kaporlap = $_POST['top_kaporlap'];
			$jmlnyata_kaporlap = $_POST['jmlnyata_kaporlap'];
			$kondisi_kaporlap = $_POST['kondisi_kaporlap'];
			$selisih_kaporlap = $_POST['selisih_kaporlap'];
			$ket_kaporlap = $_POST['ket_kaporlap'];
			$tipe_kaporlap = $_POST['tipe_kaporlap'];

			$data = mysql_query(
				"INSERT INTO log_kaporlap (jm_kaporlap,nama_kaporlap,merk,satuan,top,jml_nyata,kondisi,selisih,ket,tipe_sat)VALUES(
				'$jm_kaporlap',
				'$nama_kaporlap',
				'$merk_kaporlap',
				'$sat_kaporlap',
				'$top_kaporlap',
				'$jmlnyata_kaporlap',
				'$kondisi_kaporlap',
				'$selisih_kaporlap',
				'$ket_kaporlap',
				'$tipe_kaporlap')"
			)or die(mysql_error());

			if ($data) {
				echo "Sukses";
			} else {
				echo "Gagal";
			}

			break;

		default:
			# code...
			break;

		case 'save_matsus' :
			$jm_matsus = $_POST['jm_matsus'];
			$nama_matsus = $_POST['nama_matsus'];
			$merk_matsus = $_POST['merk_matsus'];
			$sat_matsus = $_POST['sat_matsus'];
			$top_matsus = $_POST['top_matsus'];
			$jmlnyata_matsus = $_POST['jmlnyata_matsus'];
			$kondisi_matsus = $_POST['kondisi_matsus'];
			$selisih_matsus = $_POST['selisih_matsus'];
			$ket_matsus = $_POST['ket_matsus'];
			$tipe_matsus = $_POST['tipe_matsus'];

			$data = mysql_query(
				"INSERT INTO log_matsus (jm_matsus,nama_matsus,merk,satuan,top,jml_nyata,kondisi,selisih,ket,tipe_sat)VALUES(
				'$jm_matsus',
				'$nama_matsus',
				'$merk_matsus',
				'$sat_matsus',
				'$top_matsus',
				'$jmlnyata_matsus',
				'$kondisi_matsus',
				'$selisih_matsus',
				'$ket_matsus',
				'$tipe_matsus')"
			)or die(mysql_error());

			if ($data) {
				echo "Sukses";
			} else {
				echo "Gagal";
			}

			break;

		default:
			# code...
			break;

		case 'save_teknisi' :
			$kat_teknisi = $_POST['kat_teknisi'];
			$nm_teknisi = $_POST['nm_teknisi'];
			$nama_teknisi = $_POST['nama_teknisi'];
			$jml_teknisi = $_POST['jml_teknisi'];
			$sat_teknisi = $_POST['sat_teknisi'];
			$nomat_teknisi = $_POST['nomat_teknisi'];
			$kondisi_teknisi = $_POST['kondisi_teknisi'];
			$ket_teknisi = $_POST['ket_teknisi'];
			$tipe_teknisi = $_POST['tipe_teknisi'];

			$data = mysql_query(
				"INSERT INTO log_teknisi (kat_teknisi,nm_teknisi,nama_teknisi,jumlah,satuan,no_materiil,kondisi,ket,tipe_sat)VALUES(
				'$kat_teknisi',
				'$nm_teknisi',
				'$nama_teknisi',
				'$jml_teknisi',
				'$sat_teknisi',
				'$nomat_teknisi',
				'$kondisi_teknisi',
				'$ket_teknisi',
				'$tipe_teknisi')"
			)or die(mysql_error());

			if ($data) {
				echo "Sukses";
			} else {
				echo "Gagal";
			}

			break;

		default:
			# code...
			break;
		// END SAVE DATA DAMAI

		// DELETE DATA DAMAI
		case 'deletealsatri' :
			$id =$_POST['id'];
			$sql = mysql_query("DELETE FROM log_alsatri WHERE id_alsatri ='".$id."'")or die(mysql_error());  
			 if($sql)  
			 {  
			      echo 'Data Deleted';  
			 }else{
			 	echo "gagal";
			 }
		break;

		case 'deletebangunan' :
			$id =$_POST['id'];
			$sql = mysql_query("DELETE FROM log_pangkalan2 WHERE id_pangkalan ='".$id."'")or die(mysql_error());  
			 if($sql)  
			 {  
			      echo 'Data Deleted';  
			 }else{
			 	echo "gagal";
			 }  
		break;

		case 'deletealhub' :
			$id =$_POST['id'];
			$sql = mysql_query("DELETE FROM log_alhub WHERE id_alhub ='".$id."'")or die(mysql_error());  
			 if($sql)  
			 {  
			      echo 'Data Deleted';  
			 }else{
			 	echo "gagal";
			 }  
		break;

		case 'deleteoptik' :
			$id =$_POST['id'];
			$sql = mysql_query("DELETE FROM log_optik WHERE id_optik ='".$id."'")or die(mysql_error());  
			 if($sql)  
			 {  
			      echo 'Data Deleted';  
			 }else{
			 	echo "gagal";
			 }  
		break;

		case 'deletemunisi' :
			$id =$_POST['id'];
			$sql = mysql_query("DELETE FROM log_munisi WHERE id_munisi ='".$id."'")or die(mysql_error());  
			 if($sql)  
			 {  
			      echo 'Data Deleted';  
			 }else{
			 	echo "gagal";
			 }  
		break;

		case 'deletekendinas' :
			$id =$_POST['id'];
			$sql = mysql_query("DELETE FROM log_kendinas WHERE id_kendinas ='".$id."'")or die(mysql_error());  
			 if($sql)  
			 {  
			      echo 'Data Deleted';  
			 }else{
			 	echo "gagal";
			 }  
		break;

		case 'deletekaporlap' :
			$id =$_POST['id'];
			$sql = mysql_query("DELETE FROM log_kaporlap WHERE id_kaporlap ='".$id."'")or die(mysql_error());  
			 if($sql)  
			 {  
			      echo 'Data Deleted';  
			 }else{
			 	echo "gagal";
			 }  
		break;

		case 'deletematsus' :
			$id =$_POST['id'];
			$sql = mysql_query("DELETE FROM log_matsus WHERE id_matsus ='".$id."'")or die(mysql_error());  
			 if($sql)  
			 {  
			      echo 'Data Deleted';  
			 }else{
			 	echo "gagal";
			 }  
		break;

		case 'deleteteknisi' :
			$id =$_POST['id'];
			$sql = mysql_query("DELETE FROM log_teknisi WHERE id_teknisi ='".$id."'")or die(mysql_error());  
			 if($sql)  
			 {  
			      echo 'Data Deleted';  
			 }else{
			 	echo "gagal";
			 }  
		break;
		// END DELETE DATA DAMAI

		// VIEW DATA DAMAI
		case 'select_alsatri' :
			$sql = "SELECT * FROM kat_alsatri ORDER BY id_kat asc limit 10";
 			$result = mysql_query($sql)or die(mysql_error());
 			echo " <div class='table-responsive'>
                                <table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                    <thead>
                                        <tr class='blue-head'>
                                            <th>No</th>
                                            <th>Jenis Materiil</th>
                                            <th>Merk/Type</th>
                                            <th>Sat</th>
                                            <th>TOP/DSPP</th>
                                            <th>Jumlah Nyata</th>
                                            <th>Kondisi</th>
                                            <th>Selisih</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>";

                                $no=1;
                                while ($data = mysql_fetch_array($result)) {
                                	echo
                                    "<tbody>
                                    	<tr class='blue-head2'>
                                            <th>".$no."</th>
                                            <th>".$data['jenis']."</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                    	</tr>";
                                    	$no++;

                                    $sql1 = "SELECT * FROM log_alsatri INNER JOIN kat_alsatri on log_alsatri.jm_alsatri = kat_alsatri.id_kat where jm_alsatri = ".$data['id_kat']." ORDER BY id_alsatri asc limit 10";  
                                    $result1 = mysql_query($sql1)or die(mysql_error());
                                    while($data = mysql_fetch_array($result1)){
                              			echo "<tr class='odd gradeX'>
                                            <td></td>
                                            <td class='center'>".$data['nama']."</td>
                                            <td class='center'>".$data['merk']."</td>
                                            <td class='center'>".$data['sat']."</td>
                                            <td class='center'>".$data['dspp']."</td>
                                            <td class='center'>".$data['jml_nyata']."</td>
                                            <td class='center'>".$data['kondisi']."</td>
                                            <td class='center'>".$data['selisih']."</td>
                                            <td class='center'>".$data['ket']."</td>
                                            <td id='center'> <button name='btn_delete_damai1' id='btn_delete_damai1' data-id3='".$data['id_alsatri']."'><img src='assets/img/Delete.png' alt='' width='25px' heigh='25px'/></button>
                                            <button name='btn_edit_damai1' id='btn_edit_damai1' data-id4='".$data['id_alsatri']."'><img src='assets/img/edit.png' alt='' width='25px' heigh='25px'/></button>
                                            </td>
                                        </tr>";
                                    }
                                }
                            echo "</tbody>
                                	</table>
                            		</div>";
			break;

		case 'select_bangunan' :

			$sql = "SELECT * FROM kat_pang ORDER BY id_kat asc limit 10";
	        $result = mysql_query($sql)or die(mysql_error());
 			echo " <div class='table-responsive'>
                                <table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                    <thead>
                                        <tr class='blue-head'>
                                            <th>No</th>
                                            <th>Jenis Materiil</th>
                                            <th>TOP</th>
                                            <th>Luas Bangunan</th>
                                            <th>Nyata</th>
                                            <th>Kurang</th>
                                            <th>Kondisi</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>";

                                $no=1;
                                while ($data = mysql_fetch_array($result)) {
                                	echo
                                    "<tbody>
                                    <tr class='blue-head2'>
                                            <th>".$no."</th>
                                            <th>".$data['jenis']."</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>";
                                        $no++;
                              	
                              		$sql1 = "SELECT * FROM log_pangkalan2 INNER JOIN kat_pang on log_pangkalan2.jm_pangkalan = kat_pang.id_kat where jm_pangkalan = ".$data['id_kat']." ORDER BY id_pangkalan asc limit 10";  
		                        	$result1 = mysql_query($sql1)or die(mysql_error());
		                            while($data = mysql_fetch_array($result1)) {
                              			echo "<tr class='odd gradeX'>
                                            <td></td>
                                            <td>".$data['nama']."</td>
                                            <td class='center'>".$data['top']."</td>
                                            <td class='center'>".$data['luas_bangunan']."</td>
                                            <td class='center'>".$data['nyata']."</td>
                                            <td class='center'>".$data['kurang']."</td>
                                            <td class='center'>".$data['kondisi']."</td>
                                            <td class='center'>".$data['ket']."</td>
                                            <td class='center'> <button name='btn_delete_damai2' id='btn_delete_damai2' data-id3='".$data['id_pangkalan']."'><img src='assets/img/Delete.png' alt='' width='25px' heigh='25px'/></button>
                                            <button name='btn_edit_damai2' id='btn_edit_damai2' data-id4='".$data['id_pangkalan']."'><img src='assets/img/edit.png' alt='' width='25px' heigh='25px'/></button>
                                            </td>
                                        </tr>";
                                    }
                              	}

                            echo "</tbody>
                                	</table>
                            		</div>";
			break;

			case 'select_alhub' :

			$sql = "SELECT * FROM kat_alhub ORDER BY id_kat asc limit 10";
 			$result = mysql_query($sql)or die(mysql_error());
 			echo " <div class='table-responsive'>
                                <table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                    <thead>
                                        <tr class='blue-head'>
                                            <th>No</th>
                                            <th>Nomor Kat/Kode</th>
                                            <th>Nama Materiil</th>
                                            <th>Merk/Type</th>
                                            <th>Satuan</th>
                                            <th>No. Senjata</th>
                                            <th>Kondisi</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>";

                                $no=1;
                                while ($data = mysql_fetch_array($result)) {
                                	echo
                                    "<tbody>
                                    <tr class='blue-head2'>
                                            <th>".$no."</th>
                                            <th>".$data['jenis']."</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>";
                                        $no++;
                              	
	                              	$sql1 = "SELECT * FROM log_alhub INNER JOIN kat_alhub on log_alhub.nm_alhub = kat_alhub.id_kat where nm_alhub = ".$data['id_kat']." ORDER BY id_alhub asc limit 10";  
		                            $result1 = mysql_query($sql1)or die(mysql_error());
		                            while($data = mysql_fetch_array($result1)) {
                              			echo "<tr class='odd gradeX'>
                                            <td></td>
                                            <td>".$data['kat_alhub']."</td>
                                            <td>".$data['nama_alhub']."</td>
                                            <td class='center'>".$data['merk']."</td>
                                            <td class='center'>".$data['satuan']."</td>
                                            <td class='center'>".$data['senjata_alhub']."</td>
                                            <td class='center'>".$data['kondisi']."</td>
                                            <td class='center'>".$data['ket']."</td>
                                            <td class='center'> <button name='btn_delete_damai3' id='btn_delete_damai3' data-id3='".$data['id_alhub']."'><img src='assets/img/Delete.png' alt='' width='25px' heigh='25px'/></button>
                                            <button name='btn_edit_damai3' id='btn_edit_damai3' data-id4='".$data['id_alhub']."'><img src='assets/img/edit.png' alt='' width='25px' heigh='25px'/></button>
                                            </td>
                                        </tr>";
                                    }
                              	}

                            echo "</tbody>
                                	</table>
                            		</div>";
			break;

			case 'select_optik' :

			$sql = "SELECT * FROM kat_optik ORDER BY id_kat asc limit 10";
 			$result = mysql_query($sql)or die(mysql_error());
 			echo " <div class='table-responsive'>
                                <table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                    <thead>
                                        <tr class='blue-head'>
                                            <th>No</th>
                                            <th>Nomor Kat/Kode</th>
                                            <th>Nama Materiil</th>
                                            <th>Merk/Type</th>
                                            <th>Satuan</th>
                                            <th>No. Senjata</th>
                                            <th>Kondisi</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>";

                                $no=1;
                                while ($data = mysql_fetch_array($result)) {
                                	echo
                                    "<tbody>
                                    <tr class='blue-head2'>
                                            <th>".$no."</th>
                                            <th>".$data['jenis']."</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>";
                                        $no++;

	                                $sql1 = "SELECT * FROM log_optik INNER JOIN kat_optik on log_optik.nm_optik = kat_optik.id_kat where nm_optik = ".$data['id_kat']." ORDER BY id_optik asc limit 10";  
	                                $result1 = mysql_query($sql1)or die(mysql_error());
	                                while($data = mysql_fetch_array($result1)) {
                              			echo "<tr class='odd gradeX'>
                                            <td></td>
                                            <td>".$data['kat_optik']."</td>
                                            <td>".$data['nama_optik']."</td>
                                            <td class='center'>".$data['merk']."</td>
                                            <td class='center'>".$data['satuan']."</td>
                                            <td class='center'>".$data['senjata_optik']."</td>
                                            <td class='center'>".$data['kondisi']."</td>
                                            <td class='center'>".$data['ket']."</td>
                                            <td class='center'> <button name='btn_delete_damai4' id='btn_delete_damai4' data-id3='".$data['id_optik']."'><img src='assets/img/Delete.png' alt='' width='25px' heigh='25px'/></button>
                                            <button name='btn_edit_damai4' id='btn_edit_damai4' data-id4='".$data['id_optik']."'><img src='assets/img/edit.png' alt='' width='25px' heigh='25px'/></button>
                                            </td>
                                        </tr>";
                                     }
                                }
                            echo "</tbody>
                                	</table>
                            		</div>";
			break;

			case 'select_munisi' :
			if(@$_SESSION['admin'])
	            {
		            $sql1 = "SELECT * FROM log_munisi where jm_munisi = 'MKK' ORDER BY id_munisi asc limit 10";  
				    $sql2 = "SELECT * FROM log_munisi where jm_munisi = 'MKB/Missile' ORDER BY id_munisi asc limit 10";
				}
	        else{
	            if(@$_SESSION['dandahanud'])
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
	             	$sql1 = "SELECT * FROM log_munisi where jm_munisi = 'MKK' and tipe_sat='$usertype' ORDER BY id_munisi asc limit 10";  
				    $sql2 = "SELECT * FROM log_munisi where jm_munisi = 'MKB/Missile' and tipe_sat='$usertype' ORDER BY id_munisi asc limit 10";
	         }
		    // $sql1 = "SELECT * FROM log_munisi where jm_munisi = 'MKK' ORDER BY id_munisi asc limit 10";  
		    // $sql2 = "SELECT * FROM log_munisi where jm_munisi = 'MKB/Missile' ORDER BY id_munisi asc limit 10";
 			$result1 = mysql_query($sql1)or die(mysql_error());  
 			$result2 = mysql_query($sql2)or die(mysql_error());
 			echo " <div class='table-responsive'>
                                <table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                    <thead>
                                        <tr class='blue-head'>
										    <th rowspan=2><center>No</center></th>
										    <th rowspan=2>Jenis Materiil</th>
										    <th rowspan=2>Satuan</th>
										    <th colspan=5><center>Jumlah</center></th>
										    <th rowspan=2>Kondisi</th>
										    <th rowspan=2>Keterangan</th>
										    <th rowspan=2>Aksi</th>
									  	</tr>
									  	<tr class='blue-head'>
										    <th>TOP/DSPP</th>
										    <th>Persediaan Trw Lalu</th>
										    <th>Tambah</th>
										    <th>Kurang</th>
										    <th>Persediaan Sekarang</th>
										 </tr>
                                    </thead>
                                    <tbody>
                                    <tr class='blue-head2'>
                                            <th>1</th>
                                            <th>MKK</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>";
                              	$no=1;
                              	while($data = mysql_fetch_array($result1)){
                              		echo "<tr class='odd gradeX'>
                                            <td></td>
                                            <td>".$data['nama_munisi']."</td>
                                            <td>".$data['satuan']."</td>
                                            <td class='center'>".$data['jumlah_top']."</td>
                                            <td class='center'>".$data['jumlah_pers_lalu']."</td>
                                            <td class='center'>".$data['jumlah_tambah']."</td>
                                            <td class='center'>".$data['jumlah_kurang']."</td>
                                            <td class='center'>".$data['jumlah_pers_skr']."</td>
                                            <td class='center'>".$data['kondisi']."</td>
                                            <td class='center'>".$data['ket']."</td>
                                            <td class='center'> <button name='btn_delete_damai5' id='btn_delete_damai5' data-id3='".$data['id_munisi']."'><img src='assets/img/Delete.png' alt='' width='25px' heigh='25px'/></button>
                                            <button name='btn_edit_damai5' id='btn_edit_damai5' data-id4='".$data['id_munisi']."'><img src='assets/img/edit.png' alt='' width='25px' heigh='25px'/></button>
                                            </td>
                                        </tr>";
                                         $no++;

                              	}
                             echo "		<tr class='blue-head2'>
                                            <th>2</th>
                                            <th>MKB/Missile</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>";

                            	while($data = mysql_fetch_array($result2)){
                              		echo "<tr class='odd gradeX'>
                                            <td></td>
                                            <td>".$data['nama_munisi']."</td>
                                            <td>".$data['satuan']."</td>
                                            <td class='center'>".$data['jumlah_top']."</td>
                                            <td class='center'>".$data['jumlah_pers_lalu']."</td>
                                            <td class='center'>".$data['jumlah_tambah']."</td>
                                            <td class='center'>".$data['jumlah_kurang']."</td>
                                            <td class='center'>".$data['jumlah_pers_skr']."</td>
                                            <td class='center'>".$data['kondisi']."</td>
                                            <td class='center'>".$data['ket']."</td>
                                            <td class='center'> <button name='btn_delete_damai5' id='btn_delete_damai5' data-id3='".$data['id_munisi']."'><img src='assets/img/Delete.png' alt='' width='25px' heigh='25px'/></button>
                                            <button name='btn_edit_damai5' id='btn_edit_damai5' data-id4='".$data['id_munisi']."'><img src='assets/img/edit.png' alt='' width='25px' heigh='25px'/></button>
                                            </td>
                                        </tr>";
                                         $no++;

                              	}
                            echo "</tbody>
                                	</table>
                            		</div>";
			break;

			case 'select_kendinas' :

			$sql = "SELECT * FROM kat_kendinas ORDER BY id_kat asc limit 10";
 			$result = mysql_query($sql)or die(mysql_error());
 			echo " <div class='table-responsive'>
                                <table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                    <thead>
                                        <tr class='blue-head'>
										    <th rowspan=2>No</th>
										    <th rowspan=2>No Kat/Kode</th>
										    <th rowspan=2>Nama Materiil</th>
										    <th rowspan=2>Merk/Type</th>
										    <th rowspan=2>Satuan</th>
										    <th rowspan=2>No. Rek</th>
										    <th colspan=2><center>Nomor</center></th>
										    <th rowspan=2>Kondisi</th>
										    <th rowspan=2>Keterangan</th>
										    <th rowspan=2>Aksi</th>
									  	</tr>
									  	<tr class='blue-head'>
										    <th>Mesin</th>
										    <th>Chasis</th>
										 </tr>
                                    </thead>";

                                $no=1;
                              	while($data = mysql_fetch_array($result)){
                              	echo
                                    "<tbody>
                                    <tr  class='blue-head2'>
                                            <th>".$no."</th>
                                            <th>".$data['jenis']."</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>";
                                        $no++;

                                    $sql1 = "SELECT * FROM log_kendinas INNER JOIN kat_kendinas on log_kendinas.nm_kendinas = kat_kendinas.id_kat where nm_kendinas = ".$data['id_kat']." ORDER BY id_kendinas asc limit 10";  
                                    $result1 = mysql_query($sql1)or die(mysql_error());
                                    while($data = mysql_fetch_array($result1)){
	                              		echo "<tr class='odd gradeX'>
                                            <td></td>
                                            <td>".$data['kat_kendinas']."</td>
                                            <td>".$data['nama_kendinas']."</td>
                                            <td class='center'>".$data['merk']."</td>
                                            <td class='center'>".$data['satuan']."</td>
                                            <td class='center'>".$data['no_rek']."</td>
                                            <td class='center'>".$data['no_mesin']."</td>
                                            <td class='center'>".$data['no_chasis']."</td>
                                            <td class='center'>".$data['kondisi']."</td>
                                            <td class='center'>".$data['ket']."</td>
                                            <td class='center'> <button name='btn_delete_damai6' id='btn_delete_damai6' data-id3='".$data['id_kendinas']."'><img src='assets/img/Delete.png' alt='' width='25px' heigh='25px'/></button>
                                            <button name='btn_edit_damai6' id='btn_edit_damai6' data-id4='".$data['id_kendinas']."'><img src='assets/img/edit.png' alt='' width='25px' heigh='25px'/></button>
                                            </td>
                                        </tr>";
                                    }
                              	}
                             
                            echo "</tbody>
                                	</table>
                            		</div>";
			break;

			case 'select_kaporlap' :
				if(@$_SESSION['admin'])
		            {
			            $sql1 = "SELECT * FROM log_kaporlap where jm_kaporlap = 'Kaporlap' ORDER BY id_kaporlap asc limit 10";  
					    $sql2 = "SELECT * FROM log_kaporlap where jm_kaporlap = 'Kapsus' ORDER BY id_kaporlap asc limit 10";
					    $sql3 = "SELECT * FROM log_kaporlap where jm_kaporlap = 'Kaporsatlap' ORDER BY id_kaporlap asc limit 10";
					}
		        else{
		            if(@$_SESSION['dandahanud'])
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
		             	$sql1 = "SELECT * FROM log_kaporlap where jm_kaporlap = 'Kaporlap' and tipe_sat='$usertype' ORDER BY id_kaporlap asc limit 10";  
					    $sql2 = "SELECT * FROM log_kaporlap where jm_kaporlap = 'Kapsus' and tipe_sat='$usertype' ORDER BY id_kaporlap asc limit 10";
					    $sql3 = "SELECT * FROM log_kaporlap where jm_kaporlap = 'Kaporsatlap' and tipe_sat='$usertype' ORDER BY id_kaporlap asc limit 10";
		         }
		    // $sql1 = "SELECT * FROM log_kaporlap where jm_kaporlap = 'Kaporlap' ORDER BY id_kaporlap asc limit 10";  
		    // $sql2 = "SELECT * FROM log_kaporlap where jm_kaporlap = 'Kapsus' ORDER BY id_kaporlap asc limit 10";
		    // $sql3 = "SELECT * FROM log_kaporlap where jm_kaporlap = 'Kaporsatlap' ORDER BY id_kaporlap asc limit 10";
 			$result1 = mysql_query($sql1)or die(mysql_error());  
 			$result2 = mysql_query($sql2)or die(mysql_error());
 			$result3 = mysql_query($sql3)or die(mysql_error());
 			echo " <div class='table-responsive'>
                                <table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                    <thead>
                                        <tr class='blue-head'>
										    <th>No</th>
										    <th>Jenis Materiil</th>
										    <th>Merk/Type</th>
										    <th>Satuan</th>
										    <th>TOP/DSPP</th>
										    <th>Jumlah Nyata</th>
										    <th>Kondisi</th>
										    <th>Selisih</th>
										    <th>Keterangan</th>
										    <th>Aksi</th>
									  	</tr>
                                    </thead>
                                    <tbody>
                                    	<tr class='blue-head2'>
                                            <th>1</th>
                                            <th>Kaporlap</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>";
                              	$no=1;
                              	while($data = mysql_fetch_array($result1)){
                              		echo "<tr class='odd gradeX'>
                                            <td></td>
                                            <td>".$data['nama_kaporlap']."</td>
                                            <td>".$data['merk']."</td>
                                            <td class='center'>".$data['satuan']."</td>
                                            <td class='center'>".$data['top']."</td>
                                            <td class='center'>".$data['jml_nyata']."</td>
                                            <td class='center'>".$data['kondisi']."</td>
                                            <td class='center'>".$data['selisih']."</td>
                                            <td class='center'>".$data['ket']."</td>
                                            <td class='center'> <button name='btn_delete_damai7' id='btn_delete_damai7' data-id3='".$data['id_kaporlap']."'><img src='assets/img/Delete.png' alt='' width='25px' heigh='25px'/></button>
                                            <button name='btn_edit_damai7' id='btn_edit_damai7' data-id4='".$data['id_kaporlap']."'><img src='assets/img/edit.png' alt='' width='25px' heigh='25px'/></button>
                                            </td>
                                        </tr>";
                                         $no++;

                              	}
                             echo "		<tr class='blue-head2'>
                                            <th>2</th>
                                            <th>Kapsus</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>";

                            	while($data = mysql_fetch_array($result2)){
                              		echo "<tr class='odd gradeX'>
                                            <td></td>
                                            <td>".$data['nama_kaporlap']."</td>
                                            <td>".$data['merk']."</td>
                                            <td class='center'>".$data['satuan']."</td>
                                            <td class='center'>".$data['top']."</td>
                                            <td class='center'>".$data['jml_nyata']."</td>
                                            <td class='center'>".$data['kondisi']."</td>
                                            <td class='center'>".$data['selisih']."</td>
                                            <td class='center'>".$data['ket']."</td>
                                            <td class='center'> <button name='btn_delete_damai7' id='btn_delete_damai7' data-id3='".$data['id_kaporlap']."'><img src='assets/img/Delete.png' alt='' width='25px' heigh='25px'/></button>
                                            <button name='btn_edit_damai7' id='btn_edit_damai7' data-id4='".$data['id_kaporlap']."'><img src='assets/img/edit.png' alt='' width='25px' heigh='25px'/></button>
                                            </td>
                                        </tr>";
                                         $no++;

                              	}
                             echo "		<tr class='blue-head2'>
                                            <th>3</th>
                                            <th>Kaporsatlap</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>";

                            	while($data = mysql_fetch_array($result3)){
                              		echo "<tr class='odd gradeX'>
                                            <td></td>
                                            <td>".$data['nama_kaporlap']."</td>
                                            <td>".$data['merk']."</td>
                                            <td class='center'>".$data['satuan']."</td>
                                            <td class='center'>".$data['top']."</td>
                                            <td class='center'>".$data['jml_nyata']."</td>
                                            <td class='center'>".$data['kondisi']."</td>
                                            <td class='center'>".$data['selisih']."</td>
                                            <td class='center'>".$data['ket']."</td>
                                            <td class='center'> <button name='btn_delete_damai7' id='btn_delete_damai7' data-id3='".$data['id_kaporlap']."'><img src='assets/img/Delete.png' alt='' width='25px' heigh='25px'/></button>
                                            <button name='btn_edit_damai7' id='btn_edit_damai7' data-id4='".$data['id_kaporlap']."'><img src='assets/img/edit.png' alt='' width='25px' heigh='25px'/></button>
                                            </td>
                                        </tr>";
                                         $no++;

                              	}
                            echo "</tbody>
                                	</table>
                            		</div>";
			break;

			case 'select_matsus' :
				
			$sql = "SELECT * FROM kat_matsus ORDER BY id_kat asc limit 10";
 			$result = mysql_query($sql)or die(mysql_error());
 			echo " <div class='table-responsive'>
                                <table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                    <thead>
                                        <tr class='blue-head'>
										    <th>No</th>
										    <th>Jenis Materiil</th>
										    <th>Merk/Type</th>
										    <th>Satuan</th>
										    <th>TOP/DSPP</th>
										    <th>Jumlah Nyata</th>
										    <th>Kondisi</th>
										    <th>Selisih</th>
										    <th>Keterangan</th>
										    <th>Aksi</th>
									  	</tr>
                                    </thead>";

                                $no=1;
                              	while($data = mysql_fetch_array($result)){
                              	echo
                                    "<tbody>
                                    	<tr class='blue-head2'>
                                            <th>".$no."</th>
                                            <th>".$data['jenis']."</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>";
                                        $no++;

	                              	$sql1 = "SELECT * FROM log_matsus INNER JOIN kat_matsus on log_matsus.jm_matsus = kat_matsus.id_kat where jm_matsus = ".$data['id_kat']." ORDER BY id_matsus asc limit 10";  
                                    $result1 = mysql_query($sql1)or die(mysql_error());
                                    while($data = mysql_fetch_array($result1)){
	                              		echo "<tr class='odd gradeX'>
                                            <td></td>
                                            <td>".$data['nama_matsus']."</td>
                                            <td>".$data['merk']."</td>
                                            <td class='center'>".$data['satuan']."</td>
                                            <td class='center'>".$data['top']."</td>
                                            <td class='center'>".$data['jml_nyata']."</td>
                                            <td class='center'>".$data['kondisi']."</td>
                                            <td class='center'>".$data['selisih']."</td>
                                            <td class='center'>".$data['ket']."</td>
                                            <td class='center'> <button name='btn_delete_damai8' id='btn_delete_damai8' data-id3='".$data['id_matsus']."'><img src='assets/img/Delete.png' alt='' width='25px' heigh='25px'/></button>
                                            <button name='btn_edit_damai8' id='btn_edit_damai8' data-id4='".$data['id_matsus']."'><img src='assets/img/edit.png' alt='' width='25px' heigh='25px'/></button>
                                            </td>
                                        </tr>";
                                     }
                              	}
                            
                            echo "</tbody>
                                	</table>
                            		</div>";
			break;

			case 'select_teknisi' :
			
			$sql = "SELECT * FROM kat_teknisi ORDER BY id_kat asc limit 10";
 			$result = mysql_query($sql)or die(mysql_error()); 
 			echo " <div class='table-responsive'>
                                <table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                    <thead>
                                        <tr class='blue-head'>
										    <th>No</th>
										    <th>No Kat/Kode</th>
										    <th>Nama Materiil</th>
										    <th>Jumlah</th>
										    <th>Satuan</th>
										    <th>Nomor Materiil</th>
										    <th>Kondisi</th>
										    <th>Keterangan</th>
										    <th>Aksi</th>
									  	</tr>
                                    </thead>";

                                $no=1;
                              	while($data = mysql_fetch_array($result)){
                              	echo
                                    "<tbody>
                                    	<tr class='blue-head2'>
                                            <th>".$no."</th>
                                            <th>".$data['jenis']."</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>";
                                        $no++;
                              	
                              		$sql1 = "SELECT * FROM log_teknisi INNER JOIN kat_teknisi on log_teknisi.nm_teknisi = kat_teknisi.id_kat where nm_teknisi = ".$data['id_kat']." ORDER BY id_teknisi asc limit 10";  
                                    $result1 = mysql_query($sql1)or die(mysql_error());
                                    while($data = mysql_fetch_array($result1)){
                              		echo "<tr class='odd gradeX'>
                                            <td></td>
                                            <td>".$data['kat_teknisi']."</td>
                                            <td>".$data['nama_teknisi']."</td>
                                            <td class='center'>".$data['jumlah']."</td>
                                            <td class='center'>".$data['satuan']."</td>
                                            <td class='center'>".$data['no_materiil']."</td>
                                            <td class='center'>".$data['kondisi']."</td>
                                            <td class='center'>".$data['ket']."</td>
                                            <td class='center'> <button name='btn_delete_damai9' id='btn_delete_damai9' data-id3='".$data['id_teknisi']."'><img src='assets/img/Delete.png' alt='' width='25px' heigh='25px'/></button>
                                            <button name='btn_edit_damai9' id='btn_edit_damai9' data-id4='".$data['id_teknisi']."'><img src='assets/img/edit.png' alt='' width='25px' heigh='25px'/></button>
                                            </td>
                                        </tr>";
                                     }
                              	}

                            echo "</tbody>
                                	</table>
                            		</div>";
			break;
		// END VIEW DATA DAMAI

		// SELECT EDIT DATA DAMAI
				case 'select_edit_alsatri' :
					$id = $_POST["id"];
				    $sql = "SELECT * FROM log_alsatri INNER JOIN kat_alsatri on log_alsatri.jm_alsatri = kat_alsatri.id_kat WHERE id_alsatri='".$id."'"; 
		 			$result = mysql_query($sql)or die(mysql_error()); 
		 			$rows = array();
					$rows = mysql_fetch_assoc($result);
					echo json_encode($rows, JSON_FORCE_OBJECT);
		 		break;

		 		case 'select_edit_bangunan' :
					$id = $_POST["id"];
				    $sql = "SELECT * FROM log_pangkalan2 INNER JOIN kat_pang on log_pangkalan2.jm_pangkalan = kat_pang.id_kat WHERE id_pangkalan='".$id."'"; 
		 			$result = mysql_query($sql)or die(mysql_error()); 
		 			$rows = array();
					$rows = mysql_fetch_assoc($result);
					echo json_encode($rows, JSON_FORCE_OBJECT);
		 		break;

		 		case 'select_edit_alhub' :
					$id = $_POST["id"];
				    $sql = "SELECT * FROM log_alhub INNER JOIN kat_alhub on log_alhub.nm_alhub = kat_alhub.id_kat WHERE id_alhub='".$id."'"; 
		 			$result = mysql_query($sql)or die(mysql_error()); 
		 			$rows = array();
					$rows = mysql_fetch_assoc($result);
					echo json_encode($rows, JSON_FORCE_OBJECT);
		 		break;

		 		case 'select_edit_optik' :
					$id = $_POST["id"];
				    $sql = "SELECT * FROM log_optik INNER JOIN kat_optik on log_optik.nm_optik = kat_optik.id_kat WHERE id_optik='".$id."'"; 
		 			$result = mysql_query($sql)or die(mysql_error()); 
		 			$rows = array();
					$rows = mysql_fetch_assoc($result);
					echo json_encode($rows, JSON_FORCE_OBJECT);
		 		break;

		 		case 'select_edit_munisi' :
					$id = $_POST["id"];
				    $sql = "SELECT * FROM log_munisi WHERE id_munisi='".$id."'"; 
		 			$result = mysql_query($sql)or die(mysql_error()); 
		 			$rows = array();
					$rows = mysql_fetch_assoc($result);
					echo json_encode($rows, JSON_FORCE_OBJECT);
		 		break;

		 		case 'select_edit_kendinas' :
					$id = $_POST["id"];
				    $sql = "SELECT * FROM log_kendinas INNER JOIN kat_kendinas on log_kendinas.nm_kendinas = kat_kendinas.id_kat WHERE id_kendinas='".$id."'"; 
		 			$result = mysql_query($sql)or die(mysql_error()); 
		 			$rows = array();
					$rows = mysql_fetch_assoc($result);
					echo json_encode($rows, JSON_FORCE_OBJECT);
		 		break;

		 		case 'select_edit_kaporlap' :
					$id = $_POST["id"];
				    $sql = "SELECT * FROM log_kaporlap WHERE id_kaporlap='".$id."'"; 
		 			$result = mysql_query($sql)or die(mysql_error()); 
		 			$rows = array();
					$rows = mysql_fetch_assoc($result);
					echo json_encode($rows, JSON_FORCE_OBJECT);
		 		break;

		 		case 'select_edit_matsus' :
					$id = $_POST["id"];
				    $sql = "SELECT * FROM log_matsus INNER JOIN kat_matsus on log_matsus.jm_matsus = kat_matsus.id_kat WHERE id_matsus='".$id."'"; 
		 			$result = mysql_query($sql)or die(mysql_error()); 
		 			$rows = array();
					$rows = mysql_fetch_assoc($result);
					echo json_encode($rows, JSON_FORCE_OBJECT);
		 		break;

		 		case 'select_edit_teknisi' :
					$id = $_POST["id"];
				    $sql = "SELECT * FROM log_teknisi INNER JOIN kat_teknisi on log_teknisi.nm_teknisi = kat_teknisi.id_kat WHERE id_teknisi='".$id."'"; 
		 			$result = mysql_query($sql)or die(mysql_error()); 
		 			$rows = array();
					$rows = mysql_fetch_assoc($result);
					echo json_encode($rows, JSON_FORCE_OBJECT);
		 		break;
			// END SELECT EDIT DATA DAMAI

			//  SAVE EDIT DATA DAMAI
				case 'edit_alsatri' :
					$id = $_POST["id"];
					$jm_alsatri = $_POST["jm_alsatri"];
					$nama = $_POST["nama_alsatri"];
					$merk = $_POST["merk_alsatri"];
					$sat = $_POST["sat_alsatri"];
					$top = $_POST["top_alsatri"];
					$jml_nyata = $_POST["jml_nyata_alsatri"];
					$kondisi = $_POST["kondisi_alsatri"];
					$sel = $_POST["sel_alsatri"];
					$ket = $_POST["ket_alsatri"];
					$id_alsatri2 = $_POST["id_alsatri2"];

					if ($jm_alsatri == "")
					{
						$sql = mysql_query("UPDATE log_alsatri SET jm_alsatri ='".$id_alsatri2."', nama='".$nama."', merk ='".$merk."', sat ='".$sat."', dspp = '".$top."', jml_nyata = '".$jml_nyata."', kondisi = '".$kondisi."', selisih = '".$sel."', ket = '".$ket."' WHERE id_alsatri='".$id."'");
						 if($sql) 
						 {  
						      echo 'Data Updated';  
						 }
						 else
						 {
						 	echo 'Gagal';
						 }
					}

					else
					{
						$sql = mysql_query("UPDATE log_alsatri SET jm_alsatri ='".$jm_alsatri."', nama='".$nama."', merk ='".$merk."', sat ='".$sat."', dspp = '".$top."', jml_nyata = '".$jml_nyata."', kondisi = '".$kondisi."', selisih = '".$sel."', ket = '".$ket."' WHERE id_alsatri='".$id."'");
						 if($sql) 
						 {  
						      echo 'Data Updated';  
						 }
						 else
						 {
						 	echo 'Gagal';
						 }
					}
					 
				break;

				case 'edit_pangkalan2' :
					$id = $_POST["id"];
					$jm_pang = $_POST["jm_pang"];
					$nama = $_POST["nama_pang"];
					$top = $_POST["top_pang"];
					$lb = $_POST["lb_pang"];
					$nyata = $_POST["nyata_pang"];
					$kurang = $_POST["kurang_pang"];
					$kondisi = $_POST["kondisi_pang"];
					$ket = $_POST["ket_pang"];
					$id_pang2 = $_POST["id_pang2"];

					if ($jm_pang == "")
                    {
                        $sql = mysql_query("UPDATE log_pangkalan2 SET jm_pangkalan ='".$id_pang2."', nama ='".$nama."', top ='".$top."', luas_bangunan ='".$lb."', nyata ='".$nyata."', kurang ='".$kurang."', kondisi ='".$kondisi."', ket ='".$ket."' WHERE id_pangkalan='".$id."'");
                         if($sql) 
                         {  
                              echo 'Data Updated';  
                         }
                         else
                         {
                            echo 'Gagal';
                         }
                    }

                    else
                    {
                        $sql = mysql_query("UPDATE log_pangkalan2 SET jm_pangkalan ='".$jm_pang."', nama ='".$nama."', top ='".$top."', luas_bangunan ='".$lb."', nyata ='".$nyata."', kurang ='".$kurang."', kondisi ='".$kondisi."', ket ='".$ket."' WHERE id_pangkalan='".$id."'");
                         if($sql) 
                         {  
                              echo 'Data Updated';  
                         }
                         else
                         {
                            echo 'Gagal';
                         }
                    }

				break;

				case 'edit_alhub' :
					$id = $_POST["id"];
					$kat_alhub = $_POST["kat_alhub"];
					$nm = $_POST["nm_alhub"];
					$nama = $_POST["nama_alhub"];
					$merk = $_POST["merk_alhub"];
					$sat = $_POST["sat_alhub"];
					$senja = $_POST["senja_alhub"];
					$kondisi = $_POST["kondisi_alhub"];
					$ket = $_POST["ket_alhub"];
					$id_alhub2 = $_POST["id_alhub2"];

					if ($nm == "")
					{
						$sql = mysql_query("UPDATE log_alhub SET kat_alhub ='".$kat_alhub."', nm_alhub ='".$id_alhub2."', nama_alhub ='".$nama."', merk ='".$merk."', satuan='".$sat."', senjata_alhub = '".$senja."', kondisi = '".$kondisi."', ket ='".$ket."' WHERE id_alhub='".$id."'");
						 if($sql) 
						 {  
						      echo 'Data Updated';  
						 }
						 else
						 {
						 	echo 'Gagal';
						 }
					}

					else
					{
						$sql = mysql_query("UPDATE log_alhub SET kat_alhub ='".$kat_alhub."', nm_alhub ='".$nm."', nama_alhub ='".$nama."', merk ='".$merk."', satuan='".$sat."', senjata_alhub = '".$senja."', kondisi = '".$kondisi."', ket ='".$ket."' WHERE id_alhub='".$id."'");
						 if($sql) 
						 {  
						      echo 'Data Updated';  
						 }
						 else
						 {
						 	echo 'Gagal';
						 }
					}

				break;

				case 'edit_optik' :
					$id = $_POST["id"];
					$kat_optik = $_POST["kat_optik"];
					$nm = $_POST["nm_optik"];
					$nama = $_POST["nama_optik"];
					$merk = $_POST["merk_optik"];
					$sat = $_POST["sat_optik"];
					$senja = $_POST["senja_optik"];
					$kondisi = $_POST["kondisi_optik"];
					$ket = $_POST["ket_optik"];
					$id_optik2 = $_POST["id_optik2"];

					if ($nm == "")
					{
						$sql = mysql_query("UPDATE log_optik SET kat_optik ='".$kat_optik."', nm_optik ='".$id_optik2."', nama_optik ='".$nama."', merk ='".$merk."', satuan ='".$sat."', senjata_optik = '".$senja."', kondisi = '".$kondisi."', ket = '".$ket."' WHERE id_optik='".$id."'");
						 if($sql) 
						 {  
						      echo 'Data Updated';  
						 }
						 else
						 {
						 	echo 'Gagal';
						 }
					}

					else
					{
						$sql = mysql_query("UPDATE log_optik SET kat_optik ='".$kat_optik."', nm_optik ='".$nm."', nama_optik ='".$nama."', merk ='".$merk."', satuan ='".$sat."', senjata_optik = '".$senja."', kondisi = '".$kondisi."', ket = '".$ket."' WHERE id_optik='".$id."'");
						 if($sql) 
						 {  
						      echo 'Data Updated';  
						 }
						 else
						 {
						 	echo 'Gagal';
						 }
					}

				break;

				case 'edit_munisi' :
					$id = $_POST["id"];
					$jm_munisi = $_POST["jm_munisi"];
					$nama = $_POST["nama_munisi"];
					$sat = $_POST["sat_munisi"];
					$jmltop = $_POST["jmltop_munisi"];
					$jmlperslalu = $_POST["jmlperslalu_munisi"];
					$jmltbh = $_POST["jmltbh_munisi"];
					$jmlkrg = $_POST["jmlkrg_munisi"];
					$jmlpersskr = $_POST["jmlpersskr_munisi"];
					$kondisi = $_POST["kondisi_munisi"];
					$ket = $_POST["ket_munisi"];
					$sql = mysql_query("UPDATE log_munisi SET jm_munisi ='".$jm_munisi."', nama_munisi ='".$nama."', satuan ='".$sat."', jumlah_top ='".$jmltop."', jumlah_pers_lalu ='".$jmlperslalu."', jumlah_tambah ='".$jmltbh."', jumlah_kurang ='".$jmlkrg."', jumlah_pers_skr ='".$jmlpersskr."', kondisi ='".$kondisi."', ket ='".$ket."' WHERE id_munisi='".$id."'");
					 if($sql) 
					 {  
					      echo 'Data Updated';  
					 }  
				break;

				case 'edit_kendinas' :
					$id = $_POST["id"];
					$kat_kendinas = $_POST["kat_kendinas"];
					$nm = $_POST["nm_kendinas"];
					$nama = $_POST["nama_kendinas"];
					$merk = $_POST["merk_kendinas"];
					$sat = $_POST["sat_kendinas"];
					$rek = $_POST["rek_kendinas"];
					$nomesin = $_POST["nomesin_kendinas"];
					$nochasis = $_POST["nochasis_kendinas"];
					$kondisi = $_POST["kondisi_kendinas"];
					$ket = $_POST["ket_kendinas"];
					$id_kendinas2 = $_POST["id_kendinas2"];

					if ($nm == "")
					{
						$sql = mysql_query("UPDATE log_kendinas SET kat_kendinas ='".$kat_kendinas."', nm_kendinas ='".$id_kendinas2."', nama_kendinas ='".$nama."', merk ='".$merk."', satuan ='".$sat."', no_rek ='".$rek."', no_mesin ='".$nomesin."', no_chasis ='".$nochasis."', kondisi ='".$kondisi."', ket ='".$ket."' WHERE id_kendinas='".$id."'");
						 if($sql) 
						 {  
						      echo 'Data Updated';  
						 }
						 else
						 {
						 	echo 'Gagal';
						 }
					}

					else
					{
						$sql = mysql_query("UPDATE log_kendinas SET kat_kendinas ='".$kat_kendinas."', nm_kendinas ='".$nm."', nama_kendinas ='".$nama."', merk ='".$merk."', satuan ='".$sat."', no_rek ='".$rek."', no_mesin ='".$nomesin."', no_chasis ='".$nochasis."', kondisi ='".$kondisi."', ket ='".$ket."' WHERE id_kendinas='".$id."'");
						 if($sql) 
						 {  
						      echo 'Data Updated';  
						 } 
						 else
						 {
						 	echo 'Gagal';
						 }
					}

				break;

				case 'edit_kaporlap' :
					$id = $_POST["id"];
					$jm_kaporlap = $_POST["jm_kaporlap"];
					$nama = $_POST["nama_kaporlap"];
					$merk = $_POST["merk_kaporlap"];
					$sat = $_POST["sat_kaporlap"];
					$top = $_POST["top_kaporlap"];
					$jmlnyata = $_POST["jmlnyata_kaporlap"];
					$kondisi = $_POST["kondisi_kaporlap"];
					$selisih = $_POST["selisih_kaporlap"];
					$ket = $_POST["ket_kaporlap"];
					$sql = mysql_query("UPDATE log_kaporlap SET jm_kaporlap ='".$jm_kaporlap."', nama_kaporlap ='".$nama."', merk ='".$merk."', satuan ='".$sat."', top ='".$top."', jml_nyata ='".$jmlnyata."', kondisi ='".$kondisi."', selisih ='".$selisih."', ket ='".$ket."' WHERE id_kaporlap='".$id."'");
					 if($sql) 
					 {  
					      echo 'Data Updated';  
					 }  
				break;

				case 'edit_matsus' :
					$id = $_POST["id"];
					$jm_matsus = $_POST["jm_matsus"];
					$nama = $_POST["nama_matsus"];
					$merk = $_POST["merk_matsus"];
					$sat = $_POST["sat_matsus"];
					$top = $_POST["top_matsus"];
					$jmlnyata = $_POST["jmlnyata_matsus"];
					$kondisi = $_POST["kondisi_matsus"];
					$selisih = $_POST["selisih_matsus"];
					$ket = $_POST["ket_matsus"];
					$id_matsus2 = $_POST["id_matsus2"];

					if ($jm_matsus == "")
					{
						$sql = mysql_query("UPDATE log_matsus SET jm_matsus ='".$id_matsus2."', nama_matsus ='".$nama."', merk ='".$merk."', satuan ='".$sat."', top ='".$top."', jml_nyata ='".$jmlnyata."', kondisi ='".$kondisi."', selisih ='".$selisih."', ket ='".$ket."' WHERE id_matsus='".$id."'");
						 if($sql) 
						 {  
						      echo 'Data Updated';  
						 }
						 else
						 {
						 	echo 'Gagal';
						 }
					}

					else
					{
						$sql = mysql_query("UPDATE log_matsus SET jm_matsus ='".$jm_matsus."', nama_matsus ='".$nama."', merk ='".$merk."', satuan ='".$sat."', top ='".$top."', jml_nyata ='".$jmlnyata."', kondisi ='".$kondisi."', selisih ='".$selisih."', ket ='".$ket."' WHERE id_matsus='".$id."'");
						 if($sql) 
						 {  
						      echo 'Data Updated';  
						 } 
						 else
						 {
						 	echo 'Gagal';
						 }
					}

				break;

				case 'edit_teknisi' :
					$id = $_POST["id"];
					$kat_teknisi = $_POST["kat_teknisi"];
					$nm = $_POST["nm_teknisi"];
					$nama = $_POST["nama_teknisi"];
					$jml = $_POST["jml_teknisi"];
					$sat = $_POST["sat_teknisi"];
					$nomat = $_POST["nomat_teknisi"];
					$kondisi = $_POST["kondisi_teknisi"];
					$ket = $_POST["ket_teknisi"];
					$id_teknisi2 = $_POST["id_teknisi2"];

					if ($nm == "")
					{
						$sql = mysql_query("UPDATE log_teknisi SET kat_teknisi ='".$kat_teknisi."', nm_teknisi ='".$id_teknisi2."', nama_teknisi ='".$nama."', jumlah ='".$jml."', satuan ='".$sat."', no_materiil ='".$nomat."', kondisi ='".$kondisi."', ket ='".$ket."' WHERE id_teknisi='".$id."'");
						 if($sql) 
						 {  
						      echo 'Data Updated';  
						 }
						 else
						 {
						 	echo 'Gagal';
						 }
					}

					else
					{
						$sql = mysql_query("UPDATE log_teknisi SET kat_teknisi ='".$kat_teknisi."', nm_teknisi ='".$nm."', nama_teknisi ='".$nama."', jumlah ='".$jml."', satuan ='".$sat."', no_materiil ='".$nomat."', kondisi ='".$kondisi."', ket ='".$ket."' WHERE id_teknisi='".$id."'");
						 if($sql) 
						 {  
						      echo 'Data Updated';  
						 } 
						 else
						 {
						 	echo 'Gagal';
						 }
					}

				break;
			// END SAVE EDIT DATA DAMAI

	//AKHIR DAMAI

	//JENIS KATEGORI LOGISTIK
		case 'save_jenis_makanan' :
			$jenis_makanan = $_POST['jenis_makanan'];
			$data1 = mysql_query(
				"INSERT INTO kat_makanan(jenis) VALUES(
				'$jenis_makanan')"
			)or die(mysql_error());

			if ($data1) {
				echo "data sudah disimpan";
			} else {
				echo "Gagal";
			}
			break;

		case 'save_jenis_kaporsatlap' :
			$jenis_nama2 = $_POST['jenis_nama2'];
			$data1 = mysql_query(
				"INSERT INTO kat_alkapsat(jenis) VALUES(
				'$jenis_nama2')"
			)or die(mysql_error());

			if ($data1) {
				echo "data sudah disimpan";
			} else {
				echo "Gagal";
			}
			break;

		case 'save_jenis_bmp' :
			$jenis_bmp = $_POST['jenis_bmp'];
			$data1 = mysql_query(
				"INSERT INTO kat_bmp(jenis) VALUES(
				'$jenis_bmp')"
			)or die(mysql_error());

			if ($data1) {
				echo "data sudah disimpan";
			} else {
				echo "Gagal";
			}
			break;

		case 'save_jenis_muhandak' :
			$jenis_muhandak = $_POST['jenis_muhandak'];
			$data1 = mysql_query(
				"INSERT INTO kat_muhandak(jenis) VALUES(
				'$jenis_muhandak')"
			)or die(mysql_error());

			if ($data1) {
				echo "data sudah disimpan";
			} else {
				echo "Gagal";
			}
			break;

		case 'save_jenis_alsatri' :
			$jenis_alsatri = $_POST['jenis_alsatri'];
			$data1 = mysql_query(
				"INSERT INTO kat_alsatri(jenis) VALUES(
				'$jenis_alsatri')"
			)or die(mysql_error());

			if ($data1) {
				echo "data sudah disimpan";
			} else {
				echo "Gagal";
			}
			break;

		case 'save_jenis_optik' :
			$jenis_optik = $_POST['jenis_optik'];
			$data1 = mysql_query(
				"INSERT INTO kat_optik(jenis) VALUES(
				'$jenis_optik')"
			)or die(mysql_error());

			if ($data1) {
				echo "data sudah disimpan";
			} else {
				echo "Gagal";
			}
			break;

		case 'save_jenis_kendinas' :
			$jenis_kendinas = $_POST['jenis_kendinas'];
			$data1 = mysql_query(
				"INSERT INTO kat_kendinas(jenis) VALUES(
				'$jenis_kendinas')"
			)or die(mysql_error());

			if ($data1) {
				echo "data sudah disimpan";
			} else {
				echo "Gagal";
			}
			break;

		case 'save_jenis_matsus' :
			$jenis_matsus = $_POST['jenis_matsus'];
			$data1 = mysql_query(
				"INSERT INTO kat_matsus(jenis) VALUES(
				'$jenis_matsus')"
			)or die(mysql_error());

			if ($data1) {
				echo "data sudah disimpan";
			} else {
				echo "Gagal";
			}
			break;

		case 'save_jenis_teknisi' :
			$jenis_teknisi = $_POST['jenis_teknisi'];
			$data1 = mysql_query(
				"INSERT INTO kat_teknisi(jenis) VALUES(
				'$jenis_teknisi')"
			)or die(mysql_error());

			if ($data1) {
				echo "data sudah disimpan";
			} else {
				echo "Gagal";
			}
			break;

		case 'save_jenis_alhub' :
			$jenis_alhub = $_POST['jenis_alhub'];
			$data1 = mysql_query(
				"INSERT INTO kat_alhub(jenis) VALUES(
				'$jenis_alhub')"
			)or die(mysql_error());

			if ($data1) {
				echo "data sudah disimpan";
			} else {
				echo "Gagal";
			}
			break;

		case 'save_jenis_pang' :
			$jenis_pang = $_POST['jenis_pang'];
			$data1 = mysql_query(
				"INSERT INTO kat_pang(jenis) VALUES(
				'$jenis_pang')"
			)or die(mysql_error());

			if ($data1) {
				echo "data sudah disimpan";
			} else {
				echo "Gagal";
			}
			break;
	//AKHIR JENIS KATEGORI LOGISTIK

	//SELECT JENIS KATEGORI LOGISTIK
		case 'select_kat_makanan' :
			$sql = "SELECT * FROM kat_makanan";
			$result = mysql_query($sql)or die(mysql_error());

			while($data = mysql_fetch_array($result))
			{
				echo "<option value=".$data['id_kat'].">".$data['jenis']."</option>";
			}
			break;

		case 'select_kat_kaporsatlap' :
			$sql = "SELECT * FROM kat_alkapsat";
			$result = mysql_query($sql)or die(mysql_error());

			while($data = mysql_fetch_array($result))
			{
				echo "<option value=".$data['id_kat'].">".$data['jenis']."</option>";
			}
			break;

		case 'select_kat_bmp' :
			$sql = "SELECT * FROM kat_bmp";
			$result = mysql_query($sql)or die(mysql_error());

			while($data = mysql_fetch_array($result))
			{
				echo "<option value=".$data['id_kat'].">".$data['jenis']."</option>";
			}
			break;

		case 'select_kat_muhandak' :
			$sql = "SELECT * FROM kat_muhandak";
			$result = mysql_query($sql)or die(mysql_error());

			while($data = mysql_fetch_array($result))
			{
				echo "<option value=".$data['id_kat'].">".$data['jenis']."</option>";
			}
			break;

		case 'select_kat_alsatri' :
			$sql = "SELECT * FROM kat_alsatri";
			$result = mysql_query($sql)or die(mysql_error());

			while($data = mysql_fetch_array($result))
			{
				echo "<option value=".$data['id_kat'].">".$data['jenis']."</option>";
			}
			break;

		case 'select_kat_optik' :
			$sql = "SELECT * FROM kat_optik";
			$result = mysql_query($sql)or die(mysql_error());

			while($data = mysql_fetch_array($result))
			{
				echo "<option value=".$data['id_kat'].">".$data['jenis']."</option>";
			}
			break;

		case 'select_kat_kendinas' :
			$sql = "SELECT * FROM kat_kendinas";
			$result = mysql_query($sql)or die(mysql_error());

			while($data = mysql_fetch_array($result))
			{
				echo "<option value=".$data['id_kat'].">".$data['jenis']."</option>";
			}
			break;

		case 'select_kat_matsus' :
			$sql = "SELECT * FROM kat_matsus";
			$result = mysql_query($sql)or die(mysql_error());

			while($data = mysql_fetch_array($result))
			{
				echo "<option value=".$data['id_kat'].">".$data['jenis']."</option>";
			}
			break;

		case 'select_kat_teknisi' :
			$sql = "SELECT * FROM kat_teknisi";
			$result = mysql_query($sql)or die(mysql_error());

			while($data = mysql_fetch_array($result))
			{
				echo "<option value=".$data['id_kat'].">".$data['jenis']."</option>";
			}
			break;

		case 'select_kat_alhub' :
			$sql = "SELECT * FROM kat_alhub";
			$result = mysql_query($sql)or die(mysql_error());

			while($data = mysql_fetch_array($result))
			{
				echo "<option value=".$data['id_kat'].">".$data['jenis']."</option>";
			}
			break;

		case 'select_kat_pang' :
			$sql = "SELECT * FROM kat_pang";
			$result = mysql_query($sql)or die(mysql_error());

			while($data = mysql_fetch_array($result))
			{
				echo "<option value=".$data['id_kat'].">".$data['jenis']."</option>";
			}
			break;
	//AKHIR SELECT JENIS KATEGORI LOGISTIK

			// ------------ Query untuk personel --------
		case 'save_personel' :
			$nama = $_POST['nama'];
            $pangkat = $_POST['pangkat'];
            $nrp = $_POST['nrp'];
            $jabatan = $_POST['jabatan'] . ' ' . $_POST['jabtingkat4']. ' ' . $_POST['jabtingkat3']. ' ' . $_POST['jabtingkat2']. ' ' . $_POST['jabtingkat1'];
            $tmtjab = $_POST['tmtjab'];
            $golongan = $_POST['golongan'];
            $alamat = $_POST['alamat'];
            $tlp = $_POST['tlp'];
            $email = $_POST['email'];
            $tgl = $_POST['tgl'];
            $tmp = $_POST['tmp'];
            $kategori = $_POST['kategori'];
            $tmtktg = $_POST['tmtktg'];
            $sumber = $_POST['sumber'];
            $gol = $_POST['gol'];
            $tmttni = $_POST['tmttni'];
            $suku = $_POST['suku'];
            $agama = $_POST['agama'];
            $kualpsi = $_POST['kualpsi'];
            $klaspsi = $_POST['klaspsi'];
            $status = $_POST['status'];
            $tipe_per = $_POST['tipe_per'];

            $lokasi_file = $_FILES['file']['tmp_name'];
			$tipe_file = $_FILES['file']['type'];
			$foto = $_FILES['file']['name'];
			$direktori = "assets/img/$foto";

			// if (!empty($lokasi_file))
			// {
			move_uploaded_file($lokasi_file,$direktori);
			$data1 = mysql_query(
				"INSERT INTO pers_data_personil(nama_lengkap,pangkat,nrp,jabatan,tmt_jabatan,golongan,alamat,tlp,email,tgl_lahir,tpt_lahir,kategori,tmt_kategori,sumber_pa_ba,goldar,tmt_tni,suku_bangsa,agama,kual_psi,klas_psi,status,foto,tipe)VALUES(
				'$nama',
				'$pangkat',
				'$nrp',
				'$jabatan',
				'$tmtjab',
				'$golongan',
				'$alamat',
				'$tlp',
				'$email',
				'$tgl',
				'$tmp',
				'$kategori',
				'$tmtktg',
				'$sumber',
				'$gol',
				'$tmttni',
				'$suku',
				'$agama',
				'$kualpsi',
				'$klaspsi',
				'$status',
				'$foto',
				'$tipe_per')"
			)or die(mysql_error());

			if ($data1) {
				header("location:page-personil.php");
			} else {
				echo "Gagal";
			}
			break;

			case 'hapuspersonel' :
			$id =$_POST['id'];
			$sql = mysql_query("DELETE FROM pers_data_personil WHERE id_data_personil ='".$id."'")or die(mysql_error());  
			 if($sql)  
			 {  
			      echo 'Data Sudah Dihapus';  
			 }else{
			 	echo "gagal";
			 }
            
            
			break;
			
			case 'select_datapokok' :
			$id =$_POST['id'];
		    $sql = "SELECT * FROM pers_data_personil WHERE nrp ='".$id."'";  
 			$result = mysql_query($sql)or die(mysql_error());  
 			echo "<table class='table table-striped table-bordered table-hover'>";
 			while($data = mysql_fetch_array($result)){
                 echo "
                    <tr>
                                        <td>Nama</td>
                                            <td id='nama_pokok' contenteditable>".$data['nama_lengkap']."</td>
                                        </tr>
                                        <tr>
                                            <td>Pangkat/korps</td>
                                            <td id='pangkat_pokok' contenteditable>".$data['pangkat']."</td>
                                        </tr>
                                        <tr>
                                            <td>Nrp</td>
                                            <td id='nrp_pokok'>".$data['nrp']."</td>
                                        </tr>
                                        <tr>
                                            <td>Jabatan</td>
                                            <td id='jab_pokok' contenteditable>".$data['jabatan']."</td>
                                        </tr>
                                        <tr>
                                            <td>TMT Jabatan</td>
                                            <td id='tmtjab_pokok' contenteditable>".$data['tmt_jabatan']."</td>
                                        </tr>
                                        <tr>
                                            <td>Golongan</td>
                                            <td id='golongan' contenteditable>".$data['golongan']."</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td id='alamat' contenteditable>".$data['alamat']."</td>
                                        </tr>
                                        <tr>
                                            <td>Telepon/HP</td>
                                            <td id='tlp' contenteditable>".$data['tlp']."</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td id='email' contenteditable>".$data['email']."</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Lahir</td>
                                            <td id='tgl_pokok' contenteditable>".$data['tgl_lahir']."</td>
                                        </tr>
                                        <tr>
                                            <td>Tempat Lahir</td>
                                            <td id='tmp_pokok' contenteditable>".$data['tpt_lahir']."</td>
                                        </tr>
                                        <tr>
                                            <td>Kategori</td>
                                            <td id='ktg_pokok' contenteditable>".$data['kategori']."</td>
                                        </tr>
                                        <tr>
                                            <td>TMT Kategori</td>
                                            <td id='tmtkat_pokok' contenteditable>".$data['tmt_kategori']."</td>
                                        </tr>
                                        <tr>
                                            <td>Sumber Pa/Ba</td>
                                            <td id='sumber_pokok' contenteditable>".$data['sumber_pa_ba']."</td>
                                        </tr>
                                        <tr>
                                            <td>Golongan Darah</td>
                                            <td id='gol_pokok' contenteditable>".$data['goldar']."</td>
                                        </tr>
                                        <tr>
                                            <td>TMT TNI</td>
                                            <td id='tmttni_pokok' contenteditable>".$data['tmt_tni']."</td>
                                        </tr>
                                        <tr>
                                            <td>Suku Bangsa</td>
                                            <td id='suku_pokok' contenteditable>".$data['suku_bangsa']."</td>
                                        </tr>
                                        <tr>
                                            <td>Agama</td>
                                            <td id='agama_pokok' contenteditable>".$data['agama']."</td>
                                        </tr>
                                        <tr>
                                            <td>Kual. PSI</td>
                                            <td id='kual_pokok' contenteditable>".$data['kual_psi']."</td>
                                        </tr>
                                        <tr>
                                            <td>Klas. PSI</td>
                                            <td id='klas_pokok' contenteditable>".$data['klas_psi']."</td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td id='status_pokok' contenteditable>".$data['status']."</td>
                                        </tr>
                                        <tr>
                                        	<td colspan='2' style='text-align:right;'><a href=formeditbarang.php?no=".$data['id_data_personil']."><button>Edit</button></a></tr>
                                        </tr>
                                        "


                    ;
                  }

                echo "</table>";
			break;

			case 'editdatapokok' :
			$id_per = $_POST['id_per'];
			$nama_e = $_POST['nama_e'];
            $pangkat_e = $_POST['pangkat_e'];
            $nrp_e = $_POST['nrp_e'];
            $jabatan_e = $_POST['jabatan_e'] . ' ' . $_POST['jabtingkat4_e']. ' ' . $_POST['jabtingkat3_e']. ' ' . $_POST['jabtingkat2_e']. ' ' . $_POST['jabtingkat1_e'];
            $tmtjab_e = $_POST['tmtjab_e'];
            $golongan_e = $_POST['golongan_e'];
            $alamat_e = $_POST['alamat_e'];
            $tlp_e = $_POST['tlp_e'];
            $email_e = $_POST['email_e'];
            $tgl_e = $_POST['tgl_e'];
            $tmp_e = $_POST['tmp_e'];
            $kategori_e = $_POST['kategori_e'];
            $tmtktg_e = $_POST['tmtktg_e'];
            $sumber_e = $_POST['sumber_e'];
            $gol_e = $_POST['gol_e'];
            $tmttni_e = $_POST['tmttni_e'];
            $suku_e = $_POST['suku_e'];
            $agama_e = $_POST['agama_e'];
            $kualpsi_e = $_POST['kualpsi_e'];
            $klaspsi_e = $_POST['klaspsi_e'];
            $status_e = $_POST['status_e'];

            $lokasi_file = $_FILES['file_e']['tmp_name'];
			$tipe_file = $_FILES['file_e']['type'];
			$foto = $_FILES['file_e']['name'];
			$direktori = "assets/img/$foto";

			
				move_uploaded_file($lokasi_file,$direktori);
			$sql = mysql_query("UPDATE pers_data_personil SET nama_lengkap='".$nama_e."',pangkat ='".$pangkat_e."', nrp='".$nrp_e."',jabatan='".$jabatan_e."',tmt_jabatan='".$tmtjab_e."',golongan='".$golongan_e."',alamat='".$alamat_e."',tlp='".$tlp_e."',email='".$email_e."',tgl_lahir='".$tgl_e."',tpt_lahir='".$tmp_e."',kategori='".$kategori_e."',tmt_kategori='".$tmtktg_e."',sumber_pa_ba='".$sumber_e."',goldar='".$gol_e."',tmt_tni='".$tmttni_e."',suku_bangsa='".$suku_e."',agama='".$agama_e."',kual_psi='".$kualpsi_e."',klas_psi='".$klaspsi_e."',status='".$status_e."' WHERE id_data_personil='".$id_per."'")or die(mysql_error());

			 if ($sql) {
				header("location:page-personil.php");
			} else {
				echo "Gagal";
			}

			break;

			case 'select_kat_jabtingkat4' :
			$sql = "SELECT * FROM kat_jabatan where tingkat = 4";
			$result = mysql_query($sql)or die(mysql_error());
			echo "<option></option>";	
			while($data = mysql_fetch_array($result))
			{
				echo "<option value='".$data['pangkat']."'>".$data['pangkat']."</option>";
			}
			break;

			case 'select_kat_jabtingkat3' :
			$sql = "SELECT * FROM kat_jabatan where tingkat = 3";
			$result = mysql_query($sql)or die(mysql_error());
			echo "<option></option>";	
			while($data = mysql_fetch_array($result))
			{
				echo "<option value='".$data['pangkat']."'>".$data['pangkat']."</option>";
			}
			break;

			case 'select_kat_jabtingkat2' :
			$sql = "SELECT * FROM kat_jabatan where tingkat = 2";
			$result = mysql_query($sql)or die(mysql_error());
			echo "<option></option>";	
			while($data = mysql_fetch_array($result))
			{
				echo "<option value='".$data['pangkat']."'>".$data['pangkat']."</option>";
			}
			break;

			case 'save_tingkat4' :
			$tingkat4 = $_POST['tingkat4'];
			$tingkat5 = 'ron1';
			$data1 = mysql_query(
				"INSERT INTO kat_jabatan(tingkat,pangkat) VALUES(
				'4',
				'$tingkat4')"
			)or die(mysql_error());

			if ($data1) {
				echo "data sudah disimpan";
			} else {
				echo "Gagal";
			}
			break;

			case 'save_tingkat3' :
			$tingkat3 = $_POST['tingkat3'];
			$data1 = mysql_query(
				"INSERT INTO kat_jabatan(tingkat,pangkat) VALUES(
				'3',
				'$tingkat3')"
			)or die(mysql_error());

			if ($data1) {
				echo "data sudah disimpan";
			} else {
				echo "Gagal";
			}
			break;

			case 'save_tingkat2' :
			$tingkat2 = $_POST['tingkat2'];
			$data1 = mysql_query(
				"INSERT INTO kat_jabatan(tingkat,pangkat) VALUES(
				'2',
				'$tingkat2')"
			)or die(mysql_error());

			if ($data1) {
				echo "data sudah disimpan";
			} else {
				echo "Gagal";
			}
			break;

			case 'select_pddk' :
			$nrp =$_POST['nrp'];
		    $sql = "SELECT * FROM pers_dik WHERE nrp ='".$nrp."' and kategori ='umum'";
		    $sql2 = "SELECT * FROM pers_dik WHERE nrp ='".$nrp."' and kategori ='bangum'";
		    $sql3 = "SELECT * FROM pers_dik WHERE nrp ='".$nrp."' and kategori ='bangspes'";  
 			$result = mysql_query($sql)or die(mysql_error());  
 			$result2 = mysql_query($sql2)or die(mysql_error());  
 			$result3 = mysql_query($sql3)or die(mysql_error());  
 			echo "<table class='table table-striped table-bordered table-hover'>
 				 <tr>
                    <td colspan='3' class='title-fix'><b>PENDIDIKAN UMUM</b></td>
                 </tr>
 			";
 			while($data = mysql_fetch_array($result)){
                 echo "<tr>
                        <td>
							<select class='nama_pddk' data-id1='".$data['id_dik']."' style='width: 150px;height: 30px;'>
                        		<option value='".$data['nama']."'>".$data['nama']."</option>
	                        	<option value='SD'>SD</option>
	                        	<option value='SMP'>SMP</option>
	                        	<option value='SMA'>SMA</option>
	                        	<option value='SMK'>SMK</option>
	                        	<option value='D3'>D3</option>
	                        	<option value='D4'>D4</option>
	                        	<option value='S1'>S1</option>
	                        	<option value='S2'>S2</option>
                        	</select>

                        </td>
                        <td class='thn_pddk' data-id2='".$data['id_dik']."' contenteditable>".$data['tahun']."</td>
                        <td><button name='del_pddk' class='del_pddk btn btn-primary btn-circle' data-id8='".$data['id_dik']."'>X</button</td>
                       </tr>
                   ";
                  }
                  echo "<tr>
                        <td>
                        	<select id='add_nama_pddk'style='width: 150px;height: 30px;'>
                        		<option value=''></option>
	                        	<option value='SD'>SD</option>
	                        	<option value='SMP'>SMP</option>
	                        	<option value='SMA'>SMA</option>
	                        	<option value='SMK'>SMK</option>
	                        	<option value='D3'>D3</option>
	                        	<option value='D4'>D4</option>
	                        	<option value='S1'>S1</option>
	                        	<option value='S2'>S2</option>
                        	</select>
                        </td>
                        <td id='add_thn_pddk' contenteditable></td>
                        <td><button name='add_pddk' id='add_pddk' class='btn btn-warning btn-circle'>+</button</td>
                       </tr>
                   ";
            echo "<tr>
                    <td colspan='3' class='title-fix'><b>DIKMA/DIKBANGUM</b></td>
                 </tr>";
            while($data2 = mysql_fetch_array($result2)){
                 echo "<tr>
                        <td>
                        <select class='nama_pddk' data-id1='".$data2['id_dik']."' style='width: 150px;height: 30px;'>
	                        	<option value='".$data2['nama']."'>".$data2['nama']."</option>
	                        	<option value='Akmil'>Akmil</option>
	                        	<option value='Semapa PK'>Semapa PK</option>
	                        	<option value='Dikmata PK'>Dikmata PK</option>
	                        	<option value='Dikmaba PK'>Dikmaba PK</option>
	                        	<option value='Diktukpa'>Diktukpa</option>
	                        	<option value='Diktukba'>Diktukba</option>
	                        	<option value='Diksarcab'>Diksarcab</option>
	                        	<option value='Diklapa I'>Diklapa I</option>
	                        	<option value='Diklapa II'>Diklapa II</option>
	                        	<option value='Seskoad'>Seskoad</option>
	                        	<option value='Sesko TNI'>Sesko TNI</option>
	                        	<option value='Lemhanas'>Lemhanas</option>
                        	</select>
                        </td>
                        <td class='thn_pddk' data-id2='".$data2['id_dik']."' contenteditable>".$data2['tahun']."</td>
                        <td><button name='del_pddk' class='del_pddk btn btn-primary btn-circle' data-id8='".$data2['id_dik']."'>X</button</td>
                       </tr>
                   ";
                  }
                  echo "<tr>
                        <td>
                        <select id='b_nama_pddk' style='width: 150px;height: 30px;'>
	                        	<option value=''></option>
	                        	<option value='Akmil'>Akmil</option>
	                        	<option value='Semapa PK'>Semapa PK</option>
	                        	<option value='Dikmata PK'>Dikmata PK</option>
	                        	<option value='Dikmaba PK'>Dikmaba PK</option>
	                        	<option value='Diktukpa'>Diktukpa</option>
	                        	<option value='Diktukba'>Diktukba</option>
	                        	<option value='Diksarcab'>Diksarcab</option>
	                        	<option value='Diklapa I'>Diklapa I</option>
	                        	<option value='Diklapa II'>Diklapa II</option>
	                        	<option value='Seskoad'>Seskoad</option>
	                        	<option value='Sesko TNI'>Sesko TNI</option>
	                        	<option value='Lemhanas'>Lemhanas</option>
                        	</select>
                        </td>
                        <td id='b_thn_pddk' contenteditable></td>
                        <td><button name='add_pddk' id='add_pddk_bangum' class='btn btn-warning btn-circle'>+</button</td>
                       </tr>
                   ";
             echo "<tr>
                    <td colspan='3' class='title-fix'><b>DIKBANGSPERS</b></td>
                 </tr>";
              while($data3 = mysql_fetch_array($result3)){
                 echo "<tr>
                        <td class='nama_pddk' data-id1='".$data3['id_dik']."' contenteditable>".$data3['nama']."</td>
                        <td class='thn_pddk' data-id2='".$data3['id_dik']."' contenteditable>".$data3['tahun']."</td>
                        <td><button name='del_pddk' class='del_pddk btn btn-primary btn-circle' data-id8='".$data3['id_dik']."'>X</button</td>
                       </tr>
                   ";
                  }
                  echo "<tr>
                        <td>
                        <select id='bang_nama_pddk' name='bang_nama_pddk' style='width: 150px;height: 20px;'></select>
                        <input id='dikbanginput'  name='dikbanginput'>
                        <button name='add_dikbang' id='add_dikbang' class='btn btn-warning btn-circle'>+</button></td>
                        <td id='bang_thn_pddk' contenteditable></td>
                        <td><button name='add_pddk' id='add_pddk_bang' class='btn btn-warning btn-circle'>+</button</td>
                       </tr>
                   ";

                echo "</table>";
			break;

			case 'save_dikbanginput' :
			$dikbanginput = $_POST['dikbanginput'];
			$data1 = mysql_query(
				"INSERT INTO kat_dikbangspers(jenis_dikbang) VALUES(
				'$dikbanginput')"
			)or die(mysql_error());

			if ($data1) {
				echo "data sudah disimpan";
			} else {
				echo "Gagal";
			}
			break;


			case 'save_pddk_umum' :
			$nama_pddk = $_POST['nama_pddk'];
			$thn_pddk = $_POST['thn_pddk'];
			$nrp = $_POST['nrp'];
			$data1 = mysql_query(
				"INSERT INTO pers_dik(kategori,nama,tahun,nrp) VALUES(
				'umum',
				'$nama_pddk',
				'$thn_pddk',
				'$nrp')"
			)or die(mysql_error());

			if ($data1) {
				echo "data sudah disimpan";
			} else {
				echo "Gagal";
			}
			break;

			case 'save_pddk_bangum' :
			$nama_pddk = $_POST['nama_pddk'];
			$thn_pddk = $_POST['thn_pddk'];
			$nrp = $_POST['nrp'];
			$data1 = mysql_query(
				"INSERT INTO pers_dik(kategori,nama,tahun,nrp) VALUES(
				'bangum',
				'$nama_pddk',
				'$thn_pddk',
				'$nrp')"
			)or die(mysql_error());

			if ($data1) {
				echo "data sudah disimpan bangum";
			} else {
				echo "Gagal";
			}

			break;

			case 'save_pddk_bangspes' :
			$nama_pddk = $_POST['nama_pddk'];
			$thn_pddk = $_POST['thn_pddk'];
			$nrp = $_POST['nrp'];
			$data1 = mysql_query(
				"INSERT INTO pers_dik(kategori,nama,tahun,nrp) VALUES(
				'bangspes',
				'$nama_pddk',
				'$thn_pddk',
				'$nrp')"
			)or die(mysql_error());

			if ($data1) {
				echo "data sudah disimpan bangspes";
			} else {
				echo "Gagal";
			}

			break;

			case 'select_kat_dikbang' :
			$sql = "SELECT * FROM kat_dikbangspers";
			$result = mysql_query($sql)or die(mysql_error());
			echo "<option></option>";	
			while($data = mysql_fetch_array($result))
			{
				echo "<option value=".$data['jenis_dikbang'].">".$data['jenis_dikbang']."</option>";
			}
			break;


			case 'edit_pddk' :
			 $id = $_POST["id"];  
			 $text = $_POST["text"];  
			 $column_name = $_POST["column_name"];  
			 $sql = "UPDATE pers_dik SET ".$column_name."='".$text."' WHERE id_dik='".$id."'"; 
			 $data = mysql_query($sql)or die(mysql_error());
			 if($data)  
			 {  
			      echo 'Data Updated';  
			 } 
			break;

			case 'hapus_pddk' :
			$id =$_POST['id'];
			$sql = mysql_query("DELETE FROM pers_dik WHERE id_dik ='".$id."'")or die(mysql_error());  
			 if($sql)  
			 {  
			      echo 'Data Deleted';  
			 }else{
			 	echo "gagal";
			 }
            
            
			break;

			case 'select_bahasa' :
			$nrp =$_POST['nrp'];
		    $sql = "SELECT * FROM pers_bahasa WHERE nrp ='".$nrp."' and kategori_bahasa ='daerah'";
		    $sql2 = "SELECT * FROM pers_bahasa WHERE nrp ='".$nrp."' and kategori_bahasa ='asing'";
 			$result = mysql_query($sql)or die(mysql_error());  
 			$result2 = mysql_query($sql2)or die(mysql_error());  
 			echo "<table class='table table-striped table-bordered table-hover'>
 				 <tr>
                    <td colspan='3' class='title-fix'><b>DAERAH</b></td>
                 </tr>
 			";
 			while($data = mysql_fetch_array($result)){
                 echo "<tr>
                        <td class='nm_bahasa' data-id1='".$data['id_bahasa']."' contenteditable>".$data['bahasa']."</td>
                        <td class='ket_bahasa' data-id2='".$data['id_bahasa']."' contenteditable>".$data['keterangan']."</td>
                        <td><button name='del_bhs' class='del_bhs btn btn-primary btn-circle' data-id7='".$data['id_bahasa']."'>X</button</td>
                       </tr>
                   ";
                  }
                  echo "<tr>
                        <td id='d_nm_bhs' contenteditable></td>
                        <td id='d_ket_bhs' contenteditable></td>
                        <td><button name='add_daerah' id='add_daerah' class='btn btn-warning btn-circle'>+</button</td>
                       </tr>
                   ";
            echo "<tr class='title-fix'>
                    <td colspan='3' class='title-fix'><b>ASING</b></td>
                 </tr>";
            while($data2 = mysql_fetch_array($result2)){
                 echo "<tr>
                        <td class='nm_bahasa' data-id1='".$data2['id_bahasa']."' contenteditable>".$data2['bahasa']."</td>
                        <td class='ket_bahasa' data-id2='".$data2['id_bahasa']."' contenteditable>".$data2['keterangan']."</td>
                        <td><button name='del_bhs' class='del_bhs btn btn-primary btn-circle' data-id7='".$data2['id_bahasa']."'>X</button</td>
                       </tr>
                   ";
                  }
                  echo "<tr>
                        <td id='a_nm_bhs' contenteditable></td>
                        <td id='a_ket_bhs' contenteditable></td>
                        <td><button name='add_asing' id='add_asing' class='btn btn-warning btn-circle'>+</button</td>
                       </tr>
                   ";
                echo "</table>";
			break;

			case 'save_bhs_daerah' :
			$d_nm_bhs = $_POST['d_nm_bhs'];
			$d_ket_bhs = $_POST['d_ket_bhs'];
			$nrp = $_POST['nrp'];
			$data1 = mysql_query(
				"INSERT INTO pers_bahasa(kategori_bahasa,bahasa,keterangan,nrp) VALUES(
				'daerah',
				'$d_nm_bhs',
				'$d_ket_bhs',
				'$nrp')"
			)or die(mysql_error());

			if ($data1) {
				echo "data sudah disimpan";
			} else {
				echo "Gagal";
			}
			break;

			case 'save_bhs_asing' :
			$a_nm_bhs = $_POST['a_nm_bhs'];
			$a_ket_bhs = $_POST['a_ket_bhs'];
			$nrp = $_POST['nrp'];
			$data1 = mysql_query(
				"INSERT INTO pers_bahasa(kategori_bahasa,bahasa,keterangan,nrp) VALUES(
				'asing',
				'$a_nm_bhs',
				'$a_ket_bhs',
				'$nrp')"
			)or die(mysql_error());

			if ($data1) {
				echo "data sudah disimpan";
			} else {
				echo "Gagal";
			}
			break;

			case 'edit_bahasa' :
			 $id = $_POST["id"];  
			 $text = $_POST["text"];  
			 $column_name = $_POST["column_name"];  
			 $sql = "UPDATE pers_bahasa SET ".$column_name."='".$text."' WHERE id_bahasa='".$id."'"; 
			 $data = mysql_query($sql)or die(mysql_error());
			 if($data)  
			 {  
			      echo 'Data Bahasa Updated';  
			 } 
			break;

			case 'hapus_bahasa' :
			$id =$_POST['id'];
			$sql = mysql_query("DELETE FROM pers_bahasa WHERE id_bahasa ='".$id."'")or die(mysql_error());  
			 if($sql)  
			 {  
			      echo 'Data Deleted';  
			 }else{
			 	echo "gagal";
			 }
            
            
			break;

			case 'select_tandajasa' :
			$nrp =$_POST['nrp'];
		    $sql = "SELECT * FROM pers_tanda_jasa WHERE nrp ='".$nrp."'";
 			$result = mysql_query($sql)or die(mysql_error());  
 			echo "<table class='table table-striped table-bordered table-hover'>";

 			while($data = mysql_fetch_array($result)){
                 echo "<tr>
                        <td class='td_jasa' data-id1='".$data['id_tanda_jasa']."' contenteditable>".$data['tanda_jasa']."</td>
                        <td><button name='del_jasa' class='del_jasa btn btn-primary btn-circle' data-id6='".$data['id_tanda_jasa']."'>X</button</td>
                       </tr>
                   ";
                  }
                  echo "<tr>
                        <td id='tanda_jasa' contenteditable></td>
                        <td><button name='add_jasa' id='add_jasa'>+</button</td>
                       </tr>
                   ";
                echo "</table>";
			break;

			case 'save_jasa' :
			$tanda_jasa = $_POST['tanda_jasa'];
			$nrp = $_POST['nrp'];
			$data1 = mysql_query(
				"INSERT INTO pers_tanda_jasa(tanda_jasa,nrp) VALUES(
				'$tanda_jasa',
				'$nrp')"
			)or die(mysql_error());

			if ($data1) {
				echo "Tanda jasa sudah disimpan";
			} else {
				echo "Gagal";
			}
			break;

			case 'edit_jasa' :
			 $id = $_POST["id"];  
			 $text = $_POST["text"];  
			 $column_name = $_POST["column_name"];  
			 $sql = "UPDATE pers_tanda_jasa SET ".$column_name."='".$text."' WHERE id_tanda_jasa='".$id."'"; 
			 $data = mysql_query($sql)or die(mysql_error());
			 if($data)  
			 {  
			      echo 'Data Jasa Updated';  
			 } 
			break;

			case 'hapus_jasa' :
			$id =$_POST['id'];
			$sql = mysql_query("DELETE FROM pers_tanda_jasa WHERE id_tanda_jasa ='".$id."'")or die(mysql_error());  
			 if($sql)  
			 {  
			      echo 'Data Jasa Deleted';  
			 }else{
			 	echo "gagal";
			 }
            
            
			break;

			case 'select_operasi' :
			$nrp =$_POST['nrp'];
		    $sql = "SELECT * FROM pers_rwt_ops WHERE nrp ='".$nrp."'";
 			$result = mysql_query($sql)or die(mysql_error());  
 			echo "<table class='table table-striped table-bordered table-hover'>";

 			while($data = mysql_fetch_array($result)){
                 echo "<tr>
                        <td class='nm_operasi' data-id1='".$data['id_riwayat_ops']."' contenteditable>".$data['ops']."</td>
                        <td class='thn_operasi' data-id1='".$data['id_riwayat_ops']."' contenteditable>".$data['tahun']."</td>
                        <td><button name='del_operasi' class='del_operasi btn btn-primary btn-circle' data-id6='".$data['id_riwayat_ops']."'>X</button</td>
                       </tr>
                   ";
                  }
                  echo "<tr>
                        <td id='nm_operasi' contenteditable></td>
                        <td id='thn_operasi' contenteditable></td>
                        <td><button name='add_operasi' id='add_operasi' class='btn btn-warning btn-circle'>+</button</td>
                       </tr>
                   ";
                echo "</table>";
			break;

			case 'save_operasi' :
			$nm_operasi = $_POST['nm_operasi'];
			$thn_operasi = $_POST['thn_operasi'];
			$nrp = $_POST['nrp'];
			$data1 = mysql_query(
				"INSERT INTO pers_rwt_ops(ops,tahun,nrp) VALUES(
				'$nm_operasi',
				'$thn_operasi',
				'$nrp')"
			)or die(mysql_error());

			if ($data1) {
				echo "Riwayat Operasi sudah disimpan";
			} else {
				echo "Gagal";
			}
			break;

			case 'edit_operasi' :
			 $id = $_POST["id"];  
			 $text = $_POST["text"];  
			 $column_name = $_POST["column_name"];  
			 $sql = "UPDATE pers_rwt_ops SET ".$column_name."='".$text."' WHERE id_riwayat_ops='".$id."'"; 
			 $data = mysql_query($sql)or die(mysql_error());
			 if($data)  
			 {  
			      echo 'Riwayat Operasi Update';  
			 } 
			break;

			case 'hapus_operasi' :
			$id =$_POST['id'];
			$sql = mysql_query("DELETE FROM pers_rwt_ops WHERE id_riwayat_ops ='".$id."'")or die(mysql_error());  
			 if($sql)  
			 {  
			      echo 'Riwayat Operasi Delete';  
			 }else{
			 	echo "gagal";
			 }         
			break;

			case 'select_tgs_ln' :
			$nrp =$_POST['nrp'];
		    $sql = "SELECT * FROM pers_tgs_ln WHERE nrp ='".$nrp."'";
 			$result = mysql_query($sql)or die(mysql_error());  
 			echo "<table class='table table-striped table-bordered table-hover'>";

 			while($data = mysql_fetch_array($result)){
                 echo "<tr>
                        <td class='tgs_ln' data-id1='".$data['id_tgs_luarnegeri']."' contenteditable>".$data['tugas']."</td>
                        <td class='thn_ln' data-id2='".$data['id_tgs_luarnegeri']."' contenteditable>".$data['tahun']."</td>
                        <td class='ngr_ln' data-id3='".$data['id_tgs_luarnegeri']."' contenteditable>".$data['negara_tujuan']."</td>
                        <td><button name='del_ln' class='del_ln btn btn-primary btn-circle' data-id6='".$data['id_tgs_luarnegeri']."'>X</button</td>
                       </tr>
                   ";
                  }
                  echo "<tr>
                        <td id='tgs_ln' contenteditable></td>
                        <td id='thn_ln' contenteditable></td>
                        <td id='ngr_ln' contenteditable></td>
                        <td><button name='add_ln' id='add_ln' class='btn btn-warning btn-circle'>+</button</td>
                       </tr>
                   ";
                echo "</table>";
			break;

			case 'save_ln' :
			$tgs_ln = $_POST['tgs_ln'];
			$thn_ln = $_POST['thn_ln'];
			$ngr_ln = $_POST['ngr_ln'];
			$nrp = $_POST['nrp'];
			$data1 = mysql_query(
				"INSERT INTO pers_tgs_ln(tugas,tahun,negara_tujuan,nrp) VALUES(
				'$tgs_ln',
				'$thn_ln',
				'$ngr_ln',
				'$nrp')"
			)or die(mysql_error());

			if ($data1) {
				echo "Penugasan Luar Negri Sudah Disimpan";
			} else {
				echo "Gagal";
			}
			break;

			case 'edit_ln' :
			 $id = $_POST["id"];  
			 $text = $_POST["text"];  
			 $column_name = $_POST["column_name"];  
			 $sql = "UPDATE pers_tgs_ln SET ".$column_name."='".$text."' WHERE id_tgs_luarnegeri='".$id."'"; 
			 $data = mysql_query($sql)or die(mysql_error());
			 if($data)  
			 {  
			      echo 'Penugasan luar negri Update';  
			 } 
			break;

			case 'hapus_ln' :
			$id =$_POST['id'];
			$sql = mysql_query("DELETE FROM pers_tgs_ln WHERE id_tgs_luarnegeri ='".$id."'")or die(mysql_error());  
			 if($sql)  
			 {  
			      echo 'Penugasan Luar Negri Delete';  
			 }else{
			 	echo "gagal";
			 }         
			break;


			case 'select_pangkat' :
			$nrp =$_POST['nrp'];
		    $sql = "SELECT * FROM pers_rwt_pangkat WHERE nrp ='".$nrp."'";
 			$result = mysql_query($sql)or die(mysql_error());  
 			echo "<table class='table table-striped table-bordered table-hover'>";

 			while($data = mysql_fetch_array($result)){
                 echo "<tr>
                        <td class='pangkat_pkt' data-id1='".$data['id_rwt_pangkat']."' contenteditable>".$data['pangkat']."</td>
                        <td class='tmt_pkt' data-id2='".$data['id_rwt_pangkat']."' contenteditable>".$data['tmt']."</td>
                        <td class='skep_pkt' data-id3='".$data['id_rwt_pangkat']."' contenteditable>".$data['no_skep']."</td>
                        <td><button name='del_pangkat' class='del_pangkat btn btn-primary btn-circle' data-id6='".$data['id_rwt_pangkat']."'>X</button</td>
                       </tr>
                   ";
                  }
                  echo "<tr>
                        <td id='pangkat_pkt' contenteditable></td>
                        <td id='tmt_pkt' contenteditable></td>
                        <td id='skep_pkt' contenteditable></td>
                        <td><button name='add_pangkat' id='add_pangkat' class='btn btn-warning btn-circle'>+</button</td>
                       </tr>
                   ";
                echo "</table>";
			break;

			case 'save_pangkat' :
			$pangkat_pkt = $_POST['pangkat_pkt'];
			$tmt_pkt = $_POST['tmt_pkt'];
			$skep_pkt = $_POST['skep_pkt'];
			$nrp = $_POST['nrp'];
			$data1 = mysql_query(
				"INSERT INTO pers_rwt_pangkat(pangkat,tmt,no_skep,nrp) VALUES(
				'$pangkat_pkt',
				'$tmt_pkt',
				'$skep_pkt',
				'$nrp')"
			)or die(mysql_error());

			if ($data1) {
				echo "Pangkat Sudah Disimpan";
			} else {
				echo "Gagal";
			}
			break;

			case 'edit_pangkat' :
			 $id = $_POST["id"];  
			 $text = $_POST["text"];  
			 $column_name = $_POST["column_name"];  
			 $sql = "UPDATE pers_rwt_pangkat SET ".$column_name."='".$text."' WHERE id_rwt_pangkat='".$id."'"; 
			 $data = mysql_query($sql)or die(mysql_error());
			 if($data)  
			 {  
			      echo 'Pangkat Update';  
			 } 
			break;

			case 'hapus_pangkat' :
			$id =$_POST['id'];
			$sql = mysql_query("DELETE FROM pers_rwt_pangkat WHERE id_rwt_pangkat ='".$id."'")or die(mysql_error());  
			 if($sql)  
			 {  
			      echo 'pangkat Delete';  
			 }else{
			 	echo "gagal";
			 }         
			break;

			case 'select_jabatan' :
			$nrp =$_POST['nrp'];
		    $sql = "SELECT * FROM pers_rwt_jabatan WHERE nrp ='".$nrp."'";
 			$result = mysql_query($sql)or die(mysql_error());  
 			echo "<table class='table table-striped table-bordered table-hover'>";

 			while($data = mysql_fetch_array($result)){
                 echo "<tr>
                        <td class='nama_jab' data-id1='".$data['id_jabatan']."' contenteditable>".$data['jabatan']."</td>
                        <td class='tmt_jab' data-id2='".$data['id_jabatan']."' contenteditable>".$data['tmt']."</td>
                        <td class='skep_jab' data-id3='".$data['id_jabatan']."' contenteditable>".$data['no_skep']."</td>
                        <td><button name='del_jabatan' class='del_jabatan btn btn-primary btn-circle' data-id6='".$data['id_jabatan']."'>X</button</td>
                       </tr>
                   ";
                  }
                  echo "<tr>
                        <td id='nama_jab' contenteditable></td>
                        <td id='tmt_jab' contenteditable></td>
                        <td id='skep_jab' contenteditable></td>
                        <td><button name='add_jab' id='add_jab' class='btn btn-warning btn-circle'>+</button</td>
                       </tr>
                   ";
                echo "</table>";
			break;

			case 'save_jab' :
			$nama_jab = $_POST['nama_jab'];
			$tmt_jab = $_POST['tmt_jab'];
			$skep_jab = $_POST['skep_jab'];
			$nrp = $_POST['nrp'];
			$data1 = mysql_query(
				"INSERT INTO pers_rwt_jabatan(jabatan,tmt,no_skep,nrp) VALUES(
				'$nama_jab',
				'$tmt_jab',
				'$skep_jab',
				'$nrp')"
			)or die(mysql_error());

			if ($data1) {
				echo "Jabatan Sudah Disimpan";
			} else {
				echo "Gagal";
			}
			break;

			case 'edit_jab' :
			 $id = $_POST["id"];  
			 $text = $_POST["text"];  
			 $column_name = $_POST["column_name"];  
			 $sql = "UPDATE pers_rwt_jabatan SET ".$column_name."='".$text."' WHERE id_jabatan='".$id."'"; 
			 $data = mysql_query($sql)or die(mysql_error());
			 if($data)  
			 {  
			      echo 'Jabatan Update';  
			 } 
			break;

			case 'hapus_jab' :
			$id =$_POST['id'];
			$sql = mysql_query("DELETE FROM pers_rwt_jabatan WHERE id_jabatan ='".$id."'")or die(mysql_error());  
			 if($sql)  
			 {  
			      echo 'Jabatan Delete';  
			 }else{
			 	echo "gagal";
			 }         
			break;

			case 'select_prestasi' :
			$nrp =$_POST['nrp'];
		    $sql = "SELECT * FROM pers_prestasi WHERE nrp ='".$nrp."'";
 			$result = mysql_query($sql)or die(mysql_error());  
 			echo "<table class='table table-striped table-bordered table-hover'>
 				<thead>
	 				<tr>
	 					<th>Prestasi</th>
	 					<th>Nama Prestasi</th>
	 					<th>Tahun</th>
	 					<th>Tingkat</th>
	 				</tr>
 				</thead>";

 			while($data = mysql_fetch_array($result)){
                 echo "<tr>
                        <td class='pres' data-id1='".$data['id_prestasi']."' contenteditable>".$data['prestasi']."</td>
                        <td class='nm_pres' data-id2='".$data['id_prestasi']."' contenteditable>".$data['nama_prestasi']."</td>
                        <td class='thn_pres' data-id3='".$data['id_prestasi']."' contenteditable>".$data['tahun']."</td>
                        <td>
                        	<select class='tgk_pres' data-id4='".$data['id_prestasi']."' style='width: 150px;height: 30px;'>
                        		<option value='".$data['tingkat']."'>".$data['tingkat']."</option>
                        		<option value='Kota'>Kota</option>
                        		<option value='Kabupaten'>Kabupaten</option>
                        		<option value='Provinsi'>Provinsi</option>
                        		<option value='Nasional'>Nasional</option>
                        		<option value='Internasional'>Internasional</option>
                        	</select>
                        </td>
                        <td><button name='del_pres' class='del_pres btn btn-primary btn-circle' data-id6='".$data['id_prestasi']."'>X</button</td>
                       </tr>
                   ";
                  }
                  echo "<tr>
                        <td id='pres' contenteditable></td>
                        <td id='nm_pres' contenteditable></td>
                        <td id='thn_pres' contenteditable></td>
                        <td>
                        	<select id='tgk_pres'>
                        		<option value='Kota'>Kota</option>
                        		<option value='Kabupaten'>Kabupaten</option>
                        		<option value='Provinsi'>Provinsi</option>
                        		<option value='Nasional'>Nasional</option>
                        		<option value='Internasional'>Internasional</option>
                        	</select>
                        </td>
                        <td><button name='add_pres' id='add_pres' class='btn btn-warning btn-circle'>+</button</td>
                       </tr>
                   ";
                echo "</table>";
			break;

			case 'save_pres' :
			$pres = $_POST['pres'];
			$nm_pres = $_POST['nm_pres'];
			$thn_pres = $_POST['thn_pres'];
			$tgk_pres = $_POST['tgk_pres'];
			$nrp = $_POST['nrp'];
			$data1 = mysql_query(
				"INSERT INTO pers_prestasi(nrp,prestasi,nama_prestasi,tahun,tingkat) VALUES(
				'$nrp',
				'$pres',
				'$nm_pres',
				'$thn_pres',
				'$tgk_pres')"
			)or die(mysql_error());

			if ($data1) {
				echo "Prestasi Sudah Disimpan";
			} else {
				echo "Gagal";
			}
			break;

			case 'edit_pres' :
			 $id = $_POST["id"];  
			 $text = $_POST["text"];  
			 $column_name = $_POST["column_name"];  
			 $sql = "UPDATE pers_prestasi SET ".$column_name."='".$text."' WHERE id_prestasi='".$id."'"; 
			 $data = mysql_query($sql)or die(mysql_error());
			 if($data)  
			 {  
			      echo 'Prestasi Update';  
			 } 
			break;

			case 'hapus_pres' :
			$id =$_POST['id'];
			$sql = mysql_query("DELETE FROM pers_prestasi WHERE id_prestasi ='".$id."'")or die(mysql_error());  
			 if($sql)  
			 {  
			      echo 'Prestasi Delete';  
			 }else{
			 	echo "gagal";
			 }         
			break;

			case 'select_cuti' :
			$nrp =$_POST['nrp'];
		    $sql = "SELECT * FROM pers_data_cuti WHERE nrp ='".$nrp."'";
 			$result = mysql_query($sql)or die(mysql_error());  
 			echo "<table class='table table-striped table-bordered table-hover'>
 				<thead>
	 				<tr>
	 					<th>Keperluan</th>
	 					<th>Alamat</th>
	 					<th>Tanggal Berangkat</th>
	 					<th>Tanggal Kembali</th>
	 					<th>Status</th>
	 				</tr>
 				</thead>";

 			while($data = mysql_fetch_array($result)){
                 echo "<tr>
                        <td class='lak_cuti' data-id1='".$data['id_cuti']."' contenteditable>".$data['keperluan']."</td>
                        <td class='tujuan_cuti' data-id2='".$data['id_cuti']."' contenteditable>".$data['alamat']."</td>
                        <td class='tmt_cuti' data-id3='".$data['id_cuti']."' contenteditable>".$data['tgl_berangkat']."</td>
                        <td class='ket_cuti' data-id4='".$data['id_cuti']."' contenteditable>".$data['tgl_kembali']."</td>
                        <td>";
                        if ($data['status_cuti'] == 1) {
                        	echo "<button class='stat_cuti' data-id5='".$data['id_cuti']."' >Cuti</button>";
                        }
                        if ($data['status_cuti'] == 0) {
                        	echo "<button class='stat_selesai' data-id6='".$data['id_cuti']."' >Selesai</button>";
                        }

                  echo " </td>
                        <td><button name='del_cuti' class='del_cuti btn btn-primary btn-circle' data-id6='".$data['id_cuti']."'>X</button</td>
                       </tr>
                   ";
                  }
                  echo "<tr>
                        <td id='lak_cuti' contenteditable></td>
                        <td id='tujuan_cuti' contenteditable></td>
                        <td><input type='date' id='tmt_cuti'></td>
                        <td><input type='date' id='ket_cuti'></td>
                        <td><button name='add_cuti' id='add_cuti' class='btn btn-warning btn-circle'>+</button</td>
                       </tr>
                   ";
                echo "</table>";
			break;

			case 'save_cuti' :
			$lak_cuti = $_POST['lak_cuti'];
			$tujuan_cuti = $_POST['tujuan_cuti'];
			$tmt_cuti = $_POST['tmt_cuti'];
			$ket_cuti = $_POST['ket_cuti'];
			$nrp = $_POST['nrp'];
			$data1 = mysql_query(
				"INSERT INTO pers_data_cuti(nrp,keperluan,alamat,tgl_berangkat,tgl_kembali,status) VALUES(
				'$nrp',
				'$lak_cuti',
				'$tujuan_cuti',
				'$tmt_cuti',
				'$ket_cuti',
				'1')"
			)or die(mysql_error());

			if ($data1) {
				echo "Cuti Sudah Disimpan";
			} else {
				echo "Gagal";
			}
			break;

			case 'edit_cuti' :
			 $id = $_POST["id"];  
			 $text = $_POST["text"];  
			 $column_name = $_POST["column_name"];  
			 $sql = "UPDATE pers_data_cuti SET ".$column_name."='".$text."' WHERE id_cuti='".$id."'"; 
			 $data = mysql_query($sql)or die(mysql_error());
			 if($data)  
			 {  
			      echo 'Cuti Update';  
			 } 
			break;

			case 'hapus_cuti' :
			$id =$_POST['id'];
			$sql = mysql_query("DELETE FROM pers_data_cuti WHERE id_cuti ='".$id."'")or die(mysql_error());  
			 if($sql)  
			 {  
			      echo 'Cuti Delete';  
			 }else{
			 	echo "gagal";
			 }         
			break;

			case 'select_kes' :
			$nrp =$_POST['nrp'];
		    $sql = "SELECT * FROM pers_data_kes WHERE nrp ='".$nrp."'";
 			$result = mysql_query($sql)or die(mysql_error());  
 			echo "<table class='table table-striped table-bordered table-hover'>
 				 <thead>
 				<tr>
 					<th>Jenis Sakit</th>
 					<th>Rawat Jalan/Inap</th>
 					<th>Rumah Sakit</th>
 					<th>Keterangan</th>
 				</tr>
 				</thead>";

 			while($data = mysql_fetch_array($result)){
                 echo "<tr>
                        <td class='macam_kes' data-id1='".$data['id_data_kes']."' contenteditable>".$data['macam_sakit']."</td>
                        <td class='rwt_kes' data-id2='".$data['id_data_kes']."' contenteditable>".$data['rawat']."</td>
                        <td class='rs_kes' data-id3='".$data['id_data_kes']."' contenteditable>".$data['rumkit']."</td>
                        <td class='ket_kes' data-id5='".$data['id_data_kes']."' contenteditable>".$data['ket']."</td>
                        <td><button name='del_kes' class='del_kes btn btn-primary btn-circle' data-id6='".$data['id_data_kes']."'>X</button</td>
                       </tr>
                   ";
                  }
                  echo "<tr>
                        <td id='macam_kes' contenteditable></td>
                        <td id='rwt_kes' contenteditable></td>
                        <td id='rs_kes' contenteditable></td>
                        <td id='ket_kes' contenteditable></td>
                        <td><button name='add_kes' id='add_kes' class='btn btn-warning btn-circle'>+</button</td>
                       </tr>
                   ";
                echo "</table>";
			break;

			case 'save_kes' :
			$macam_kes = $_POST['macam_kes'];
			$rwt_kes = $_POST['rwt_kes'];
			$rs_kes = $_POST['rs_kes'];
			$almt_kes = $_POST['almt_kes'];
			$ket_kes = $_POST['ket_kes'];
			$nrp = $_POST['nrp'];
			$data1 = mysql_query(
				"INSERT INTO pers_data_kes(nrp,macam_sakit,rawat,rumkit,alamat,ket) VALUES(
				'$nrp',
				'$macam_kes',
				'$rwt_kes',
				'$rs_kes',
				'$almt_kes',
				'$ket_kes')"
			)or die(mysql_error());

			if ($data1) {
				echo "Data Kesehatan Sudah Disimpan";
			} else {
				echo "Gagal";
			}
			break;

			case 'edit_kes' :
			 $id = $_POST["id"];  
			 $text = $_POST["text"];  
			 $column_name = $_POST["column_name"];  
			 $sql = "UPDATE pers_data_kes SET ".$column_name."='".$text."' WHERE id_data_kes='".$id."'"; 
			 $data = mysql_query($sql)or die(mysql_error());
			 if($data)  
			 {  
			      echo 'Data Kesehatan Update';  
			 } 
			break;

			case 'hapus_kes' :
			$id =$_POST['id'];
			$sql = mysql_query("DELETE FROM pers_data_kes WHERE id_data_kes ='".$id."'")or die(mysql_error());  
			 if($sql)  
			 {  
			      echo 'Data Kesehatan Delete';  
			 }else{
			 	echo "gagal";
			 }         
			break;

			case 'select_pelanggaran' :
			$nrp =$_POST['nrp'];
		    $sql = "SELECT * FROM pers_pelanggaran WHERE nrp ='".$nrp."'";
 			$result = mysql_query($sql)or die(mysql_error());  
 			echo "<table class='table table-striped table-bordered table-hover'>
 				 <thead>
 				<tr>
 					<th>Jenis Pelanggaran</th>
 					<th>Tanggal</th>
 					<th>Keterangan</th>
 				</tr>
 				</thead>";

 			while($data = mysql_fetch_array($result)){
                 echo "<tr>
                        <td class='jenis_pel' data-id1='".$data['id_pelanggaran']."' contenteditable>".$data['jenis']."</td>
                        <td class='waktu_pel' data-id2='".$data['id_pelanggaran']."' contenteditable>".$data['waktu']."</td>
                        <td class='ket_pel' data-id3='".$data['id_pelanggaran']."' contenteditable>".$data['ket_pelanggaran']."</td>
                        <td><button name='del_pel' class='del_pel btn btn-primary btn-circle' data-id4='".$data['id_pelanggaran']."'>X</button</td>
                       </tr>
                   ";
                  }
                  echo "<tr>
                        <td id='jenis_pel' contenteditable></td>
                        <td><input type='date' id='waktu_pel'></td>
                        <td id='ket_pel' contenteditable></td>
                        <td><button name='add_pel' id='add_pel' class='btn btn-warning btn-circle'>+</button</td>
                       </tr>
                   ";
                echo "</table>";
			break;

			case 'save_pelanggaran' :
			$jenis_pel = $_POST['jenis_pel'];
			$waktu_pel = $_POST['waktu_pel'];
			$ket_pel = $_POST['ket_pel'];
			$nrp = $_POST['nrp'];
			$data1 = mysql_query(
				"INSERT INTO pers_pelanggaran(nrp,jenis,waktu,ket_pelanggaran) VALUES(
				'$nrp',
				'$jenis_pel',
				'$waktu_pel',
				'$ket_pel')"
			)or die(mysql_error());

			if ($data1) {
				echo "Data Pelanggaran Sudah Disimpan";
			} else {
				echo "Gagal";
			}
			break;

			case 'hapus_pelanggaran' :
			$id =$_POST['id'];
			$sql = mysql_query("DELETE FROM pers_pelanggaran WHERE id_pelanggaran ='".$id."'")or die(mysql_error());  
			 if($sql)  
			 {  
			      echo 'Data Pelanggaran Delete';  
			 }else{
			 	echo "gagal";
			 }         
			break;

			case 'edit_pelanggaran' :
			 $id = $_POST["id"];  
			 $text = $_POST["text"];  
			 $column_name = $_POST["column_name"];  
			 $sql = "UPDATE pers_pelanggaran SET ".$column_name."='".$text."' WHERE id_pelanggaran='".$id."'"; 
			 $data = mysql_query($sql)or die(mysql_error());
			 if($data)  
			 {  
			      echo 'Data Pelanggaran Update';  
			 } 
			break;

			case 'select_obat' :
			$nrp =$_POST['nrp'];
		    $sql = "SELECT * FROM pers_obat WHERE nrp ='".$nrp."'";
 			$result = mysql_query($sql)or die(mysql_error());  
 			echo "<table class='table table-striped table-bordered table-hover'>
 				<thead>
 				<tr>
 					<th>Nama</th>
 					<th>Kondisi</th>
 					<th>Jumlah</th>
 					<th>Penerimaan</th>
 					<th>Pengeluaran</th>
 					<th>Waktu</th>
 					<th>Ket</th>
 				</tr>
 				</thead>";

 			while($data = mysql_fetch_array($result)){
                 echo "<tr>
                        <td class='nama_obat' data-id1='".$data['id_obat']."' contenteditable>".$data['nama_obat']."</td>
                        <td class='kds_obat' data-id2='".$data['id_obat']."' contenteditable>".$data['kondisi']."</td>
                        <td class='jml_obat' data-id3='".$data['id_obat']."' contenteditable>".$data['jumlah']."</td>
                        <td class='trm_obat' data-id4='".$data['id_obat']."' contenteditable>".$data['terima']."</td>
                        <td class='klr_obat' data-id5='".$data['id_obat']."' contenteditable>".$data['keluar']."</td>
                        <td class='wkt_obat' data-id6='".$data['id_obat']."' contenteditable>".$data['waktu']."</td>
                        <td class='ket_obat' data-id7='".$data['id_obat']."' contenteditable>".$data['ket']."</td>
                        <td><button name='del_obat' class='del_obat btn btn-primary btn-circle' data-id8='".$data['id_obat']."'>X</button</td>
                       </tr>
                   ";
                  }
                  echo "<tr>
                        <td id='nama_obat' contenteditable></td>
                        <td id='kds_obat' contenteditable></td>
                        <td id='jml_obat' contenteditable></td>
                        <td id='trm_obat' contenteditable></td>
                        <td id='klr_obat' contenteditable></td>
                        <td id='wkt_obat' contenteditable></td>
                        <td id='ket_obat' contenteditable></td>
                        <td><button name='add_obat' id='add_obat' class='btn btn-warning btn-circle'>+</button</td>
                       </tr>
                   ";
                echo "</table>";
			break;

			case 'save_obat' :
			$nama_obat = $_POST['nama_obat'];
			$kds_obat = $_POST['kds_obat'];
			$jml_obat = $_POST['jml_obat'];
			$trm_obat = $_POST['trm_obat'];
			$klr_obat = $_POST['klr_obat'];
			$wkt_obat = $_POST['wkt_obat'];
			$ket_obat = $_POST['ket_obat'];
			$nrp = $_POST['nrp'];
			$data1 = mysql_query(
				"INSERT INTO pers_obat(nrp,nama_obat,kondisi,jumlah,terima,keluar,waktu,ket)VALUES(
				'$nrp',
				'$nama_obat',
				'$kds_obat',
				'$jml_obat',
				'$trm_obat',
				'$klr_obat',
				'$wkt_obat',
				'$ket_obat')"
			)or die(mysql_error());

			if ($data1) {
				echo "Data obat Sudah Disimpan";
			} else {
				echo "Gagal";
			}
			break;

			case 'edit_obat' :
			 $id = $_POST["id"];  
			 $text = $_POST["text"];  
			 $column_name = $_POST["column_name"];  
			 $sql = "UPDATE pers_obat SET ".$column_name."='".$text."' WHERE id_obat='".$id."'"; 
			 $data = mysql_query($sql)or die(mysql_error());
			 if($data)  
			 {  
			      echo 'Data Obat Update';  
			 } 
			break;

			case 'hapus_obat' :
			$id =$_POST['id'];
			$sql = mysql_query("DELETE FROM pers_obat WHERE id_obat ='".$id."'")or die(mysql_error());  
			 if($sql)  
			 {  
			      echo 'Data Obat Delete';  
			 }else{
			 	echo "gagal";
			 }         
			break;

			case 'select_rikes' :
			$nrp =$_POST['nrp'];
		    $sql = "SELECT * FROM pers_rikes WHERE nrp ='".$nrp."'";
 			$result = mysql_query($sql)or die(mysql_error());  
 			echo "<table class='table table-striped table-bordered table-hover'>
 				<thead>
 				<tr>
 					<th>Waktu</th>
 					<th>Tempat</th>
 					<th>Hasil</th>
 					<th>Keterangan</th>
 				</tr>
 				</thead>";

 			while($data = mysql_fetch_array($result)){
                 echo "<tr>
                        <td class='wkt_rikes' data-id1='".$data['id_rikes']."' contenteditable>".$data['waktu']."</td>
                        <td class='tmp_rikes' data-id2='".$data['id_rikes']."' contenteditable>".$data['tempat']."</td>
                        <td class='hasil_rikes' data-id3='".$data['id_rikes']."' contenteditable>".$data['hasil']."</td>
                        <td class='ket_rikes' data-id4='".$data['id_rikes']."' contenteditable>".$data['ket']."</td>
                        <td><button name='del_rikes' class='del_rikes btn btn-primary btn-circle' data-id8='".$data['id_rikes']."'>X</button</td>
                       </tr>
                   ";
                  }
                  echo "<tr>
                        <td id='wkt_rikes' contenteditable></td>
                        <td id='tmp_rikes' contenteditable></td>
                        <td id='hasil_rikes' contenteditable></td>
                        <td id='ket_rikes' contenteditable></td>
                        <td><button name='add_rikes' id='add_rikes' class='btn btn-warning btn-circle'>+</button</td>
                       </tr>
                   ";
                echo "</table>";
			break;

			case 'save_rikes' :
			$wkt_rikes = $_POST['wkt_rikes'];
			$tmp_rikes = $_POST['tmp_rikes'];
			$hasil_rikes = $_POST['hasil_rikes'];
			$ket_rikes = $_POST['ket_rikes'];
			$nrp = $_POST['nrp'];
			$data1 = mysql_query(
				"INSERT INTO pers_rikes(nrp,waktu,tempat,hasil,ket)VALUES(
				'$nrp',
				'$wkt_rikes',
				'$tmp_rikes',
				'$hasil_rikes',
				'$ket_rikes')"
			)or die(mysql_error());

			if ($data1) {
				echo "Data Rikes Disimpan";
			} else {
				echo "Gagal";
			}
			break;

			case 'edit_rikes' :
			 $id = $_POST["id"];  
			 $text = $_POST["text"];  
			 $column_name = $_POST["column_name"];  
			 $sql = "UPDATE pers_rikes SET ".$column_name."='".$text."' WHERE id_rikes='".$id."'"; 
			 $data = mysql_query($sql)or die(mysql_error());
			 if($data)  
			 {  
			      echo 'Data Rikes Update';  
			 } 
			break;

			case 'hapus_rikes' :
			$id =$_POST['id'];
			$sql = mysql_query("DELETE FROM pers_rikes WHERE id_rikes ='".$id."'")or die(mysql_error());  
			 if($sql)  
			 {  
			      echo 'Data Rikes Delete';  
			 }else{
			 	echo "gagal";
			 }         
			break;

			case 'select_alkes' :
			$nrp =$_POST['nrp'];
		    $sql = "SELECT * FROM pers_mat_alkes WHERE nrp ='".$nrp."'";
 			$result = mysql_query($sql)or die(mysql_error());  
 			echo "<table class='table table-striped table-bordered table-hover'>
 				<thead>
 				<tr>
 					<th>Nama</th>
 					<th>Kondisi</th>
 					<th>Jumlah</th>
 					<th>Keterangan</th>
 				</tr>
 				</thead>";

 			while($data = mysql_fetch_array($result)){
                 echo "<tr>
                        <td class='nama_alkes' data-id1='".$data['id_mat_alkes']."' contenteditable>".$data['nama_alkes']."</td>
                        <td class='kds_alkes' data-id2='".$data['id_mat_alkes']."' contenteditable>".$data['kondisi']."</td>
                        <td class='jml_alkes' data-id3='".$data['id_mat_alkes']."' contenteditable>".$data['jumlah']."</td>
                        <td class='ket_alkes' data-id4='".$data['id_mat_alkes']."' contenteditable>".$data['ket']."</td>
                        <td><button name='del_alkes' class='del_alkes btn btn-primary btn-circle' data-id8='".$data['id_mat_alkes']."'>X</button</td>
                       </tr>
                   ";
                  }
                  echo "<tr>
                        <td id='nama_alkes' contenteditable></td>
                        <td id='kds_alkes' contenteditable></td>
                        <td id='jml_alkes' contenteditable></td>
                        <td id='ket_alkes' contenteditable></td>
                        <td><button name='add_alkes' id='add_alkes' class='btn btn-warning btn-circle'>+</button</td>
                       </tr>
                   ";
                echo "</table>";
			break;

			case 'save_alkes' :
			$nama_alkes = $_POST['nama_alkes'];
			$kds_alkes = $_POST['kds_alkes'];
			$jml_alkes = $_POST['jml_alkes'];
			$ket_alkes = $_POST['ket_alkes'];
			$nrp = $_POST['nrp'];
			$data1 = mysql_query(
				"INSERT INTO pers_mat_alkes(nrp,nama_alkes,kondisi,jumlah,ket)VALUES(
				'$nrp',
				'$nama_alkes',
				'$kds_alkes',
				'$jml_alkes',
				'$ket_alkes')"
			)or die(mysql_error());

			if ($data1) {
				echo "Data Alkes Disimpan";
			} else {
				echo "Gagal";
			}
			break;

			case 'edit_alkes' :
			 $id = $_POST["id"];  
			 $text = $_POST["text"];  
			 $column_name = $_POST["column_name"];  
			 $sql = "UPDATE pers_mat_alkes SET ".$column_name."='".$text."' WHERE id_mat_alkes='".$id."'"; 
			 $data = mysql_query($sql)or die(mysql_error());
			 if($data)  
			 {  
			      echo 'Data Alkes Update';  
			 } 
			break;

			case 'hapus_alkes' :
			$id =$_POST['id'];
			$sql = mysql_query("DELETE FROM pers_mat_alkes WHERE id_mat_alkes ='".$id."'")or die(mysql_error());  
			 if($sql)  
			 {  
			      echo 'Data alkes Delete';  
			 }else{
			 	echo "gagal";
			 }         
			break;

			case 'select_jasmani' :
			$id =$_POST['nrp'];
		    $sql = "SELECT * FROM pers_samapta_org WHERE nrp ='".$id."'";  
 			$result = mysql_query($sql)or die(mysql_error());  
 			$htng = mysql_num_rows($result);
 			echo "<table class='table table-striped table-bordered table-hover'>";
 			if($htng > 0){
 				while($data = mysql_fetch_array($result)){
                 echo "
                    <tr>
                    	<td>Umur</td>
                        <td id='umur_jas' colspan='2' contenteditable>".$data['umur']."</td>
                    </tr>
                    <tr>
                        <td colspan='3'><b>Postur Tubuh</b></td>
                    </tr>
                    <tr>
                        <td>TB (Cm)</td>
                        <td id='tb_jas' colspan='2' contenteditable>".$data['tb']."</td>
                    </tr>
                    <tr>
                        <td>BB (Kg)</td>
                        <td id='bb_jas' colspan='2' contenteditable>".$data['bb']."</td>
                    </tr>
                    <tr>
                        <td>Klasifikasi</td>
                        <td id='klasi_jas' colspan='2' contenteditable>".$data['klasifikasi']."</td>
                    </tr>
                    <tr>
                        <td colspan='3'><b>Garjas A</b></td>
                    </tr>
                    <tr>
                        <td>Lari 3200M</td>
                        <td id='wktlari_jas' contenteditable>".$data['wkt_lari']."</td>
                        <td id='nilailari_jas' contenteditable>".$data['nilai_lari']."</td>
                    </tr>
                    <tr>
                        <td colspan='3'><b>Garjas B</b></td>
                    </tr>
                    <tr>
                        <td>Pull Up</td>
                        <td id='jmlpull_jas' contenteditable>".$data['jml_pullup']."</td>
                        <td id='nilaipull_jas' contenteditable>".$data['nilai_pullup']."</td>
                    </tr>
                    <tr>
                        <td>Sit Up</td>
                        <td id='jmlsit_jas' contenteditable>".$data['jml_situp']."</td>
                        <td id='nilaisit_jas' contenteditable>".$data['nilai_situp']."</td>
                    </tr>
                    <tr>
                        <td>Push Up</td>
                        <td id='jmlpush_jas' contenteditable>".$data['jml_pushup']."</td>
                        <td id='nilaipush_jas' contenteditable>".$data['nilai_pushup']."</td>
                    </tr>
                    <tr>
                        <td>Shuttle Run</td>
                        <td id='jmlrun_jas' contenteditable>".$data['jml_shuttlerun']."</td>
                        <td id='nilairun_jas' contenteditable>".$data['nilai_shuttlerun']."</td>
                    </tr>
                    <tr>
                        <td><b>Nilai B</b></td>
                        <td id='ratab_jas' colspan='2' contenteditable>".$data['rata_b']."</td>
                    </tr>
                    <tr>
                        <td><b>Nilai A+B</b></td>
                        <td id='rataplusb_jas' colspan='2' contenteditable>".$data['rata_a_b']."</td>
                    </tr>
                    <tr>
                        <td>Renang 50M</td>
                        <td id='wktrng_jas' contenteditable>".$data['wktu_rng']."</td>
                        <td id='nilairng_jas' contenteditable>".$data['nilai_rng']."</td>
                    </tr>
                    <tr>
                        <td>Keterangan</td>
                        <td colspan='2'>
                        	<select id='ket_jas'>
                        		<option value='".$data['ket']."'>".$data['ket']."</option>
                        		<option value='Lulus'>Lulus</option>
                        		<option value='Tidak Lulus'>Tidak Lulus</option>
                        	</select>
                        </td>
                    </tr>
                    <tr>
                    	<td colspan='3' style='text-align:right;'><button id='edit_jas' data-id2='".$data['id_samapta_org']."' class='btn btn-primary'>Edit</button></tr>
                    </tr>";
                  }

 			}
 			else{
 				echo "
                    <tr>
                    	<td>Umur</td>
                        <td class='umur_jas' colspan='2' contenteditable></td>
                    </tr>
                    <tr>
                        <td colspan='3'><b>Postur Tubuh</b></td>
                    </tr>
                    <tr>
                        <td>TB (Cm)</td>
                        <td class='tb_jas' colspan='2' contenteditable></td>
                    </tr>
                    <tr>
                        <td>BB (Kg)</td>
                        <td class='bb_jas' colspan='2' contenteditable></td>
                    </tr>
                    <tr>
                        <td>Klasifikasi</td>
                        <td class='klasi_jas' colspan='2' contenteditable></td>
                    </tr>
                    <tr>
                        <td colspan='3'><b>Garjas A</b></td>
                    </tr>
                    <tr>
                        <td>Lari 3200M</td>
                        <td class='wktlari_jas' contenteditable></td>
                        <td class='nilailari_jas' contenteditable></td>
                    </tr>
                    <tr>
                        <td colspan='3'><b>Garjas B</b></td>
                    </tr>
                    <tr>
                        <td>Pull Up</td>
                        <td class='jmlpull_jas' contenteditable></td>
                        <td class='nilaipull_jas' contenteditable></td>
                    </tr>
                    <tr>
                        <td>Sit Up</td>
                        <td class='jmlsit_jas' contenteditable></td>
                        <td class='nilaisit_jas' contenteditable></td>
                    </tr>
                    <tr>
                        <td>Push Up</td>
                        <td class='jmlpush_jas' contenteditable></td>
                        <td class='nilaipush_jas' contenteditable></td>
                    </tr>
                    <tr>
                        <td>Shuttle Run</td>
                        <td class='jmlrun_jas' contenteditable></td>
                        <td class='nilairun_jas' contenteditable></td>
                    </tr>
                    <tr>
                        <td><b>Nilai B</b></td>
                        <td class='ratab_jas' colspan='2' contenteditable></td>
                    </tr>
                    <tr>
                        <td><b>Nilai A+B</b></td>
                        <td class='rataplusb_jas' colspan='2' contenteditable></td>
                    </tr>
                    <tr>
                        <td>Renang 50M</td>
                        <td class='wktrng_jas' contenteditable></td>
                        <td class='nilairng_jas' contenteditable></td>
                    </tr>
                    <tr>
                        <td>Keterangan</td>
                        <td colspan='2'>
                        	<select class='ket_jas'>
                        		<option value='Lulus'>Lulus</option>
                        		<option value='Tidak Lulus'>Tidak Lulus</option>
                        	</select>
                        </td>
                    </tr>
                    <tr>
                    	<td colspan='3' style='text-align:right;'><button id='add_jas' class='btn btn-primary'>Simpan</button></tr>
                    </tr>";
 			}
 			

                echo "</table>";
			break;

			case 'editjasmani' :
			$id = $_POST["id"];
			$umur_jas = $_POST["umur_jas"];
			$tb_jas = $_POST["tb_jas"];
			$bb_jas = $_POST["bb_jas"];
			$klasi_jas = $_POST["klasi_jas"];
			$wktlari_jas = $_POST["wktlari_jas"];
			$nilailari_jas = $_POST["nilailari_jas"];
			$jmlpull_jas = $_POST["jmlpull_jas"];
			$nilaipull_jas = $_POST["nilaipull_jas"];
			$jmlsit_jas = $_POST["jmlsit_jas"];
			$nilaisit_jas = $_POST["nilaisit_jas"];
			$jmlpush_jas = $_POST["jmlpush_jas"];
			$nilaipush_jas = $_POST["nilaipush_jas"];
			$jmlrun_jas = $_POST["jmlrun_jas"];
			$nilairun_jas = $_POST["nilairun_jas"];
			$ratab_jas = $_POST["ratab_jas"];
			$rataplusb_jas = $_POST["rataplusb_jas"];
			$wktrng_jas = $_POST["wktrng_jas"];
			$nilairng_jas = $_POST["nilairng_jas"];
			$ket_jas = $_POST["ket_jas"];

			$sql = mysql_query("UPDATE pers_samapta_org SET umur='".$umur_jas."',tb='".$tb_jas."',bb='".$bb_jas."',klasifikasi='".$klasi_jas."',wkt_lari='".$wktlari_jas."',nilai_lari='".$nilailari_jas."',jml_pullup='".$jmlpull_jas."',nilai_pullup='".$nilaipull_jas."',jml_situp='".$jmlsit_jas."',nilai_situp='".$nilaisit_jas."',jml_pushup='".$jmlpush_jas."',nilai_pushup='".$nilaipush_jas."',jml_shuttlerun='".$jmlrun_jas."',nilai_shuttlerun='".$nilairun_jas."',rata_b='".$ratab_jas."',rata_a_b='".$rataplusb_jas."',wktu_rng='".$wktrng_jas."',nilai_rng='".$nilairng_jas."',ket='".$ket_jas."' WHERE id_samapta_org='".$id."'");
			 if($sql) 
			 {  
			      echo 'Data Updated';  
			 }  

			break;

			case 'save_jas' :
			$umur_jas = $_POST["umur_jas"];
			$tb_jas = $_POST["tb_jas"];
			$bb_jas = $_POST["bb_jas"];
			$klasi_jas = $_POST["klasi_jas"];
			$wktlari_jas = $_POST["wktlari_jas"];
			$nilailari_jas = $_POST["nilailari_jas"];
			$jmlpull_jas = $_POST["jmlpull_jas"];
			$nilaipull_jas = $_POST["nilaipull_jas"];
			$jmlsit_jas = $_POST["jmlsit_jas"];
			$nilaisit_jas = $_POST["nilaisit_jas"];
			$jmlpush_jas = $_POST["jmlpush_jas"];
			$nilaipush_jas = $_POST["nilaipush_jas"];
			$jmlrun_jas = $_POST["jmlrun_jas"];
			$nilairun_jas = $_POST["nilairun_jas"];
			$ratab_jas = $_POST["ratab_jas"];
			$rataplusb_jas = $_POST["rataplusb_jas"];
			$wktrng_jas = $_POST["wktrng_jas"];
			$nilairng_jas = $_POST["nilairng_jas"];
			$ket_jas = $_POST["ket_jas"];
			$nrp = $_POST['nrp'];

			$data1 = mysql_query(
				"INSERT INTO pers_samapta_org(nrp,umur,tb,bb,klasifikasi,wkt_lari,nilai_lari,jml_pullup,nilai_pullup,jml_situp,nilai_situp,jml_pushup,nilai_pushup,jml_shuttlerun,nilai_shuttlerun,rata_b,rata_a_b,wktu_rng,nilai_rng,ket)VALUES(
				'$nrp',
				'$umur_jas',
				'$tb_jas',
				'$bb_jas',
				'$klasi_jas',
				'$wktlari_jas',
				'$nilailari_jas',
				'$jmlpull_jas',
				'$nilaipull_jas',
				'$jmlsit_jas',
				'$nilaisit_jas',
				'$jmlpush_jas',
				'$nilaipush_jas',
				'$jmlrun_jas',
				'$nilairun_jas',
				'$ratab_jas',
				'$rataplusb_jas',
				'$wktrng_jas',
				'$nilairng_jas',
				'$ket_jas')"
			)or die(mysql_error());

			if ($data1) {
				echo "Jasmani Sudah Disimpan";
			} else {
				echo "Gagal";
			}
			break;

			case 'select_global' :
			$nrp =$_POST['nrp'];
		    $sql = "SELECT * FROM pers_samapta_gbl WHERE nrp ='".$nrp."'";
 			$result = mysql_query($sql)or die(mysql_error());  
 			echo "<table class='table table-striped table-bordered table-hover'>
 					 <thead>
                        <tr>
                            <th>Periode</th>
                            <th>Lulus/Tidak Lulus</th>
                            <th>Persentase</th>
                        </tr>
                    </thead>";


 			while($data = mysql_fetch_array($result)){
                 echo "<tr>
                        <td class='pe_global' data-id1='".$data['id_samapta_gbl']."' contenteditable>".$data['periode']."</td>
                        <td class='lls_global' data-id2='".$data['id_samapta_gbl']."' contenteditable>".$data['lulus']."</td>
                        <td class='sen_global' data-id3='".$data['id_samapta_gbl']."' contenteditable>".$data['persen']."</td>
                        <td><button name='del_global' class='del_global btn btn-primary btn-circle' data-id6='".$data['id_samapta_gbl']."'>X</button</td>
                       </tr>
                   ";
                  }
                  echo "<tr>
                        <td id='pe_global' contenteditable></td>
                        <td id='lls_global' contenteditable></td>
                        <td id='sen_global' contenteditable></td>
                        <td><button name='add_global' id='add_global' class='btn btn-warning btn-circle'>+</button</td>
                       </tr>
                   ";
                echo "</table>";
			break;

			case 'save_global' :
			$pe_global = $_POST['pe_global'];
			$lls_global = $_POST['lls_global'];
			$sen_global = $_POST['sen_global'];
			$nrp = $_POST['nrp'];
			$data1 = mysql_query(
				"INSERT INTO pers_samapta_gbl(nrp,periode,lulus,persen) VALUES(
				'$nrp',
				'$pe_global',
				'$lls_global',
				'$sen_global')"
			)or die(mysql_error());

			if ($data1) {
				echo "Kesamaptaan Global Sudah Disimpan";
			} else {
				echo "Gagal";
			}
			break;

			case 'edit_global' :
			 $id = $_POST["id"];  
			 $text = $_POST["text"];  
			 $column_name = $_POST["column_name"];  
			 $sql = "UPDATE pers_samapta_gbl SET ".$column_name."='".$text."' WHERE id_samapta_gbl='".$id."'"; 
			 $data = mysql_query($sql)or die(mysql_error());
			 if($data)  
			 {  
			      echo 'Kesamaptaan Global Update';  
			 } 
			break;

			case 'hapus_global' :
			$id =$_POST['id'];
			$sql = mysql_query("DELETE FROM pers_samapta_gbl WHERE id_samapta_gbl ='".$id."'")or die(mysql_error());  
			 if($sql)  
			 {  
			      echo 'Kesamaptaan Global Delete';  
			 }else{
			 	echo "gagal";
			 }         
			break;

			case 'select_ahli' :
			$nrp =$_POST['nrp'];
		    $sql = "SELECT * FROM pers_keahlian WHERE nrp ='".$nrp."'";
 			$result = mysql_query($sql)or die(mysql_error());  
 			echo "<table class='table table-striped table-bordered table-hover'>
 					 <thead>
                        <tr>
                            <th>Keahlian/Spesialisasi</th>
                        </tr>
                    </thead>";


 			while($data = mysql_fetch_array($result)){
                 echo "<tr>
                        <td class='nm_ahli' data-id1='".$data['id_keahlian']."' contenteditable>".$data['spesialisasi']."</td>
                        <td><button name='del_ahli' class='del_ahli btn btn-primary btn-circle' data-id6='".$data['id_keahlian']."'>X</button</td>
                       </tr>
                   ";
                  }
                  echo "<tr>
                        <td id='nm_ahli' contenteditable></td>
                        <td><button name='add_ahli' id='add_ahli' class='btn btn-warning btn-circle'>+</button</td>
                       </tr>
                   ";
                echo "</table>";
			break;

			case 'save_ahli' :
			$nm_ahli = $_POST['nm_ahli'];
			$nrp = $_POST['nrp'];
			$data1 = mysql_query(
				"INSERT INTO pers_keahlian(nrp,spesialisasi) VALUES(
				'$nrp',
				'$nm_ahli')"
			)or die(mysql_error());

			if ($data1) {
				echo "Keahlian Sudah Disimpan";
			} else {
				echo "Gagal";
			}
			break;

			case 'edit_ahli' :
			 $id = $_POST["id"];  
			 $text = $_POST["text"];  
			 $column_name = $_POST["column_name"];  
			 $sql = "UPDATE pers_keahlian SET ".$column_name."='".$text."' WHERE id_keahlian='".$id."'"; 
			 $data = mysql_query($sql)or die(mysql_error());
			 if($data)  
			 {  
			      echo 'Keahlian Update';  
			 } 
			break;

			case 'hapus_ahli' :
			$id =$_POST['id'];
			$sql = mysql_query("DELETE FROM pers_keahlian WHERE id_keahlian ='".$id."'")or die(mysql_error());  
			 if($sql)  
			 {  
			      echo 'Keahlian Delete';  
			 }else{
			 	echo "gagal";
			 }         
			break;

			case 'select_sedang' :
			$nrp =$_POST['nrp'];
		    $sql = "SELECT * FROM pers_dik_lak WHERE nrp ='".$nrp."'";
 			$result = mysql_query($sql)or die(mysql_error());  
 			echo "<table class='table table-striped table-bordered table-hover'>
 					 <thead>
                        <tr>
                            <th>Pendidikan</th>
                            <th>Waktu</th>
                        </tr>
                    </thead>";


 			while($data = mysql_fetch_array($result)){
                 echo "<tr>
                        <td class='macam_dik' data-id1='".$data['id_dik_lak']."' contenteditable>".$data['macam_dik']."</td>
                        <td class='waktu_dik' data-id2='".$data['id_dik_lak']."' contenteditable>".$data['waktu_dik']."</td>
                        <td><button name='del_sedang' class='del_sedang btn btn-primary btn-circle' data-id6='".$data['id_dik_lak']."'>X</button</td>
                       </tr>
                   ";
                  }
                  echo "<tr>
                        <td id='macam_dik' contenteditable></td>
                        <td id='waktu_dik' contenteditable></td>
                        <td><button name='add_sedang' id='add_sedang' class='btn btn-warning btn-circle'>+</button</td>
                       </tr>
                   ";
                echo "</table>";
			break;

			case 'save_sedang' :
			$macam_dik = $_POST['macam_dik'];
			$waktu_dik = $_POST['waktu_dik'];
			$nrp = $_POST['nrp'];
			$data1 = mysql_query(
				"INSERT INTO pers_dik_lak(nrp,macam_dik,waktu_dik) VALUES(
				'$nrp',
				'$macam_dik',
				'$waktu_dik')"
			)or die(mysql_error());

			if ($data1) {
				echo "Pendidikan Disimpan";
			} else {
				echo "Gagal";
			}
			break;

			case 'edit_sedang' :
			 $id = $_POST["id"];  
			 $text = $_POST["text"];  
			 $column_name = $_POST["column_name"];  
			 $sql = "UPDATE pers_dik_lak SET ".$column_name."='".$text."' WHERE id_dik_lak='".$id."'"; 
			 $data = mysql_query($sql)or die(mysql_error());
			 if($data)  
			 {  
			      echo 'Pendidikan Update';  
			 } 
			break;

			case 'hapus_sedang' :
			$id =$_POST['id'];
			$sql = mysql_query("DELETE FROM pers_dik_lak WHERE id_dik_lak ='".$id."'")or die(mysql_error());  
			 if($sql)  
			 {  
			      echo 'Pendidikan Delete';  
			 }else{
			 	echo "gagal";
			 }         
			break;

			case 'select_orgatop' :
			if(@$_SESSION['admin'])
            {
           	  $sql = "SELECT * FROM operasi_top ORDER BY id asc";  
            }
            else{
                if(@$_SESSION['pussen'])
                {
                    $usertype = 2;
                }
                else if(@$_SESSION['yon1'])
                {
                    $usertype = 3;
                }
                else if(@$_SESSION['yon2'])
                {
                       $usertype = 4;
                }
                else
                {
                    $usertype = 5;
                } 
                 $sql = "SELECT * FROM operasi_top WHERE tipe ='".$usertype."' ORDER BY id asc";   
            }
		    // $sql = "SELECT * FROM operasi_top";
 			$result = mysql_query($sql)or die(mysql_error());  
 			echo "<table class='table table-striped table-bordered table-hover'>
 				<thead>
 					<tr>
						<th>No</th>
						<th>Unit</th>
						<th>Kode Jabatan</th>
						<th>Uraian Jabatan</th>
						<th>Pangkat</th>
						<th>Korps</th>
						<th>Militer/Sipil</th>
						<th>Jumlah</th>
 					</tr>
 					<tr>
						<th>1</th>
						<th>2</th>
						<th>3</th>
						<th>4</th>
						<th>5</th>
						<th>6</th>
						<th>7</th>
						<th>8</th>
 					</tr>
 				</thead>
 				";
 			$no=1;
 			while($data = mysql_fetch_array($result)){
                 echo "<tr>
                        <td class='top_no'>".$no."</td>
                        <td class='top_unit' data-id1='".$data['id']."' contenteditable>".$data['unit']."</td>
                        <td class='top_kode' data-id2='".$data['id']."' contenteditable>".$data['kode_jab']."</td>
                        <td class='top_urai' data-id3='".$data['id']."' contenteditable>".$data['urai_jab']."</td>
                        <td class='top_pangkat' data-id4='".$data['id']."' contenteditable>".$data['pangkat']."</td>
                        <td class='top_kor' data-id5='".$data['id']."' contenteditable>".$data['korps']."</td>
                        <td class='top_mil' data-id6='".$data['id']."' contenteditable>".$data['militer']."</td>
                        <td class='top_jml' data-id7='".$data['id']."' contenteditable>".$data['jumlah']."</td>
                        <td><button name='del_top' class='del_top btn btn-primary btn-circle' data-id8='".$data['id']."'>X</button</td>
                       </tr>
                   ";
                   $no++;
                  }
                  echo "<tr>
                  		<td id='top_no'></td>
                        <td id='top_unit' contenteditable></td>
                        <td id='top_kode' contenteditable></td>
                        <td id='top_urai' contenteditable></td>
                        <td id='top_pangkat' contenteditable></td>
                        <td id='top_kor' contenteditable></td>
                        <td id='top_mil' contenteditable></td>
                        <td id='top_jml' contenteditable></td>
                        <td><button name='add_top' id='add_top' class='btn btn-warning btn-circle'>+</button</td>
                       </tr>
                   ";
                echo "</table>";
			break;

			case 'save_orgatop' :
				if(@$_SESSION['admin'])
	            {
	           		 $usertype = 1;
	            }
	            else if(@$_SESSION['pussen'])
                {
                    $usertype = 2;
                }
                else if(@$_SESSION['yon1'])
                {
                    $usertype = 3;
                }
                else if(@$_SESSION['yon2'])
                {
                       $usertype = 4;
                }
                else
                {
                    $usertype = 5;
                } 
               
			$top_unit = $_POST['top_unit'];
			$top_kode = $_POST['top_kode'];
			$top_urai = $_POST['top_urai'];
			$top_pangkat = $_POST['top_pangkat'];
			$top_kor = $_POST['top_kor'];
			$top_mil = $_POST['top_mil'];
			$top_jml = $_POST['top_jml'];
			$data1 = mysql_query(
				"INSERT INTO operasi_top(unit,kode_jab,urai_jab,pangkat,korps,militer,jumlah,tipe) VALUES(
				'$top_unit',
				'$top_kode',
				'$top_urai',
				'$top_pangkat',
				'$top_kor',
				'$top_mil',
				'$top_jml',
				'$usertype')"
			)or die(mysql_error());

			if ($data1) {
				echo "data sudah disimpan";
			} else {
				echo "Gagal";
			}
			break;

			case 'edit_top' :
			 $id = $_POST["id"];  
			 $text = $_POST["text"];  
			 $column_name = $_POST["column_name"];  
			 $sql = "UPDATE operasi_top SET ".$column_name."='".$text."' WHERE id='".$id."'"; 
			 $data = mysql_query($sql)or die(mysql_error());
			 if($data)  
			 {  
			      echo 'Data Updated';  
			 }
			break;

			case 'deletetop' :
			$id =$_POST['id'];
			$sql = mysql_query("DELETE FROM operasi_top WHERE id ='".$id."'")or die(mysql_error());  
			 if($sql)  
			 {  
			      echo 'Data Deleted';  
			 }else{
			 	echo "gagal";
			 }
			break;

			case 'select_orgadspp' :
			if(@$_SESSION['admin'])
            {
           	  $sql = "SELECT * FROM operasi_dspp ORDER BY id asc";  
            }
            else{
                if(@$_SESSION['pussen'])
                {
                    $usertype = 2;
                }
                else if(@$_SESSION['yon1'])
                {
                    $usertype = 3;
                }
                else if(@$_SESSION['yon2'])
                {
                       $usertype = 4;
                }
                else
                {
                    $usertype = 5;
                } 
                 $sql = "SELECT * FROM operasi_dspp WHERE tipe ='".$usertype."' ORDER BY id asc";   
            }
		    // $sql = "SELECT * FROM operasi_dspp";
 			$result = mysql_query($sql)or die(mysql_error());  
 			echo "<table class='table table-striped table-bordered table-hover'>
 				<thead>
 					<tr>
						<th>No</th>
						<th>Unit</th>
						<th>Kode Jabatan</th>
						<th>Uraian Jabatan</th>
						<th>Senjata (Jenis dan Jumlah)</th>
						<th>Kendaraan (Jenis dan Jumlah)</th>
						<th>Perlengkapan Lain</th>
 					</tr>
 					<tr>
						<th>1</th>
						<th>2</th>
						<th>3</th>
						<th>4</th>
						<th>5</th>
						<th>6</th>
						<th>7</th>
 					</tr>
 				</thead>
 				";
 			$no=1;
 			while($data = mysql_fetch_array($result)){
                 echo "<tr>
                        <td class='dspp_no'>".$no."</td>
                        <td class='dspp_unit' data-id1='".$data['id']."' contenteditable>".$data['unit']."</td>
                        <td class='dspp_kode' data-id2='".$data['id']."' contenteditable>".$data['kode_jab']."</td>
                        <td class='dspp_urai' data-id3='".$data['id']."' contenteditable>".$data['urai_jab']."</td>
                        <td class='dspp_senjata' data-id4='".$data['id']."' contenteditable>".$data['senjata']."</td>
                        <td class='dspp_kendaraan' data-id5='".$data['id']."' contenteditable>".$data['kendaraan']."</td>
                        <td class='dspp_lengkap' data-id6='".$data['id']."' contenteditable>".$data['perlengkapan']."</td>
                        <td><button name='del_dspp' class='del_dspp btn btn-primary btn-circle' data-id8='".$data['id']."'>X</button</td>
                       </tr>
                   ";
                   $no++;
                  }
                  echo "<tr>
                  		<td id='dspp_no'></td>
                        <td id='dspp_unit' contenteditable></td>
                        <td id='dspp_kode' contenteditable></td>
                        <td id='dspp_urai' contenteditable></td>
                        <td id='dspp_senjata' contenteditable></td>
                        <td id='dspp_kendaraan' contenteditable></td>
                        <td id='dspp_lengkap' contenteditable></td>
                        <td><button name='add_dspp' id='add_dspp' class='btn btn-warning btn-circle'>+</button</td>
                       </tr>
                   ";
                echo "</table>";
			break;

			case 'save_orgadspp' :
				if(@$_SESSION['admin'])
	            {
	           		 $usertype = 1;
	            }
	            else if(@$_SESSION['pussen'])
                {
                    $usertype = 2;
                }
                else if(@$_SESSION['yon1'])
                {
                    $usertype = 3;
                }
                else if(@$_SESSION['yon2'])
                {
                       $usertype = 4;
                }
                else
                {
                    $usertype = 5;
                } 
               
			$dspp_unit = $_POST['dspp_unit'];
			$dspp_kode = $_POST['dspp_kode'];
			$dspp_urai = $_POST['dspp_urai'];
			$dspp_senjata = $_POST['dspp_senjata'];
			$dspp_kendaraan = $_POST['dspp_kendaraan'];
			$dspp_lengkap = $_POST['dspp_lengkap'];
			$data1 = mysql_query(
				"INSERT INTO operasi_dspp(unit,kode_jab,urai_jab,senjata,kendaraan,perlengkapan,tipe) VALUES(
				'$dspp_unit',
				'$dspp_kode',
				'$dspp_urai',
				'$dspp_senjata',
				'$dspp_kendaraan',
				'$dspp_lengkap',
				'$usertype')"
			)or die(mysql_error());

			if ($data1) {
				echo "data sudah disimpan";
			} else {
				echo "Gagal";
			}
			break;

			case 'edit_dspp' :
			 $id = $_POST["id"];  
			 $text = $_POST["text"];  
			 $column_name = $_POST["column_name"];  
			 $sql = "UPDATE operasi_dspp SET ".$column_name."='".$text."' WHERE id='".$id."'"; 
			 $data = mysql_query($sql)or die(mysql_error());
			 if($data)  
			 {  
			      echo 'Data Updated';  
			 }
			break;

			case 'deletedspp' :
			$id =$_POST['id'];
			$sql = mysql_query("DELETE FROM operasi_dspp WHERE id ='".$id."'")or die(mysql_error());  
			 if($sql)  
			 {  
			      echo 'Data Deleted';  
			 }else{
			 	echo "gagal";
			 }
			break;

			case 'select_penakbujuk' :
			if(@$_SESSION['admin'])
            {
           	  $sql = "SELECT * FROM operasi_bujuk ORDER BY id asc";  
            }
            else{
                if(@$_SESSION['pussen'])
                {
                    $usertype = 2;
                }
                else if(@$_SESSION['yon1'])
                {
                    $usertype = 3;
                }
                else if(@$_SESSION['yon2'])
                {
                       $usertype = 4;
                }
                else
                {
                    $usertype = 5;
                } 
                 $sql = "SELECT * FROM operasi_bujuk WHERE tipe ='".$usertype."' ORDER BY id asc";   
            }
		    // $sql = "SELECT * FROM operasi_bujuk";
 			$result = mysql_query($sql)or die(mysql_error());  
 			echo "<table class='table table-striped table-bordered table-hover'>
 				<thead>
 					<tr>
						<th>No</th>
						<th>Bujuk</th>
						<th>Keterangan</th>
 					</tr>
 					<tr>
						<th>1</th>
						<th>2</th>
						<th>3</th>
 					</tr>
 				</thead>
 				";
 			$no=1;
 			while($data = mysql_fetch_array($result)){
                 echo "<tr>
                        <td class='bujuk_no'>".$no."</td>
                        <td class='bujuk' data-id1='".$data['id']."' contenteditable>".$data['bujuk']."</td>
                        <td class='bujuk_ket' data-id2='".$data['id']."' contenteditable>".$data['ket']."</td>
                        <td><button name='del_bujuk' class='del_bujuk btn btn-primary btn-circle' data-id8='".$data['id']."'>X</button</td>
                       </tr>
                   ";
                   $no++;
                  }
                  echo "<tr>
                  		<td id='bujuk_no'></td>
                        <td id='bujuk' contenteditable></td>
                        <td id='bujuk_ket' contenteditable></td>
                        <td><button name='add_bujuk' id='add_bujuk' class='btn btn-warning btn-circle'>+</button</td>
                       </tr>
                   ";
                echo "</table>";
			break;

			case 'save_penakbujuk' :
				if(@$_SESSION['admin'])
	            {
	           		 $usertype = 1;
	            }
	            else if(@$_SESSION['pussen'])
                {
                    $usertype = 2;
                }
                else if(@$_SESSION['yon1'])
                {
                    $usertype = 3;
                }
                else if(@$_SESSION['yon2'])
                {
                       $usertype = 4;
                }
                else
                {
                    $usertype = 5;
                } 
               
			$bujuk = $_POST['bujuk'];
			$bujuk_ket = $_POST['bujuk_ket'];
			$data1 = mysql_query(
				"INSERT INTO operasi_bujuk(bujuk,ket,tipe) VALUES(
				'$bujuk',
				'$bujuk_ket',
				'$usertype')"
			)or die(mysql_error());

			if ($data1) {
				echo "data sudah disimpan";
			} else {
				echo "Gagal";
			}
			break;

			case 'edit_penakbujuk' :
			 $id = $_POST["id"];  
			 $text = $_POST["text"];  
			 $column_name = $_POST["column_name"];  
			 $sql = "UPDATE operasi_bujuk SET ".$column_name."='".$text."' WHERE id='".$id."'"; 
			 $data = mysql_query($sql)or die(mysql_error());
			 if($data)  
			 {  
			      echo 'Data Updated';  
			 }
			break;

			case 'deletebujuk' :
			$id =$_POST['id'];
			$sql = mysql_query("DELETE FROM operasi_bujuk WHERE id ='".$id."'")or die(mysql_error());  
			 if($sql)  
			 {  
			      echo 'Data Deleted';  
			 }else{
			 	echo "gagal";
			 }
			break;

			case 'select_penaknaskah' :
			if(@$_SESSION['admin'])
            {
           	  $sql = "SELECT * FROM operasi_akademik ORDER BY id asc";  
            }
            else{
                if(@$_SESSION['pussen'])
                {
                    $usertype = 2;
                }
                else if(@$_SESSION['yon1'])
                {
                    $usertype = 3;
                }
                else if(@$_SESSION['yon2'])
                {
                       $usertype = 4;
                }
                else
                {
                    $usertype = 5;
                } 
                 $sql = "SELECT * FROM operasi_akademik WHERE tipe ='".$usertype."' ORDER BY id asc";   
            }
		    // $sql = "SELECT * FROM operasi_akademik";
 			$result = mysql_query($sql)or die(mysql_error());  
 			echo "<table class='table table-striped table-bordered table-hover'>
 				<thead>
 					<tr>
						<th>No</th>
						<th>Naskah Akademik</th>
						<th>Keterangan</th>
 					</tr>
 					<tr>
						<th>1</th>
						<th>2</th>
						<th>3</th>
 					</tr>
 				</thead>
 				";
 			$no=1;
 			while($data = mysql_fetch_array($result)){
                 echo "<tr>
                        <td class='naskah_no'>".$no."</td>
                        <td class='naskah' data-id1='".$data['id']."' contenteditable>".$data['naskah']."</td>
                        <td class='naskah_ket' data-id2='".$data['id']."' contenteditable>".$data['ket']."</td>
                        <td><button name='del_naskah' class='del_naskah btn btn-primary btn-circle' data-id8='".$data['id']."'>X</button</td>
                       </tr>
                   ";
                   $no++;
                  }
                  echo "<tr>
                  		<td id='naskah_no'></td>
                        <td id='naskah' contenteditable></td>
                        <td id='naskah_ket' contenteditable></td>
                        <td><button name='add_naskah' id='add_naskah' class='btn btn-warning btn-circle'>+</button</td>
                       </tr>
                   ";
                echo "</table>";
			break;

			case 'save_penaknaskah' :
				if(@$_SESSION['admin'])
	            {
	           		 $usertype = 1;
	            }
	            else if(@$_SESSION['pussen'])
                {
                    $usertype = 2;
                }
                else if(@$_SESSION['yon1'])
                {
                    $usertype = 3;
                }
                else if(@$_SESSION['yon2'])
                {
                       $usertype = 4;
                }
                else
                {
                    $usertype = 5;
                } 
               
			$naskah = $_POST['naskah'];
			$naskah_ket = $_POST['naskah_ket'];
			$data1 = mysql_query(
				"INSERT INTO operasi_akademik(naskah,ket,tipe) VALUES(
				'$naskah',
				'$naskah_ket',
				'$usertype')"
			)or die(mysql_error());

			if ($data1) {
				echo "data sudah disimpan";
			} else {
				echo "Gagal";
			}
			break;

			case 'edit_penaknaskah' :
			 $id = $_POST["id"];  
			 $text = $_POST["text"];  
			 $column_name = $_POST["column_name"];  
			 $sql = "UPDATE operasi_akademik SET ".$column_name."='".$text."' WHERE id='".$id."'"; 
			 $data = mysql_query($sql)or die(mysql_error());
			 if($data)  
			 {  
			      echo 'Data Updated';  
			 }
			break;

			case 'deletenaskah' :
			$id =$_POST['id'];
			$sql = mysql_query("DELETE FROM operasi_akademik WHERE id ='".$id."'")or die(mysql_error());  
			 if($sql)  
			 {  
			      echo 'Data Deleted';  
			 }else{
			 	echo "gagal";
			 }
			break;

			case 'select_penakprotap':

			if(@$_SESSION['admin'])
            {
           	  $sql = "SELECT * FROM operasi_protap ORDER BY id asc";  
            }
            else{
                if(@$_SESSION['pussen'])
                {
                    $usertype = 2;
                }
                else if(@$_SESSION['yon1'])
                {
                    $usertype = 3;
                }
                else if(@$_SESSION['yon2'])
                {
                       $usertype = 4;
                }
                else
                {
                    $usertype = 5;
                } 
                 $sql = "SELECT * FROM operasi_protap WHERE tipe ='".$usertype."' ORDER BY id asc";   
            }
		    // $sql = "SELECT * FROM operasi_protap";
 			$result = mysql_query($sql)or die(mysql_error());  
 			echo "<table class='table table-striped table-bordered table-hover'>
 				<thead>
 					<tr>
						<th>No</th>
						<th>Protap</th>
						<th>Keterangan</th>
 					</tr>
 					<tr>
						<th>1</th>
						<th>2</th>
						<th>3</th>
 					</tr>
 				</thead>
 				";
 			$no=1;
 			while($data = mysql_fetch_array($result)){
                 echo "<tr>
                        <td class='protap_no'>".$no."</td>
                        <td class='protap' data-id1='".$data['id']."' contenteditable>".$data['protap']."</td>
                        <td class='protap_ket' data-id2='".$data['id']."' contenteditable>".$data['ket']."</td>
                        <td><button name='del_protap' class='del_protap btn btn-primary btn-circle' data-id8='".$data['id']."'>X</button</td>
                       </tr>
                   ";
                   $no++;
                  }
                  echo "<tr>
                  		<td id='protap_no'></td>
                        <td id='protap' contenteditable></td>
                        <td id='protap_ket' contenteditable></td>
                        <td><button name='add_protap' id='add_protap' class='btn btn-warning btn-circle'>+</button</td>
                       </tr>
                   ";
                echo "</table>";
			break;

			case 'save_penakprotap' :
				if(@$_SESSION['admin'])
	            {
	           		 $usertype = 1;
	            }
	            else if(@$_SESSION['pussen'])
                {
                    $usertype = 2;
                }
                else if(@$_SESSION['yon1'])
                {
                    $usertype = 3;
                }
                else if(@$_SESSION['yon2'])
                {
                       $usertype = 4;
                }
                else
                {
                    $usertype = 5;
                } 
               
			$protap = $_POST['protap'];
			$protap_ket = $_POST['protap_ket'];
			$data1 = mysql_query(
				"INSERT INTO operasi_protap(protap,ket,tipe) VALUES(
				'$protap',
				'$protap_ket',
				'$usertype')"
			)or die(mysql_error());

			if ($data1) {
				echo "data sudah disimpan";
			} else {
				echo "Gagal";
			}
			break;

			case 'edit_penakprotap' :
			 $id = $_POST["id"];  
			 $text = $_POST["text"];  
			 $column_name = $_POST["column_name"];  
			 $sql = "UPDATE operasi_protap SET ".$column_name."='".$text."' WHERE id='".$id."'"; 
			 $data = mysql_query($sql)or die(mysql_error());
			 if($data)  
			 {  
			      echo 'Data Updated';  
			 }
			break;

			case 'deleteprotap' :
			$id =$_POST['id'];
			$sql = mysql_query("DELETE FROM operasi_protap WHERE id ='".$id."'")or die(mysql_error());  
			 if($sql)  
			 {  
			      echo 'Data Deleted';  
			 }else{
			 	echo "gagal";
			 }
			break;	

			case 'save_pengumuman' :
			$tgl_pengumuman = $_POST['tgl_pengumuman'];
			$pengumuman = $_POST['pengumuman'];
			$ket_pengumuman = $_POST['ket_pengumuman'];
			$data1 = mysql_query(
				"INSERT INTO dinas_pengumuman(tanggal,pengumuman,ket_pengumuman) VALUES(
				'$tgl_pengumuman',
				'$pengumuman',
				'$ket_pengumuman')"
			)or die(mysql_error());

			if ($data1) {
				header("location:page-dinas-pengumuman.php");
			} else {
				echo "Gagal";
			}

			break;

			case 'hapus_pengumuman' :
			$id =$_POST['id'];
			$sql = mysql_query("DELETE FROM dinas_pengumuman WHERE id_pengumuman ='".$id."'")or die(mysql_error());  
			       
			break;

			case 'edit_pengumuman' :
			$e_id_peng = $_POST['e_id_peng'];
			$e_tgl_peng = $_POST['e_tgl_peng'];
			$e_peng = $_POST['e_peng'];
			$e_ket_peng = $_POST['e_ket_peng'];

			$query = mysql_query ("update dinas_pengumuman set tanggal='$e_tgl_peng', pengumuman='$e_peng', ket_pengumuman='$e_ket_peng' where id_pengumuman='$e_id_peng'")or die(mysql_error());

			if ($query) {
				header("location:page-dinas-pengumuman.php");
			} else {
				echo "Gagal";
			} 
			       
			break;

			case 'save_resume' :
			$tgl_resume = $_POST['tgl_resume'];
			$resume = $_POST['resume'];
			$ket_resume = $_POST['ket_resume'];
			$data1 = mysql_query(
				"INSERT INTO dinas_resume(tgl_resume,kegiatan,ket_resume) VALUES(
				'$tgl_resume',
				'$resume',
				'$ket_resume')"
			)or die(mysql_error());

			if ($data1) {
				header("location:page-dinas-resume.php");
			} else {
				echo "Gagal";
			}

			break;

			case 'hapus_resume' :
			$id =$_POST['id'];
			$sql = mysql_query("DELETE FROM dinas_resume WHERE id_resume ='".$id."'")or die(mysql_error());  
			       
			break;

			case 'edit_resume' :
			$e_id_resume = $_POST['e_id_resume'];
			$e_tgl_resume = $_POST['e_tgl_resume'];
			$e_resume = $_POST['e_resume'];
			$e_ket_resume = $_POST['e_ket_resume'];

			$query = mysql_query ("update dinas_resume set tgl_resume='$e_tgl_resume', kegiatan='$e_resume', ket_resume='$e_ket_resume' where id_resume='$e_id_resume'")or die(mysql_error());

			if ($query) {
				header("location:page-dinas-resume.php");
			} else {
				echo "Gagal";
			} 
			       
			break;

			case 'select_apel' :
		    $sql = "SELECT * FROM dinas_apel";
 			$result = mysql_query($sql)or die(mysql_error());  
 			echo "<table class='table table-striped table-bordered table-hover' id='dataTables-example'>
 					<thead>
                        <tr class='blue-head'>
                            <th rowspan='2' align='center'>NO</th>
                            <th rowspan='2' align='center'>SATUAN</th>
                            <th rowspan='2' align='center'>JUMLAH</th>
                            <th rowspan='2' align='center'>KRG</th>
                            <th rowspan='2' align='center'>HDR</th>
                            <th colspan='6' align='center'>KETERANGAN</th>
                            <th rowspan='2' align='center'>AKSI</th>
                        </tr>
                        <tr class='blue-head'>
                            <th align='center'>DD</th>
                            <th align='center'>DL</th>
                            <th align='center'>DK</th>
                            <th align='center'>SAKIT</th>
                            <th align='center'>CUTI</th>
                            <th align='center'>IZIN</th>
                        </tr>
                    </thead>

 			";
 			$no=1;
 			while($data = mysql_fetch_array($result)){
 				$ket_apel=$data['ket_apel'];
                 echo "<tr>
                 		<td>".$no."</td>
                        <td class='apel_satuan' data-id1='".$data['id_apel']."'>".$data['satuan']."</td>
                        <td class='apel_jml' data-id2='".$data['id_apel']."'>".$data['jumlah']."</td>
                        <td class='apel_krg' data-id3='".$data['id_apel']."'>".$data['krg']."</td>
                        <td class='apel_hdr' data-id4='".$data['id_apel']."'>".$data['hdr']."</td>";
                        if ($ket_apel == 'dd'){
                                echo "<td>V</td>
                                      <td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                ";
                            }
                         else if ($ket_apel == 'dl'){
                                echo "<td>-</td>
                                      <td>V</td>
                                      <td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                ";
                            }
                        else if ($ket_apel == 'dk'){
                                echo "<td>-</td>
                                      <td>-</td>
                                      <td>V</td>
                                      <td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                ";
                            }
                        else if ($ket_apel == 'sakit'){
                                echo "<td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                      <td>V</td>
                                      <td>-</td>
                                      <td>-</td>
                                ";
                            }
                         else if ($ket_apel == 'cuti'){
                                echo "<td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                      <td>V</td>
                                      <td>-</td>
                                ";
                            }
                        else if ($ket_apel == 'izin'){
                                echo "<td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                      <td>v</td>
                                ";
                            }
                        else {
                                echo "<td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                ";
                            }
                            
                        echo "<td><button name='del_apel' class='del_apel btn btn-primary btn-circle' data-id11='".$data['id_apel']."'>X</button</td>
                       </tr>
                   ";
                   $no++;
                  }
                  echo "
                        <tr class='odd gradeX'>
                            <td></td>
                            <td id='apel_satuan' contenteditable></td>
                            <td id='apel_jml' contenteditable></td>
                            <td id='apel_krg' contenteditable></td>
                            <td id='apel_hdr' contenteditable></td>
                            <td><input type='radio' id='apel_ket' name='apel_ket' value='dd'></td>
                            <td><input type='radio' id='apel_ket' name='apel_ket' value='dl'></td>
                            <td><input type='radio' id='apel_ket' name='apel_ket' value='dk'></td>
                            <td><input type='radio' id='apel_ket' name='apel_ket' value='sakit'></td>
                            <td><input type='radio' id='apel_ket' name='apel_ket' value='cuti'></td>
                            <td><input type='radio' id='apel_ket' name='apel_ket' value='izin'></td>
                            <td><button name='add_apel' id='add_apel' class='btn btn-warning btn-circle'>+</button</td>
                        </tr>
                   ";
                echo "</table>";
			break;

			case 'save_apel' :
			$apel_satuan = $_POST['apel_satuan'];
			$apel_jml = $_POST['apel_jml'];
			$apel_krg = $_POST['apel_krg'];
			$apel_hdr = $_POST['apel_hdr'];
			$apel_ket = $_POST['apel_ket'];
			$data1 = mysql_query(
				"INSERT INTO dinas_apel(satuan,jumlah,krg,hdr,ket_apel) VALUES(
				'$apel_satuan',
				'$apel_jml',
				'$apel_krg',
				'$apel_hdr',
				'$apel_ket')"
			)or die(mysql_error());

			if ($data1) {
				echo "Pangkat Sudah Disimpan";
			} else {
				echo "Gagal";
			}
			break;

			case 'hapus_apel' :
			$id =$_POST['id'];
			$sql = mysql_query("DELETE FROM dinas_apel WHERE id_apel ='".$id."'")or die(mysql_error());  
			 if($sql)  
			 {  
			      echo 'pangkat Delete';  
			 }else{
			 	echo "gagal";
			 }         
			break;

		default:
			# code...
			break;

	// AWAL MENU USER

		case 'save_user' :
			$username = $_POST['username'];
			$password = $_POST['password'];
			$usertype = $_POST['usertype'];
			$data1 = mysql_query(
				"INSERT INTO tb_user (username,password,usertype)VALUES(
				'$username',
				'$password',
				'$usertype')"
			)or die(mysql_error());

			if ($data1) {
				echo "Sukses";
			} else {
				echo "Gagal";
			}

			break;

		case 'hapus_user' :
			$id =$_POST['id_user'];
			$sql = mysql_query("DELETE FROM tb_user WHERE id_user='".$id."'")or die(mysql_error());  
			 if($sql)  
			 {  
			    echo 'Data Deleted';  
			 }else{
			 	echo "gagal";
			 }
			break;

		case 'select_edit_user' :
			$id = $_POST["id_user"];
			$sql = "SELECT * FROM tb_user WHERE id_user='".$id."'";
			$result = mysql_query($sql)or die(mysql_error());
			$rows = array();
			$rows = mysql_fetch_assoc($result);
			echo json_encode($rows, JSON_FORCE_OBJECT);
			break;

		case 'edit_user' :
					$id_user = $_POST["id_user"];
					$username = $_POST["username"];
					$password = $_POST["password"];
					$usertype = $_POST["usertype"];

					$sql = mysql_query("UPDATE tb_user SET username ='".$username."', password='".$password."', usertype ='".$usertype."' WHERE id_user='".$id_user."'");
						 if($sql) 
						 {  
						      echo 'Data Updated';  
						 }
						 else
						 {
						 	echo 'Gagal';
						 }
					
				break;

		// AKHIR MENU USER
	}
?>
<?php ob_end_flush();?>
