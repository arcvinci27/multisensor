<?php 
	//koneksi untuk db
	include "koneksi.php";

	//baca data dari tabel tbhidroponik
	$sql = mysqli_query($konek, "select * from tbhidroponik order by id desc"); //data terakhir ada di atas db

	//baca data dari atas
	$data = mysqli_fetch_array($sql);
	$tds = $data['tds'];

	//cek apa data tds =0?
	if( $tds == "" ) $tds = 0;

	// cetak nilai
	echo $tds ;

 ?>