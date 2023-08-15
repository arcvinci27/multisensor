<?php 
	//koneksi untuk db
	$konek = mysqli_connect("localhost", "flyupid_hydroponic_2", "hydPNC120823_", "flyupid_hydroponic_2");  


	//baca data dari esp
	$tds = $_GET['tds'];
	$ph = $_GET['ph'];
	$aliran = $_GET['aliran'];

	//simpa ke tb hidroponik

	//auto increment = 1
	mysqli_query($konek, "ALTER TABLE tbhidroponik AUTO_INCREMENT=1");

	//simpan data ke tbhidroponik
	$simpan = mysqli_query($konek, "insert into tbhidroponik(tds, ph, aliran)values('$tds', '$ph', '$aliran')");

	//uji var simpan untuk beri respon
	if($simpan)
	echo "Berhasil Dikirim" ;
	else
		echo "Gagal Dikirim";

 ?>