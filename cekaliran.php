<?php 
	//koneksi untuk db
	$konek = mysqli_connect("localhost", "root", "", "dbhidroponik"); 

	//baca data dari tabel tbhidroponik
	$sql = mysqli_query($konek, "select * from tbhidroponik order by id desc"); //data terakhir ada di atas db

	//baca data dari atas
	$data = mysqli_fetch_array($sql);
	$aliran = $data['aliran'];

	//cek apa data tds =0?
	if( $aliran == "" ) $aliran = 0;

	// cetak nilai
	echo $aliran ;

 ?>