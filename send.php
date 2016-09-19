<?php
	$nama = isset($_GET['nama']) ? $_GET['nama'] : null;
	$mail = isset($_GET['emil']) ? $_GET['emil'] : null;
	$isi = isset($_GET['isi']) ? $_GET['isi'] : null;

	include"mimin/koneksi.php";
	
	if($nama!==null)
	{
		mysql_query("insert into kontak values('$nama', '$mail', '$isi')") or die (mysql_error());	
		echo"<script>alert('Terimakasih Telah mengirim Pesan kepada Kami !')</script>";
		include"index-4.php";
	}
?>