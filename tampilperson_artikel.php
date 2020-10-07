<?php
include "skrip_koneksi.php";

if (isset($_GET['judul'])) {
    $judul = $_GET['judul']; 
			} else {
die ("Error. No Judul Selected! ");
			}

$query = "SELECT judul, nama, tempat, tanggal, isi FROM input WHERE judul = '$judul'";
$sql = mysql_query($query);
$hasil = mysql_fetch_array($sql);
$judul = ($hasil['judul']);
$nama = ($hasil['nama']);
$tempat = ($hasil['tempat']);
$tanggal = ($hasil['tanggal']);
$isi = ($hasil['isi']);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tampil Artikel</title>
</head>
<body>
<table width="100%" class="form">
	<tr>
		<td align="center"><?php echo $judul?></td>
	</tr>
	<tr>
		<td align="center"><?php echo $nama?></td>
	</tr>
	<tr>
		<td align="center"><?php echo $tempat?></td>
	</tr>
	<tr>
		<td align="center"><?php echo $tanggal?></td>
	</tr>
	<tr>
		<td align="center"><?php echo $isi?></td>
	</tr>	
	<tr>
		<td></td>
		<td><a href="artikellain.php">kembali</a><br/></td>
	</tr>
</table>
</form>
</body>
</html>
