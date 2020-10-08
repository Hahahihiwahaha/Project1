<?php
include "skrip_koneksi.php";

if ($_SERVER['REQUEST_METHOD'] =='POST') {

	// Mendapatkan nilai variabel

	$judul = $_POST['judul'];
	$nama = $_POST['nama'];
	$sinopsis = $_POST['sinopsis'];
	$tempat = $_POST['tempat'];
	$tanggal = $_POST['tanggal'];
	$isi = $_POST['isi'];


	//Pembuatan syntax SQL

	$sql ="INSERT INTO input (judul, nama, sinopsis, tempat, tanggal, isi) VALUES ('$judul', '$nama', '$sinopsis', '$tempat', '$tanggal','$isi')";

	$query = mysql_query($sql);

	//Eksekusi Query database
	if ($query){

		echo "<h2><font color=blue background-color=#1e1e1e>Artikel berhasil ditambahkan</font></h2>";
		echo "Klik <a href='artikellain.php'>di sini</a> untuk kembali ke halaman artikel";

	} else {

		echo "<h2><font color=red>Data guru gagal ditambahkan</font></h2>";
	}
}
?>