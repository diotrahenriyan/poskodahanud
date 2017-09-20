<html>
<body>
	<?php
	//Koneksi ke MySQL
	include 'koneksi.php';
	//Mengambil data dari form input dengan metode POST
	$nama = htmlspecialchars($_POST['nama']);
	$jumlah = htmlspecialchars($_POST['jml']);
	$nyata = htmlspecialchars($_POST['nyata']);
	$keadaan = htmlspecialchars($_POST['keadaan']);
	$keterangan = htmlspecialchars($_POST['ket']);
	$tipe = htmlspecialchars($_POST['tipe']);
		$data = mysql_query
		(
				"INSERT INTO log_makanan (nama,jumlah,nyata,keadaan,keterangan,tipe)VALUES(
				'$nama',
				'$jumlah',
				'$nyata',
				'$keadaan',
				'$keterangan',
				'$tipe')"
		);
			//Menguji query
			if($data)
			{
			header("location:page-logistik-view.php");
			}
			else
			{
			echo "Data gagal dimasukkan";
			}
	?>
	
	
</body>
</html>